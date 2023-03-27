<?php

// $a == $b -> equal (is same or not with parsing data type) / "type juggling" perubahan data secara otomatis.
// $a === $b -> equal (is same or not without parsing data type)
// $a != $b -> not equal
// $a <> $b -> not equal
// $a !== $b -> not equal  (based on data-type)
// $a < $b -> less than
// $a > $b -> more than
// $a <= $b -> less than or equal
// $a >= $b -> more than or equal

echo "Is '10' === 10 ? ";
var_dump("10" === 10); //return false because different data-type
echo "\n";

echo "Is '10' == 10 ? ";
var_dump("10" == 10); //not error
echo "\n";
?>