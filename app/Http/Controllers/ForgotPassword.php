<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General; // Include the model

class ForgotPassword
{
    //
    function index(Request $request){
        $data = [
            'title' => 'Forgot your password',
        ];
        $view = get_view_path($request);
        return view($view, $data);
    }
    function reset_password(Request $request){
        
        $validated = $request->validate([
            'email'                 => 'required|email|',
        ]);
        $general = new General();
        $where = array(
            array('email','=',$validated['email'])
        );
        $result = $general->get('users',$where);        
        if (count($result)==1) {            
            $row['email'] = $validated['email'];
            $row['token'] = generateRandomString(100);
            $row['created_at'] = get_currentTime();
            $general->insert_data('password_reset_tokens', $row);
            return redirect()->back()->with('success', 'If Email exist you\'ll get the email reset link.');
        } else {
            return redirect()->back()->with('success', 'If Email exist you\'ll get the email reset link.');
        }
    }
}
