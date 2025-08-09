<?php

//Remove duplicate values from an array.

$num1 = [10,20,50,60,30,20,50,10];

$uni = array_unique($num1);
print_r($uni);