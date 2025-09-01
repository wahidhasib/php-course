<?php

$string = "hasib, rakib,sakib, naim-rahim";

$strToArray = explode(", ", $string); //? explode function break or divide the array
// ? ", " this is called delimeter

$pregSplit = preg_split("/(, |,|-)/", $string); //? use preg_split for pass multiple delimeter
/**
 * * When we want to set multiple delimeter we need to use preg_split() regular function 
 */

print_r($pregSplit);
echo PHP_EOL;


$students = ['rakib', 'shofik', 'sabbir', 'anupom', 26];

$arrayToStr = join(", ", $students); //? join method join the array element as a string
print_r($arrayToStr);
echo PHP_EOL;
