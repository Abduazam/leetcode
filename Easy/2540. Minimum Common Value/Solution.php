<?php

namespace Easy\MinimumCommonValue;

class Solution
{
    /**
     * @param array<integer> $nums1
     * @param array<integer> $nums2
     * @return integer
     */
    function getCommon(array $nums1, array $nums2): int
    {
        $nums2 = array_flip($nums2);

        foreach ($nums1 as $num) {
            if (isset($nums2[$num])) return $num;
        }

        return -1;
    }
}

$nums1 = [1,2,3];
$nums2 = [2,4];

$solution = new Solution();
$result = $solution->getCommon($nums1, $nums2);
var_dump($result);