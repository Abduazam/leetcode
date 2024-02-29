<?php

namespace Easy\FindTheDifference;

class Solution {

    /**
     * @param string $s
     * @param string $t
     * @return string
     */
    public function findTheDifference(string $s, string $t): string
    {
        $sArray = count_chars($s, 1);
        $tArray = count_chars($t, 1);

        foreach ($tArray as $key => $count) {
            if ($sArray[$key] < $count) {
                return chr($key);
            }
        }

        return '';
    }
}

$solution = new Solution();
$result = $solution->findTheDifference('a', 'aa');
var_dump($result);