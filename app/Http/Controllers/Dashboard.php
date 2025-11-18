<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard
{
    //
    function index(Request $request){
        $data = [
            'title' => 'Dashboard',
        ];
        $view = get_view_path($request);
        return view($view, $data);
    }
}
