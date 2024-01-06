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
        $numsIndex = [];

        $complementNumsIndex = [];

        for ($i = 0; $i < count($nums); $i++) {
            $currentNum = $nums[$i];
            $complement = $target - $currentNum;

            if (array_key_exists($complement, $complementNumsIndex)) {
                $numsIndex[] = $complementNumsIndex[$complement];
                $numsIndex[] = $i;
                break;
            }

            $complementNumsIndex[$currentNum] = $i;
        }

        return $numsIndex;
    }
    
}

$numbers = [3, 2, 4];
$target = 6;

$solution = new Solution();
$result = $solution->twoSum($numbers, $target);
var_dump($result);