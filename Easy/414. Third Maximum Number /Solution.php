<?php

namespace Easy\ThirdMaximumNumber;

class Solution
{
    /**
     * @param array<integer> $nums
     * @return integer
     */
    function thirdMax(array $nums): int
    {
        $numbers = array_count_values($nums);

        krsort($numbers);

        if (count($numbers) > 2) {
            $i = 1;
            foreach ($numbers as $key => $number) {
                if ($i == 3) {
                    return $key;
                }
                $i++;
            }
        }

        return max($nums);
    }
}

$solution = new Solution();
$result = $solution->thirdMax([1,2,-2147483648]);
var_dump($result);