<?php

namespace Easy\TwoSum\WayTwo;

class Solution
{
    /**
     * @param array<integer> $nums
     * @param integer $target
     *
     * @return array<integer>
     */
    function twoSum(array $nums, int $target): array
    {
        $hashMap = [];

        for ($i = 0; $i < count($nums); $i++) {
            $diff = $target - $nums[$i];

            if (array_key_exists($diff, $hashMap)) {
                return [$hashMap[$diff], $i];
            }

            $hashMap[$nums[$i]] = $i;
        }

        return [];
    }
    
}

$numbers = [3, 2, 4];
$target = 6;

$solution = new Solution();
$result = $solution->twoSum($numbers, $target);
var_dump($result);