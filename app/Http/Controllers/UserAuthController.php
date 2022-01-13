<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use App\Models\Users;
use App\Models\users_to_company;
use Session;
use Illuminate\Support\Facades\DB;
class UserAuthController extends Controller
{
    //
    function get_login(){
        return view('auth.login');
    }
    function post_login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $user = Users::where('user_email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->user_password)){
                $company = DB::select("SELECT * FROM `users_to_company` WHERE user_id = ".$user->user_id);
                $request->session()->put('loginId',$user->user_id);
                $request->session()->put('user_name',$user->user_name);
                $request->session()->put('user_email',$user->user_email);
                $request->session()->put('user_role',$user->user_role);
                if($company){
                    $request->session()->put('company_id',$company[0]->company_id);
                }
                
                return view('welcome');
                // return $company;
            }else{
                return back()->with('fail','failed to login');
            }
        }else{
            return back()->with('fail','user not re');
        }
    }
    
    function get_register(){
        return view('auth.registration');
    }
    
    function post_register(Request $request){
        $validation = $request->validate([
            'user_name'=>'required',
            'user_email'=>'required|email|unique:users',
            'user_password'=>'required',
        ]);

        $ip = $request->ip();
        $qry = "INSERT INTO users (user_role,user_name, user_email,user_password, user_auth,user_ip,user_active, datetime) values('1','".$request->user_name."','".$request->user_email."','".Hash::make($request->user_password)."','','".$ip."',1,UNIX_TIMESTAMP())";
         $res=DB::insert($qry);
         if($res){
            // Alert::success('Success', 'You\'ve Successfully Registered User ');

         } 
         else{
            // Alert::error('Failed', 'You\'ve Successfully Registered User Failed');

         } 
         return back();
    }

    function get_rest(){
        return view('auth.reset_password');
    }

    function post_reset(Request $request){
        print_r($request->all());
        return view('auth.rest_password');
    }

    function get_forgot(){
        return view('auth.forgot_password');
    }

    function post_forgot(Request $request){
        $email = $req->email;
        $token = $req->_token;
        $user = DB::table('users')->where('user_email' , '=', $email)->first();
        if($user){
            DB::table('users')
            ->where('user_id', $user->user_id)
            ->update(['remember_token'=>$token]);
            $new_url = "http://127.0.0.1:8000/reset/".$email."/".$token;

        }else{
            echo 'User does not exist';
            $new_url = '';
        }
        return view('auth.forgot_password',['url'=>$new_url]);
    }
    function reset_password(Request $request,$email,$token){
        
        $user = DB::table('users')->where('user_email' , '=', $email)->first();
        if($user){
            if($user->remember_token == $token){
                return view('auth.reset',['email'=>$email]);
            }else{
                return 'Your Token Expired...';
            }
        }else{
            return 'Your Are Not Register';
        }        
    }
    function reset_pass(Request $request){
        if($request->password == $request->repeat_password){
            DB::table('users')
            ->where('user_email',$request->email)
            ->update(['user_password'=>Hash::make($request->password)]);
            
            return redirect('/login');
        }else{
            return back()->with('error','Faided try again');
        }
      
    }
    function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            Session::pull('company_id');
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
}
