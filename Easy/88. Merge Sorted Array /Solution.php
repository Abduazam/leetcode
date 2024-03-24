<?php

namespace Easy\MergeSortedArray;

class Solution
{
    /**
     * @param  array<integer> $nums1
     * @param  integer $m
     * @param  array<integer> $nums2
     * @param  integer $n
     *
     * @return NULL
     */
    function merge(array &$nums1, int $m, array $nums2, int $n)
    {
        $nums1 = array_slice($nums1, 0, $m);
        $nums2 = array_slice($nums2, 0, $n);

        $nums1 = array_merge($nums1, $nums2);

        sort($nums1);
    }
}

$nums1 = [1,2,3,0,0,0]; $m = 3;
$nums2 = [2,5,6]; $n = 3;

$solution = new Solution();
$result = $solution->merge($nums1, $m, $nums2, $n);
var_dump($result);