<?php

class Solution {

    function twoSum($nums, $target) {
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