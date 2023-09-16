<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */

    protected $commands = [
        \App\Console\Commands\Intrest::class,
        \App\Console\Commands\Levelincome::class,
        \App\Console\Commands\Rewardincome::class,
    ];

    protected function schedule(Schedule $schedule): void
    {
            $schedule->command('totalamounts:update')->weekdays();
            $schedule->command('Levelincome:update')->weekdays();
            $schedule->command('Rewardinc:update')->weekdays();
            

    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
