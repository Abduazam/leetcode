<?php

namespace Easy\PowerOfTwo;

class Solution
{
    /**
     * @param integer $n
     * @return boolean
     */
    function isPowerOfTwo(int $n): bool
    {
        while ($n > 0) {
            if ($n == 1) {
                return true;
            }

            if ($n % 2 == 0) {
                $n /= 2;
            } else {
                return false;
            }
        }

        return false;
    }
}