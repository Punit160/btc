<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Totalamount;
use App\Models\User;
use App\Models\Rewardinc;
use DB;
use Session;

class Rewardincome extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Rewardinc:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rewardincome updated';

    /**
     * Execute the console command.
     */
    public function handle(Request $request)
    {
        $refer = Totalamount::all();
        foreach($refer as $refers){
            $user_network = DB::table('users')->where('sponsor_id', $refers->reference_id)->get();
            foreach($user_network as $user_networks){
              $user_amount = DB::table('totalamounts')->where('reference_id', $user_networks->reference_id)->sum('total_amount');
              $total_business = $user_amount;
              $user_id = DB::table('users')->where('reference_id', $user_networks->reference_id)->first();
              $inner_network = DB::table('networks')->where('ref_id', $user_id->id)->get();
              $all_business = 0;
              $temporaryData = new Collection();
              foreach($inner_network as $inner_networks){
                $user_ref = DB::table('users')->where('id', $inner_networks->emp_id)->first();
                $team_business = DB::table('topups')->where('reference_id', $user_ref->reference_id)->sum('amount');
                $total_business = $total_business + $team_business;
                $temporaryData->push($total_business);
                $temporaryData->all();
                echo $temporaryData;

                }
                
               
                $all_business =  $all_business + $total_business;
            }
        } 
        $this->info('Success');  
       }
}
