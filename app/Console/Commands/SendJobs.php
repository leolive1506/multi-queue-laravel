<?php

namespace App\Console\Commands;

use App\Jobs\HighJob;
use App\Jobs\LowJob;
use Illuminate\Console\Command;

class SendJobs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sj';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send jobs commands';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // HighJob::dispatch()->onConnection('database');
        // LowJob::dispatch();
        HighJob::dispatch()->onQueue('high');
        LowJob::dispatch()->onQueue('low');;
    }
}
