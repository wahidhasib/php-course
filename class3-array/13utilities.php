<?php

$numbers = [25, 34, 43, 67, 99, 44, 23];


/**
 * * array_walk() is a built-in PHP function that applies a user-defined function to every element of an array.
 */

// function square($number)
// {
//     printf("Squre of %d is %d \n", $number, $number * $number * $number);
// }

// array_walk($numbers, 'square');

// $students = ["hasib", "rakib", "robiul"];

// function greet($name, $key, $title)
// {
//     printf("Hello, $title %s \n", $name);
// }

// array_walk($students, "greet", "MR.");


/**
 * * array_map() applies a callback function to each element of an array and returns a new array with the results.
 */

function cube($n)
{
    return $n * $n * $n;
}

$newArray = array_map("cube", $numbers);
print_r($newArray);


/**
 * * array_filter() check a function's condition true or false. if furnciton return true or condition passed successfully they return this value
 */

function isEven($n)
{
    return $n % 2 == 0;
}

$evenNumbers = array_filter($numbers, "isEven");
print_r($evenNumbers);
