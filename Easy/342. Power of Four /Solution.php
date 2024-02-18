<?php

namespace Easy\PowerOfFour;

class Solution
{
    /**
     * @param integer $n
     * @return boolean
     */
    public function isPowerOfFour(int $n): bool
    {
        while ($n > 1) {
            $n /= 4;
        }

        return $n == 1;
    }
}

$solution = new Solution();
$result = $solution->isPowerOfFour(0);
var_dump($result);