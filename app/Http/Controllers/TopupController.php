<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topup;
use App\Models\User;
use App\Models\Totalamount;
use App\Models\Joiningbonus;
use DB;
use Log;
use App\Mail\sendEmail;
use Mail;

class TopupController extends Controller
{
    public function index(Request $request, $id=null){
        $data['useremail'] = $request->session()->get('email');
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        $data['ReferenceId'] = $request->session()->get('Reference');
        $data['users'] = DB::table('users')->get();
        $data['fundrequest'] = DB::table('fundrequests')->where('id', $id)->first();
        return view('add-topup', $data);
    }

    public function create(Request $request) 
    { 

        $request->validate([ 
            'reference_id' => 'required',
            'amount' => 'required',
        ]); 
        $input = $request->all(); 
        Topup::create($input);
        
        $total_amount = DB::table('totalamounts')->where('reference_id',$request->reference_id)->first();
        $user = DB::table('users')->where('reference_id',$request->reference_id)->first();
        if($total_amount){
        $tl_amount = DB::table('totalamounts')->where('reference_id', $request->reference_id)->first();
        $available_amount = floatval($tl_amount->total_amount);
        $available_remaining_amount = floatval($tl_amount->remaining_amount);
        $recieve_amount = floatval($request->amount);
        $recieve_remaining_amount = 3 * $recieve_amount;
        $total_amount = $available_amount + $recieve_amount;
        $total_remaining_amount = $available_remaining_amount + $recieve_remaining_amount;
        DB::table('totalamounts')->where('reference_id', $request->reference_id)->update(['total_amount' => $total_amount, 'remaining_amount' => $total_remaining_amount ]);
        }
        else{
            $tl_amount = new Totalamount;
            $tl_amount->reference_id = $request->reference_id;
            $tl_amount->total_amount = $request->amount;
            $remaining_amount = 3 * $request->amount;
            $tl_amount->remaining_amount = $remaining_amount;
            $tl_amount->profit_amount = 0;
            $tl_amount->team_business = 0;
            $tl_amount->save();

            $user = DB::table('users')->where('reference_id', $request->reference_id)->first();
            $tl_sponsor_amount = DB::table('totalamounts')->where('reference_id', $user->sponsor_id)->first();
            $sponsor_profit_amount = $tl_sponsor_amount->profit_amount;
            $sponsor_remaining_amount = $tl_sponsor_amount->remaining_amount;
            $sponsor_profit = ($request->amount * 5)/100;
            if($sponsor_profit){
                $joining = new Joiningbonus;
                $joining->reference_id =  $request->reference_id;
                $joining->sponsor_id =  $user->sponsor_id;
                $joining->amount =  $sponsor_profit;
                $joining->date =  date('d-m-Y');
                $joining->save();
            }
            $total_sponsor_profit = floatval($sponsor_profit_amount) + floatval($sponsor_profit);
            $total_sponsor_remaining = floatval($sponsor_remaining_amount) - floatval($sponsor_profit);
            DB::table('totalamounts')->where('reference_id', $user->sponsor_id)->update(['profit_amount' => $total_sponsor_profit , 'remaining_amount' => $total_sponsor_remaining ]);
        }

        $network = DB::table('networks')->where('emp_id', $user->id)->get();
        foreach($network as $networks){
          $network_total =  DB::table('totalamounts')->where('reference_id', $networks->reference_id)->first();
          $network_team_business = floatval($network_total->team_business);
          $total_team_business = $network_team_business + $recieve_amount;
          DB::table('totalamounts')->where('reference_id', $networks->reference_id)->update(['team_business' => $total_team_business]);
        }
        $fundrequest_id = intval($request->fund_request_id);
        DB::table('fundrequests')->where('id',$fundrequest_id)->update(['status' => 'Done']);
        if($user->first_topup == Null){
            DB::table('users')->where('reference_id', $request->reference_id)->update(['first_topup' => 'Done']);
        }

        return redirect(route('view-fund-request'))->with('status', 'Topup added Successfully!!!');
    } 


    public function view(Request $request){
        $data['role'] = $request->session()->get('role');
        $role = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        $data['ReferenceId'] = $request->session()->get('Reference');
        $data['topup'] = DB::table('topups')->get();
        return view('view-topup', $data);
     }
}
