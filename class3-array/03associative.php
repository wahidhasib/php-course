<?php

$array = [
    "name" => "Hasib",
    "age" => 18,
    "city" => "Rajbari"
];

$array2 = array(
    "name" => "Hasib",
    "age" => 18,
    "city" => "Rajbari"
);

$array["village"] = "Dhunchi";

// print_r($array);

// foreach ($array as $key => $value) {
//     echo "{$key} : {$value}" . "\n";
// }

$keys = array_keys($array);
print_r($keys);

for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i]; //? find the currect array key from $keys with the help of $array indexing number
    $value = $array[$key];
    echo "{$key} === {$value} \n";
}
