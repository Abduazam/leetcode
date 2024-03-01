<?php

namespace Easy\MaximumOddBinaryNumber;

class Solution
{
    /**
     * @param string $s
     * @return string
     */
    public function maximumOddBinaryNumber(string $s): string
    {
        $s = str_split($s);
        $left = 0;

        for ($i = 0; $i < count($s); $i++) {
            if ($s[$i] == '1') {
                list($s[$i], $s[$left]) = array($s[$left], $s[$i]);
            }
        }

        list($s[$left - 1], $s[count($s) - 1]) = array($s[count($s) - 1], $s[$left - 1]);

        return implode('', $s);
    }
}

$solution = new Solution();
$result = $solution->maximumOddBinaryNumber('0101');
var_dump($result);