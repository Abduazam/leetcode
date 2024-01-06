<?php

namespace Easy\FindTheIndexOfTheFirstOccurrenceInAString;

class Solution
{
    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return integer
     */
    public function strStr(string $haystack, string $needle): int
    {
        $data = str_split($haystack);

        $length = strlen($needle);

        for ($i = 0; $i < count($data); $i++) {
            $word = implode('', array_slice($data, $i, $length));

            if ($needle === $word) {
                return $i;
            }
        }

        return -1;
    }
}

$haystack = "leetcode";
$needle = "leeto";

$solution = new Solution();
$result = $solution->strStr($haystack, $needle);
var_dump($result);