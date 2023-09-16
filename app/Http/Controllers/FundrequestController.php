<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fundrequest;
use App\Models\User;
use DB;
use Log;
use App\Mail\sendEmail;
use Mail;

class FundrequestController extends Controller
{
    public function index(Request $request){
        $data['useremail'] = $request->session()->get('email');
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        $data['ReferenceId'] = $request->session()->get('Reference');
        $email = $request->session()->get('loginName');
        $data['user'] = DB::table('users')->where('email', $email)->first();
        return view('add-fund-request', $data);
    }

    public function create(Request $request) 
    { 

        $request->validate([ 
            'reference_id' => 'required',
            'email' => 'required',
            'amount' => 'required', 
            'transaction_id' => 'required', 
            'date' => 'required', 
            'message' => 'required', 
        ]); 
        $input = $request->all(); 
        fundrequest::create($input); 

        //  Send mail to admin 

        \Mail::send('RequestMail', array( 
            'reference_id' => $input['reference_id'],
            'email' => $input['email'],
            'amount' => $input['amount'],
            'transaction_id' => $input['transaction_id'],
            'date' => $input['date'],
            'form_message' => $input['message'],
        ), function($message) use ($request){ 
            $message->from($request->email); 
            $message->to('test@stock.etsservices.in ', 'Admin')->subject('Fund Request Raised By User');
        }); 
        return back()->with('status', 'Fund Request Raised Successfully!!!');
    } 


    public function view(Request $request){
        $data['role'] = $request->session()->get('role');
        $role = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        $data['ReferenceId'] = $request->session()->get('Reference');
        $email = $request->session()->get('loginName');
        if($role == 'normal'){
            $data['fundrequest'] = DB::table('fundrequests')->where('email', $email)->get();
        }
        else{
            $data['fundrequest'] = DB::table('fundrequests')->get();
        }
      
        return view('view-fund-request', $data);
     }
}
