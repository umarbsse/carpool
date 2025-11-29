<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General; // Include the model
use Illuminate\Support\Facades\Hash;

class MyAccount
{
    //
    function change_password(Request $request){
        $data = [
            'title' => 'Change password',
            'headline' => env('APP_NAME'),
            'one_liner_msg' => 'Sign in to start your session',
        ];
        $view = get_private_template_name().'.'.get_controller_name($request).'.'.get_controller_method_name($request);
        return safe_view($view,$data);
    }
}
