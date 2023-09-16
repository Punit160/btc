<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\registerotp;
use App\Models\Country;
use App\Models\User;
use App\Models\Network;
use DB;
use Session;
use file;
use App\Mail\sendEmail;
use Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function add_user(Request $request){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['user'] = DB::table('users')->select('email')->get();
        return view('add-user', $data);
    }

    public function view_user(Request $request){
        $email = $request->session()->get('loginName');
        $user = DB::table('users')->where('email', $email)->first();
        $data['network'] = DB::table('networks')->where('ref_id', $user->id)->get();
        $data['users'] = DB::table('users')->get();
        $data['total_amount'] = DB::table('totalamounts')->get();
        $data['country'] = DB::table('countries')->get();
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        return view('view-user', $data);
    }


    public function level_team(Request $request){
        $email = $request->session()->get('loginName');
        $Reference = $request->session()->get('Reference');
        $user = DB::table('users')->where('email', $email)->first();
        $data['level'] = DB::table('networks')->selectRaw('level, count(level) as count')->where('reference_id', $Reference)->groupBy('level')->get();
        $data['users'] = DB::table('users')->get();
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        return view('team-level', $data);
    }


    public function level_person(Request $request, $level){
        $email = $request->session()->get('loginName');
        $Reference = $request->session()->get('Reference');
        $data['level'] = DB::table('networks')->where('level', $level)->where('reference_id', $Reference)->get();
        $data['total_amount'] = DB::table('totalamounts')->get();
        $data['user'] = DB::table('users')->get();
        $data['user_team'] = DB::table('users')->where('first_topup',NULL)->get();
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        return view('teammate', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = $request->validate([
        'name' => 'required|min:5|max:50',
        'email' => 'required|email|unique:users',
        'reference_id' => 'unique:users',  
    ]);
    
      
      $sponsor = DB::table('users')->where('reference_id',$request->sponsor_id)->first();
      if($sponsor){
       $password = rand(1000000,9999999);
       $reference = rand(1000,9999);
       $date = Date('d');
       $referenece_id = 'BTC'.$date.$reference;
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = $password;
       $user->role = $request->role;
       $user->phone = $request->phone;
       $user->leg = $request->leg;
       $user->sponsor_id = $request->sponsor_id;
       $user->placement_id = $request->placement_id;
       $user->reference_id = $referenece_id;
       $user->sponsor_table_id = $sponsor->id;
       $user->country = $request->country;
       $registerotp = DB::table('registerotps')->where('email',$request->email)->latest('id')->first();
       if($registerotp){
       if($registerotp->otp == $request->otp){
       if($request->captcha == $request->captcha_code){
        $user->save();
        $user_data = DB::table('users')->where('reference_id',$referenece_id)->first();
        $k = $user_data->sponsor_table_id;
        $number = 1;
        for($a = $k ; $a > 0 ; $a = $k){
        $network = new Network;
        $network->emp_id = $user_data->id;
        $network->ref_id = $k;
        $refer_id = DB::table('users')->where('id',$k)->first();
        $network->reference_id = $refer_id->reference_id;
        $network->level = $number;
        $network->save();
        $user_ref = DB::table('users')->where('id',$k)->first();
        $k = $user_ref->sponsor_table_id;
        $number++;
        }
        DB::table('registerotps')->where('otp',$request->otp)->delete();
        Session::flash('statuscode', "success");
        return back()->with('status', 'User Added Successfully!!!');
       }else{
        Session::flash('statuscode', "danger");
        return back()->with('status', 'Captch Does not Match!!!');
       }
       } else{
        Session::flash('statuscode', "danger");
        return back()->with('status', 'OTP Does not Match !!! ');
       }
       }
       else{
        Session::flash('statuscode', "danger");
        return back()->with('status', 'Email not exist !!! ');
       }

    }
    else{
        Session::flash('statuscode', "danger");
        return back()->with('status', 'Sponsor Id does not match !!! ');
    }
}


public function edit(Request $request, $id){
    $data['user'] = User::find($id);
    $data['username'] = $request->session()->get('Name');
    $data['role'] = $request->session()->get('role');
    $data['country'] = Country::all();
    return view('update-user', $data);
}


public function update(Request $request, $id){
    {
        $validator = $request->validate([
        'name' => 'required|min:5|max:50',
        'email' => 'required|email',
    ]);

    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->country = $request->country;
    $user->save();
    return redirect(route('view-user'))->with('status', 'User Updated Successfully!!!');
}

}

}
