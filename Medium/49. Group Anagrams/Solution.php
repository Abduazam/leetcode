<?php

namespace Medium\GroupAnagrams;

class Solution
{
    /**
     * @param array<string> $strs
     * @return array<array<string>>
     */
    function groupAnagrams(array $strs): array
    {
        $result = [];

        foreach ($strs as $str) {
            $array = str_split($str);

            sort($array);

            $result[implode($array)][] = $str;
        }

        return array_values($result);
    }
}

$strings = ["eat","tea","tan","ate","nat","bat"];

$solution = new Solution();
$result = $solution->groupAnagrams($strings);
var_dump($result);