<?php

$string = "Hello World";

// ? In php allows to array treat on string
echo $string[1] . "\n"; //also receive the negetive value


// ? cutting of a string

echo substr($string, 6, 3) . "\n"; // second one is offset that where start from and last one is limit
echo strlen($string) . "\n"; // substr fn return the string's length


// todo string reverse

$strLen = strlen($string) - 1;

for ($i = $strLen; $i >=  0; $i--) {
    echo $string[$i];
}

echo PHP_EOL;

// $reverseStr = strrev(str_replace(' ', '', $string)); //also remove white space and make it reverse
$reverseStr = strrev($string); //also remove white space and make it reverse

$letterCap = ucwords(strtolower($reverseStr));

echo $letterCap;

echo PHP_EOL;


// todo reverse the string by word

$str = "Hello I am Wahid Hasib";

$revArray = array_reverse(explode(' ', $str));

$finalRevStr = implode(" ", $revArray);

echo $finalRevStr;
