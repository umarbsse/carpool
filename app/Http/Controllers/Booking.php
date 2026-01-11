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
        
        $where['id'] = 2;
        $order_by['column_name']='id';
        $order_by['sort']='asc';
        $select =  [
            '*',

        ];
        $data['booking_status'] = $general->get('ride_booking_status', $where, $select, $order_by);

        $where['id'] = 2;
        $order_by['column_name']='id';
        $order_by['sort']='asc';
        $select =  [
            '*',

        ];
        $data['payment_status'] = $general->get('payment_status', $where, $select, $order_by);
        $where = null;


        $where['ride_id'] = $request->ride_token;
        $order_by['column_name']='id';
        $order_by['sort']='asc';
        $select =  [
            '*',

        ];
        $data['selected_seats'] = $general->get('ride_bookings', $where, $select, $order_by);


        

        $view = get_private_template_name().'.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
    function save_booking(Request $request){


        // 1️⃣ Validate the form inputs

        
        $validated = $request->validate([
                                        'ride_token'            => 'required|integer',
                                        'booking_status'            => 'required|integer',
                                        'payment_status'            => 'required|integer',
                                        'selected_seats' => 'required|array|min:1', // just require at least 1
                                        'selected_seats.*' => [
                                                                'integer',
                                                                'distinct',
                                                                // Check that seat is not already booked for this ride
                                                                Rule::unique('ride_bookings', 'seat_no')
                                                                        ->where('ride_id', $request->ride_token)
                                                                        ->where('booking_status', 2) // assuming 1 = booked/confirmed
                                                                        ->where('payment_status', 2) // assuming 1 = booked/confirmed
                                                            ],
                                        ], 
                                        [
                                            'selected_seats.required' => 'Please select at least one seat.',
                                            'selected_seats.*.distinct' => 'Duplicate seats are not allowed.',
                                            'selected_seats.*.unique' => 'One or more selected seats are already booked for this ride.',
                                        ]
        );
        $rideId = $validated['ride_token'];   
        $booking_status = $validated['booking_status'];
        $payment_status = $validated['payment_status'];
        $passengerId = get_session('user_id');   
        $selectedSeats = $request->selected_seats; // ['1','2','4']
        $general = new General();
        $ids =  $general->insert_seats($rideId, $passengerId,$booking_status, $payment_status, $selectedSeats);
        if(is_array($ids) && count($ids)>0){
            return redirect()->route('ride_list')->with('success', 'seat book successfully! ');
        } else {
            return redirect()->back()->with('error', 'Failed to book seat.');
        }
    }
}
