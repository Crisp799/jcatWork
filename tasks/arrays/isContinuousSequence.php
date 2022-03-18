<?php

/*
var_dump(isContinuousSequence([10, 11, 12, 13]));     // true
var_dump(isContinuousSequence([10, 11, 12, 14, 15])); // false
var_dump(isContinuousSequence([1, 2, 2, 3]));         // false
var_dump(isContinuousSequence([]));                   // false
*/

function isContinuousSequence($array) {
    if (empty($array)) {
        return false;
    }
    $i = $array[0];
    foreach ($array as $number) {
        if ($number !== $i) {
            return false;
        }
        ++$i;
    }
    return true;
}
