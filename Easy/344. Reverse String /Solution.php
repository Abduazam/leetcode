<?php

namespace Easy\ReverseString;

class Solution
{
    /**
     * @param array<string> $s
     * @return void
     */
    public function reverseString(array &$s): void
    {
        $left = 0;
        $right = count($s) - 1;

        while ($left <= $right) {
            list($s[$left], $s[$right]) = array($s[$right], $s[$left]);

            $left++;
            $right--;
        }
    }
}

$string = ["h","e","l","l","o"];

$solution = new Solution();
$solution->reverseString($string);
var_dump($string);