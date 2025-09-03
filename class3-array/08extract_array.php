<?php

$fruits = array('apple', 'banana', 'orange', 'plum', 'dates', 'mango');

/**
 * * ====================================================================
 * * array_slice() - main array not changeable or copy item from an array
 * * ====================================================================
 */

// $someFruits = array_slice($fruits, 2); //only set start value

// $someFruits = array_slice($fruits, 2, 3); //set item limit 3 also

// $someFruits = array_slice($fruits, 0, -1); // set the limit by the negetive value that mean it will count from end

// $someFruits = array_slice($fruits, 3, 6, true);

/**
 * * Sometimes we need to find the array's original index number, in that time we need to pass true as a preserve key
 */
// print_r($someFruits);
// print_r($fruits);

/**
 * * ==================================================================
 * * array_splice() - main array will changed or cut item from an array
 * * ==================================================================
 */

$newFruits = ['guava', 'jackfruit'];
$someFruits = array_splice($fruits, 1, 2, $newFruits);

/**
 * * 3rd parameter is optional
 * * If we need to replace any item where we remove we can use it
 * * It will receives single or multiple values
 */

print_r($someFruits);
print_r($fruits);
