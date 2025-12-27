<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General; // Include the model
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class Users
{
    
    function list(){
        $data = [
            'title' => 'Users List',
            'headline' => env('APP_NAME'),
            'one_liner_msg' => '',
        ]; 
        $data['add_modal'] = [
            'button_title' =>'Add User',
            'button_icon' =>'<i class="fas fa-plus-circle"></i>',
            'button_class' =>'btn btn-success btn-sm',
            'button_form_route' =>route('add_user_form'),
            'title' =>'Add New Location',
            'form_action_url' =>route('add_user'),
        ];
        $general = new General();
        $where = NULL;
        $order_by['column_name']='id';
        $order_by['sort']='desc';
        $select =  array();
        $data['users'] = $general->get('users', $where, $select, $order_by);

        $view = get_private_template_name().'.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
    function add_user_form(){
        $general = new General();
        $data = [
            'title' =>'Add New User',
            'form_action_url' =>route('add_user'),
        ];
        
        $where = array('location_type'=>2);
        $order_by['column_name']='district_name';
        $order_by['sort']='asc';
        $select =  array();

        $data['district_list'] = $general->get('geo_location', $where, $select, $order_by);

        //SELECT * FROM `geo_location` WHERE location_type=2;

       // print_arr($data['district_list']);
        $view = get_private_template_name().'.'.get_controller_name().'.'.get_controller_method_name();
        return safe_view($view,$data);
    }
    function add_user(Request $request){
        // 1️⃣ Validate the form inputs
        
        $validated = $request->validate([
            'name'            => 'required',
            'parent_loc'            => 'required',
        ]);
        //$row = $validated;
        print_arr($validated);

        $general = new General();
        $where = [
            ["id", "=", $validated['parent_loc']],
        ];
        $location = $general->get('geo_location', $where);
        if(count($location)==1){
            $request->validate([
                'name' => [
                                'required',
                                Rule::unique('geo_location')
                                    ->where('province_name', $location[0]['province_name'])
                                    ->where('district_name', $location[0]['district_name']),
                            ],
                        ], [
                            'name.unique' => 'This area already exists for the selected province and district.',
                        ]);
            $row['name'] = $validated['name'];
            $row['tehsil_name'] = $validated['name'];
            $row['province_name'] = $location[0]['province_name'];
            $row['district_name'] = $location[0]['district_name'];
            $row['lat'] = $request->post('lat');
            $row['lng'] = $request->post('lng');
            $row['is_enable'] = $request->post('is_enable');
            $row['disable_reason'] = $request->post('disable_reason');
            if($row['is_enable']==2){
                $row['disable_reason'] = "";
            }
            $row['location_type'] = 4;
            $id = $general->insert_data('geo_location',$row);
            if ($id) {            
                return redirect()->back()->with('success', 'Location added successfully! ');
            } else {
            return redirect()->back()->with('error', 'Failed to insert location.');
            }
        } else {
           return redirect()->back()->with('error', 'Failed to insert location.');
        }        
    }
}
