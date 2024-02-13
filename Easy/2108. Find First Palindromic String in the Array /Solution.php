<?php

namespace Easy\FindFirstPalindromicStringInArray;

class Solution
{
    /**
     * @param array<string> $words
     * @return string
     */
    public function firstPalindrome(array $words): string
    {
        foreach ($words as $word) {
            if ($word == strrev($word)) {
                return $word;
            }
        }

        return "";
    }
}

$words = ["abc","car","ada","racecar","cool"];

$solution = new Solution();
$result = $solution->firstPalindrome($words);
var_dump($result);