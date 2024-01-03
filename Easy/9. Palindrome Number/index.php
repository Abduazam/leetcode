<?php

class Solution {

    function isPalindrome($x): bool
    {
        $array = str_split($x);

        $left = 0;
        $right = count($array) - 1;

        while ($left < $right) {
            if ($array[$left] != $array[$right]) {
                return false;
            }

            $left++;
            $right--;
        }

        return true;
    }
}

$num = 121;

$solution = new Solution();
$result = $solution->isPalindrome($num);
var_dump($result);