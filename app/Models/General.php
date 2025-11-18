<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class General extends Model
{
    
    function get($table, $where=NULL){
        if(allow_print_query()==true){
            DB::enableQueryLog();
        }
        $query  = DB::table($table);
        if($where!=NULL){
            $query->where($where);
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
}
