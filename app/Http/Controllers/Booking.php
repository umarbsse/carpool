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
        $select =  [
            'ride.*',
            DB::raw("(SELECT CONCAT(geo_location.district_name) FROM geo_location WHERE geo_location.id = ride.location_start) as location_start"),
            DB::raw("(SELECT CONCAT(geo_location.district_name)  FROM geo_location WHERE geo_location.id = ride.location_end) as location_end"),
            DB::raw("(SELECT CONCAT(users_driver.first_name, ' ', users_driver.last_name) FROM users_driver WHERE users_driver.id = ride.driver_id ) as driver_name"),
            DB::raw("(SELECT reg_number FROM driver_vehicles WHERE driver_vehicles.id = ride.vehicle_id) as reg_number"),
            DB::raw("(SELECT (SELECT concat(make,' ',model,' ',version) FROM vehicles WHERE vehicles.id = driver_vehicles.vehicle_id) FROM driver_vehicles WHERE driver_vehicles.id = ride.vehicle_id) as vehicle_name"),
            DB::raw("(SELECT name FROM ride_status WHERE ride_status.id = ride.status ) as status"),

        ];
        $data['rides'] = $general->get('ride', $where, $select, $order_by);
        
        
        if(count($data['rides'])==0){
            return redirect()->route('ride_list')->with('error', 'Ride not found.');
        }else if(count($data['rides'])==1){
            $data['rides'] = $data['rides'][0];
        }
        
        $where = null;
        $order_by['column_name']='id';
        $order_by['sort']='asc';
        $select =  [
            '*',

        ];
        $data['booking_status'] = $general->get('ride_booking_status', $where, $select, $order_by);
        $view = get_private_template_name().'.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
    function save_booking(Request $request){
       // print_arr($_POST);
        //die();
        // 1️⃣ Validate the form inputs

        
        $validated = $request->validate([
            'ride_token'            => 'required',
            'seats'            => 'required',
            'status'            => 'required'
        ]);
        $row['ride_id'] = $validated['ride_token'];
        $row['passenger_id'] = get_session('user_id');
        $row['seat_no'] = 1;
        $row['booking_status'] = $validated['status'];
        $row['payment_status'] = 1;
        $row['created_at'] = get_currentTime();
        $row['updated_at'] = get_currentTime();

        print_arr($row);
        die();

        
        $general = new General();
        $id = $general->insert_data('ride_bookings',$row);
        if ($id) {            
            return redirect()->route('ride_list')->with('success', 'Booking done successfully! ');
        } else {
            return redirect()->back()->with('error', 'Failed to add new Ride.');
        }
    }
}
