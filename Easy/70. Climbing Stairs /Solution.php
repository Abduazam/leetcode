<?php

namespace Easy\ClimbingStairs;

class Solution
{
    /**
     * @param integer $n
     *
     * @return integer
     */
    public function climbStairs(int $n): int
    {
        $one = 1;
        $two = 1;

        for ($i = 0; $i < $n - 1; $i++) {
            $temp = $one;
            $one += $two;
            $two = $temp;
        }

        return $one;
    }
}

$n = 3;

$solution = new Solution();
$result = $solution->climbStairs($n);
var_dump($result);