<?php

namespace App\Service;

class Worker1 implements WorkerInterface
{
    protected Queue $queue;

    public function __construct(Queue $queue)
    {
        $this->queue = $queue;
    }
}
