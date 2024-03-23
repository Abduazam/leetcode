<?php

namespace Easy\RemoveDuplicatesFromSortedArray;

class Solution
{
    /**
     * @param  array<integer>  $nums
     * @return integer
     */
    function removeDuplicates(array &$nums): int
    {
        $nums = array_count_values($nums);

        return count(array_keys($nums));
    }
}

$nums = [0,0,1,1,2,2,3,4,4,5];

$solution = new Solution();
$result = $solution->removeDuplicates($nums);
var_dump($result);