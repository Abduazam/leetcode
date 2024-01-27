<?php

namespace Easy\HappyNumber;

class Solution
{
    /**
     * @param integer $n
     *
     * @return boolean
     */
    public function isHappy(int $n): bool
    {
        $seen = [];

        while ($n != 1 and !in_array($n, $seen)) {
            $seen[] = $n;

            $temp = 0;

            $nums = str_split($n);
            foreach ($nums as $num) {
                $temp += $num ** 2;
            }

            $n = $temp;
        }

        return $n == 1;
    }
}

$n = 2;

$solution = new Solution();
$result = $solution->isHappy($n);
var_dump($result);