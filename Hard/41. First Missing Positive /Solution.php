<?php

namespace Hard\FirstMissingPositive;

class Solution
{
    /**
     * @param  Integer[]  $nums
     * @return Integer
     */
    public function firstMissingPositive(array $nums): int
    {
        $nums = array_flip($nums);

        for ($i = 1; $i <= count($nums) + 1; ++$i) {
            if (! isset($nums[$i])) {
                return $i;
            }
        }

        return 0;
    }
}

$solution = new Solution();
$result = $solution->firstMissingPositive([1,2,0]);
var_dump($result);