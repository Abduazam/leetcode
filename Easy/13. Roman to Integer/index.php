<?php

class Solution {

    public function romanToInt($s)
    {
        $total = 0;
        $prev = 0;

        for ($i = strlen($s) - 1; $i >= 0; $i--) {
            $value = $this->getRomanAsInt($s[$i]);

            if ($value < $prev) {
                $total -= $value;
            } else {
                $total += $value;
            }

            $prev = $value;
        }

        return $total;
    }

    private function getRomanAsInt($value) {
        return match ($value) {
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
            default => 0
        };
    }
}

$solution = new Solution();
$result = $solution->romanToInt("MCMXCIV");
var_dump($result);