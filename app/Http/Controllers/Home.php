<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //
    function index(Request $request){
        $route = $request->route();
        $action = $route->getActionName(); // e.g., App\Http\Controllers\HomeController@index

        $controllerName = class_basename(explode('@', $action)[0]); // HomeController
        $methodName = explode('@', $action)[1] ?? null; // index


        // Pass any data if needed
        $data = [
            'title' => 'Welcome to Carpool App',
        ];
        $template_name = env('APP_TEMPLATE', 'basic'); // second param is default
        $view = $template_name.'.'.strtolower($controllerName).'.'.$methodName; 


        return view($view, $data);
    }
}
