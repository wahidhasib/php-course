<?php

function fibonacci($old, $new, $start, $end)
{
    if ($start >= $end) {
        return;
    }
    $start++;

    echo $old . " "; //0
    $_temp = $old + $new; // 1

    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $start, $end);
}

fibonacci(0, 1, 1, 10);
