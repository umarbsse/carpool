<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General; // Include the model
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class Booking
{

    function seat(Request $request){
        
        $general = new General();
        $data = [
            'title' =>'Book Seat',
            'form_action_url' =>route('add_location'),
        ];
        
        $where['id'] = $request->ride_token;
        $order_by['column_name']='id';
        $order_by['sort']='desc';
        $query = DB::table('rides');
        $select =  [
            'ride.*',
            DB::raw("(SELECT CONCAT(geo_location.district_name) FROM geo_location WHERE geo_location.id = ride.location_start) as location_start"),
            DB::raw("(SELECT CONCAT(geo_location.district_name)  FROM geo_location WHERE geo_location.id = ride.location_end) as location_end"),
            DB::raw("(SELECT CONCAT(users_driver.first_name, ' ', users_driver.last_name) FROM users_driver WHERE users_driver.id = ride.driver_id ) as driver_name"),
            DB::raw("(SELECT CONCAT(vehicles.make, ' ', vehicles.model, ' ', vehicles.version) FROM vehicles WHERE vehicles.id = ride.vehicle_id ) as vehicle_name"),
            DB::raw("(SELECT name FROM ride_status WHERE ride_status.id = ride.status ) as status"),

        ];
        $data['rides'] = $general->get('ride', $where, $select, $order_by);
        
        //print_arr($data['rides']);
        //die();

        $view = get_private_template_name().'.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
}
