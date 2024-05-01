<?php

$array = array(
    "1C" => array("udin", "ismail", "adi"),
    "1D" => array("lukman", "fajri", "mahmud")
);

print_r($array);
print_r($array['1C']);
echo $array['1D'][0];
echo $array['1D'][1];
echo $array['1C'][2];

$array_simple = [
    "1C" =>["udin", "ismail", "adi"],
    "1D" =>["lukman", "fajri", "mahmud"]
];

?>