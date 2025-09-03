<?php

$fruitsArray = ["fruit1" => "apple", "fruit2" => "banana", "fruit3" => "Orange", "fruit4" => "guava"];


//! This is accually bad practise
// function searchTerm($query)
// {
//     global $fruitsArray;
//     if (in_array($query, $fruitsArray)) {
//         echo "{$query} Founded in the Array";
//     } else {
//         echo "{$query} isn't Found in the Array";
//     }
// }

// searchTerm("banana");


function searchTerm($term, $array)
{
    if (in_array($term, $array, true)) { //? receive last parameter as strict to check it with data types
        echo ucwords($term) . " is founded. \n";
    } else {
        echo ucwords($term) . " isn't found. \n";
    }
}

searchTerm("banana", $fruitsArray);

// print_r($fruitsArray);
