<?php

$num = [1,2,3,4,5];

function square($n){
    return ($n * $n);
}

$sqr = array_map('square',$num);

print_r($sqr);