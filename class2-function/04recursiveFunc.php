<?php
/*
===============================
* Recursive function (Recursion)
===============================
*/

function printNumber($counter, $end, $steping = 1)
{
    if ($counter > $end) {
        return;
    }

    //! Obviously set this condition to avoid infinite looping system

    echo $counter . "\n";
    $counter += $steping;
    printNumber($counter, $end, $steping);
}

printNumber(1, 25, 2);
