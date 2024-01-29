<?php

namespace Easy\ImplementQueueUsingStacks;

class MyQueue
{
    protected array $stack;
    /**
     */
    public function __construct()
    {
        $this->stack = [];
    }

    /**
     * @param integer $x
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
        return array_shift($this->stack);
    }

    /**
     * @return integer
     */
    public function peek(): int
    {
        $key = array_key_first($this->stack);
        return $this->stack[$key];
    }

    /**
     * @return boolean
     */
    public function empty(): bool
    {
        return empty($this->stack);
    }
}