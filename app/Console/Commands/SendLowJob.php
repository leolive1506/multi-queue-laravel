<?php

namespace App\Console\Commands;

use App\Jobs\LowJob;
use Illuminate\Console\Command;

class SendLowJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'slj';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send low job command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 0; $i < 500; $i++) {
            LowJob::dispatch()->onQueue('low');
        }
    }
}
