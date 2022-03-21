<?php

/*
print_r(getSameParity([])); // []
print_r(getSameParity([-1, 0, 1, -3, 10, -2])); // [-1, 1, -3]
*/

function getSameParity(array $array) :array
{
    $resultArray = [];
    foreach ($array as $value) {
        if (abs($value) % 2 === abs($array[0]) % 2) {
            array_push($resultArray, $value);
        }
    }
    return $resultArray;
}