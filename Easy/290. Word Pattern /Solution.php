<?php

namespace Easy\WordPattern;

class Solution
{
    /**
     * @param string $pattern
     * @param string $s
     *
     * @return boolean
     */
    public function wordPattern(string $pattern, string $s): bool
    {
        $words = explode(" ", $s);

        if (count($words) != strlen($pattern)) {
            return false;
        }

        $output = [];

        for ($i = 0; $i < strlen($pattern); $i++) {
            if (! array_key_exists($pattern[$i], $output)) {
                if (in_array($words[$i], $output)) {
                    return false;
                }

                $output[$pattern[$i]] = $words[$i];
            } else {
                if ($output[$pattern[$i]] !== $words[$i]) {
                    return false;
                }
            }
        }

        var_dump($output);

        return true;
    }
}

$pattern = "abba";
$string = "dog dog dog dog";

$solution = new Solution();
$result = $solution->wordPattern($pattern, $string);
var_dump($result);