<?php
    if (!function_exists('check_user_status')) {
        function check_user_status($status) {
           if($status=="active"){
            return true;
           }
           return false;
        }
    }
    if (!function_exists('get_user_role')) {
        function get_user_role() {
            return get_session('role');
        }
    }
?>