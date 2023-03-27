<?php
//null is empty
$name = "Indra";
$name = null;

$age = null;
echo "name : \n";
echo $name; //this will be showing nothing (empty)
echo "age  : \n";
echo $age;

//checking the variable is empty or no (return boolean) -> is_null ($var)
//1 -> true
//0 -> false
echo "Is name null ? ";
var_dump(is_null($name));


//deleting variable -> unset ($var)
$food1 = "Sate";
unset($food1); //variable "var" can't be accessing again because the value and variable are deleted

//checking the variable is exist or no and  the value is null or no -> isset($var)
echo "Is food3 exist ? ";
var_dump(isset($food3));
?>