<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registerotp;
use App\Models\Country;
use DB;
use Log;
use App\Mail\sendEmail;
use Mail;

class RegisterotpController extends Controller
{
    public function index(Request $request){
        $data['country'] = Country::all();
        $data['useremail'] = $request->session()->get('email');
        $data['username'] = $request->session()->get('email');
        return view('register', $data);
    }


    public function refresh(Request $request){
        $request->session()->flush();
        return redirect(route('register'));
    }


    public function requestOtp(Request $request)
    {      

           $otp = rand(1000,9999);
           Log::info("otp = ".$otp);
           $minutes = 1;
           $request->session()->put('email', $request->email);
           $register_otp = new Registerotp;
           $register_otp->email = $request->email;
           $register_otp->otp = $otp;
           $register_otp->save();
           return redirect(route('register'))->with('status', 'OTP sent successfully');
          
       }

       public function refresh_password(Request $request){
        $request->session()->flush();
        return redirect(route('forgot-password'));
    }


    public function passwordOtp(Request $request)
    {      

           $otp = rand(1000,9999);
           Log::info("otp = ".$otp);
           $minutes = 1;
           $user_data = DB::table('users')->where('email',$request->email)->first();
           if($user_data){
           $request->session()->put('email', $request->email);
           $register_otp = new Registerotp;
           $register_otp->email = $request->email;
           $register_otp->otp = $otp;
           $register_otp->save();
           return redirect(route('forgot-password'))->with('status', 'OTP sent successfully');
           }
           else{
            return back()->with('status', 'Mail Id not exist!!');
           }
          
       }

    

}
