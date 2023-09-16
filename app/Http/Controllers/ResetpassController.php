<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\registerotp;
use App\Models\User;
use DB;
use Session;
use file;
use App\Mail\sendEmail;
use Mail;

class ResetpassController extends Controller
{
    Public function forgot_password(Request $request){
        $data['useremail'] = $request->session()->get('email');
        $data['username'] = $request->session()->get('email');
        return view('reset-password', $data);
     }


     Public function reset_password(Request $request){
            $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $registerotp = DB::table('registerotps')->where('email',$request->email)->latest('id')->first();
        if($registerotp){
        if($registerotp->otp == $request->otp){
            $user = DB::table('users')->where('email',$request->email)->first();
            if($user){
               $s =  DB::table('users')->where('email',$request->email)->update(['password' => $request->password]);
               if($s){
                      // send otp in the email
            $value = $request->password;
            $loginreference = $user->reference_id;
            $mail_details = array(
                'subject' => 'Login Details',
                'reference' => 'Your Refrence Id is : '. $loginreference,
                'body' => 'Your Password is : '. $value,
            );
            Mail::send('loginmail', $mail_details, function($message) use ($request) {
             $message->from('info@broadtradingco.com','BTC');
             $message->to($request->email)->subject('Login Details'); 
          });
                   DB::table('registerotps')->where('otp',$request->otp)->delete();
                  Session::flash('statuscode', "success");
                return back()->with('status', 'Password Change Successfully !!! ');
               }
                else{
                 Session::flash('statuscode', "danger");
                return back()->with('status', 'Something is going wrong !!! ');
            }
            }
            else{
                Session::flash('statuscode', "danger");
                return back()->with('status', 'User not exist !!! ');
               }
        }
        else{
            Session::flash('statuscode', "danger");
            return back()->with('status', 'OTP Does not Match !!! ');
           }
        }
     }
}


