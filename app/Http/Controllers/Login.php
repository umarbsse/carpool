<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\General; // Include the model

class Login
{
    //
    function index(Request $request){
        $data = [
            'title' => 'Sigin to your account',
        ];
        $view = get_view_path($request);
        return view($view, $data);
    }
    function auth(Request $request){
        
        $data = $request->validate([
            "login"=>"required",
            "password"=>"required",
        ]);
        $general = new General();
        $response = $general->authenticate_user($data['login'], $data['password']);
        //echo "here";
        //dd($_POST);
    }
}
