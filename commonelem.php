<?php

$num1 = [10,20,20,40];
$num2 = [10,20,2,4];

$common = array_intersect($num1, $num2);

print_r($common);