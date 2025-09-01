<?php
$students = [
    "naim",
    "sakib",
    "rakib"
];

// print_r($students);
echo PHP_EOL;

/*
=======================================
* there are 4 kinds of array oparation 
=======================================
* 
*/

// unset($students['1']); //? array item unset or remove
//array_shift($students); //? remove first item from the array
//array_unshift($students, "Test"); //? add an item as a first index of array

//array_push($students, "Samiul"); //? add an item as a last index of array
// array_pop($students); //? remove the last item of array

// $result = array_key_exists("1", $students); //? array_key_exists function check this key set or not and return boolean value

// $result = in_array("hasib", $students); //? in_array function check this value set or not and return boolean value

// $values = array_values($students); //? array_values function give the all array values as a new array
// $keys = array_keys($students); //? array_keys function give the all array keys as a new array

$flip = array_flip($students); //? flip or reverse the key and value pairs into the array
print_r($flip);
echo PHP_EOL;

// print_r($students);


/*
===================
* All array methods
===================
🔹 2. Adding & Removing Elements

array_push($arr, $val1, $val2, …) → Add elements to the end

array_pop($arr) → Remove last element

array_shift($arr) → Remove first element

array_unshift($arr, $val1, $val2, …) → Add elements to the beginning

unset($arr[$key]) → Delete element by key

🔹 3. Array Information

count($arr) → Number of elements

sizeof($arr) → Alias of count()

array_key_exists($key, $arr) → Check if key exists

in_array($val, $arr) → Check if value exists

array_search($val, $arr) → Search for value and return key

isset($arr[$key]) → Check if key is set

🔹 4. Array Keys & Values

array_keys($arr) → Get all keys

array_values($arr) → Get all values

array_flip($arr) → Swap keys and values

array_change_key_case($arr, CASE_UPPER | CASE_LOWER) → Change key case

🔹 5. Sorting Arrays

sort($arr) → Sort ascending (values)

rsort($arr) → Sort descending (values)

asort($arr) → Sort ascending by values (keep keys)

arsort($arr) → Sort descending by values (keep keys)

ksort($arr) → Sort ascending by keys

krsort($arr) → Sort descending by keys

usort($arr, $callback) → Custom sort by values

uksort($arr, $callback) → Custom sort by keys

uasort($arr, $callback) → Custom sort by values, preserve keys

natsort($arr) → Natural order sorting

natcasesort($arr) → Case-insensitive natural sorting

🔹 6. Array Splitting & Merging

array_merge($arr1, $arr2, …) → Merge arrays

array_merge_recursive($arr1, $arr2, …) → Merge recursively

array_combine($keys, $values) → Combine two arrays

array_slice($arr, $offset, $length, $preserve_keys = false) → Extract part of array

array_splice($arr, $offset, $length, $replacement) → Remove/replace array part

array_chunk($arr, $size, $preserve_keys = false) → Split into chunks

🔹 7. Array Filtering & Mapping

array_map($callback, $arr) → Apply function to each element

array_filter($arr, $callback) → Filter elements by callback

array_walk($arr, $callback) → Apply callback to each element

array_walk_recursive($arr, $callback) → Recursive walk

array_reduce($arr, $callback, $initial) → Reduce to single value

🔹 8. Array Math & Set Operations

array_sum($arr) → Sum of values

array_product($arr) → Product of values

array_unique($arr) → Remove duplicates

array_diff($arr1, $arr2, …) → Values in arr1 not in others

array_diff_assoc($arr1, $arr2, …) → Compare with keys

array_diff_key($arr1, $arr2, …) → Compare keys only

array_intersect($arr1, $arr2, …) → Common values

array_intersect_assoc($arr1, $arr2, …) → Common with keys

array_intersect_key($arr1, $arr2, …) → Common keys

🔹 9. Array Utilities

array_reverse($arr, $preserve_keys = false) → Reverse array

array_rand($arr, $num = 1) → Random key(s)

shuffle($arr) → Randomize order

range($start, $end, $step = 1) → Create numeric range array

compact($var1, $var2, …) → Create array from variables

extract($arr) → Import array keys as variables

array_fill($start_index, $count, $value) → Fill with values

array_fill_keys($keys, $value) → Fill with keys and a value
*/