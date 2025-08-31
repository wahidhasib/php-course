<?php

$name = "Hasib";

function gretting()
{
    global $age; // ? Now I will be also able to access this variable outside the function.
    $age = 18;
    global $name; // ? use global scoping to access the variable which is outside the function.
    echo "$name \n";
}

gretting();

echo $age . "\n";

/*
===============================
* Static variable
===============================
* static varibale store their old values before the function will run again
*/

function increment()
{
    static $count;
    $count = $count ?? 0;
    $count++;
    echo $count;
    echo PHP_EOL;
}

/*
* When first time run this function then $counter initial value is 0
* Then increment 1 to the $counter value and print it
* The same way when execute this function again, in that time $counter's initial value is 1
*/

increment();
increment();
increment();
increment();
increment();
increment();
