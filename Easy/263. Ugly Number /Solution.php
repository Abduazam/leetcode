<?php

namespace Easy\UglyNumber;

class Solution
{
    /**
     * @param integer $n
     * @return boolean
     */
    public function isUgly(int $n): bool
    {
        while ($n > 1) {
            if ($n % 2 == 0) {
                $n /= 2;
            } elseif ($n % 3 == 0) {
                $n /= 3;
            } elseif ($n % 5 == 0) {
                $n /= 5;
            } else {
                return false;
            }
        }

        return $n == 1;
    }
}

$solution = new Solution();
$result = $solution->isUgly(3);
var_dump($result);