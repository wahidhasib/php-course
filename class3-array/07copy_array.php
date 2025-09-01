<?php

$person = array("fname" => "Hello", "lname" => "world");

// print_r($person);
// echo PHP_EOL;

// ? Copy by value (deep copy)
$newPerson = $person;
$newPerson["lname"] = "Earth";

// print_r($newPerson);
// echo PHP_EOL;


// ? Copy by reference (shallow copy)
$newPerson = &$person;
$newPerson["lname"] = "Nepchun";

// print_r($person);
// echo PHP_EOL;

/**
 * * New variable use old variable $person as a reference from ram
 */

function printData(&$person)
// ? if I make shallow copy automatically change his value
{
    $person["fname"] .= " changed";
    print_r($person);
}

printData($person); //full array
echo PHP_EOL;

print_r($person);
echo PHP_EOL;
