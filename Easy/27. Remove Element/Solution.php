<?php

namespace Easy\RemoveElement;

class Solution
{
    /**
     * @param  array<integer>  $nums
     * @param  integer  $val
     * @return integer
     */
    function removeElement(array &$nums, int $val): int
    {
        $nums = array_count_values($nums);
        unset($nums[$val]);

        $output = [];

        foreach ($nums as $key => $value) {
            for ($i = 0; $i < $value; $i++) {
                $output[] = $key;
            }
        }

        $nums = $output;
    }
}

$nums = [3, 2, 2, 3];

$solution = new Solution();
$result = $solution->removeElement($nums, 3);
var_dump($result);