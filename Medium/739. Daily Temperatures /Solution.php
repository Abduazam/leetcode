<?php

namespace Medium\DailyTemperatures;

class Solution
{
    /**
     * @param array<integer> $temperatures
     * @return array<integer>
     */
    public function dailyTemperatures(array $temperatures): array
    {
        $result = [];

        for ($i = 0; $i < count($temperatures); $i++) {
            $dayIndex = 0;

            for ($j = $i + 1; $j < count($temperatures); $j++) {
                if ($temperatures[$i] < $temperatures[$j]) {
                    $dayIndex = $j;
                    break;
                }
            }

            $diff = $dayIndex != 0 ? $dayIndex - $i : $dayIndex;
            $result[] = $diff;
        }

        return $result;
    }
}

$temperatures = [73,74,75,71,69,72,76,73];

$solution = new Solution();
$result = $solution->dailyTemperatures($temperatures);
var_dump($result);