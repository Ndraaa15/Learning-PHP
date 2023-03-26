<?php

//var_dump function is to identify what is the data type and convert the value

//Integer
echo "Decimal           : ";
var_dump(12345);

echo "Octal             : ";
var_dump(01234);

echo "Hexadecimal       : ";
var_dump(0x1A);

echo "Binary            : ";
var_dump(0b111111111);

echo "Underscore number : ";
var_dump(1_456_435);

//Floating point (Adding ".")
echo "Floating point    : ";
var_dump(1.90);

echo "e notation plus   : ";
var_dump(1.4e3); //1.4 x 10^3 (e = 10)

echo "e notation minus  : ";
var_dump(1.4e-3); //1.4 x 10^-3 (e = 10)

echo "Underscore number : ";
var_dump(1_456.435);

//Max capacity of integer 2147483647 (32 bit)
//Max capacity of integer 9223372036854775807 (64 bit)
//If more than the max capacity, php automaticaly will convert integer into floating point.

?>
