<?php

/*
$money1 = ['eur 10', 'usd 1', 'usd 10', 'rub 50', 'usd 5'];
var_dump(getTotalAmount($money1, 'usd')); // 16

$money2 = ['eur 10', 'usd 1', 'eur 5', 'rub 100', 'eur 20', 'eur 100', 'rub 200'];
var_dump(getTotalAmount($money2, 'eur')); // 135

$money3 = ['eur 10', 'rub 50', 'eur 5', 'rub 10', 'rub 10', 'eur 100', 'rub 200'];
var_dump(getTotalAmount($money3, 'rub')); // 270
*/

function getTotalAmount(array $array, string $cashName) :int
{
    $resultSumm = 0;
    foreach ($array as $bill) {
        if (strpos($bill,$cashName) !== false) {
            $resultSumm += substr($bill, 4);
        }
    }
    return $resultSumm;
}
