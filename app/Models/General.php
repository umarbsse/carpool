<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class General extends Model
{
    //
    function authenticate_user($login_pram, $password){
        if(allow_print_query()==true){
            DB::enableQueryLog();
        }
        $result  = DB::table('users')->where('email',$login_pram)->orwhere('mobile',$login_pram)->orwhere('cnic',$login_pram)->get();
        $result = json_decode(json_encode($result), true);
        print_arr($result);

        echo last_query();
    }
    function insert_data($table_name, $data){
        return DB::table($table_name)->insertGetId($data);
    }
}
