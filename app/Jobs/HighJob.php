<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class HighJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $this->queue = 'high';
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        sleep(2);

        logger('high job send', [
            'job' => self::class,
            'queue' => $this->queue,
            'connection' => $this->connection
        ]);
    }
}
