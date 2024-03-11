<?php

namespace Medium\CustomSortString;

class Solution
{
    /**
     * @param string $order
     * @param string $s
     * @return string
     */
    function customSortString(string $order, string $s): string
    {
        $orderHash = str_split($order);
        $sHash = count_chars($s, 1);

        $output = '';
        foreach ($orderHash as $char) {
            $char = ord($char);
            if (isset($sHash[$char])) {
                $output .= str_repeat(chr($char), $sHash[$char]);
                unset($sHash[$char]);
            }
        }

        foreach ($sHash as $char => $count) {
            $output .= str_repeat(chr($char), $count);
        }

        return $output;
    }
}

$order = 'hucw';
$s = "utzoampdgkalexslxoqfkdjoczajxtuhqyxvlfatmptqdsochtdzgypsfkgqwbgqbcamdqnqztaqhqanirikahtmalzqjjxtqfnh";

$solution = new Solution();
$result = $solution->customSortString($order, $s);
var_dump($result);