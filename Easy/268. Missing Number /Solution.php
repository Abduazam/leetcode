<?php

namespace Easy\MissingNumber;

class Solution
{
    /**
     * @param array<integer> $nums
     *
     * @return integer
     */
    public function missingNumber(array $nums): int
    {
        $numbers = range(0, count($nums) + 1);

        $unique = array_diff($numbers, $nums);

        return array_key_first($unique);
    }
}

$nums = [3,0,1];

$solution = new Solution();
$result = $solution->missingNumber($nums);
var_dump($result);