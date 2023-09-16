<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdrawlrequest;
use App\Models\Paypayment;
use App\Models\User;
use Session;
use DB;
use Log;
use App\Mail\sendEmail;
use Mail;

class PaypaymentController extends Controller
{
    public function create(Request $request, $id){
        $payment = new Paypayment;
      $my_withdraw = DB::table('withdrawlrequests')->where('id', $id)->select(['approve_amount', 'amount', 'account', 'reference_id', 'email',])->first();
      $email = $request->session()->get('loginName');
        $payment->amount = $my_withdraw->approve_amount;
        $payment->account = $my_withdraw->account;
        $payment->reference_id	 = $my_withdraw->reference_id;
        $payment->email = $my_withdraw->email;
        $payment->created_by = $email;
        $payment->save();
        if($payment){
            DB::table('withdrawlrequests')->where('id', $id)->update(['status' => 'Done']);
            $tl_amount = DB::table('totalamounts')->where('reference_id', $my_withdraw->reference_id)->first();
            $profit_amount = floatval($tl_amount->profit_amount);
            $withdrawl_amount = floatval($my_withdraw->amount);
            $profit = $profit_amount - $withdrawl_amount;
            DB::table('totalamounts')->where('reference_id', $my_withdraw->reference_id)->update(['profit_amount' => $profit]);

            \Mail::send('PaymentMail', array( 
                'reference_id' => $my_withdraw->reference_id,
                'email' => $my_withdraw->email,
                'amount' => $my_withdraw->approve_amount,
                'date' => $input['date'],
                'form_message' => $input['message'],
            ), function($message) use ($request){ 
                $message->from('test@stock.etsservices.in '); 
                $message->to($my_withdraw->email, 'Admin')->subject('Fund Request Raised By User');
            }); 
        }
        return redirect(route('view-withdrawl-request'))->with('status', 'Payment Done Successfully!!!');
        
    }
}
