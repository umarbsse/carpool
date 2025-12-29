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
            'user_type' => 'required|in:p,d',
        ]);
        // 2️⃣ Create the user
        $data = $validated;
        $general = new General();
        $role = "";
        if($data['user_type']=="p"){
            $table_name="users_passenger";
            $role = "passenger";
        }else if($data['user_type']=="d"){
            $table_name="users_driver";
            $role = "driver";
        }
        
        $response = $general->authenticate_user($table_name,$data['login'], $data['password']);
        if($response==NULL || count($response)==0){
            return redirect()->back()->with('error', 'Authentication Failed!');
        }else if (!Hash::check($data['password'], $response['password'])) {
            return redirect()->back()->with('error', 'Authentication Failed!');
        }else{
            if(check_user_status($response['status'])){                
                $session_data= array(
                    "user_id"=>$response['id'],
                    "user_name"=>$response['first_name']." ".$response['last_name'],
                    "role"=>$role,
                );
                create_login_session($session_data);
                return redirect()->route('dashboard');
            }else{
                return redirect()->back()->with('error', 'Account Disable Contact at admin!');
            }            
        }
    }
}
