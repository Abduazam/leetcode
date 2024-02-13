<?php

namespace Medium\SumSubarrayMinimums;

class Solution
{
    /**
     * @param array<integer> $arr
     * @return integer
     */
    public function sumSubarrayMins(array $arr): int
    {
        $all = [];

        $countArr = count($arr);

        for ($i = 0; $i < $countArr; $i++) {
            $all[] = [$arr[$i]];

            if ($i != $countArr - 1) {

            }
        }

        var_dump($all);

        return 0;
    }
}

$numbers = [3,1,2,4];

$solution = new Solution();
$result = $solution->sumSubarrayMins($numbers);
var_dump($result);