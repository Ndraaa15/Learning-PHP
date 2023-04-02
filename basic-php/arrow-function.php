<?php
//alternate for anonymous function but for simple implementation, can access variables outside function
//using keyworn fn =>

$firstName = "Indra";
$lastName = "Adi";

$sayHy = fn() => "Hy $firstName $lastName" .PHP_EOL;

echo $sayHy();



?>