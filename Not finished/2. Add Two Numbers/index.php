<?php

class Solution {

    function addTwoNumbers($l1, $l2): array
    {
        $mergedL1 = intval(strrev(implode('', $l1)));
        $mergedL2 = intval(strrev(implode('', $l2)));

        $sum = strrev($mergedL1 + $mergedL2);

        return str_split($sum);
    }
}

$list1 = [2,4,3];
$list2 = [5,6,4];

$solution = new Solution();
$result = $solution->addTwoNumbers($list1, $list2);
var_dump($result);