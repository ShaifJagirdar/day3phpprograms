<?php
//Find the largest number in an array.

//a[5,10,20,4,30,50]

$number = [10,50,60,4,78,34,99,200];
$largestno =$number[0];
for($i=1;$i<count($number);$i++){
    if($number[$i]>$largestno){
        $largestno = $number[$i];
    }
}

echo $largestno;

//loop 1
/*
number =10
for(i=0;0<8 true)
for(j=8;8>0 treu)
if(10>200)false
j--
for(j=7;7>0true)
if(10>99)false
j--
for(j=6;6>0)true
if(10>34)false
j--
for(j=5;5>0)true
if(10>78)flase
j--
for(j=4;4>0)true
if(10>4)true
swap
assign

now

$number = [4,5000,60,10,78,34,99,200]
$largestno = 10

for(i=1;1<8)true
for(j=8;8>1)true
if(5000>200)true
*/