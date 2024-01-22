<?php

namespace Easy\SetMismatch;

class Solution
{
    /**
     * @param array<integer> $nums
     *
     * @return array<integer>
     */
    public function findErrorNums(array $nums): array
    {
        $result = [0, 0];

        $map = array_count_values($nums);

        for ($i = 1; $i <= count($map) + 1; $i++) {
            if ($map[$i] == 0) {
                $result[1] = $i;
            }

            if ($map[$i] == 2) {
                $result[0] = $i;
            }
        }

        return $result;
    }
}

$numbers = [1,5,3,2,2,7,6,4,8,9];

$solution = new Solution();
$result = $solution->findErrorNums($numbers);
var_dump($result);