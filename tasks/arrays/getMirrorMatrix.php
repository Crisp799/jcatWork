<?php

/*
print_r(getMirrorMatrix([
    [11, 12, 13, 14],
    [21, 22, 23, 24],
    [31, 32, 33, 34],
    [41, 42, 43, 44],
]));
*/

function getMirrorMatrix($array) {
    $length = count($array);
    for ($i = 0 ; $i < $length; ++$i) {
        for ($j = 0; $j < (int)$length/2; ++$j) {
            $array[$i][$length-$j - 1] = $array[$i][$j];
        }
    }
    return $array;
}
