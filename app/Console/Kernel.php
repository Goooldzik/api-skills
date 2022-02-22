<?php

namespace App\Console;

use App\Jobs\CreateCommentJob;
use App\Jobs\CreatePostJob;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param   Schedule $schedule
     * @return  void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->job(new CreatePostJob())->dailyAt(13);
        $schedule->job(new CreateCommentJob())->cron('*/36 * * * *');
    }

    /**
     * Register the commands for the application.
     *
     * @return  void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
