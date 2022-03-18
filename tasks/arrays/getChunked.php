<?php

/*
print_r(getChunked(['a', 'b', 'c', 'd'], 2));
// → [['a', 'b'], ['c', 'd']]

print_r(getChunked(['a', 'b', 'c', 'd'], 3));
// → [['a', 'b', 'c'], ['d']]
*/

function getChunked($array, $maxChunkSize) {
    $resultArray = [];
    $mainIndex = 0;
    $buffer = [];
    for ($i = 0, $j = 0; $i < count($array); ++$i) {
        array_push($buffer, $array[$i]);
        ++$j;
        if ($j === $maxChunkSize || $i + 1 === count($array)) {
            $resultArray[$mainIndex] = $buffer;
            ++$mainIndex;
            $buffer = [];
            $j = 0;
        }
    }
    return $resultArray;
}