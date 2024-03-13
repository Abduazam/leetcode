<?php

namespace Easy\FindThePivotInteger;

class Solution
{
    /**
     * @param integer $n
     * @return integer
     */
    function pivotInteger(int $n): int
    {
        $total = array_sum(range(1, $n));
        $left = 0;

        for ($i = 1; $i <= $n; $i++) {
            $right = $total - $left - $i;
            if ($left == $right) {
                return $i;
            }

            $left += $i;
        }

        return -1;
    }
}

$solution = new Solution();
$result = $solution->pivotInteger(8);
var_dump($result);