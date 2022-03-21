<?php

/*
var_dump(findIndexOfNearest([], 2)); // null
var_dump(findIndexOfNearest([15, 10, 3, 4], 0)); // 2
*/

function findIndexOfNearest(array $array, int $needleValue) :?int
{

    if(empty($array)) {
        return null;
    }
    $neighborIndex = 0;
    foreach ($array as $key => $value) {
        if(abs($needleValue - $value) < abs($needleValue - $array[$neighborIndex])) {
            $neighborIndex = $key;
        }
    }
    return $neighborIndex;
}