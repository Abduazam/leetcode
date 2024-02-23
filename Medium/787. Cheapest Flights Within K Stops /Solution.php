<?php

namespace Medium\CheapestFlightsWithinKStops;

class Solution
{
    /**
     * @param integer $n
     * @param array<array<integer>> $flights
     * @param integer $src
     * @param integer $dst
     * @param integer $k
     * @return integer
     */
    public function findCheapestPrice(int $n, array $flights, int $src, int $dst, int $k): int
    {
        $output = array_fill(0, $n, PHP_INT_MAX);
        $output[$src] = 0;

        for ($i = 0; $i <= $k; $i++) {
            $temp = $output;

            foreach ($flights as list($start, $end, $price)) {
                if ($output[$start] != PHP_INT_MAX) {
                    $temp[$end] = min($temp[$end], $output[$start] + $price);
                }
            }

            $output = $temp;
        }

        return $output[$dst] == PHP_INT_MAX ? -1 : $output[$dst];
    }
}

$n = 5;
$flights = [
    [1,2,10],[2,0,7],[1,3,8],
    [4,0,10],[3,4,2],[4,2,10],
    [0,3,3],[3,1,6],[2,4,5]
];
$src = 0;
$dst = 4;
$k = 1;

$solution = new Solution();
$result = $solution->findCheapestPrice($n, $flights, $src, $dst, $k);
var_dump($result);