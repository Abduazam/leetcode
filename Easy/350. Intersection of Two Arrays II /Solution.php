<?php

namespace Easy\IntersectionOfTwoArraysII;

class Solution
{
    /**
     * @param array<integer> $nums1
     * @param array<integer> $nums2
     *
     * @return array<integer>
     */
    function intersect(array $nums1, array $nums2): array
    {
        $output = [];

        $nums = array_count_values($nums1);

        foreach ($nums2 as $num) {
            if (array_key_exists($num, $nums) && $nums[$num] > 0) {
                $output[] = $num;
                $nums[$num] -= 1;
            }
        }

        return $output;
    }
}

$nums1 = [4,9,5];
$nums2 = [9,4,9,8,4];

$solution = new Solution();
$result = $solution->intersect($nums1, $nums2);
var_dump($result);