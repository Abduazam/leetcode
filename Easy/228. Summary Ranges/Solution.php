<?php

namespace Easy\SummaryRanges;

class Solution
{
    /**
     * @param array<integer> $nums
     *
     * @return array<string>
     */
    function summaryRanges(array $nums): array
    {
        $output = [];
        if (count($nums) === 0) return $output;

        $start = $nums[0];
        $end = $nums[0];

        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] - $nums[$i - 1] === 1) {
                $end = $nums[$i];
            } else {
                $output[] = $start === $end ? "$start" : "$start->$end";
                $start = $end = $nums[$i];
            }
        }

        $output[] = $start === $end ? "$start" : "$start->$end";

        return $output;
    }
}

$nums = [0,2,3,4,6,8,9];

$solution = new Solution();
$result = $solution->summaryRanges($nums);
var_dump($result);