<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\Models\Totalamount;
use App\Models\User;
use App\Models\Levelinc;
use DB;

class Levelincome extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Levelincome:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Levelincome updated';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user_data = DB::table('users')->where('first_topup', 'Done')->get();
        foreach($user_data as $user_datas){
        $level = DB::table('networks')->where('reference_id', $user_datas->reference_id)->get();
        $s = DB::table('users')->where('sponsor_id', $user_datas->reference_id)->where('first_topup', 'Done')->count();
        $total_profit = DB::table('totalamounts')->where('reference_id', $user_datas->reference_id)->select('profit_amount')->first();
        $total_profit_amount = $total_profit->profit_amount;
        $total_level_amount = 0;
        foreach($level as $levels){
        for($i = 1 ; $i <= 20 ; $i++){
            if($s >= 1 and $i == 1){
                if($levels->level == 1){
                $network_data = DB::table('networks')->where('emp_id', $levels->emp_id)->where('level', $i)->first();
                if($network_data){
                $sponsor = DB::table('users')->where('id', $network_data ->emp_id)->first();
                $totalamount = DB::table('totalamounts')->where('reference_id', $sponsor->reference_id)->first();
                if($totalamount){
                    $profit = $totalamount->total_amount * (0.5/100) ;
                    $level_amount = $profit * (12/100);
                    $total_level_amount = $total_level_amount +  $level_amount;
                    }
            }
        }
    }
            if($s >= 2 && $i == 2 ){
                if($levels->level == 2){
                $network_data = DB::table('networks')->where('emp_id', $levels->emp_id)->where('level', $i)->first();
                if($network_data){
                $sponsor = DB::table('users')->where('id', $network_data ->emp_id)->first();
                $totalamount = DB::table('totalamounts')->where('reference_id', $sponsor->reference_id)->first();
                if($totalamount){
                $profit = $totalamount->total_amount * (0.5/100) ;
                $level_amount = $profit * (10/100);
                $total_level_amount = $total_level_amount +  $level_amount;
                }
            }
            }
        }
            if($s >= 3 && $i == 3 ){
                if($levels->level == 3){
                $network_data = DB::table('networks')->where('emp_id', $levels->emp_id)->where('level', $i)->first();
                if($network_data){
                $sponsor = DB::table('users')->where('id', $network_data ->emp_id)->first();
                $totalamount = DB::table('totalamounts')->where('reference_id', $sponsor->reference_id)->first();
                if($totalamount){
                $profit = $totalamount->total_amount * (0.5/100) ;
                $level_amount = $profit * (8/100);
                $total_level_amount = $total_level_amount +  $level_amount;
                }
            }
            }
        }
            if($s >= 4 && $i == 4){
                if($levels->level == 4){
                $network_data = DB::table('networks')->where('emp_id', $levels->emp_id)->where('level', $i)->first();
                if($network_data){
                $sponsor = DB::table('users')->where('id', $network_data ->emp_id)->first();
                $totalamount = DB::table('totalamounts')->where('reference_id', $sponsor->reference_id)->first();
                if($totalamount){
                $profit = $totalamount->total_amount * (0.5/100) ;
                $level_amount = $profit * (5/100);
               $total_level_amount = $total_level_amount +  $level_amount;
                }
            }
        }
    }
            if($s >= 5 && $i == 5 ){
                if($levels->level == 5){
                $network_data = DB::table('networks')->where('emp_id', $levels->emp_id)->where('level', $i)->first();
                if($network_data){
                $sponsor = DB::table('users')->where('id', $network_data ->emp_id)->first();
                $totalamount = DB::table('totalamounts')->where('reference_id', $sponsor->reference_id)->first();
                if($totalamount){
                $profit = $totalamount->total_amount * (0.5/100) ;
                $level_amount = $profit * (4/100);
               $total_level_amount = $total_level_amount +  $level_amount;
                }
            }
            }
        }
            if($s >= 6 && $s <= 10 && $i >= 6 && $i <= 10){
                if($levels->level >= 6 &&  $levels->level <= 10){
                $network_data = DB::table('networks')->where('emp_id', $levels->emp_id)->where('level', $i)->first();
                if($network_data){
                $sponsor = DB::table('users')->where('id', $network_data ->emp_id)->first();
                $totalamount = DB::table('totalamounts')->where('reference_id', $sponsor->reference_id)->first();
                if($totalamount){
                $profit = $totalamount->total_amount * (0.5/100) ;
                $level_amount = $profit * (1/100);
               $total_level_amount = $total_level_amount +  $level_amount;
                }
            }
        }
    }
            if($s >= 11 && $s <= 15 && $i >= 11 && $i <= 15){
                if($levels->level >= 11 &&  $levels->level <= 15){
                $network_data = DB::table('networks')->where('emp_id', $levels->emp_id)->where('level', $i)->first();
                if($network_data){
                $sponsor = DB::table('users')->where('id', $network_data ->emp_id)->first();
                $totalamount = DB::table('totalamounts')->where('reference_id', $sponsor->reference_id)->first();
                if($totalamount){
                $profit = $totalamount->total_amount * (0.5/100) ;
                $level_amount = $main_amount * (0.75/100);
               $total_level_amount = $total_level_amount +  $level_amount;
                }
            }
        }
    }
            if($s >= 16 && $s <= 20 && $i >= 16 && $i <= 20){
                if($levels->level >= 16 &&  $levels->level <= 20){
                $network_data = DB::table('networks')->where('emp_id', $levels->emp_id)->where('level', $i)->first();
                if($network_data){
                $sponsor = DB::table('users')->where('id', $network_data ->emp_id)->first();
                $totalamount = DB::table('totalamounts')->where('reference_id', $sponsor->reference_id)->first();
                if($totalamount){
                $profit = $totalamount->total_amount * (0.5/100) ;
                $level_amount = $main_amount * (0.05/100);
               $total_level_amount = $total_level_amount +  $level_amount;
                }
            }
        }
    } 
     }
    } 
    $old_income = DB::table('levelincomes')->where('reference_id', $user_datas->reference_id)->orderBy('id', 'desc')->first();;
    if($old_income){
        $tl_profit =  $old_income->tl_profit;
    }else{
        $tl_profit = 0;
    }
    $tl_profit = $tl_profit + $total_level_amount;
    $total_p_amount = $total_level_amount + $total_profit_amount;
    $values = array('reference_id' => $user_datas->reference_id, 'level_profit' => $total_level_amount, 'tl_profit' => $tl_profit, 'date' => date('d-m-Y') );
    DB::table('levelincomes')->insert($values);
    DB::table('totalamounts')->where('reference_id', $user_datas->reference_id)->update(['profit_amount' => $total_p_amount]);
   
    }
    $this->info('Success');
    }
}
