<?php

$numbers = [25, 10, 60, 4, 10, 8, 40, 36, 21, 45, 56];

// $random = random_int(0, count($numbers) - 1);
$random = mt_rand(0, count($numbers) - 1);

// echo $random;

// if ($random % 2 == 0) {
//     echo "Head \n";
// } else {
//     echo "Tail \n";
// }

// printf("Random key is %d and Random Number is %d", $random, $numbers[$random]);

shuffle($numbers);
print_r($numbers); //? value will be shuffled with keys

/**
 * * Array_shuffling works with only index array
 * * when it complete thei oparation they will automatically reset their index numbers
 * * For this solution we need to use array_rand() function
 * * array_rand() select random number from array keys
 */


$student = [
    "name" => "Hasib",
    "age" => 24,
    "class" => "XI",
    "city" => "Rajbari",
];

$key = array_rand($student);

printf("Random key is %s and value is %s", ucwords($key), $student[$key]);
