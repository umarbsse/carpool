<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General; // Include the model
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class MyAccount
{
    function setting(){
        $data = [
            'title' => 'Account Setting',
            'headline' => env('APP_NAME'),
            'one_liner_msg' => 'Sign in to start your session',
        ];
        $general = new General();
        $where['id'] = get_session('user_id');
        $select =  array("first_name", "last_name", "cnic", "mobile","email", DB::raw("(SELECT name FROM `roles` WHERE roles.id=users.id) as role"));
        $data['myaccount'] = $general->get('users', $where, $select);
        if(count($data['myaccount'])==1){
            $data['myaccount'] = $data['myaccount'][0];
        }
        $view = get_private_template_name().'.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
    function update_setting(Request $request){
        
        $validated = $request->validate([
            'first_name'            => 'required|string|max:255',
            'mobile' => [
                            'required',
                            'string',
                            'regex:/^\d{5}-\d{7}-\d$/',
                            Rule::unique('users', 'cnic')->ignore(get_session('user_id')),
                        ],
            'mobile' => [
                            'required',
                            'string',
                            Rule::unique('users', 'mobile')->ignore(get_session('user_id')),
                        ],
            'email' => [
                            'required',
                            'email',
                            Rule::unique('users', 'email')->ignore(get_session('user_id')),
                        ],
        ]);
        $user_id = get_session('user_id');
        if($user_id!=NULL){
            $general = new General();
            $where = [
                ["id", "=", $user_id]
            ];
            $row = $validated;
            $is_updated = $general->update_data('users', $where, $row);
            if($is_updated>0){
                return redirect()->back()->with('success', 'Account setting updated successfully! ');
            }else{
                return redirect()->back()->with('error', 'Unable to update Account setting!');
            }
        }else {
                return redirect()->back()->with('error', 'Unable to update Account setting!');
        }
    }
    function change_password(Request $request){
        $data = [
            'title' => 'Change password',
            'headline' => env('APP_NAME'),
            'one_liner_msg' => 'Sign in to start your session',
        ];
        $view = get_private_template_name().'.'.get_controller_name().'.'.get_controller_method_name();
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
