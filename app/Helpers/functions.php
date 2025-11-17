<?php
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Collection;
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
    if (!function_exists('print_arr')) {
        function print_arr($array) {
            echo "<pre>";print_r($array);echo "</pre>";
        }
    }


    if (!function_exists('last_query')) {

        function last_query() {
            if(allow_print_query()==true){
                $last = collect(DB::getQueryLog())->last() ?? ['query' => '', 'bindings' => []];
                $bindings = (array) ($last['bindings'] ?? []);
                
                return preg_replace_callback(
                    '/\?/',
                    fn($m) => "'" . array_shift($bindings) . "'",
                    $last['query']
                );
            }
        }
    }


    if (!function_exists('allow_print_query')) {

        function allow_print_query() {
            $isLocal = app()->environment('local');
            if ($isLocal) {
                return true;
            }
            return false;
        }
    }





?>