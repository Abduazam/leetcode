<?php

namespace Medium\SortCharactersByFrequency;

class Solution
{
    /**
     * @param string $s
     *
     * @return string
     */
    public function frequencySort(string $s): string
    {
        $chars = count_chars($s, 1);
        arsort($chars);

        $output = '';

        foreach ($chars as $key => $value) {
            $output .= str_repeat(chr($key), $value);
        }

        return $output;
    }
}

$string = "Aabb";

$solution = new Solution();
$result = $solution->frequencySort($string);
var_dump($result);