<?php

namespace Medium\PartitionArrayForMaximumSum;

class Solution
{
    /**
     * @param array<integer> $arr
     * @param integer $k
     *
     * @return integer
     */
    public function maxSumAfterPartitioning(array $arr, int $k): int
    {
        return 0;
    }
}

$array = [1,2,3,4,5];
$k = 3;

$solution = new Solution();
$result = $solution->maxSumAfterPartitioning($array, $k);
var_dump($result);