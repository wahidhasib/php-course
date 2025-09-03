<?php

// $student = ["fName" => "Wahid", "lName" => "Hasib", "age" => 18]; //? it will not work with assosiative array
$student = ["Wahid", "Hasib", 18]; // ? ✅

/**
 * * list() is a PHP language construct that allows you to assign multiple variables at once from an array.
 * * It works only with numerically indexed arrays (not associative arrays).
 */

list($fName, $lName, $age) = $student;

echo $fName;
