<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home
{
    //
    function index(Request $request){
        $data = [
            'title' => 'Welcome to Carpool App',
        ];
        $view = get_view_path($request);
        return view($view, $data);
    }
}
