<?php
$n = 13;

if ($n % 2 == 0) {
    echo "$n is an even number \n";
} else {
    echo "$n is an odd number \n";
}

/* 
===================================
* Alternate Way (wordpress also use this syntax)
===================================
*/

if ($n % 2 == 0) :
    echo "This is an Even num";
    echo PHP_EOL;
    echo "This is the alternative way of if else";
    echo PHP_EOL;
else:
    echo "This is an Odd num";
    echo PHP_EOL;
    echo "This is the alternative way of if else";
    echo PHP_EOL;
endif;

/*
* || means or oparator
* && means and oparator
*/

$food = "apple";

if ("salmon" == $food || "tuna" == $food) {
    echo "{$food} has vitamin D \n";
} else if ("apple" == $food || "banana" == $food) {
    echo "{$food} has vitamin C \n";
} else {
    echo "We don't know {$food} which vitamin they contains \n";
}

// ! Obviously it is case sensetive when it check the condition


/* 
===================================
* Find the leap year (mini project)
===================================
*/

$year = 2020;

if ($year % 4 == 0 && $year >= 2000) {
    echo "{$year} is a leap year of GenZ \n";
} else if ($year % 4 == 0 && $year <= 2000) {
    echo "{$year} is a leap year but not GenZ gen \n";
} else {
    echo "{$year} is not a leap year \n";
}

/* 
===================================
* Nasted Condition
===================================
*/

$condition1 = true;
$condition2 = true;
$condition3 = false;

if ($condition1) {
    if ($condition2) {
        if ($condition3) {
            echo "Every condition is True \n";
        } else {
            echo "Condition 1 and 2 is True but Condition 3 is False \n";
        }
    } else {
        echo "Condition 1 is True but Condition 2 is False \n";
    }
} else {
    echo "Every condition is False \n";
}


/* 
===================================
* ShortCut (best practise)
===================================
*/

if ($condition1 && $condition2 && $condition3) {
    echo "Every condition is True \n";
} else if ($condition1 && $condition2) {
    echo "Condition 1 and 2 is True but Condition 3 is False \n";
} else if ($condition1) {
    echo "Condition 1 is True but others Condition is False \n";
} else {
    echo "Every condition is False \n";
}


/* 
===================================
* Ternary Oparator single conditon
===================================
*/

$number = 12;

$result = ($number % 2 == 0) ? "Even" : "Odd";
echo "{$number} is an $result number \n";


/* 
=====================================
* Ternary Oparator multiple condition
=====================================
*/

$result = ($number % 2 == 0) ? ($number >= 10 ? "Even number and also greter than or equal 10" : "Even number and also less than 10") : "Odd Number";
echo "{$number} is an $result \n";
