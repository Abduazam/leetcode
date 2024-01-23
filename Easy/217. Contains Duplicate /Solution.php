<?php

namespace Easy\ContainsDuplicate;

class Solution
{
    /**
     * @param array<integer> $nums
     *
     * @return boolean
     */
    function containsDuplicate(array $nums): bool
    {
        $count = array_count_values($nums);

        foreach ($count as $value) {
            if ($value > 1) {
                return true;
            }
        }

        return false;
    }
}

$numbers = [7,10,5,5,6,6,4,10,5,4,9,4,9,6,5,9,6,3,6,5,6,7,7,4,9,9,10,5,8,1,8,3,2,7,5,10,1,8,5,8,4,3,6,4,9,4,2,8,3,2,2,1,5,6,3,2,6,1,8,6,2,9,1,4,5,10,8,5,10,5,10,1,4,8,3,6,4,10,9,1,1,1,2,2,9,6,6,8,1,9,2,5,5,2,1,8,5,2,3,10];

$solution = new Solution();
$result = $solution->containsDuplicate($numbers);
var_dump($result);