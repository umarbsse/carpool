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
            DB::raw("(SELECT CONCAT(geo_location.district_name) FROM geo_location WHERE geo_location.id = ride.location_start) as location_start"),
            DB::raw("(SELECT CONCAT(geo_location.district_name)  FROM geo_location WHERE geo_location.id = ride.location_end) as location_end"),
            DB::raw("(SELECT CONCAT(users_driver.first_name, ' ', users_driver.last_name) FROM users_driver WHERE users_driver.id = ride.driver_id ) as driver_name"),
            DB::raw("(SELECT CONCAT(vehicles.make, ' ', vehicles.model, ' ', vehicles.version) FROM vehicles WHERE vehicles.id = ride.vehicle_id ) as vehicle_name"),
            DB::raw("(SELECT name FROM ride_status WHERE ride_status.id = ride.status ) as status"),

        ];
        $data['rides'] = $general->get('ride', $where, $select, $order_by);
       // print_arr($data['rides'] );

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

        $data['driver_list'] = $general->get('users_driver', array('status'=>'active'), '', array('column_name'=>'first_name', 'sort'=>'asc'));
        $select =  ['id',DB::raw("concat(make, ' ',model,' ',version) as name")];
        $data['vehicle_list'] = $general->get('vehicles', array('is_enable'=>2), $select, array('column_name'=>'name', 'sort'=>'asc'));
        $view = get_private_template_name().'.driver.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
    function save_new_ride(Request $request){
        // 1️⃣ Validate the form inputs
        
        $validated = $request->validate([
            'location_start'            => 'required',
            'location_end'            => 'required',
            'max_seats' => 'integer|min:1|max:10',
            'availble_seats' => 'required|integer|min:1|max:10',
            'start_time' => 'required',
            'end_time' => '',
            'driver_id' => 'required|integer',
            'vehicle_id'            => 'required|integer'
        ]);

        $row['location_start'] = $validated['location_start'];
        $row['location_end'] = $validated['location_end'];
        $row['max_seats'] = $validated['max_seats'];
        $row['availble_seats'] = $validated['availble_seats'];
        $row['start_time'] = $validated['start_time'];
        $row['end_time'] = $validated['end_time'];
        $row['driver_id'] = $validated['driver_id'];
        $row['vehicle_id'] = $validated['vehicle_id'];
        $row['status'] = 1;
        $row['created_at'] = get_currentTime();
        $row['updated_at'] = get_currentTime();

        //print_arr($row);
        //die();

        
        $general = new General();
        $id = $general->insert_data('ride',$row);
        if ($id) {            
            return redirect()->route('ride_list')->with('success', 'Ride added successfully! ');
        } else {
            return redirect()->back()->with('error', 'Failed to add new Ride.');
        }     
    }
}
