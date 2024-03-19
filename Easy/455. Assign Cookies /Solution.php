<?php

namespace Easy\AssignCookies;

class Solution
{
    /**
     * @param  array<integer> $g
     * @param  array<integer> $s
     *
     * @return integer
     */
    public function findContentChildren(array $g, array $s): int
    {
        sort($g);
        sort($s);

        $gi = 0;
        $si = 0;
        $count = 0;

        while ($gi < count($g) && $si < count($s)) {
            if ($s[$si] >= $g[$gi]) {
                $count++;
                $gi++;
            }

            $si++;
        }

        return $count;
    }
}

$g = [1,2,3];
$s = [1,1];

$solution = new Solution();
$result = $solution->findContentChildren($g, $s);
var_dump($result);