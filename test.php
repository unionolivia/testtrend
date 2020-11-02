<?php

declare(strict_types=1);

function trend(array $var)
{
    $uptrend = 1;
    $downtrend = 1;
    $n = sizeof($var); // length of the array
    $i = 0;
    for (; $i < $n; $i++) {
        if ($var[$i] < $var[$i - 1]) {
            if ($uptrend == 1) {
                $downtrend += 1;
            } else {
                return -1;
            }
        } elseif ($var[$i] > $var[$i - 1]) {
            if ($uptrend == 1) {
                $value = $var[$i - 1];
            }
            if ($downtrend >= 2) {
                $uptrend += 1;
            } else {
                return -1;
            }
        } elseif ($var[$i] == $var[$i - 1]) {
            return -1;
        }
    }

    if ($uptrend >= 2 and $downtrend >= 2) {
        return $value;
    } else {
        return -1;
    }
}


// Return the function
$arr = [32, 12, 15, 11, 22, 11, 18, 18, 15, 7];
echo trend($arr);
