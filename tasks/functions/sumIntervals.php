<?php

/*
print_r(sumIntervals([[5, 5]])); // 0
echo ' ';
print_r(sumIntervals([[-100, 0]])); // 100
echo ' ';
print_r(sumIntervals([
    [1, 2],
    [11, 12]
])); // 2

echo ' ';
print_r(sumIntervals([
    [2, 7],
    [6, 6]
])); // 5
echo ' ';
print_r(sumIntervals([
    [1, 9],
    [7, 12],
    [3, 4]
])); // 11
echo ' ';
print_r(sumIntervals([
    [1, 5],
    [-10, 19],
    [1, 7],
    [16, 100],
    [5, 11]
])); // 110
*/

function sumIntervals(array $array) :int
{
    $resultSumm = 0;
    foreach ($array as $key => &$value) {
        foreach ($array as $comparableKey => $comparableValue) {
            if ($key !== $comparableKey) {
                if ($value[0] > $comparableValue[0] && $value[0] < $comparableValue[1] && $value[1] > $comparableValue[1]) {
                    $value[0] = $comparableValue[1];
                } else if ($value[0] < $comparableValue[0] && $value[1] > $comparableValue[0] && $value[1] < $comparableValue[1]) {
                    $value[1] = $comparableValue[0];
                } else if ($value[0] >= $comparableValue[0] && $value[1] <= $comparableValue[1]) {
                    $value[0] = $value[1];
                    break;
                }
            }
        }
        $resultSumm += $value[1] - $value[0];
    }
    return $resultSumm;
}