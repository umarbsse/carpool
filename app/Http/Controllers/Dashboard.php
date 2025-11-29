<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard
{
    //
    function index(Request $request){
        $data = [
            'title' => 'Dashboard',
            'headline' => env('APP_NAME'),
            'one_liner_msg' => 'Sign in to start your session',
        ];
        $view = get_private_template_name().'.'.get_controller_name($request).'.'.get_controller_method_name($request);
        return safe_view($view,$data);
    }
}
