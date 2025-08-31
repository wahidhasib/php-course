<?php
require_once('funciton.php');

$num = 25;

if (isEven($num)) { //argument
    echo "{$num} is an Even Number \n";
} else {
    echo "{$num} is an Odd Number \n";
}


$x = 5;

echo "Factorial of {$x} is " . factorial($x) . "\n";

/*
================================================
* Accessing printInfo function from function.php
================================================
*/
