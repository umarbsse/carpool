<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class General extends Model
{
    
    function get($table, $where=NULL, $select=NULL, $order_by=NULL){
        if(allow_print_query()==true){
            DB::enableQueryLog();
        }

        $query  = DB::table($table);
        if ($select === null) {
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
        $result = $query->get();

        return json_decode(json_encode($result), true);
    }
    function authenticate_user($login_pram, $password){
        if(allow_print_query()==true){
            DB::enableQueryLog();
        }
        $result  = DB::table('users')->where('email',$login_pram)->orwhere('mobile',$login_pram)->orwhere('cnic',$login_pram)->first();
        return json_decode(json_encode($result), true);
    }
    function insert_data($table_name, $data){
        return DB::table($table_name)->insertGetId($data);
    }
    function update_data($table_name, $where, $data){
        //DB::enableQueryLog();
        $updated = DB::table($table_name)->where($where)->update($data);
        //dd(DB::getQueryLog());
        if ($updated > 0) {
            return true;
        }else{
            return false;
        }
    } 
}
