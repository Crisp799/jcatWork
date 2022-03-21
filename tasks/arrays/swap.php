<?php

/*
$names = ['john', 'smith', 'karl'];

$result = swap($names, 1);
print_r($result); // => ['karl', 'smith', 'john']

$result = swap($names, 2);
print_r($result); // => ['john', 'smith', 'karl']

$result = swap($names, 0);
print_r($result); // => ['john', 'smith', 'karl']
*/

function swap(array $array, int $index) :array
{
    if ($index <= 0 || $index >= count($array) - 1) {
        return $array;
    }
    $buffer = $array[$index - 1];
    $array[$index - 1] = $array[$index + 1];
    $array[$index + 1] = $buffer;
    return $array;
}
