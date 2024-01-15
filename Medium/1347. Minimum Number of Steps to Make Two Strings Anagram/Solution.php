<?php

namespace Easy\MinimumNumberStepsMakeTwoStringsAnagram;

class Solution
{
    /**
     * @param string $s
     * @param string $t
     *
     * @return integer
     */
    public function minSteps(string $s, string $t): int
    {
        $charsOfS = array_count_values(str_split($s));
        $charsOfT = array_count_values(str_split($t));

        $minStep = 0;

        foreach ($charsOfS as $char => $count) {
            if (array_key_exists($char, $charsOfT)) {
                $difference = $count - $charsOfT[$char];
                if ($difference > 0) {
                    $minStep += $difference;
                }
            } else {
                $minStep += $count;
            }
        }

        return $minStep;
    }
}

$s = "gctcxyuluxjuxnsvmomavutrrfb";
$t = "qijrjrhqqjxjtprybrzpyfyqtzf";

$solution = new Solution();
$result = $solution->minSteps($s, $t);
var_dump($result);