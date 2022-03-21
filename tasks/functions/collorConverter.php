<?php

/*
print_r(hexToRgb('#24ab00')); // ['r' => 36, 'g' => 171, 'b' => 0]);
print_r(rgbToHex(36, 171, 0)); // '#24ab00'
*/

function hexToRgb(string $hex) :array
{
    $hex = substr($hex ,1);
    $resultArray = [
        ['r' => hexdec(substr($hex,0, 2))],
        ['g' => hexdec(substr($hex,2, 2))],
        ['b' => hexdec(substr($hex,4, 2))],
    ];
    return $resultArray;
}

function rgbToHex(...$rgb) :string {
    $string = '#';
    foreach ($rgb as $value) {
        $string .= str_pad(dechex($value),2,"0", STR_PAD_LEFT);

    }
    return $string;
}