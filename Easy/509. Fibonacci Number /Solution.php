<?php

namespace Easy\FibonacciNumber;

class Solution
{
    /**
     * @param integer $n
     *
     * @return integer
     */
    public function fib(int $n): int
    {
        if ($n > 1) {
            $first = 0;
            $second = 1;
            $result = 0;

            for ($i = 2; $i <= $n; $i++) {
                $result = $first + $second;
                $first = $second;
                $second = $result;
            }

            return $result;
        } else {
            return $n;
        }
    }
}

$n = 4;

$solution = new Solution();
$result = $solution->fib($n);
var_dump($result);