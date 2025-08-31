<?php

$x = 5;
$y = 5;

function greaterOrSmaller($x, $y)
{
    if ($x > $y) {
        return 1;
    } else if ($x == $y) {
        return 0;
    } else {
        return -1;
    }
}

/* 
* In that case php make this more simple bye space oparator <=>

* explaination: 
==============
* When left is greater than right then they return 1
* When left is less than right then they return -1
* When left is equals to right then they return 0
*/

if (greaterOrSmaller($x, $y) == 1) {
    echo "{$x} is greater than {$y} \n";
} else if (greaterOrSmaller($x, $y) == 0) {
    echo "{$x} is equal to {$y} \n";
} else {
    echo "{$x} is less than {$y} \n";
}

/*
=============================
* Alternative Way
=============================
*/

$result = $x <=> $y;
// ? now $result output between [1, 0, -1]

if ($result == 1) {
    echo "{$x} is greater than {$y} \n";
} else if ($result == 0) {
    echo "{$x} is equals to {$y} \n";
} else {
    echo "{$x} is less than {$y} \n";
}
