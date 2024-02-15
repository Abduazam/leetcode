<?php

namespace Easy\PowerOfThree;

class Solution
{
    /**
     * @param integer $n
     *
     * @return boolean
     */
    public function isPowerOfThree(int $n): bool
    {
        while ($n != 0 && $n % 3 == 0) {
            $n /= 3;
        }

        return $n == 1;
    }
}

$solution = new Solution();
$result = $solution->isPowerOfThree(0);
var_dump($result);