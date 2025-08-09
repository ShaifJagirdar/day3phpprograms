<?php
//5x4x3x2x1
$number = 6;
$fixedloop = $number;
$facto = 1;
for($i=0; $i < $fixedloop;$i++){
    $facto = $number * $facto;
    $number = $number - 1;
    echo "<br>" . $number;
    echo "<br>Factorail " . $facto;
}

/*
Loop 1
$number = 6
$facto = 1

for(i=0; 0<=6 True godown;)
$fatto = 6 * 1;
$facto = 6
$number = 6 - 1;
number = 5

output

5

factoriral 6

loop 2

$number = 5

$facto 6

for(i =1; 1<=5 goto below)
$fatcor = 5*6
$facto = 30
$number = 5 -1
$number = 4

op
number = 5
facto = 30

loop3

number = 5
facto = 30

for(i=2;2<=5 true)
facto = 30 * 5
facto = 150
number = 5-1
number = 4

op
facto 150
number 4

loop4

facto 150
number 4

for(i=3;3<=5 true)
facto = 150 x 4
facto = 600
number = 4 - 1
number = 3

op

facto = 600
number = 3

for(i=2;2<)
*/