<?php

$asso = [
    'name' => 'shaif',
    'age' => '31',
    'marraied' => false
];

$jsoncon = json_encode($asso);

echo "The json encoded values: <br>";
echo $jsoncon;