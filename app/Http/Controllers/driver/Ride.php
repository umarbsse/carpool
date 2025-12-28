<?php

namespace App\Http\Controllers\driver;

use Illuminate\Http\Request;
use App\Models\General; // Include the model
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class Ride
{
    function list(){
        $data = [
            'title' => 'Ride List',
            'headline' => env('APP_NAME'),
            'one_liner_msg' => 'Sign in to start your session',
        ];
        $data['btn_link'] = [
            'button_form_route' =>route('add_ride'),
            'button_class' =>'btn btn-warning btn-sm',
            'button_icon' =>'<i class="fas fa-plus-circle"></i>',
            'button_title' =>'Create New Ride',
        ];
        $general = new General();
        $where = NULL;
        $order_by['column_name']='id';
        $order_by['sort']='desc';
        $query = DB::table('rides');
        $select =  [
            'ride.*',
            DB::raw("(SELECT CONCAT(geo_location.tehsil_name, ', ', geo_location.district_name, ', ', geo_location.province_name) FROM geo_location WHERE geo_location.id = ride.location_start) as location_start"),
            DB::raw("(SELECT CONCAT(geo_location.tehsil_name, ', ', geo_location.district_name, ', ', geo_location.province_name)  FROM geo_location WHERE geo_location.id = ride.location_end) as location_end"),
            DB::raw("(SELECT CONCAT(users_driver.first_name, ' ', users_driver.last_name) FROM users_driver WHERE users_driver.id = ride.driver_id ) as driver_name"),
            DB::raw("(SELECT CONCAT(vehicles.make, ' ', vehicles.model, ' ', vehicles.version) FROM vehicles WHERE vehicles.id = ride.vehicle_id ) as vehicle_name"),
        ];
        $data['rides'] = $general->get('ride', $where, $select, $order_by);
        //print_arr($data['rides'] );

        $view = get_private_template_name().'.driver.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
    function add_ride(){
        $general = new General();
        $data = [
            'title' =>'Add New Ride',
            'form_action_url' =>route('add_location'),
        ];
        
        $where = array('location_type'=>2,'is_enable'=>2);
        $order_by['column_name']='district_name';
        $order_by['sort']='asc';
        $select =  array();

        $data['district_list'] = $general->get('geo_location', $where, $select, $order_by);
        $view = get_private_template_name().'.driver.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
}
