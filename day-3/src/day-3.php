<?php

function noOdds($a){return array_filter($a,fn($v)=>!($v&1));}

var_dump(noOdds([1, 2, 3, 4, 5, 6, 7, 8]));
var_dump(noOdds([43, 65, 23, 89, 53, 9, 6]));
var_dump(noOdds([718, 991, 449, 644, 380, 440]));