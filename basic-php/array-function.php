<?php
//link reference:
// https://www.php.net/manual/en/ref.array.php

$numbers = [1,2,3,4,5,6,7,8,9,10];

$numbersResult = (array_map(fn($numbers) => $numbers * 3, $numbers));
var_dump($numbersResult);

rsort($numbers);
var_dump($numbers);  

var_dump(array_keys($numbers));

var_dump(array_values($numbers));

?>