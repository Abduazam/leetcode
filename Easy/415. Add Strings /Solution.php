<?php

namespace Easy\AddStrings;

class Solution
{
    /**
     * @param string $num1
     * @param string $num2
     * @return string
     */
    public function addStrings(string $num1, string $num2): string
    {
        $n1 = strlen($num1) - 1;
        $n2 = strlen($num2) - 1;

        $output = '';
        $temp = 0;

        while ($n1 >= 0 || $n2 >= 0) {
            $n1Val = isset($num1[$n1]) && $n1 >= 0 ? (int)$num1[$n1] : 0;
            $n2Val = isset($num2[$n2]) && $n2 >= 0 ? (int)$num2[$n2] : 0;

            $sum = $n1Val + $n2Val + $temp;

            if ($sum >= 10) {
                $temp = 1;
                $sum = (string)$sum;
                $output = $sum[1] . $output;
            } else {
                $output = $sum . $output;
                $temp = 0;
            }

            $n1--;
            $n2--;
        }

        return $temp > 0 ? $temp . $output : $output;
    }
}

$solution = new Solution();
$result = $solution->addStrings('1', '9');
var_dump($result);