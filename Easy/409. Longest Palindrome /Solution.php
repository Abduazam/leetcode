<?php

namespace Easy\LongestPalindrome;

class Solution
{
    /**
     * @param string $s
     * @return integer
     */
    function longestPalindrome(string $s): int
    {
        $chars = count_chars($s, 1);

        $noOnes = array_filter($chars, function ($char) {
            return $char > 1;
        });

        $sum = 0;
        foreach ($noOnes as $noOne) {
            if ($sum % 2 == 1 && $noOne % 2 == 1) {
                $sum += ($noOne - 1);
            } else {
                $sum += $noOne;
            }
        }

        if ($sum % 2 == 0 && count($chars) > count($noOnes)) {
            $sum++;
        }

        return $sum;
    }
}

$solution = new Solution();
$result = $solution->longestPalindrome('bananas');
var_dump($result);