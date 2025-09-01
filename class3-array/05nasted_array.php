<?php

$colors = [
    "red" => [
        "red-300",
        "red-400",
        "red-500",
    ],
    "green" => [
        "green-300",
        "green-400",
        "green-500",
    ],
    "blue" => [
        "blue-300",
        "blue-400",
        "blue-500",
    ],
];


// array_push($colors["blue"], ["pink-300", "pink-400"]); //? push function works with only existing keys

$colors["pink"] = [
    "pink-300",
    "pink-400",
    "pink-500",
];

// ? this method also working with new or existing array keys

print_r($colors);
echo PHP_EOL;


echo $colors['green'][0];
