<?php

namespace Medium\FindTheDuplicateNumber;

class Solution
{
    /**
     * @param  array<integer> $nums
     * @return integer
     */
    function findDuplicate(array $nums): int
    {
        $output = [];

        foreach ($nums as $num) {
            if (isset($output[$num])) {
                return $num;
            } else {
                $output[$num] = true;
            }
        }
    }
}

$solution = new Solution();
$result = $solution->findDuplicate([1,2,3,4,2]);
var_dump($result);