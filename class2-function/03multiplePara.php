<?php

/*
======================================
* Unlimited parameter receive function
======================================
*/

function sum(int ...$numbers)
{
    $result = 0;

    foreach ($numbers as $number) {
        $result += $number;
    }

    return $result;
}

echo "the output is " . sum(25, 10, 3) . "\n";
