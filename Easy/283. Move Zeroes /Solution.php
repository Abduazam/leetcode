<?php

namespace Easy\MoveZeroes;

class Solution
{
    /**
     * @param array<integer> $nums
     *
     * @return null
     */
    public function moveZeroes(array &$nums)
    {
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == 0) {
                $nums[] = $nums[$i];
                unset($nums[$i]);
            }
        }
    }
}

$nums = [0,1,0,3,12];

$solution = new Solution();
$result = $solution->moveZeroes($nums);
var_dump($result);