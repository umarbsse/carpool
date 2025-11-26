<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\General; // Include the model


class Signup
{
    //
    function index(Request $request){
        $data = [
            'title' => 'Create your account',
        ];
        $view = get_private_template_name().'.'.get_controller_name($request).'.'.get_controller_method_name($request);
        $view = get_private_template_name().'.'.get_controller_name($request).'.'.get_controller_method_name($request);
        return safe_view($view,$data);
    }
    function register(Request $request){
        // 1️⃣ Validate the form inputs
        $validated = $request->validate([
            'first_name'            => 'required|string|max:255',
            'cnic'                  => 'required|string|unique:users,cnic|regex:/^\d{5}-\d{7}-\d$/',
            'mobile'                => 'required|string|unique:users,mobile',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|string|min:6|confirmed',
            'password_confirmation'              => 'required',
        ]);
        // 2️⃣ Create the user
        $row = $validated;
        unset($row['password_confirmation']);
        $row['password'] = Hash::make($validated['password']);
        $general = new General();
        $id = $general->insert_data('users',$row);
        if ($id) {            
            return redirect()->route('login')->with('success', 'Account created successfully. Login to continue! ');
        } else {
            return redirect()->back()->with('error', 'Failed to insert user.');
        }
    }
}
