<?php

namespace Easy\ReverseVowelsOfString;

class Solution
{
    /**
     * @param string $s
     * @return string
     */
    public function reverseVowels(string $s): string
    {
        return $s;
    }
}

$solution = new Solution();
$result = $solution->reverseVowels("hello");
var_dump($result);