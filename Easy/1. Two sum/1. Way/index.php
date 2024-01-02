<?php

class Solution {

    function twoSum($nums, $target) {
        $numsIndex = [];

        for ($i = 0; $i < count($nums) - 1; $i++) {
            $firstNum = $nums[$i];

            for ($j = $i + 1; $j < count($nums); $j++) {
                $secondNum = $nums[$j];

                $sumOfTwo = $firstNum + $secondNum;
                if ($sumOfTwo === $target) {
                    $numsIndex[] = $i;
                    $numsIndex[] = $j;
                    break 2;
                }
            }
        }

        return $numsIndex;
    }
}

$numbers = [2, 7, 11, 23];
$target = 9;

$solution = new Solution();
$result = $solution->twoSum($numbers, $target);
var_dump($result);