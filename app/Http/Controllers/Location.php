<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General; // Include the model
use Illuminate\Support\Facades\DB;



class Location
{
    function list(){
        $data = [
            'title' => 'Location List',
            'headline' => env('APP_NAME'),
            'one_liner_msg' => 'Sign in to start your session',
        ];
        $general = new General();
        $where = NULL;
        $order_by['column_name']='name';
        $order_by['sort']='asc';
        $select =  array("name", "location_type", "lat", "lng","is_enable","is_enable","disable_reason","created_at");
        $data['location'] = $general->get('geo_location', $where, $select, $order_by);
       // print_arr($data['location']);
        $view = get_private_template_name().'.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
}
