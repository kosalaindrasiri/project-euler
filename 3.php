<?php

$number = 600851475143;

for ($i = 3; $i < $number / 2; $i = $i+2) {
    if ($number % $i == 0) {
        if (checkPrime($number / $i)) {
            echo $number / $i.'</br>';
            break;
        }
    }
}

function checkPrime($val) {
    $isPrime = true;
    $sqrt = sqrt($val);
       
    if($val==2)
        return TRUE;
    
    if($val==1 || $val % 2 ==0)
        return FALSE;
    
    for ($j = 3; $j <= $sqrt; $j=$j+2) {

        if ($val % $j == 0) {
            $isPrime = FALSE;
            break;
        }
    }
    return $isPrime;
}

