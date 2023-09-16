<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use DB;
use Hash;

class LoginController extends Controller
{

   public function index(Request $request){
    if($request->session()->has('loginName'))
    {
    $data['user'] =  $request->session()->get('loginName');
    return view('login', $data);
    }else{
        return view('login');
    }
   }


    public function loginuser(Request $request){
        $validator = $request->validate([
            'reference_id' => 'required',
            'password' => 'required'
        ]);
       

        $user = DB::table('users')->where('reference_id', '=', $request->reference_id)->first();
        if($user){
            if($request->password == $user->password){
                $request->session()->put('loginId', $user->id );
                $request->session()->put('loginName', $user->email);
                $request->session()->put('Name', $user->name);
                $request->session()->put('login', $user->name);
                $request->session()->put('role', $user->role);
                $request->session()->put('Reference', $user->reference_id);
                    return redirect(route('dashboard'));
            }
            else{
                return back()->with('status','Password not matches');
            }
        }  
    }

    public function dashboard(Request $request)
    {
        $email = $request->session()->get('loginName');
        $data['ReferenceId'] = $request->session()->get('Reference');
        $reference = $request->session()->get('reference');
        $user_data = DB::table('users')->where('email', $email)->first();
        $data['totalamount'] = DB::table('totalamounts')->where('reference_id', $reference)->first();
        $data['latest_topup'] = DB::table('topups')->where('reference_id', $reference)->orderBy('created_at', 'desc')->first();
        $data['my_team_count'] = DB::table('users')->where('sponsor_id', $user_data->reference_id)->count();
        $data['all_team_count'] = DB::table('networks')->where('ref_id', $user_data->id)->count();
        $data['pending_withdrawl'] = DB::table('withdrawlrequests')->where('reference_id', $reference)->where('status', 'NULL')->sum('approve_amount');
        $data['approne_withdrawl'] = DB::table('withdrawlrequests')->where('reference_id', $reference)->where('status', 'Done')->sum('approve_amount');
        $direct_team = DB::table('users')->where('sponsor_id', $user_data->reference_id)->get();
        $my_business = DB::table('topups')->where('reference_id', $user_data->reference_id)->sum('amount');
        $total_direct_business = $my_business;
        foreach($direct_team as $direct_teams){
        $direct_business = DB::table('topups')->where('reference_id', $direct_teams->reference_id)->sum('amount');
        $total_direct_business = $total_direct_business + $direct_business;
        }
        $data['total_d_business'] = $total_direct_business;
        $user_id = DB::table('users')->where('reference_id', $user_data->reference_id)->first();
        $user_network = DB::table('networks')->where('ref_id', $user_id->id)->get();

        $total_team_business = $my_business;
        foreach($user_network as $user_networks){
        $user_ref = DB::table('users')->where('id', $user_networks->emp_id)->select('reference_id')->first();
        $team_business = DB::table('topups')->where('reference_id', $user_ref->reference_id)->sum('amount');
        $total_team_business = $total_team_business + $team_business;
        }
        $data['total_t_business'] = $total_team_business;
        
        $data['user'] = DB::table('users')->where('email', $email)->first();
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        return view('dashboard', $data);
    }


    public function logout(){
        if (Session::has('loginName')){
            Session::pull('loginName');
            Session::pull('loginId');
            Session::pull('role');
            return redirect(route('login'));
        }
    }


    
}
