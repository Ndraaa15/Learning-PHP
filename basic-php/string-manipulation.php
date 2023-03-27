<?php

$first_name = "Indra";
$mid_name = "Adi";
$last_name = "Brata";

echo $first_name . " " . $mid_name . " " . $last_name .PHP_EOL;

//convertion to number / floating point
$value_string = (string)1000.9;
var_dump($value_string);

$value_int = (int)"199";
var_dump($value_int);

$value_float = (float)"19.6";
var_dump($value_float);

//Accessing character
$food = "Soto Banjar";
echo $food[0] . PHP_EOL;
echo $food[3] . PHP_EOL;
echo $food[11] . PHP_EOL; //error index out of the bonds

//variable parsing -> more simple than using dot (.)
$name = "Javier";
echo "Hello, $name" . PHP_EOL;

//curly brace -> ..{$var}..
echo "Hello, {$name}'s hobby is coding";



?>