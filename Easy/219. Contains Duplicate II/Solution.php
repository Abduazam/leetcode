<?php

namespace Easy\ContainsDuplicate2;

class Solution
{
    /**
     * @param array<integer> $nums
     * @param integer $k
     *
     * @return boolean
     */
    function containsNearbyDuplicate(array $nums, int $k): bool
    {
        $indices = [];

        for ($i = 0; $i < count($nums); $i++) {
            $num = $nums[$i];

            if (array_key_exists($num, $indices)) {
                if ($i - $indices[$num] <= $k) {
                    return true;
                }
            }

            $indices[$num] = $i;
        }

        return false;
    }
}

$numbers = [-1,-1];
$k = 1;

$solution = new Solution();
$result = $solution->containsNearbyDuplicate($numbers, $k);
var_dump($result);