<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General; // Include the model
use Illuminate\Support\Facades\Hash;

class ForgotPassword
{
    //
    function index(Request $request){
        $data = [
            'title' => 'Forgot your password',
        ];        
        $view = get_private_template_name().'.'.get_controller_name($request).'.'.get_controller_method_name($request);
        return safe_view($view,$data);
    }
    function reset_password(Request $request){
        $validated = $request->validate([
            'email'=>'required|email|',
        ]);
        $general = new General();
        $where = array(
            array('email','=',$validated['email'])
        );
        $result = $general->get('users',$where);        
        if (count($result)==1) {            
            $row['name'] = $result[0]['first_name'];
            if($result[0]['last_name']!=""){
                $row['name'].= " ".$result[0]['last_name'];
            }
            $row['email'] = $validated['email'];
            $row['token'] = generateRandomString(100);
            $row['created_at'] = get_currentTime();
            $row['expired_at'] = increase_decrease_date_time(get_currentTime(), "+", password_reset_expire_time_hours(), "hours");
            $general->insert_data('password_reset_tokens', $row);
            //die();
            return redirect()->back()->with('success', 'If Email exist you\'ll get the email reset link.');
        } else {
            return redirect()->back()->with('success', 'If Email exist you\'ll get the email reset link.');
        }
    }
    function send_reset_email(Request $request){
        $token = $request->reset_id;

        $general = new General();
        $where = array(
            array('id','=',$token)
        );
        $result = $general->get('password_reset_tokens',$where);
        if(count($result)==1){
            //print_arr($result);
            //die();
            $data = [
                'appname' => env('APP_NAME'),
                'username' => $result[0]['name'],
                'password_expire_time' => password_reset_expire_time_hours()." Hours",
                'reset_url' => password_reset_url($result[0]['token']),
                'year' => get_currentTime('Y'),
                'supprtmail' => 'contact@'.env('APP_NAKED_DOMAIN'),
            ];
        }
        $view = get_view_path($request);
        return view($view, $data);
    }
    function new_password(Request $request){

        $token = $request->reset_token;
        $time = get_currentTime(); // Must return a proper timestamp

        $general = new General();

        // Only fetch valid (not expired) token
        $where = [
            ["token", "=", $token],
            ["expired_at", ">", $time], // valid tokens
        ];
        $result = $general->get('password_reset_tokens', $where, true);
        if ($result) {
            $data = [
                'appname' => env('APP_NAME'),
                'token' => $token,
            ];

            //$view = get_view_path($request);
            //return view($view, $data);

            
            $view = get_private_template_name().'.'.get_controller_name($request).'.'.get_controller_method_name($request);
            return safe_view($view,$data);
        } else {
            return redirect()->route('forgotpassword')
                            ->with('error', 'Invalid password reset token or token expired!');
        }
    }
    function password_update(Request $request){
        
        $validated = $request->validate([
            'password'              => 'required|string|min:6|confirmed',
        ]);

        $token = $request->token;
        $time = get_currentTime(); // Must return a proper timestamp
        $general = new General();

        // Only fetch valid (not expired) token
        $where = [
            ["token", "=", $token],
            ["expired_at", ">", $time], // valid tokens
        ];
        $result = $general->get('password_reset_tokens', $where, true);
        if (count($result)==1) {
            $where = [
                ["email", "=", $result[0]['email']]
            ];
            $row['password'] = Hash::make($validated['password']);
            $is_updated = $general->update_data('users', $where, $row);
            if($is_updated>0){
                return redirect()->route('login')->with('success', 'Password updated successfully. Login to continue! ');
            }else{
                return redirect()->back()->with('error', 'Invalid password reset token or token expired!');
            }
        } else {
            
                return redirect()->back()->with('error', 'Invalid password reset token or token expired!');
        }
    }
}
