<?php
//
    use Illuminate\Support\Facades\View;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Collection;
    use Illuminate\Support\Facades\Route;

    if (!function_exists('get_view_path')) {
        function get_view_path($view=NULL){
            $route = request()->route();
            $action = $route->getActionName(); // e.g., App\Http\Controllers\HomeController@index
            $controllerName = class_basename(explode('@', $action)[0]); // HomeController
            $methodName = explode('@', $action)[1] ?? null; // index
            $template_name = env('APP_TEMPLATE_PUBLIC', 'basic'); // second param is default
            $view = $template_name.'.'.strtolower($controllerName).'.'.$methodName;
            return $view; 
        }
    }
    if (! function_exists('safe_view')) {
        function safe_view($view, $data = [])
        {
            if (View::exists($view)) {
                return view($view, $data);
            }else{
                return view('server.view_not_exist', $data);
            }
        }
    }
    if (!function_exists('get_controller_name')) {
        function get_controller_name(){
            $action = request()->route()->getActionName();
            return strtolower(class_basename(explode('@', $action)[0]));
        }
    }
    if (!function_exists('is_controller')) {
        function is_controller($controller_name){
            if(get_controller_name()==$controller_name){
                return true;
            }
            return false;
        }
    }
    if (!function_exists('get_controller_method_name')) {
        function get_controller_method_name(){
            $action = request()->route()->getActionName();
            $methodName = explode('@', $action)[1] ?? null; // index
            return strtolower($methodName); 
        }
    }
    if (!function_exists('get_public_template_name')) {
        function get_public_template_name(){
            $template_name = env('APP_TEMPLATE_PUBLIC', 'basic'); // second param is default
            return strtolower($template_name); 
        }
    }
    if (!function_exists('get_private_template_name')) {
        function get_private_template_name(){
            $template_name = env('APP_TEMPLATE_PRIVATE', 'admin_lte'); // second param is default
            return strtolower($template_name); 
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
    if (!function_exists('increase_decrease_date_time')) {

        function increase_decrease_date_time($currentTimestamp=NULL, $increase_or_decrease_sign=NULL, $time=NULL, $time_unit=NULL) {
            if ($currentTimestamp==NULL) {
                $currentTimestamp = get_currentTime();
            }
            if ($increase_or_decrease_sign==NULL) {
                $increase_or_decrease_sign = "+";
            }
            if ($time==NULL) {
                $time = 5;
            }
            return date('Y-m-d H:i:s', strtotime($increase_or_decrease_sign.$time." ".$time_unit, strtotime($currentTimestamp)));
        }
    }
    if (!function_exists('password_reset_expire_time')) {

        function password_reset_expire_time_hours() {
            return 1;
        }
    }

    if (!function_exists('password_reset_url')) {

        function password_reset_url($token) {
            return env('APP_URL').'/new_password/'.$token;
        }
    }




    





?>