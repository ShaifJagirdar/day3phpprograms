<?php

$data = [
    [1, 2, 3],
    [4, 5, [6, 7]],
    8
];
$outersum = 0;
foreach ($data as $outerdata) {
    if (is_array($outerdata)) {
        foreach ($outerdata as $innerdata) {
            if (is_array($innerdata)) {
                foreach ($innerdata as $moreinnerdata) {
                    $outersum += $moreinnerdata;
                }
            } else {
                $outersum += $innerdata;
            }
        }
    } else {
        $outersum += $outerdata;
    }
}

print_r($outersum);