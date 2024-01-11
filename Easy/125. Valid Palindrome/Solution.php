<?php

namespace Easy\ValidPalindrome;

class Solution
{
    /**
     * @param string $s
     *
     * @return boolean
     */
    function isPalindrome(string $s): bool
    {
        $string = "";

        for ($i = 0; $i < strlen($s); $i++) {
            if (preg_match('/^[a-zA-Z0-9]+$/', $s[$i])) {
                $string .= $s[$i];
            }
        }

        $string = strtolower($string);
        $reversed = strrev($string);

        return $string === $reversed;
    }
}

$string = "0P";

$solution = new Solution();
$result = $solution->isPalindrome($string);
var_dump($result);
