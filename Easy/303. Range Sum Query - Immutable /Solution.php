<?php

namespace Easy\RangeSumQueryImmutable;

class NumArray
{
    public array $array;

    /**
     * @param array<integer> $nums
     */
    public function __construct(array $nums) {
        $this->array = $nums;
    }

    /**
     * @param integer $left
     * @param integer $right
     * @return integer
     */
    public function sumRange(int $left, int $right): int
    {
        return array_sum(array_slice($this->array, $left, ($right - $left) + 1));
    }
}

$num = [-2, 0, 3, -5, 2, -1];

$solution = new NumArray($num);
$r1 = $solution->sumRange(0, 2);
var_dump($r1);