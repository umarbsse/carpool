<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class General extends Model
{
    //
    function insert_data($table_name, $data){
        return DB::table($table_name)->insertGetId($data);
    }
}
