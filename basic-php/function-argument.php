<?php

//default value argument
//without valid type argument
function sayHello($firstName = "Anonymus" , $lastName = ""){
   echo "hi $firstName $lastName" . PHP_EOL;
}

sayHello();
sayHello("Gede");
sayHello("Indra");
sayHello("Indra", "Adi");

//using valid type argument
function sumNumbers(int $number1, int $number2){
   $total = $number1 + $number2;
   echo "total is $total" . PHP_EOL;
};

//Auto convertion data type argument but can't for array type
sumNumbers(1, 2);
sumNumbers(true, true);
sumNumbers(false, false);
sumNumbers("10", "5");

//Variable length argument list -> parameter that contain many values.
function sumAll (...$values){
   $total = 0;
   foreach ($values as $value){
      $total += $value;
   }
   echo "total is " . implode("+", $values) . " = $total". PHP_EOL;
}

$numbers = [
   1,2,3,4,5
];

sumAll(1,2,3,4,5,6,7,8,9,10);

//if using array as a argument need to put "..." in front of parameter
sumAll(...$numbers);
?>