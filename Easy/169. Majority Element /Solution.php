<?php

namespace Easy\MajorityElement;

class Solution
{
    /**
    * @param array<integer> $nums
 * @return integer
    */
    function majorityElement(array $nums): int
    {
        $counts = array_count_values($nums);

        arsort($counts);

        return array_key_first($counts);
    }
}

$nums = [3,2,3];

$solution = new Solution();
$result = $solution->majorityElement($nums);
var_dump($result);