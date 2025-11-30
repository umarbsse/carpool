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
    function password_update(Request $request){
        
        $validated = $request->validate([
            'password'              => 'required|string|min:6|confirmed',
        ]);
        $data = session()->all();
        $user_id = get_session('user_id');
        if($user_id!=NULL){
            $general = new General();
            $where = [
                ["id", "=", $user_id]
            ];
            $row['password'] = Hash::make($validated['password']);
            $is_updated = $general->update_data('users', $where, $row);
            if($is_updated>0){
                return redirect()->back()->with('success', 'Password updated successfully! ');
            }else{
                return redirect()->back()->with('error', 'Unable to update password!');
            }
        }else {
                return redirect()->back()->with('error', 'Unable to update password!');
        }
    }
}
