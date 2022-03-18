<?php

/*
print_r(bubbleSort([])); // []
print_r(bubbleSort([3, 10, 4, 3])); // [3, 3, 4, 10]
*/

function bubbleSort($array) {
    if (empty($array)) {
        return $array;
    }
    $arrayLength = count($array);
    for ($i = 0; $i < $arrayLength; ++$i) {
        for ($j = $arrayLength -1; $j > $i; --$j) {
            if ($array[$j - 1] > $array[$j]) {
                $buffer = $array[$j - 1];
                $array[$j - 1] = $array [$j];
                $array[$j] = $buffer;
            }
        }
    }
    return $array;
}