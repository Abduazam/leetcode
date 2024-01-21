<?php

namespace Medium\HouseRobber;

class Solution
{
    /**
     * @param array<integer> $nums
     * @return integer
     */
    public function rob(array $nums): int
    {
        $array = [$nums[0], $nums[1]];

        for ($i = 2; $i < count($nums); $i++) {
            $array[$i] = max($array[$i - 3], $array[$i - 2]) + $nums[$i];
        }

        return max($array);
    }
}

$numbers = [2,7,9,6,1];

$solution = new Solution();
$result = $solution->rob($numbers);
var_dump($result);