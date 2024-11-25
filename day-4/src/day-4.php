<?php
//900uwu50uwuuwuuwu25uwu25

function grabNumberSum($str) {
    $numbers = [];
    $curnum = "";

    foreach (str_split($str) as $c) {
        if (is_numeric($c)) {
            $curnum .= $c;
        } else {
            array_push($numbers, $curnum);
            $curnum = ""; 
        }
    }

    array_push($numbers, $curnum);
    return array_sum($numbers);
}

var_dump(grabNumberSum("900uwu50uwuuwuuwu25uwu25"));