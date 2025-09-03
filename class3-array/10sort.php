<?php


// sort($array); //? sort by assending order
// rsort($array); //? sort by decending order

// ksort($array); //? sorting by key assending order
// krsort($array); //? sorting by key decending order

sort($array, SORT_STRING); //? sort as a string (capital letter is first priority)
sort($array, SORT_STRING | SORT_FLAG_CASE); //? sort as a string (treat as a normal string)

print_r($array);
