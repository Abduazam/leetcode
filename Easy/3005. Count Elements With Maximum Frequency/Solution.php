<?php

namespace Easy\CountElementsWithMaximumFrequency;

class Solution
{
    /**
     * @param array<integer> $nums
     * @return integer
     */
    function maxFrequencyElements(array $nums): int
    {
        $numbers = array_count_values($nums);
        $numbers = array_count_values($numbers);

        $max = max(array_keys($numbers));

        return $max * $numbers[$max];
    }
}

$solution = new Solution();
$result = $solution->maxFrequencyElements([1,2,2,3,1,4,4,4]);
var_dump($result);