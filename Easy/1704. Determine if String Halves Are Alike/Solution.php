<?php

namespace Easy\DetermineIfStringHalvesAreAlike;

class Solution
{
    /**
     * @param string $s
     *
     * @return boolean
     */
    public function halvesAreAlike(string $s): bool
    {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $half = strlen($s) / 2;

        $leftCount = 0;
        $rightCount = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if ($i < $half) {
                $leftCount += in_array($s[$i], $vowels);
            } else {
                $rightCount += in_array($s[$i], $vowels);
            }
        }

        return $leftCount === $rightCount;
    }
}

$string = "book";

$solution = new Solution();
$result = $solution->halvesAreAlike($string);
var_dump($result);