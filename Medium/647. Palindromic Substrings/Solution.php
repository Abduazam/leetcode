<?php

namespace Medium\PalindromicSubstrings;

class Solution
{
    /**
     * @param string $s
     *
     * @return integer
     */
    function countSubstrings(string $s): int
    {
        $count = $result = strlen($s);

        for ($i = 0; $i < $count - 1; $i++) {
            for ($j = 2; $j < ($count - $i) + 1; $j++) {
                $t = substr($s, $i, $j);

                echo "i: $i - j: $j - t: $t\n";

                if ($t == strrev($t)) {
                    $result++;
                };
            }
        }

        return $result;
    }
}

$string = "aaa";

$solution = new Solution();
$result = $solution->countSubstrings($string);
var_dump($result);