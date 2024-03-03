<?php

namespace Easy\IsSubsequence;

class Solution
{
    /**
     * @param string $s
     * @param string $t
     * @return boolean
     */
    function isSubsequence(string $s, string $t): bool
    {
        $i = 0;
        $j = 0;

        while ($i < strlen($s) && $j < strlen($t)) {
            if ($s[$i] == $t[$j]) {
                $i++;
            }

            $j++;
        }

        return $i == strlen($s);
    }
}

$solution = new Solution();
$result = $solution->isSubsequence('aaaaaa', 'bbaaaa');
var_dump($result);