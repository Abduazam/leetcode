<?php

namespace Medium\BagOfTokens;

class Solution
{
    /**
     * @param array<integer> $tokens
     * @param integer $power
     * @return integer
     */
    public function bagOfTokensScore(array $tokens, int $power): int
    {
        $result = $score = 0;
        sort($tokens);

        $left = 0;
        $right = count($tokens) - 1;

        while ($left <= $right) {
            if ($power >= $tokens[$left]) {
                $power -= $tokens[$left];
                $score++;
                $left++;
                $result = max($result, $score);
            } else if ($score > 0) {
                $power += $tokens[$right];
                $score--;
                $right--;
            } else {
                break;
            }
        }

        return $result;
    }
}

$tokens = [100];
$power = 50;

$solution = new Solution();
$result = $solution->bagOfTokensScore($tokens, $power);
var_dump($result);