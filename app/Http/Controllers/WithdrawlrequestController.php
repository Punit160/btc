<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdrawlrequest;
use App\Models\User;
use DB;
use Log;
use App\Mail\sendEmail;
use Mail;

class WithdrawlrequestController extends Controller
{
    public function index(Request $request){
        $data['useremail'] = $request->session()->get('email');
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        $data['ReferenceId'] = $request->session()->get('Reference');
        $email = $request->session()->get('loginName');
        $data['user'] = DB::table('users')->where('email', $email)->first();
        return view('add-withdrawl-request', $data);
    }


    public function create(Request $request) 
    { 

        $request->validate([ 
            'reference_id' => 'required',
            'email' => 'required',
            'amount' => 'required', 
            'account' => 'required',  
        ]); 
       
        $profit_amount = DB::table('totalamounts')->where('reference_id', $request->reference_id)->first();
        $withdrawl = new Withdrawlrequest;
        $withdrawl->amount = $request->amount;
        $amount = intval($request->amount);
        $approve_a = $amount * 90/100 ;
        $withdrawl->approve_amount	 = $approve_a;
        $withdrawl->account = $request->account;
        $withdrawl->reference_id = $request->reference_id;
        $withdrawl->email = $request->email;
        $withdrawl->message = $request->message;
        if($profit_amount->profit_amount > $request->amount){
        $withdrawl->save();

        //  Send mail to admin 

                \Mail::send('WithdrawlMail', array( 
                    'reference_id' =>  $request->reference_id,
                    'email' =>  $request->email,
                    'amount' => $request->amount,
                    'account' => $request->account,
                    'form_message' => $request->message,
                ), function($message) use ($request){ 
                    $message->from($request->email); 
                    $message->to('test@stock.etsservices.in', 'Admin')->subject('Withdrawl Request Raised By User');
                }); 
                return back()->with('status', 'Withdrawl Request Raised Successfully!!!');
        }
        else{
            return back()->with('status', 'Insufficient Balance!!!');
        }
    } 


    public function view(Request $request){
        $data['role'] = $request->session()->get('role');
        $role = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        $data['ReferenceId'] = $request->session()->get('Reference');
        $email = $request->session()->get('loginName');
        if($role == 'normal'){
            $data['withdrawlrequest'] = DB::table('withdrawlrequests')->where('email', $email )->get();
        }
        else{
            $data['withdrawlrequest'] = DB::table('withdrawlrequests')->get();
        }
      
        return view('view-withdrawl-request', $data);
     }

}
