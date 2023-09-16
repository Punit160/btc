<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reward;
use App\Models\User;
use DB;
use Log;
use App\Mail\sendEmail;
use Mail;
use Session;

class RewardController extends Controller
{
    public function add_reward(Request $request){
        $data['useremail'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        $data['ReferenceId'] = $request->session()->get('Reference');
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        return view('reward.add-reward-income', $data);
    }

    public function create(Request $request){
        $reward = new Reward;
        $reward->reward_name = $request->reward_name;
        $reward->business_amount = $request->business_amount;
        $reward->days = $request->days;
        $reward->profit = $request->profit;
        $reward->payment_deduct = $request->payment_deduct;
        $reward->remarks = $request->remarks;
        $reward->created_by = $request->created_by;
        $reward->save();
        return redirect(route('view-reward-target'))->with('status', 'Reward Income Addedd Successfully!!!');
    }


    public function view(Request $request){
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        $data['ReferenceId'] = $request->session()->get('Reference');
        $data['reward'] = DB::table('rewards')->get();
        return view('reward.view-reward-income', $data);
     }

     
    public function edit(Request $request, $id){
        $data['useremail'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        $data['ReferenceId'] = $request->session()->get('Reference');
        $data['reward'] = Reward::find($id);
        return view('reward.update-reward-income', $data);
     }

     public function update(Request $request, $id){
        $reward = Reward::find($id);
        $reward->reward_name = $request->reward_name;
        $reward->business_amount = $request->business_amount;
        $reward->days = $request->days;
        $reward->profit = $request->profit;
        $reward->payment_deduct = $request->payment_deduct;
        $reward->remarks = $request->remarks;
        $reward->created_by = $request->created_by;
        $reward->save();
        return redirect(route('view-reward-target'))->with('status', 'Reward Income Updated Successfully!!!');
     }

     public function destroy($id){
        $reward = Reward::find($id);
        $reward->delete();
        return redirect(route("view-reward-target"))->with('status', 'User Data Deleted Successfully!!');
    }

}
