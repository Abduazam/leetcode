<?php

namespace Medium\SequentialDigits;

class Solution
{
    /**
     * @param integer $low
     * @param integer $high
     *
     * @return array<integer>
     */
    public function sequentialDigits(int $low, int $high): array
    {
        $result = [];

        $digits = range(1, 9);

        for ($i = 0; $i < count($digits); $i++) {
            $num = $digits[$i];
            $step = $i;

            while (strlen($num) <= strlen($high)) {
                if ($low <= $num && $num <= $high) {
                    $result[] = $num;
                }

                $step++;
                if (array_key_exists($step, $digits)) {
                    $num = $num * 10 + $digits[$step];
                } else {
                    break;
                }
            }
        }

        sort($result);

        return $result;
    }
}

$low = 100;
$high = 900;

$solution = new Solution();
$result = $solution->sequentialDigits($low, $high);
var_dump($result);