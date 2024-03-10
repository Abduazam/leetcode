<?php

namespace Easy\IntersectionOfTwoArrays;

class Solution
{
    /**
     * @param array<integer> $nums1
     * @param array<integer> $nums2
     * @return array<integer>
     */
    function intersection(array $nums1, array $nums2): array
    {
        $nums2 = array_flip($nums2);

        $output = [];

        foreach ($nums1 as $num) {
            if (array_key_exists($num, $nums2)) {
                $output[$num] = $num;
            }
        }

        return $output;
    }
}

$nums1 = [1,2,2,1];
$nums2 = [2,2];

$solution = new Solution();
$result = $solution->intersection($nums1, $nums2);
var_dump($result);