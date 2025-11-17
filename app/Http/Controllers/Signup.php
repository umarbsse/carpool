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
        $view = get_view_path($request);
        return view($view, $data);
    }
    function register(Request $request){
        // 1️⃣ Validate the form inputs
        $validated = $request->validate([
            'first_name'            => 'required|string|max:255',
            'last_name'             => 'required|string|max:255',
            'cnic'                  => 'required|string|unique:users,cnic|regex:/^\d{5}-\d{7}-\d$/',
            'mobile'                => 'required|string|unique:users,mobile',
            'email'                 => 'required|email|unique:users,email',
            'password'              => 'required|string|min:6|confirmed',
        ]);
        // 2️⃣ Create the user
        $row = $validated;
        $row['password'] = Hash::make($validated['password']);
        //$row['role_id'] = 1; // 1=passenger, 2=driver
        $general = new General();
        $id = $general->insert_data('users',$row);
        //$id = insert_get_id('users', $data); // our helper function

        if ($id) {
            return redirect()->back()->with('success', 'Account created successfully! ');
        } else {
            return redirect()->back()->with('error', 'Failed to insert user.');
        }
    }
}
