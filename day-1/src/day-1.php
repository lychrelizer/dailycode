<?php

function trailingZeros($num) {
    return floor($num/5)+floor($num/25);
}

//Test output
for ($i = 0; $i < 101; $i++) {
    $num = trailingZeros($i);
    echo "{$i}: {$num}\n";
}