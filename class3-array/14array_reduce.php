<?php

$numbers = [1, 2, 3, 5, 9, 8];


function fibonacci($oldValue, $newValue)
{
    return $oldValue + $newValue;
}

/**
 * * array_reduce() is a PHP function that applies a callback function iteratively to the elements of an array, reducing the array to a single accumulated value.
 * * inital value is optional, But if we set it they automatically detect the initial value or where count start from
 * * for example if don't set initial value output = 11 and when we set the initial value 5 then output = 16
 */

$sum = array_reduce($numbers, "fibonacci", 5);
// echo $sum . "\n";

function sumOfEven($oldValue, $newValue)
{
    if ($newValue % 2 == 0) {
        return $oldValue + $newValue;
        // ? that means if new value is even number the sum oldValue + New Value
    }

    return $oldValue;
    // ? if new value isn't even number then we pass it and return our old value which is automatically set after our last oparation
}

$evenNumbers = array_reduce($numbers, "sumOfEven");
echo $evenNumbers;
