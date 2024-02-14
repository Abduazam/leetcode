<?php

namespace Medium\RearrangeArrayElementsBySign;

class Solution
{
    /**
     * @param array<integer> $nums
     *
     * @return array<integer>
     */
    public function rearrangeArray(array $nums): array
    {
        $p = 0;
        $n = 1;

        $output = array_fill(0, count($nums), null);

        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] > 0) {
                $output[$p] = $nums[$i];
                $p += 2;
            } else {
                $output[$n] = $nums[$i];
                $n += 2;
            }
        }

        return $output;
    }
}

$nums = [3,1,-2,-5,2,-4];

$solution = new Solution();
$result = $solution->rearrangeArray($nums);
var_dump($result);