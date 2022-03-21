<?php

/*
print_r(getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30])); // [10, 24]

print_r(getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4])); // []

print_r(getIntersectionOfSortedArray([], [2])); // []
*/

function getIntersectionOfSortedArray(array $firstArray, array $secondArray) :array
{
    $resultArray =[];
    for ($i = 0, $j = 0; $i < count($firstArray) && $j < count($secondArray); ) {
        if ($firstArray[$i] === $secondArray[$j]) {
            array_push($resultArray, $firstArray[$i]);
            ++$i;
            ++$j;
        } else {
            $firstArray[$i] > $secondArray[$j] ? ++$j : ++$i;
        }
    }
    return $resultArray;
}