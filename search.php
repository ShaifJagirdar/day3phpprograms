<?php

$num = [1,2,4,6,3,5];
$search = 2;
if(in_array($search, $num))
{
echo "Found in array<br>";
}
else{
    echo "Not found<br>";
}    
$found = false;

foreach($num as $n){
    if($n == $search){
        $found = true;
        break;
    } 
    
}

if($found){
    echo "Number is there in an array";
}
else{
    echo "Number is not there in an array";
}