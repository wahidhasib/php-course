<?php

$students = [
    [
        "name" => "Hasib",
        "class" => 01,
        "roll" => 25,
    ],
    [
        "name" => "Ramim",
        "class" => 01,
        "roll" => 2,
    ],
    [
        "name" => "Sakib",
        "class" => 05,
        "roll" => 25,
    ],
    [
        "name" => "Safiul",
        "class" => 01,
        "roll" => 20,
    ],
];

print_r($students);


$jsonData = json_encode($students);

print_r($jsonData);

$jsonDecode = json_decode($jsonData, true);

/**
 * * json_decode() function convert json data to an array
 * * last parameter is optional. receive only boolean values
 * * by default json_decode convert json data to StrObject
 * * to convert this data as an array pass Boolean value true as a second parameter
 */

print_r($jsonDecode);
