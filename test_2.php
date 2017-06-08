<?php

function primeNum($number, $arr) {
    $i = $number;

    foreach ($arr as $value) {
        if (($number % $value) == 0) {
            return false;
        }
    }
    return true;
}

function sumNum() {
    $arr = [];
    $i = 5;
    $cn = 0;
    while (true) {
        if (primeNum($i,$arr)) {
            $arr[] = $i;
            $cn++;
        }
        if ($cn == 100) {
            break;
        }
        $i++;
    }
    print_r(array_sum($arr));
}

sumNum();