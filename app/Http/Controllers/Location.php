<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General; // Include the model
use Illuminate\Support\Facades\DB;



class Location
{    
    function add_location(Request $request){
        // 1️⃣ Validate the form inputs
        
        $validated = $request->validate([
            'name'            => 'required',
            'parent_loc'            => 'required',
        ]);
        //$row = $validated;
        $row['name'] = $validated['name'];
        $row['province_name'] = $validated['name'];
        $row['province_name'] = $validated['name'];
        $row['location_type'] = 4;
        $general = new General();
        $id = $general->insert_data('geo_location',$row);
        if ($id) {            
            return redirect()->back()->with('success', 'Location added successfully! ');
        } else {
           return redirect()->back()->with('error', 'Failed to insert location.');
        }
        // 2️⃣ Create the user
        //$row = $validated;
        //unset($row['password_confirmation']);
        //$row['password'] = Hash::make($validated['password']);
        //$general = new General();
        //$id = $general->insert_data('users',$row);
        //if ($id) {            
        //    return redirect()->route('login')->with('success', 'Account created successfully. Login to continue! ');
        ///} else {
        //    return redirect()->back()->with('error', 'Failed to insert user.');
        //}
    }
    function add_location_form(){
        $data = [
            'title' =>'Add New Location',
            'form_action_url' =>route('add_location'),
        ];
        $view = get_private_template_name().'.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
    function list(){
        $data = [
            'title' => 'Location List',
            'headline' => env('APP_NAME'),
            'one_liner_msg' => 'Sign in to start your session',
        ];
        $data['add_modal'] = [
            'button_title' =>'Add Location',
            'button_icon' =>'<i class="fas fa-plus-circle"></i>',
            'button_class' =>'btn btn-success btn-sm',
            'button_form_route' =>route('add_location_form'),
            'title' =>'Add New Location',
            'form_action_url' =>route('add_location'),
        ];
        $general = new General();
        $where = NULL;
        $order_by['column_name']='name';
        $order_by['sort']='asc';
        $select =  array("name", "location_type", "lat", "lng","is_enable","disable_reason","created_at");
        $data['location'] = $general->get('geo_location', $where, $select, $order_by);
       // print_arr($data['location']);
        $view = get_private_template_name().'.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
}
