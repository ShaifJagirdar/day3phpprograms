<?php
//if 10
// 0 1 1 2 3 5 8 so on ..
$n = 15;

$numb1 = 0;
$numb2 = 1;

for($i=0;$i<$n;$i++){
    $nextno = $numb1 + $numb2;
    $numb1 = $numb2;
    $numb2 = $nextno;
    echo "The fibbonaaci of given no " . $n;
    echo "<br>".$numb1. " "  .$numb2;
}