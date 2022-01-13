<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    function view_users(){
        $users = dB::select('SELECT * FROM users INNER JOIN users_to_company ON users_to_company.user_id = users.user_id where company_id = '.session('company_id'));
        return view('users.view',['users'=>$users]);
    }
    function add_users(){
        $company_id = session('company_id');
        $branches = DB::select("SELECT * FROM companies_branches where company_id =" .$company_id);
        $user_role = DB::select("SELECT * FROM `users_roles`");
        return view('users.add',['branches'=>$branches,'user_roles'=>$user_role]);
    }

    function post_add_users(Request $request){
        
        $isValid = $request->validate([
            'user_name' => "required",
            'user_email' => "required",
            'user_password' => "required",
            'user_role' => "required",
            'user_branch' => "required",
        ]);
        if($isValid){
            $company_id = session('company_id');
            $user = DB::insert("INSERT INTO users (user_role, user_name, user_email, user_password, user_auth, user_ip, user_active, datetime) VALUES('".$request->user_role."','".$request->user_name."','".$request->user_email."','".Hash::make($request->user_name)."','','".$request->ip()."',1,UNIX_TIMESTAMP())");
            $user_id = DB::table('users')->pluck("user_id")->last();
            $user_to_company= DB::insert("INSERT INTO users_to_company (user_id, company_id, cb_id, role_id) VALUES('".$user_id."','".$company_id."','".$request->user_branch."','".$request->user_role."')");
            // return view('users.view');
        }
        return view('users.add');
    }

    function view_detail(Request $request, $id){
        $user = DB::select("SELECT * FROM users inner join users_to_company on users.user_id= users_to_company.user_id where users.user_id = $id");
        // return ($user[0]);
        return view('users.detail', ["user"=>$user[0]]);
    }

    function view_update($id){
        $user = DB::select("SELECT * FROM users inner join users_to_company on users.user_id= users_to_company.user_id where users.user_id = $id");
        // return ($user[0]);
        $company_id = session('company_id');
        $branches = DB::select("SELECT * FROM companies_branches where company_id =" .$company_id);
        $user_role = DB::select("SELECT * FROM `users_roles`");
        return view('users.update', ["user"=>$user[0],'user_roles'=>$user_role,'branches'=>$branches]);
    }

    function post_update(Request $request,$id){
        
        $isValid = $request->validate([
            'user_name' => "required",
            'user_email' => "required|email",
            'user_role' => "required",
            'user_branch' => "required",
        ]);
        if($isValid){
            $company_id = session('company_id');
            DB::update("UPDATE `users` SET `user_role` = '".$request->user_role."',`user_name` = '".$request->user_name."',`user_email` = '".$request->user_email."',`user_active` = '".$request->user_status."' WHERE `users`.`user_id` =".$id);
            DB::update("UPDATE `users_to_company` SET `cb_id` = '".$request->user_branch."' WHERE `users_to_company`.`user_id` =".$id);
        }
        return back();
    }
}
