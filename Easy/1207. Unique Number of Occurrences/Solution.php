<?php

namespace Easy\UniqueNumberOfOccurrences;

class Solution
{
    /**
     * @param array<integer> $arr
     *
     * @return boolean
     */
    function uniqueOccurrences(array $arr): bool
    {
        $numbers = array_count_values($arr);

        $uniqueNumbers = array_unique($numbers);

        return count($numbers) === count($uniqueNumbers);
    }
}

$numbers = [1,2,2,1,1,3];

$solution = new Solution();
$result = $solution->uniqueOccurrences($numbers);
var_dump($result);