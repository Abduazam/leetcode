<?php

namespace Easy\PlusOne;

class Solution
{
    /**
     * @param array<integer> $digits
     *
     * @return array<integer>
     */
    public function plusOne(array $digits): array
    {
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            $digits[$i]++;

            if ($digits[$i] === 10) {
                $digits[$i] = 0;
            } else {
                break;
            }

            if ($i === 0) {
                array_unshift($digits, 1);
            }
        }

        return $digits;
    }
}

$digits = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6];

$solution = new Solution();
$result = $solution->plusOne($digits);
var_dump($result);