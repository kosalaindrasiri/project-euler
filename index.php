<?php

$number = 600851475143;

for ($i = 2; $i < $number / 2; $i++) {
    if ($number % $i == 0) {
        if (checkPrime($number / $i)) {
            echo $number / $i.'</br>';
            break;
        }
    }
}

function checkPrime($val) {
    $isPrime = true;
    for ($j = 2; $j <= $val / 2; $j++) {

        if ($val % $j == 0) {
            $isPrime = FALSE;
            break;
        }
    }
    return $isPrime;
}

