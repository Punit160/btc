<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Levelincome;
use App\Models\Intrest;
use Session;
use DB;
use Hash;

class Callcontroller extends Controller
{
    public function view_level_income(Request $request){
        $reference = $request->session()->get('Reference');
        $data['levelincome'] = DB::table('levelincomes')->where('reference_id', $reference)->get();
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        return view('view-level-income', $data);
    }

    public function view_intrest(Request $request){
        $reference = $request->session()->get('Reference');
        $data['intrest'] = DB::table('intrests')->where('reference_id', $reference)->get();
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        return view('view-intrest-income', $data);
    }

    public function view_income_report(Request $request){
        $reference = $request->session()->get('Reference');
        $data['intrest'] = DB::table('intrests')->distinct('date')->where('reference_id', $reference)->get();
        $data['levelincome'] = DB::table('levelincomes')->where('reference_id', $reference)->get();
        $data['joining'] = DB::table('joiningbonuses')->where('sponsor_id', $reference)->get();
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('Name');
        return view('view-income-report', $data);
    }
}
