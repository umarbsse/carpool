<?php
//
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
    if (!function_exists('get_currentTime')) {

        function get_currentTime($formate=NULL) {
            if($formate==NULL){
                return date('Y-m-d H:i:s');
            }
            return date($formate);
        }
    }


    if (!function_exists('make_hash_string')) {
        function make_hash_string($string) {
            return hash('sha256', $string);
        }
    }


    if (!function_exists('verify_hash_string')) {
        function verify_hash_string($hashed_string, $plain_string) {
            if (!hash_equals($hashed_string, hash('sha256', $plain_string))) {
                return false;
            }
            return true;
        }
    }
    if (!function_exists('generateRandomString')) {

        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }
    }





?>