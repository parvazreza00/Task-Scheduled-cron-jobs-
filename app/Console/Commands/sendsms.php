<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\UserAlert;
Use Mail;

class sendsms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:sms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send email to user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::to('test@gmail.com')->send(new UserAlert());
        return 0;
    }
}
