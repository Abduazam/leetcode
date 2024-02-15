<?php

namespace Easy\NimGame;

class Solution
{
    /**
     * @param integer $n
     *
     * @return boolean
     */
    public function canWinNim(int $n): bool
    {
        return $n % 4 != 0;
    }
}