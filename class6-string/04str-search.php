<?php
$string = "Quick brown fox foxes jumps over the lazy dog";

echo strpos($string, "jumps"); //case sensitive search
echo PHP_EOL;
echo stripos($string, "Fox"); //case insensitive search
echo PHP_EOL;
echo stripos($string, "fox", 13); // case insensitive and set starting from this object but return 
echo PHP_EOL;


/**
 * * Replace string
 */

$replacedString = str_replace("brown", "green", $string); //case sensitive replace
echo $replacedString;
echo PHP_EOL;

$caseInSen = str_ireplace("lazy", "fast", $string, $count); //case insensitive replace 
// ? last object receive number of changes on string

printf("'%s' is replaced in %d times", $caseInSen, $count);
echo PHP_EOL;

// ? multiple replacement
$str2 = "If you only need two replacements, it’s cleaner to use";
$replaceStr = str_ireplace(
    ["you", "two"],
    ["me", "three"],
    $str2,
    $count
);

echo $replaceStr;
echo PHP_EOL;
echo $count;
echo PHP_EOL;


$demoText = "     Hello   World   ";
$demoTrim = trim($demoText);

echo $demoTrim;
