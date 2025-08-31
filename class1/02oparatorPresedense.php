<?php
/*
*Arithmetic oparator = +,-, *, /
*/

$num = 5;
$num2 = 3;

// $num = $num + 5;
$num += 5; //shortcut
echo $num . "\n"; //result 10

$num += 3;
echo $num . "\n"; //result 13

// $sum = $num + $num2;

// echo $sum;
// printf("Multipication is %s", $num * $num2);

// $res = $num % $num2;
// echo $res . "\n"; //returns modulas

/*
====================
*Oparator Presidense
====================
$number = (13-5) * 2;
? result ======> 16
*Oparator presidense are always maintain BODMAS rules
todo that means Brackets Or Divition Multipication Addition Subtraction
*/

$a = $b = 2; // declear multiple value in a single line

// echo $a . "\n" . $b;

$n = 7;
$m = $n++;

echo $n . "\n" . $m;
/*
* $m = $n++;
==> $m = $n;
==> $n = $n+1;

*$m = ++$n;
==> $n = $n +1;
==> $m = $n;
*/
