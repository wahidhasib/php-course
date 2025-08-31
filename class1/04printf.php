<?php
$fname = "Wahid";
$lname = "Hasib";

printf('His name is %2$s %1$s', $fname, $lname); //change the order
echo "\n";


printf('The Binary value of %1$d is %1$b', 12);
echo "\n";

$n = 45.26488;
printf("%.2f", $n); // return float number only 2 digits
echo "\n";

$m = 123.32656;
$n = 27.1545;

printf("%08.2f \n", $m); //return maximum 8digits with count (.)
printf("%08.2f \n", $n); //return maximum 8digits with count (.)
