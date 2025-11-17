<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
