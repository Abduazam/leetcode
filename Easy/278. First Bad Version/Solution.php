<?php

namespace Easy\FirstBadVersion;

class Solution
{
    /**
     * @param integer $n
     *
     * @return integer
     */
    public function firstBadVersion(int $n): int
    {
        $first = 1;
        $latest = $n;
        $output = PHP_INT_MIN;

        while ($first <= $latest) {
            $middle = floor(($first + $latest) / 2 );

            if($this->isBadVersion($middle)) {
                $output = $middle;
                $latest = $middle - 1;
            } else {
                $first = $middle + 1;
            }
        }

        return $output;
    }
}