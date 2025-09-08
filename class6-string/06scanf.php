<?php
$string = "Wahid Hasib  01865705640";
$parts = sscanf($string, "%s %s %s"); //? split the text with this direction and store then into an array
print_r($parts);


// ? split the text and store them into a variable as a string

sscanf($string, "%s %s %s", $fName, $lName, $mobile);

var_dump($mobile);
