<?php
//? we are use function because reuse the code and encapsulation that means hide the code from anyone if we want
/*
 * Summary of isEven
 * @param mixed $n
 * @return bool
 */
function isEven($n) //parameter
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

/*
======================
* Factorial
======================
*/

function factorial(int $n): int
{
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result *= $i;
    }
    return $result;
}

/*
* Steps:

* Start: $result = 1

* $i = 5 → $result = 1 * 5 = 5

* $i = 4 → $result = 5 * 4 = 20

* $i = 3 → $result = 20 * 3 = 60

* $i = 2 → $result = 60 * 2 = 120

? End loop.

? Return 120.

todo So, factorial(5) = 120 ✅ 
*/

/*
======================
* Default value set
======================
*/

function printInfo($name = "User", $age = 15)
{
    if ($age >= 18) {
        echo "{$name} is {$age} year's old and he is Adult \n";
    } else {
        echo "{$name} is {$age} year's old and he is Teenager \n";
    }
}
