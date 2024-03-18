<?php

namespace Easy\ArrangingCoins;

class Solution
{
	/**
     * @param integer $n
     * @return integer
     */
    public function arrangeCoins(int $n): int
    {
        $step = 1;
        $max = 1;
        $test = 1;

        while ($n > 0) {
            if ($n >= $step) {
                $max = $step;
            }

            $n -= $step;
            $step++;
        }

        return $max;
    }
}

$solution = new Solution();
$result = $solution->arrangeCoins(5);
var_dump($result);