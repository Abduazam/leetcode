<?php

namespace Easy\SearchInsertPosition;

class Solution
{
    /**
     * @param array<integer> $nums
     * @param integer $target
     *
     * @return integer
     */
    public function searchInsert(array $nums, int $target): int
    {
        $result = 0;

        for ($i = 0; $i < count($nums); $i++) {
            if ($target === $nums[$i]) {
                return $i;
            }

            if ($target > $nums[$i]) {
                $result = $i + 1;
            }
        }

        return $result;
    }
}

$numbers = [1,3,5,6];
$target = 7;

$solution = new Solution();
$result = $solution->searchInsert($numbers, $target);
var_dump($result);