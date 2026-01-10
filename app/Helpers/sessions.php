<?php
    if (!function_exists('create_session')) {
        function create_session($array){
            session($array);
        }
    }
    if (!function_exists('create_login_session')) {
        function create_login_session($array){
            create_session($array);
        }
    }
    if (!function_exists('destory_login_session')) {
        function destory_login_session(){
            request()->session()->flush();
        }
    }
    if (!function_exists('get_session')) {
        function get_session($var){
            if (session()->has($var)) {
                return session($var);
            }
            return NULL;
        }
    }
    if (!function_exists('is_access_role')) {
        function is_access_role($var){
            if(get_session($var)==true){
                return true;
            }
            return false;
        }
    }
?>