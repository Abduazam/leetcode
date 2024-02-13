<?php

namespace Easy\BestTimeBuySellStock;

class Solution
{
    /**
     * @param array<integer> $prices
     *
     * @return integer
     */
    public function maxProfit(array $prices): int
    {
        $min = $prices[0];
        $max = 0;

        for ($i = 1; $i < count($prices); $i++) {
            $max = $max > $prices[$i] - $min ? $max : $prices[$i] - $min;
            $min = $min < $prices[$i] ? $min : $prices[$i];
        }

        return $max;
    }
}

$prices = [3,2,6,5,0,3];

$solution = new Solution();
$result = $solution->maxProfit($prices);
var_dump($result);


