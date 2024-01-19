<?php

namespace Medium\ConvertArrayInto2DArrayWithConditions;

class Solution
{
    /**
     * @param array<integer> $nums
     * @return array<array<integer>>
     */
    function findMatrix(array $nums): array
    {
        $numbers = array_count_values($nums);

        $result = [];

        while (count($numbers) > 0) {
            $row = [];

            foreach ($numbers as $num => $count) {
                $row[] = $num;
                $numbers[$num] -= 1;

                if ($numbers[$num] == 0) {
                    unset($numbers[$num]);
                }
            }

            $result[] = $row;
        }

        return $result;
    }
}

$numbers = [1,3,4,1,2,3,1];

$solution = new Solution();
$result = $solution->findMatrix($numbers);
var_dump($result);