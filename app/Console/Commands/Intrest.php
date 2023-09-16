<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\Models\Totalamount;
use Carbon\Carbon;
use App\Models\User;
use DB;

class Intrest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'totalamounts:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Totalamount updated';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = DB::table('totalamounts')->get();
        foreach($user as $users){
        $usertime = DB::table('users')->where('reference_id', $users->reference_id)->first();
        $yourJoinTime = $usertime->created_at;
        $thresholdTime = Carbon::parse($yourJoinTime)->addHours(72);
        $newUsers = DB::table('users')->where('created_at', '<=', $thresholdTime)->where('sponsor_id', $usertime->reference_id)->count();
        $amount = DB::table('totalamounts')->where('reference_id', $usertime->reference_id)->first();
        $total_amount = floatval($amount->total_amount);
        $profit_amount = floatval($amount->profit_amount);
        $remaining_amount = floatval($amount->remaining_amount);
        if($newUsers >= 3){
            $profit = $total_amount * (1/100) ;
        }else{
            $profit = $total_amount * (0.5/100) ;
        }
        $total_profit = $profit_amount + $profit;
        $total_remaining = $remaining_amount - $profit;
        DB::table('totalamounts')->where('reference_id', $users->reference_id)->update(['profit_amount' => $total_profit,'remaining_amount' => $total_remaining]);
        $old_intrest = DB::table('intrests')->where('reference_id', $users->reference_id)->orderBy('id', 'desc')->first();
        if($old_intrest){
            $ti_profit =  $old_intrest->ti_profit;
        }else{
            $ti_profit = 0;
        }
        $ti_profit = $ti_profit + $profit;
        $values = array('reference_id' => $users->reference_id,'intrest_profit' =>  $profit,'ti_profit' => $ti_profit, 'date' => date('d-m-Y'));
        DB::table('intrests')->insert($values);
    }
    $this->info('Success');   
   }
  }