<?php

namespace Medium\LeastNumberOfUniqueIntegersKRemovals;

class Solution
{
    /**
     * @param integer[] $arr
     * @param integer $k

     * @return integer
     */
    public function findLeastNumOfUniqueInts(array $arr, int $k): int
    {
        $frequency = array_count_values($arr);
        $list = array_fill(0, count($frequency) + 1, 0);

        foreach ($frequency as $value) {
            $list[$value] += 1;
        }

        $output = count($frequency);

        for ($f = 1; $f < count($list); $f++) {
            $remove = $list[$f];
            if ($k >= $f * $remove) {
                $k -= $f * $remove;
                $output -= $remove;
            } else {
                $remove = (int)($k / $f);
                $output -= $remove;
                break;
            }
        }

        return $output;
    }
}

$solution = new Solution();
$result = $solution->findLeastNumOfUniqueInts([5,5,4], 1);
var_dump($result);