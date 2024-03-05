<?php

namespace Medium\MinimumLengthStringAfterDeletingSimilarEnds;

class Solution
{
    /**
     * @param string $s
     * @return integer
     */
    public function minimumLength(string $s): int
    {
        $left = 0;
        $right = strlen($s) - 1;

        while ($left < $right && $s[$left] == $s[$right]) {
            $char = $s[$left];

            while ($left <= $right && $s[$left] == $char) {
                $left++;
            }

            while ($right <= $left && $s[$right] == $char) {
                $right--;
            }
        }

        return $right - $left + 1;
    }
}