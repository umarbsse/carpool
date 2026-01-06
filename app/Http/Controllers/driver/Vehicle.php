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
        
        $row['created_at'] = get_currentTime();
        $row['updated_at'] = get_currentTime();


        
        $general = new General();
        $id = $general->insert_data('driver_vehicles',$row);
        if ($id) {            
            return redirect()->route('save_new_vehicle')->with('success', 'Ride added successfully! ');
        } else {
            return redirect()->back()->with('error', 'Failed to add new Ride.');
        }     
    }
}

