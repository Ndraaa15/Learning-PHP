<?php
//this is similar to the closure
//usually anonymus function created inside the variable

$sayHello = function (string $name){
   echo "hello " . $name . PHP_EOL;
};

$sayHello ("Indra");
$sayHello ("Adi");

function sayGoodbye (string $name, $filter){
   $finalName = $filter ($name);
   echo "Goodbye " . $finalName . PHP_EOL;
};

sayGoodbye ("Indra", function (string $name) : string {
   return strtoupper($name);
});

//access variable outside function or closure using keyword use
$firstName = "Indra";
$lastName = "Adi";

$sayGoodbye = function () use ($firstName, $lastName){
   echo "Goodbye ". $firstName. $lastName. PHP_EOL;
};

?>