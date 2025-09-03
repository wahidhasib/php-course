<?php

$numbers = [25, 34, 43, 67, 99, 44, 23];
$numbers2 = [1, 2, 3, 4, 5, 6, 23, 32, 48, 25];

$fruits = [
    "a" => "apple",
    "b" => "banana",
    "g" => "guava",
    "p" => "pine-apple",
    "m" => "mango2",
    "ll" => "lemon"
];

$fruits2 = [
    "j" => "jack-fruit",
    "m" => "mango",
    "l" => "lemon",
];


// ? Common Item
// $common = array_intersect($numbers, $numbers2);

// $common = array_intersect($fruits, $fruits2); //? check the common by their value only

// $common = array_intersect_assoc($fruits, $fruits2); //? check the common by their key and value both
// print_r($common);


/**
 * ====================
 * * Array Difference
 * ====================
 */

$diff = array_diff_assoc($numbers, $numbers2);
print_r($diff);
