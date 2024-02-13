<?php

namespace Easy\FirstUniqueCharacterInString;

class Solution
{
    /**
     * @param string $s
     *
     * @return integer
     */
    public function firstUniqChar(string $s): int
    {
        $chars = str_split($s);

        $countChars = array_count_values($chars);

        $key = array_search(1, $countChars);

        if ($key === false) {
            return -1;
        } else {
            return array_search($key, $chars);
        }
    }
}

$string = "loveleetcode";

$solution = new Solution();
$result = $solution->firstUniqChar($string);
var_dump($result);