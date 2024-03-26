<?php

namespace Medium\FindAllDuplicatesInAnArray;

class Solution
{
    /**
     * @param  array<integer> $nums
     *
     * @return array<integer>
     */
    public function findDuplicates(array $nums): array
    {
        $numbers = [];
        $output = [];

        foreach ($nums as $num) {
            if (isset($numbers[$num])) {
                $output[] = $num;
            } else {
                $numbers[$num] = true;
            }
        }

        return $output;
    }
}

$solution = new Solution();
$result = $solution->findDuplicates([4,3,2,7,8,2,3,1]);
var_dump($result);