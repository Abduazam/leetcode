<?php

namespace Medium\InsertDeleteGetRandom;

class RandomizedSet
{
    private array $set = [];

    public function __construct() { }

    /**
     * @param integer $val
     *
     * @return boolean
     */
    public function insert(int $val): bool
    {
        if (array_key_exists($val, $this->set)) {
            return false;
        }

        $this->set[$val] = true;
        return true;
    }

    /**
     * @param integer $val
     *
     * @return boolean
     */
    public function remove(int $val): bool
    {
        if (array_key_exists($val, $this->set)) {
            unset($this->set[$val]);
            return true;
        }

        return false;
    }

    /**
     * @return integer
     */
    public function getRandom(): int
    {
        return array_rand($this->set);
    }
}