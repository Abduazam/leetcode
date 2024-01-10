<?php

namespace Easy\SingleNumber;

class Solution
{
    /**
     * @param array<integer> $nums
     *
     * @return integer
     */
    public function singleNumber(array $nums): int
    {
        $result = 0;
        foreach ($nums as $num) {
            $result ^= $num;
        }
        return $result;
    }
}

$numbers = [4,1,2,1,2];

$solution = new Solution();
$result = $solution->singleNumber($numbers);
var_dump($result);