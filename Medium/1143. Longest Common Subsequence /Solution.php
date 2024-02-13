<?php

namespace Medium\LongestCommonSubsequence;

class Solution
{
    /**
     * @param string $text1
     * @param string $text2
     *
     * @return integer
     */
    public function longestCommonSubsequence(string $text1, string $text2): int
    {
        $t1 = str_split($text1);
        $t2 = str_split($text2);

        $result = [];

        for ($i = 0; $i < count($t2); $i++) {
            if (in_array($t2[$i], $t1)) {
                
            }
        }

        var_dump(array_keys($result));

        return 0;
    }
}

$text1 = "ubmrapg";
$text2 = "ezupkr";

$solution = new Solution();
$result = $solution->longestCommonSubsequence($text1, $text2);
var_dump($result);