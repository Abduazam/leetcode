<?php

namespace Easy\FindAllNumbersDisappearedInArray;

class Solution
{
    /**
     * @param array<integer> $nums
     * @return array<integer>
     */
    function findDisappearedNumbers(array $nums): array
    {
        $numbers = array_fill(1, count($nums), true);

        foreach ($nums as $num) {
            if (isset($numbers[$num])) {
                unset($numbers[$num]);
            }
        }

        return array_keys($numbers);
    }
}

$solution = new Solution();
$result = $solution->findDisappearedNumbers([1,1]);
var_dump($result);