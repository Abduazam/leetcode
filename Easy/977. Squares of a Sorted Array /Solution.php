<?php

namespace Easy\SquaresOfSortedArray;

class Solution
{
    /**
     * @param array<integer> $nums
     * @return array<integer>
     */
    public function sortedSquares(array $nums): array
    {
        foreach ($nums as $key => $num) {
            $nums[$key] = $num * $num;
        }

        sort($nums);

        return $nums;
    }
}

$solution = new Solution();
$result = $solution->sortedSquares([-4,-1,0,3,10]);
var_dump($result);