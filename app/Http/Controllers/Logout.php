<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logout
{
    //
    function index(Request $request){
         // Clear all session data
            $request->session()->flush();

            // Or clear only your custom keys
            // $request->session()->forget(['user_id', 'user_name']);

            return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
