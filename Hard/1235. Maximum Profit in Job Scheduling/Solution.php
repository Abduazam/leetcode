<?php

namespace Hard\MaximumProfitJobScheduling;

class Solution
{
    /**
     * @param array<integer> $startTime
     * @param array<integer> $endTime
     * @param array<integer> $profit
     *
     * @return integer
     */
    public function jobScheduling(array $startTime, array $endTime, array $profit): int
    {
        $process = true;
        $result = 0;
        $time = 1;

        while ($process) {
            $index = array_search($time, $startTime);
            var_dump($index);
        }

        return $result;
    }
}

$startTime = [1,1,1];
$endTime = [2,3,4];
$profit = [5,6,4];

$solution = new Solution();
$result = $solution->jobScheduling($startTime, $endTime, $profit);
var_dump($result);