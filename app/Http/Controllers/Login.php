<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\General; // Include the model

class Login
{
    //
    function index(){
        $data = [
            'title' => 'Sigin to your account',
            'headline' => env('APP_NAME'),
            'one_liner_msg' => 'Sign in to start your session',
        ];
        $view = get_private_template_name().'.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
    function auth(Request $request){
        
        $validated = $request->validate([
            "login"=>"required",
            "password"=>"required",
        ]);
        // 2️⃣ Create the user
        $data = $validated;
        $general = new General();
        $response = $general->authenticate_user($data['login'], $data['password']);
        if(count($response)==0){
            return redirect()->back()->with('error', 'Authentication Failed!');
        }else if (!Hash::check($data['password'], $response['password'])) {
            return redirect()->back()->with('error', 'Authentication Failed!');
        }else{
           // print_arr($response);
           // die();
           // dd($response);
            // create your own session
            session([
                'user_id'   => $response['id'],
                'user_name' => $response['first_name']." ".$response['last_name'],
                'role'     => $response['role_id']
            ]);
            return redirect()->route('dashboard');
        }
    }
}
