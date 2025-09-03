<?php

// todo Write some numbers between 11-20 and insert into an array

$numbers = [];


// ! Option 1

// for ($i = 11; $i <= 20; $i++) {
//     $numbers[] = $i;
// }

for ($i = 12; $i < 21; $i += 2) {
    array_push($numbers, $i);
}

// print_r($numbers);

// ! Option 2

$numbers2 = range(20, 50, 5); //? last argument is used to steping
// print_r($numbers2);

// ! Option 3

// foreach (range(0, 64, 7) as $number) {
//     if ($number > 0) {
//         echo "{$number} \n";
//     }
// }

$n = 7;

for ($i = 1; $i <= 10; $i++) {
    $j = $i * $n;
    echo "{$n} x {$i} = {$j} \n";
}
