<?php

namespace Easy\FindTownJudge;

class Solution
{
    /**
     * @param integer $n
     * @param array<array<integer>> $trust
     *
     * @return integer
     */
    public function findJudge(int $n, array $trust): int
    {
        $output = array_fill(1, $n, 0);

        foreach ($trust as $value) {
            $output[$value[0]] -= 1;
            $output[$value[1]] += 1;
        }

        $search = array_search($n - 1, $output);

        return $search !== false ? $search : -1;
    }
}

$solution = new Solution();
$result = $solution->findJudge(3, [[1,3],[2,3]]);
var_dump($result);