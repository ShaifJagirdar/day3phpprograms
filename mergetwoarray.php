<?php

//Merge two arrays without using array_merge

$num1 = [10,20,30,40,50,60];
$num2 = [70,80,90,100];
$combined = [];
$combined = $num1;

foreach($num2 as $n2){
    $combined[] = $n2;
}
print_r("The combined number <br>");
print_r($combined);