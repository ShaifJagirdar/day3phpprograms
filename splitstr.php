<?php

$name = 'wanda';
$len = strlen($name);
$toarry = str_split($name,1);
foreach($toarry as $nme){
    $newstr .= $nme;
}

print_r($toarry);

echo "<br>";

print_r($newstr);