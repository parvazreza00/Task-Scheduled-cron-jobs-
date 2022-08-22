<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Log;

class DeleteUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'command for delete user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $date = Carbon::today()->toDateString();
        Log::info($date);
    }
}
