<?php

namespace Easy\NumberOfSegmentsInString;

class Solution
{
    /**
     * @param string $s
     * @return integer
     */
    public function countSegments(string $s): int
    {
        $s = array_count_values(explode(' ', $s));

        $count = 0;
        foreach ($s as $key => $segment) {
            if ($key != "") {
                $count += $segment;
            }
        }

        return $count;
    }
}

$solution = new Solution();
$result = $solution->countSegments("The one-hour drama series Westworld is a dark odyssey about the dawn of artificial consciousness and the evolution of sin. Set at the intersection of the near future and the reimagined past, it explores a world in which every human appetite, no matter how noble or depraved, can be indulged.");
var_dump($result);