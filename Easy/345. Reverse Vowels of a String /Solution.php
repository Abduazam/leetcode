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
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'U', 'O'];
        $left = 0;
        $right = strlen($s) - 1;

        while ($left < $right) {
            while (! in_array($s[$left], $vowels) && $left < $right) {
                $left++;
            }

            while (! in_array($s[$right], $vowels) && $left < $right) {
                $right--;
            }

            $temp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $temp;

            $left++;
            $right--;
        }

        return $s;
    }
}

$solution = new Solution();
$result = $solution->reverseVowels("hello");
var_dump($result);