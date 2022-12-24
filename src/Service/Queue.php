<?php

namespace App\Service;

class Queue {
    protected array $workers;

    /**
     * @param array $workers
     */
    public function __construct(iterable $workers)
    {
        // Here things will go wrong, as $workers will be resolved which in turn will resolve `Queue` again
        $this->workers = $workers instanceof \Traversable ? iterator_to_array($workers) : $workers;
    }
}
