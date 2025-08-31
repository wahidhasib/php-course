<?php

$userAge = 15;
$defaultAge = 18;

$info = isset($userAge) ? $userAge : $defaultAge;
echo "New user's age is {$info} \n";


// more simple way for above of PHP 7+
$output = $userAge ?? $defaultAge;
echo "New user's age is {$info} \n";
