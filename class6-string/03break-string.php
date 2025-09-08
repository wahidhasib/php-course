<?php
$string = "hello wahid,How is your today?";

$preg = preg_split("/(,| )/", $string);

// print_r($preg);

$originalString = ucwords(implode(" ", $preg));

// echo $originalString;

echo PHP_EOL;

// $strBrk = str_shuffle($string);
// print_r($strBrk);


$string2 = strtok($string, " ,");

while ($string2 !== false) {
    // echo $string2 . "\n";
    $string2 = strtok(" ,");
}

// todo Task: convert a string into an array and count every char of number

$taskString = "Once a quick brown fox jumps over the lazy dog";

$strArr = str_split($taskString);
$uniqueArray = array_unique($strArr);
// print_r($uniqueArray);

// Convert string into array of characters
$chars = str_split($taskString);

// Count frequency of each character
$charCounts = array_count_values($chars);

// Print the result
foreach ($charCounts as $char => $count) {
    // echo "'$char' => $count\n";
}


// ? Try to another way
$fString = "How are you mr hasib! whare are you from?"; //! we cann't run foreach loop because this is not an array

$charCounts = [];
for ($i = 0; $i < strlen($fString); $i++) {
    $char = $fString[$i];

    if (isset($charCounts[$char])) {
        $charCounts[$char]++;
    } else {
        $charCounts[$char] = 1;
    }

    foreach ($charCounts as $char => $count) {
        echo "'$char' => $count\n";
    }
}
