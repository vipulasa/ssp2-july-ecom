<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class AnalyticsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @param string $model
     * @param int $id
     * @param string $action
     */
    public function __construct(
        public string $model,
        public int    $id,
        public string $action
    )
    {
    }

    public function handle(): void
    {
        resolve('SSPEcommerce')->makeHit(
            $this->model,
            $this->id,
            $this->action
        );
    }
}
