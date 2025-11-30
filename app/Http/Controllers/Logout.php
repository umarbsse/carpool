<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logout
{
    //
    function index(Request $request){
        destory_login_session();
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
