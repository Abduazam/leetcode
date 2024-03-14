<?php

namespace Medium\BinarySubarraysWithSum;

class Solution
{
    /**
     * @param array<integer> $nums
     * @param integer $goal
     * @return integer
     */
    public function numSubarraysWithSum(array $nums, int $goal): int
    {
        return $this->find($goal, $nums) - $this->find($goal - 1, $nums);
    }

    private function find(int $num, array $nums): int
    {
        if ($num < 0) return 0;

        $result = 0;
        $left = $current = 0;
        for ($i = 0; $i < count($nums); ++$i) {
            $current += $nums[$i];
            while ($current > $num) {
                $current -= $nums[$left];
                $left++;
            }
            $result += ($i - $left + 1);
        }

        return $result;
    }
}

$nums = [0,0,0,0,0];

$solution = new Solution();
$result = $solution->numSubarraysWithSum($nums, 0);
var_dump($result);