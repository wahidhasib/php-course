<?php

/* 
=============================================================
* For Loop
=============================================================
*/

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo PHP_EOL;
}

echo PHP_EOL;

/* 
=============================================================
* For Loop negetive steping
=============================================================
*/

for ($i = 10; $i > 0; $i--) {
    echo $i . "\n";
}

echo PHP_EOL;

/* 
=============================================================
* For Loop multiple steping
=============================================================
*/

// for ($i = 10; $i >= 0; $i--) {
//     echo $i . ":" . 10 - $i;
//     echo PHP_EOL;
// }

for ($i = 10, $j = 1; $i >= 0; $i--, $j++) {
    echo $i . ":" . $j;
    echo PHP_EOL;
}

echo "=========== \n";


/* 
=============================================================
* Continue vs break into for loop
=============================================================
*/

for ($i = 0; $i < 20; $i++) {
    echo $i . "\n";

    /* if ($i > 10) {
        break;
    } */

    if ($i > 10) {
        continue;
    }

    // echo $i . "\n";
    echo "hi $i \n";
}


/* 
*NB: Break return redirect outside the loop but continue return redirect the last of loop
*/

echo "=========== \n";

/* 
=============================================================
* While Loop
=============================================================
*/

$i = 0; //can't use the $i default value into the block

while ($i < 10) {
    $i++;
    echo $i . PHP_EOL;
}

echo PHP_EOL;
