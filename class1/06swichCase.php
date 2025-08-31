<?php

$number = 12;
$r = $number % 2;

switch ($r) {
    case 0:
        echo "{$number} is an Even Number \n";
        break;
    default:
        echo "{$number} is an Odd Number \n";
}

/* 
=====================================
* Switch case with multiple condition
=====================================
*/

$color = "red";

switch ($color) {
    //? we can use this syntax when we have a single condition for multiple values
    case "red":
    case "blue":
        echo ucwords($color) . " is my favourite color \n";
        break;
    case "green":
        echo ucwords($color) . " is our Nation flag's color \n";
        break;
    case "yellow":
        echo ucwords($color) . " is also my favourite color \n";
        break;
    default:
        echo ucwords($color . "hi") . " isn't my favourite color \n";
}

/* 
? ucwords($color) convert the string's first letter to uppercase
*/


/* 
=====================================
* Nasted Switch case
=====================================
*/

// todo make a switch case to cheak it is even or odd number and also is it negetive or positive value

$num = 0;
$m = $num % 2;

switch ($m) {
    case 0:
        switch (true) {
            case $num >= 0:
                echo "{$num} is a positive Even Number \n";
                break;
            default:
                echo "{$num} is a negetive Even Number \n";
        }
        break;
    default:
        switch (true) {
            case $num > 0:
                echo "{$num} is a possitive Odd Number \n";
                break;
            default:
                echo "{$num} is a negetive Odd Number \n";
        }
}

/* 
=============================================================
* Same task but another and simple way for better readability
=============================================================
*/

switch (true) {
    case 0 == $m && $num >= 0:
        echo "{$num} is a positive Even Number \n";
        break;
    case 0 == $m && $num < 0:
        echo "{$num} is a negetive Even Number \n";
        break;
    case 1 == $m && $num >= 0:
        echo "{$num} is a positive Odd Number \n";
        break;
    default:
        echo "{$num} is a negetive Odd Number \n";
}


/* 
=============================================================
* Evaluated string into switch case
=============================================================
*/

$string = "8balls";

switch ($string) {
    case "8":
        echo "string 8 \n";
        break;
    case 8:
        echo "8 \n";
        break;
    case "8balls":
        echo "Eight balls \n";
        break;
}

// !NB: in php 7 the output is 8 and in php 8 output is Eight Balls
