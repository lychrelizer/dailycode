<?php

function largestSwap($n) {
    return ($n < 100) ? (int)(str_split($n, 1)[1].str_split($n, 1)[0]) >= $n : false;
}

var_dump(largestSwap(100));