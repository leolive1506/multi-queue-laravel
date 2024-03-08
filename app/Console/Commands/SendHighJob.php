<?php

namespace App\Console\Commands;

use App\Jobs\HighJob;
use Illuminate\Console\Command;

class SendHighJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'shj';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send high job command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 0; $i < 500; $i++) {
            HighJob::dispatch();
        }
    }
}
