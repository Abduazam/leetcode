<?php

namespace Easy\SqrtX;

class Solution
{
    /**
     * @param integer $x
     *
     * @return integer
     */
    function mySqrt(int $x): int
    {
        $root = 1;

        while ($root * $root <= $x) {
            $root++;
        }

        return $root - 1;
    }
}

$solution = new Solution();
$result = $solution->mySqrt(5);
var_dump($result);