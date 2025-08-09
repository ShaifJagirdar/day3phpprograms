<?php

$givenstring = "shaif";
$newstring = strrev($givenstring);
print_r($newstring);
$soortedarray =  array();
$soortedarray = str_split($givenstring);
var_dump($soortedarray);
$newstr = "";

foreach($soortedarray as $str){
//  echo "no of char<br>";
$strcount += 1;
// echo $strcount . "<br>";
}

echo $strcount;

for($i = $strcount - 1; $i >= 0; $i--){
    $newstr .= $soortedarray[$i];
}

echo "The  reverse string is " . $newstr;
var_dump($newstr);