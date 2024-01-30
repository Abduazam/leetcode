<?php

namespace Easy\AddDigits;

class Solution
{
    /**
     * @param integer $num
     *
     * @return integer
     */
    public function addDigits(int $num): int
    {
        if ($num < 9)
            return $num;

        while ($num > 9) {
            $digits = str_split($num);

            $temp = 0;

            foreach ($digits as $digit) {
                $temp += $digit;
            }

            $num = $temp;
        }

        return $num;
    }
}

$solution = new Solution();
$result = $solution->addDigits('12');
var_dump($result);