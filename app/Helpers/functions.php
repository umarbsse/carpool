<?php
    
    if (!function_exists('get_view_path')) {
        function get_view_path($request, $view=NULL){
            $route = $request->route();
            $action = $route->getActionName(); // e.g., App\Http\Controllers\HomeController@index
            $controllerName = class_basename(explode('@', $action)[0]); // HomeController
            $methodName = explode('@', $action)[1] ?? null; // index
            
            $template_name = env('APP_TEMPLATE', 'basic'); // second param is default
            $view = $template_name.'.'.strtolower($controllerName).'.'.$methodName;
            return $view; 
        }
    }
?>