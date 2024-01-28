<?php

namespace Easy\ValidAnagram;

class Solution
{
    /**
     * @param string $s
     * @param string $t
     *
     * @return boolean
     */
    public function isAnagram(string $s, string $t): bool
    {
        var_dump(count_chars($s));
        return count_chars($s) == count_chars($t);
    }
}

$s = "anagram";
$t = "nagaram";

$solution = new Solution();
$result = $solution->isAnagram($s, $t);
var_dump($result);