<?php
    if (!function_exists('get_maximum_seats')) {
        function get_maximum_seats() {
           return 10;
        }
    }
    if (!function_exists('get_ride_action_for_all_users')) {
        function get_ride_action_for_all_users($ride_id) {
            $role = get_session('role');
            $html="";
            if($role=='driver'){
                $html.= '<a href="#" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i>&nbsp;Cancel
                </a>';
            }else if($role=='passenger'){
                $html.= '<a href="'.route('book_seat', ['ride_token' => $ride_id]).'" class="btn btn-success btn-sm">
                    <i class="fas fa-plus"></i>&nbsp;Book Seat
                </a>';
            }
            return $html;
        }
    }
    if (!function_exists('check_if_seat_is_booked')) {
        function check_if_seat_is_booked($bookings, $seat_number) {
            $is_booked = false;
            for ($i=0; $i <count($bookings) ; $i++) {
                if($bookings[$i]['seat_no']==$seat_number && $bookings[$i]['booking_status']==2 && $bookings[$i]['payment_status']==2){
                    $is_booked = true;
                    return $is_booked;
                }
            }
            return $is_booked;
        }
    }



?>