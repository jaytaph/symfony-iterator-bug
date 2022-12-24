<?php

namespace App\Service;

class Worker2 implements WorkerInterface
{
    protected Queue $queue;

    public function __construct(Queue $queue)
    {
        $this->queue = $queue;
    }
}
