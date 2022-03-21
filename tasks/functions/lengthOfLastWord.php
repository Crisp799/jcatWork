<?php

/*
echo lengthOfLastWord(''); // 0

echo lengthOfLastWord('man in BlacK'); // 5

echo lengthOfLastWord('hello, world!  '); // 6
*/

function lengthOfLastWord(string $string) :int
{
    $wordsArray = explode(' ', trim($string));
    return strlen(end($wordsArray));
}