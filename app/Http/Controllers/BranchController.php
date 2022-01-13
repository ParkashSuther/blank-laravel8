<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BranchController extends Controller
{
    //
    function add_branch(){
        return view('branch.add');
    }

    function post_add_branch(Request $request){
        $company_id = session('company_id');
        $isValid = $request->validate([
            'cb_name' =>'required',
            'cb_address' =>'required',
        ]);
        $branch = DB::insert("INSERT INTO companies_branches (company_id, cb_name, cb_address, cb_status) VALUES('".$company_id."','".$request->cb_name."','".$request->cb_address."',1)");
        if($branch){
            // $branch_id = DB::table('companies_branches')->pluck('cb_id')->last();
            return view('branch.view');
        }
    }

    function view_branches(){
        $company_id = session('company_id');
        $branches = DB::select("SELECT * FROM companies_branches where company_id = ".$company_id);
        // return $branches;
        return view('branch.view',['branches'=>$branches]);
    }

    function  detail_view(Request $request, $id){
        $company_id = session('company_id');
        $contacts = DB::select("SELECT * FROM `contacts` inner join contacts_values on contacts.contact_id = contacts_values.contact_id WHERE cb_id =" .$id);
        $branch_detail = DB::select("SELECT * FROM companies_branches where cb_id=".$id." AND company_id = ".$company_id);
        return view('branch.detail',['branch'=>$branch_detail[0],'contacts'=>$contacts]);
    }

    function view_update($id){
        $branch = DB::table('companies_branches')
            ->where('cb_id','=',$id)->first();
            // return $branch;
        return view('branch.update',['branch'=>$branch]);
    }
    function post_update(Request $request,$id){
        $company_id = session('company_id');
        $isValid = $request->validate([
            'cb_name' =>'required',
            'cb_address' =>'required',
        ]);
        $branch = DB::update("UPDATE `companies_branches` SET `cb_name` = '".$request->cb_name."', `cb_address` = '".$request->cb_address."',`cb_status`='".$request->cb_status."' WHERE `companies_branches`.`cb_id` = ".$id);
        return redirect('branch/detail/'.$id);
        
    }
}
