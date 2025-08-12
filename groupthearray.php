<?php

$items = ["Apple", "Banana", "Avocado", "Blueberry", "Cherry", "Cranberry", "Apricot"];

$alpha = [];
foreach($items as $item){
    $letter =  strtoupper($item[0]);
    echo $letter . "<br>";
    $alpha[$letter][]= $item;
}

print_r($alpha);

?>
