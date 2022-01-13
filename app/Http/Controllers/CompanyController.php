<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    function add_company(){
        return view('company.add');
    }

    function post_add_company(Request $request){
        // return view('company.add');
        $isValid = $request->validate([
            'company_name'=>'required'
        ]);
        if($isValid){
            $company = DB::insert("INSERT INTO companies (company_name,company_status) VALUES('".$request->company_name."',1)");
            if($company){
                $company_id = DB::table('companies')->pluck('company_id')->last();
                $userid= session('loginId');
                $branch = DB::insert("INSERT INTO companies_branches (company_id, cb_name, cb_address, cb_status) VALUES('".$company_id."','".$request->cb_name."','".$request->cb_address."',1)");
                $branch_id = DB::table('companies_branches')->pluck('cb_id')->last();
                $users_to_company = DB::insert("INSERT INTO users_to_company (user_id,company_id,cb_id,role_id) VALUES('".$userid."','".$company_id."','".$branch_id."',1)");
                $request->session()->put('company_id',$company_id);
                return view('welcome');
            }else{
                return back()->with('error','Please Fill Correct Data');
            }
        }
        return $request->all();
    }

    function view_company(){
        $company = DB::table("companies")->where('company_id', session('company_id'))->first();
        // return view('company.add');
        return view('company.view',['company'=>$company]);
    }
}
