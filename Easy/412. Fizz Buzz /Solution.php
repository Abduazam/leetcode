<?php

namespace Easy\FizzBuzz;

class Solution
{
    /**
     * @param integer $n
     * @return array<string>
     */
    public function fizzBuzz(int $n): array
    {
        $output = [];

        for ($i = 1; $i <= $n; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                $output[] = "FizzBuzz";
            } else if ($i % 5 == 0) {
                $output[] = "Buzz";
            } else if ($i % 3 == 0) {
                $output[] = "Fizz";
            } else {
                $output[] = "{$i}";
            }
        }

        return $output;
    }
}

$solution = new Solution();
$result = $solution->fizzBuzz(5);
var_dump($result);