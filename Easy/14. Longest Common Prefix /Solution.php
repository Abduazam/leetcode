<?php

namespace Easy\LongestCommonPrefix;

class Solution
{
    /**
     * @param array<string> $strs
     *
     * @return string
     */
    public function longestCommonPrefix(array $strs): string
    {
        $currentLength = PHP_INT_MAX;
        $currentIndex = 0;

        for ($i = 0; $i < count($strs); $i++) {
            if ($currentLength > strlen($strs[$i])) {
                $currentLength = strlen($strs[$i]);
                $currentIndex = $i;
            }
        }

        $word = "";

        for ($j = 0; $j < $currentLength; $j++) {
            $char = "";

            for ($w = 0; $w < count($strs); $w++) {
                if ($strs[$currentIndex][$j] === $strs[$w][$j]) {
                    $char = $strs[$currentIndex][$j];
                } else {
                    break 2;
                }
            }

            $word .= $char;
        }

        return $word;
    }
}

$strings = ["fle", "flo", "flo"];

$solution = new Solution();
$result = $solution->longestCommonPrefix($strings);
var_dump($result);