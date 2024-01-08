<?php

namespace Easy\LengthOfLastWord;

class Solution
{
    /**
     * @param string $s
     *
     * @return integer
     */
    public function lengthOfLastWord(string $s): int
    {
        $s = trim($s);

        $data = explode(" ", $s);

        return strlen(end($data));
    }
}

$string = "luffy is still joyboy";

$solution = new Solution();
$result = $solution->lengthOfLastWord($string);
var_dump($result);