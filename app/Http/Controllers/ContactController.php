<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //
    function view_contact(){
       
        return view('contacts.view');
    }
    function add_contact(Request $request){
        $company_id = session('company_id');
        $user_id = session('loginId');
        $get_branch= DB::select('SELECT cb_id FROM users_to_company where user_id ='.$user_id . " AND company_id=".$company_id);
        // $get_branch = DB::table('users_to_company')
        //     ->pluck('cb_id')
        //     ->where('user_id','=',$user_id)
        //     ->first();

        $request->validate([
            'contact_mobile'=>'required'
        ]);

        $contact = DB::insert("INSERT INTO contacts (cb_id, contact_name, contact_mobile, datetime) VALUES('".$get_branch[0]->cb_id."','".$request->contact_name."','".$request->contact_mobile."', UNIX_TIMESTAMP())");
        $contact_id = DB::table('contacts')->pluck('contact_id')->last();
        DB::insert("INSERT INTO contacts_values (contact_id, value1, value2, value3) VALUES('".$contact_id."','".$request->value1."','".$request->value2."','".$request->value3."')");
        return view('contacts.add');
    }
}
