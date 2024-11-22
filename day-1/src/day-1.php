<?php

function trailingZeros($n) {
    $zeros = 0;
    $i = 5;

    while ($i < $n) {
        $zeros += floor($n/$i);
        $i*=5;
    }

    return $zeros;
}

//Test output
echo trailingZeros(1000000000);