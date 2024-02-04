<?php

namespace Easy\ImplementStackUsingQueues;

class MyStack
{
    protected array $stack;

    public function __construct() {
        $this->stack = [];
    }

    /**
     * @param integer $x
     *
     * @return void
     */
    public function push(int $x): void
    {
        $this->stack[] = $x;
    }

    /**
     * @return integer
     */
    public function pop(): int
    {
        return array_pop($this->stack);
    }

    /**
     * @return integer
     */
    public function top(): int
    {
        return end($this->stack);
    }

    /**
     * @return boolean
     */
    function empty(): bool
    {
        return empty($this->stack);
    }
}