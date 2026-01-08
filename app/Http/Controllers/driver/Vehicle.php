<?php

namespace App\Http\Controllers\driver;

use Illuminate\Http\Request;
use App\Models\General; // Include the model
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class Vehicle
{
   
    function add_vehicle(){
        $general = new General();
        $data = [
            'title' =>'Register New Vehicle',
            'form_action_url' =>route('add_location'),
        ];

        $where = array('is_enable'=>2);
        $order_by['column_name']='name';
        $order_by['sort']='asc';
        $select =  [
            'vehicles.*',
            DB::raw("concat(make,' ',model,' ',version) as name"),
        ];
        $data['vehicles_list'] = $general->get('vehicles', $where, $select, $order_by);


        $where = array('is_enable'=>2);
        $order_by['column_name']='name';
        $order_by['sort']='asc';
        $select =  [
            'vehicles_reg_geo_locations.*'
        ];
        $data['vehicles_reg_geo_locations'] = $general->get('vehicles_reg_geo_locations', $where, $select, $order_by);


        $where = array('status'=>'active');
        if(get_user_role()=="driver"){
            $where['id'] = get_session('user_id');
        }
        $data['driver_list'] = $general->get('users_driver', $where, '', array('column_name'=>'first_name', 'sort'=>'asc'));
        $view = get_private_template_name().'.driver.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
    function save_new_vehicle(Request $request){
        // 1️⃣ Validate the form inputs
        
        $validated = $request->validate([
            'vehicle_id'            => 'required|integer',
            'reg_number'            => 'required',
        ]);

        $row['vehicle_id'] = $validated['vehicle_id'];
        $row['reg_number'] = $validated['reg_number'];
        $row['reg_province'] = $request->input('reg_province');
        $row['reg_year'] = $request->input('reg_year');
        $row['manufactor_year'] = $request->input('manufactor_year');
        
        $row['driver_id'] = get_session('user_id');
        $row['created_at'] = get_currentTime();
        $row['updated_at'] = get_currentTime();


      //  print_arr($row);

       // die();


        
        $general = new General();
        $id = $general->insert_data('driver_vehicles',$row);
        if ($id) {            
            return redirect()->back()->with('success', 'Vehicle added successfully! ');
        } else {
            return redirect()->back()->with('error', 'Failed to add new Vehicle.');
        }     
    }
    function list(){
        $data = [
            'title' => 'Vehicle List',
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
}

