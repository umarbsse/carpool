<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;

class LogRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $agent = new Agent();

        // Route info
        $route = $request->route();
        $routeName = $route ? $route->getName() : null;

        $controllerName = null;
        $controllerMethod = null;

        if ($route && $route->getActionName() !== 'Closure') {
            $action = $route->getActionName(); // e.g., App\Http\Controllers\UserController@index
            $parts = explode('@', $action);

            $fullController = $parts[0] ?? null;
            $controllerMethod = $parts[1] ?? null;

            if ($fullController) {
                // Remove namespace, keep only class name
                $classParts = explode('\\', $fullController);
                $controllerName = end($classParts); // e.g., 'UserController'
            }
        }

        // Get response status code
        $statusCode = $response->getStatusCode(); // 200, 404, 500, etc.
        // Map status code to name and description
        $statusMap = [
            200 => ['name' => 'OK', 'description' => 'Request succeeded'],
            201 => ['name' => 'Created', 'description' => 'Resource created successfully'],
            202 => ['name' => 'Accepted', 'description' => 'Request accepted for processing'],
            204 => ['name' => 'No Content', 'description' => 'No content to return'],
            301 => ['name' => 'Moved Permanently', 'description' => 'Resource moved permanently'],
            302 => ['name' => 'Found', 'description' => 'Resource found elsewhere'],
            400 => ['name' => 'Bad Request', 'description' => 'Malformed request'],
            401 => ['name' => 'Unauthorized', 'description' => 'Authentication required'],
            403 => ['name' => 'Forbidden', 'description' => 'Access denied'],
            404 => ['name' => 'Not Found', 'description' => 'Resource not found'],
            405 => ['name' => 'Method Not Allowed', 'description' => 'HTTP method not allowed'],
            422 => ['name' => 'Unprocessable Entity', 'description' => 'Validation error'],
            500 => ['name' => 'Internal Server Error', 'description' => 'Server error occurred'],
            502 => ['name' => 'Bad Gateway', 'description' => 'Invalid response from upstream server'],
            503 => ['name' => 'Service Unavailable', 'description' => 'Server temporarily unavailable'],
            504 => ['name' => 'Gateway Timeout', 'description' => 'Upstream server timed out'],
        ];

        $statusName = $statusMap[$statusCode]['name'] ?? $statusCode;
        $statusDescription = $statusMap[$statusCode]['description'] ?? 'Unknown status';

        // Insert log into DB
        DB::table('request_logs')->insert([
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'device' => $agent->device(),
            'platform' => $agent->platform(),
            'platform_version' => $agent->version($agent->platform()),
            'browser' => $agent->browser(),
            'browser_version' => $agent->version($agent->browser()),
            'is_bot' => $agent->isRobot(),
            'robot_name' => $agent->isRobot() ? $agent->robot() : null,
            'method' => $request->method(),
            'url' => $request->fullUrl(),
            'route_name' => $routeName,
            'controller_name' => $controllerName,
            'controller_method' => $controllerMethod,
            'response_status' => $statusCode, // NEW: HTTP status
            'response_status_name' => $statusName, // NEW
            'response_status_description' => $statusDescription, // NEW
            'payload' => json_encode($request->all()),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return $response;
    }
}
