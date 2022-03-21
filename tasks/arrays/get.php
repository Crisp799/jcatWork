<?php

/*
$cities = ['moscow', 'london', 'berlin', 'porto', null];


var_dump(get($cities, 1)); // london
var_dump(get($cities, 10, 'paris')); // paris
var_dump(get($cities, 4)); // null
var_dump(get($cities, 4, 'default'));// null
*/

function get(array $array,int $index,?string $defaultValue = null) :?string
{
    return count($array) <= $index ? $defaultValue : $array[$index];
}