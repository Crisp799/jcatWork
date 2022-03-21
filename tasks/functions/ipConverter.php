<?php


echo ipToInt('128.32.10.1'); // 2149583361
echo ' ';
echo ipToInt('0.0.0.0'); // 0
echo ' ';
echo ipToInt('255.255.255.255'); // 4294967295
echo ' ';
echo intToIp(2149583361); // '128.32.10.1'
echo ' ';
echo intToIp(0); // '0.0.0.0'
echo ' ';
echo intToIp(4294967295); // '255.255.255.255'

function ipToInt(string $ip) :int
{
    $array = explode(".", $ip);
    return $array[0] * 256 ** 3 + $array[1] * 256 ** 2 + $array[2] * 256 + $array[3];
}

function intToIp(int $ip) :string
{
    $array = [];
    $string = '';
    for($i = 0; $i < 4 ; ++$i) {
        $array[$i] = $ip % 256;
        $ip -= $array[$i];
        $ip /= 256;
    }
    for($i = 3; $i >= 0; --$i) {
        $string .= $array[$i] . '.';
    }
    return substr($string, 0, -1);
}