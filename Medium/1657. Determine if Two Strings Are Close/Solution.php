<?php

namespace Medium\DetermineTwoStringAreClose;

class Solution
{
    /**
     * @param string $word1
     * @param string $word2
     *
     * @return boolean
     */
    public function closeStrings(string $word1, string $word2): bool
    {
        if (strlen($word1) != strlen($word2)) {
            return false;
        }

        $charsOfWord1 = array_count_values(str_split($word1));
        $charsOfWord2 = array_count_values(str_split($word2));

        if (count($charsOfWord1) != count($charsOfWord2)) {
            return false;
        }

        foreach ($charsOfWord2 as $char => $count) {
            if (!array_key_exists($char, $charsOfWord1)) {
                return false;
            }

            if ($count != $charsOfWord1[$char]) {
                if (!in_array($count, $charsOfWord1)) {
                    return false;
                }

                $swappingKey = array_search($count, $charsOfWord1);

                $charsOfWord1[$swappingKey] = $charsOfWord1[$char];
            }

            unset($charsOfWord1[$char]);
        }

        return true;
    }
}

$word1 = "kmihff";
$word2 = "kffmmi";

$solution = new Solution();
$result = $solution->closeStrings($word1, $word2);
var_dump($result);