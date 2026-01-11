<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class General extends Model
{
    
    function get($table, $where=NULL, $select=NULL, $order_by=NULL, $where_not_in=NULL){
        if(allow_print_query()==true){
            DB::enableQueryLog();
        }

        $query  = DB::table($table);
        if ($select == '' || $select === null || (is_array($select) && count($select)==0) ) {
                $query->select('*');
        }else{
                $query->select($select);
        }
        if ($where !== null) {
            // Check if the array is numerically indexed (e.g., [['col', '>', 5], ...])
            // The check below confirms if keys are NOT associative/strings.
            $is_indexed_array = array_keys($where) === range(0, count($where) - 1);
            
            if ($is_indexed_array) {
                // Case 1: Array of arrays, requires iteration.
                // Example: [['votes', '>', 100], ['age', '<', 30]]
                foreach ($where as $condition) {
                    // Ensure it's a valid [column, operator, value] array
                    if (is_array($condition) && count($condition) === 3) {
                        $query->where($condition[0], $condition[1], $condition[2]);
                    }
                }
            } else {
                // Case 2: Associative array, Query Builder handles it directly.
                // Example: ['status' => 1, 'role' => 'admin']
                $query->where($where);
            }
        }

        if ($order_by !== null) {
            $query->orderBy($order_by['column_name'], $order_by['sort']);
        }


        if ($where_not_in !== null) {
            $query->whereNotIn($where_not_in['column_name'], $where_not_in['ids']);
        }
        if ($order_by !== null) {
            $query->orderBy($order_by['column_name'], $order_by['sort']);
        }
        $result = $query->get();
        return json_decode(json_encode($result), true);
    }
    function authenticate_user($table_name, $login_pram, $password){
        if(allow_print_query()==true){
            DB::enableQueryLog();
        }
        $result  = DB::table($table_name)->where('email',$login_pram)->orwhere('mobile',$login_pram)->orwhere('cnic',$login_pram)->first();
        return json_decode(json_encode($result), true);
    }
    function insert_data($table_name, $data){
        return DB::table($table_name)->insertGetId($data);
    }
    function update_data($table_name, $where, $data){
        $updated = DB::table($table_name)->where($where)->update($data);
        if ($updated > 0) {
            return true;
        }else{
            return false;
        }
    } 
    function delete_by_id($table_name, $id){
        $deleted = DB::table($table_name)->where('id', $id)->delete();
        if ($deleted) {
            return true;
        } else {
            return false;
        }
    } 

    function insert_seats($rideId, $passengerId,$booking_status, $payment_status, array $selectedSeats)
    {
        return DB::transaction(function() use ($rideId, $passengerId,$booking_status, $payment_status, $selectedSeats) {

            // 1️⃣ Lock rows for selected seats to prevent race conditions
            $bookedSeats = DB::table('ride_bookings')
                ->where('ride_id', $rideId)
                ->whereIn('seat_no', $selectedSeats)
                ->where('booking_status', 2) // confirmed bookings
                ->where('payment_status', 2) // confirmed bookings
                ->lockForUpdate()
                ->pluck('seat_no')
                ->toArray();

            // 2️⃣ Check if any seat is already booked
            $alreadyBooked = array_intersect($selectedSeats, $bookedSeats);
            if (!empty($alreadyBooked)) {
                throw \Illuminate\Validation\ValidationException::withMessages([
                    'selected_seats' => ['Seat(s) '.implode(',', $alreadyBooked).' are already booked.']
                ]);
            }

            // 3️⃣ Insert all selected seats safely
            $insertedIds = [];
            foreach ($selectedSeats as $seatNo) {
                $insertedIds[] = DB::table('ride_bookings')->insertGetId([
                    'ride_id' => $rideId,
                    'passenger_id' => $passengerId,
                    'seat_no' => $seatNo,
                    'booking_status' => $booking_status,  // confirmed
                    'payment_status' => $payment_status,  // pending
                    'created_at' => get_currentTime(),
                    'updated_at' => get_currentTime(),
                ]);
            }

            return $insertedIds; // return all inserted IDs
        });
    }

}
