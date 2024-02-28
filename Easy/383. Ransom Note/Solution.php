<?php

namespace Easy\RansomNote;

class Solution
{
    /**
     * @param string $ransomNote
     * @param string $magazine
     * @return boolean
     */
    public function canConstruct(string $ransomNote, string $magazine): bool
    {
        $ransomArray = array_count_values(str_split($ransomNote));
        $magazineArray = array_count_values(str_split($magazine));

        foreach ($ransomArray as $key => $count) {
            if ($magazineArray[$key] < $count) {
                return false;
            }
        }

        return true;
    }
}

$solution = new Solution();
$result = $solution->canConstruct('a', 'b');
var_dump($result);