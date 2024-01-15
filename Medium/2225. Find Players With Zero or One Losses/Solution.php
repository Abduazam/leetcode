<?php

namespace Medium\FindPlayersWithZeroOrOneLosses;

class Solution
{
    /**
     * @param array<array<integer>> $matches
     *
     * @return array<array<integer>>
     */
    public function findWinners(array $matches): array
    {
        $players = [];

        foreach ($matches as $match) {
            if (!array_key_exists($match[0], $players)) {
                $players[$match[0]] = 0;
            }

            if (array_key_exists($match[1], $players)) {
                $players[$match[1]] += 1;
            } else {
                $players[$match[1]] = 1;
            }
        }

        $zeroLoses = array_filter($players, function ($point) {
            return $point < 1;
        });
        ksort($zeroLoses);

        $oneLoses = array_filter($players, function ($point) {
            return $point == 1;
        });
        ksort($oneLoses);

        return [array_keys($zeroLoses), array_keys($oneLoses)];
    }
}

$matches = [[1,3],[2,3],[3,6],[5,6],[5,7],[4,5],[4,8],[4,9],[10,4],[10,9]];

$solution = new Solution();
$result = $solution->findWinners($matches);
var_dump($result);