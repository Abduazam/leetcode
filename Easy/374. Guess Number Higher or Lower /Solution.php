<?php

namespace Easy\GuessNumberHigherOrLower;

class GuessGame
{
    protected int $number = 6;

    public function guess(int $num): int
    {
        if ($num < $this->number) {
            return 1;
        } else if ($num > $this->number) {
            return -1;
        } else {
            return 0;
        }
    }
}

class Solution extends GuessGame
{
    /**
     * @param  integer $n
     * @return integer
     */
    public function guessNumber(int $n): int
    {
        $low = 0;
        $high = $n;

        while ($low <= $high) {
            $guess = intval(($low + $high) / 2);

            $result = $this->guess($guess);

            if ($result == 0) {
                return $guess;
            }

            if ($result > 0) {
                $low = $guess + 1;
            } else {
                $high = $guess - 1;
            }
        }

        return $low;
    }
}

$solution = new Solution();
$result = $solution->guessNumber(10);
var_dump($result);