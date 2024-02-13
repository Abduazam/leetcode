<?php

namespace Medium\MinimumNumberOperationsMakeArrayEmpty;

class Solution
{
    /**
     * @param array<integer> $nums
     *
     * @return integer
     */
    public function minOperations(array $nums): int
    {
        $counts = array_count_values($nums);

        if (in_array(1, $counts)) {
            return -1;
        }

        $operation = 0;

        foreach ($counts as $count) {
            if ($count % 3 == 0) {
                $operation += $count / 3;
            } else {
                $reminder = $count % 3;

                if ($reminder == 1) {
                    $operation += ($count - 1) / 3 + 1;
                } else if ($reminder % 2 == 0) {
                    $operation += floor($count / 3) + 1;
                }
            }
        }

        return $operation;
    }
}

$numbers = [2,3,3,2,2,4,2,3,4];

$solution = new Solution();
$result = $solution->minOperations($numbers);
var_dump($result);