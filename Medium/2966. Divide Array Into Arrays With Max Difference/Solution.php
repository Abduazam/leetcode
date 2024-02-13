<?php

namespace Medium\DivideArrayIntoArraysWithMaxDifference;

class Solution
{
    /**
     * @param array<integer> $nums
     * @param integer $k
     *
     * @return array<array<integer>>
     */
    public function divideArray(array $nums, int $k): array
    {
        $result = [];

        sort($nums);

        for ($i = 0; $i < count($nums); $i += 3) {
            if (
                $nums[$i+2] - $nums[$i+1] <= $k &&
                $nums[$i+1] - $nums[$i] <= $k &&
                $nums[$i+2] - $nums[$i] <= $k
            ) {
                $result[] = [$nums[$i], $nums[$i+1], $nums[$i+2]];
            } else {
                return [];
            }
        }

        return $result;
    }
}

$nums = [1,3,3,2,7,3];

$solution = new Solution();
$result = $solution->divideArray($nums, 3);
var_dump($result);