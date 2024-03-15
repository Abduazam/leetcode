<?php

namespace Medium\ProductOfArrayExceptSelf;

class Solution
{
    /**
     * @param array<integer> $nums
     * @return array<integer>
     */
    function productExceptSelf(array $nums): array
    {
        $output = [];

        $left = 1;
        for ($i = 0; $i < count($nums); ++$i) {
            $output[$i] = $left;
            $left *= $nums[$i];
        }

        $right = 1;
        for ($i = count($nums) - 1; $i >= 0; --$i) {
            $output[$i] *= $right;
            $right *= $nums[$i];
        }

        return $output;
    }
}

$solution = new Solution();
$result = $solution->productExceptSelf([1,2,3,4]);
var_dump($result);