<?php

/*
$names = ['john', 'smith', 'karl'];

$newNames = addPrefix($names, 'Mr');
print_r($newNames);
// => ['Mr john', 'Mr smith', 'Mr karl'];
*/

function addPrefix(array $array, string $prefix) :array
{
    foreach ($array as &$word) {
        $word = $prefix . ' ' . $word;
    }
    return $array;
}