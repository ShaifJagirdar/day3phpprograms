<?php

$jsoned = '{"name":"shaif","age":"31","marraied":false}';

$assocarr = json_decode($jsoned);

echo $assocarr->name . "<br>";


echo "Json value decoded<br>";

print_r($assocarr);

echo "<br><br><br>";

$data = [
    "name" => "Shaif",
    "age" => 31,
    "married" => false
];

$jsonencoded = json_encode($data);

echo $jsoned;

echo "<br><br><br>";

$newarr = json_decode($jsonencoded);

if($newarr->married == false){
    echo "Not married";
}

foreach($newarr as $key => $value){
    if($key == 'name' && $value == "Shaif"){
        echo $value;
    }
}

echo "<br><br><br>";

$person = [
    "name" => "Shaif",
    "skills" => ["PHP", "JavaScript", "MySQL"],
    "address" => [
        "city" => "Bangalore",
        "country" => "India"
    ]
];

$jsnew = json_encode($person);

echo $jsnew;
echo "<br><br><br>";
$newjsobj = json_decode($jsnew, true);

foreach($newjsobj as $key => $val){
    echo $key->name;
}
print_r($newjsobj);