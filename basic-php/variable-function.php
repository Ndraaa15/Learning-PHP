<?php

function ping () {
   echo "Ping". PHP_EOL;
}


function pong () {
   echo "Pong" . PHP_EOL;
}

//inside the double quote is the name of function
$functionPing = "ping";
$functionPing();

$functionPong = "pong";
$functionPong();

//we can use variable function as a argument and parameter in the function
//Let's assume that filterName is a function
function sayHello(String $name, $filterName){
   $finalName = $filterName($name);
   echo "Hello ". $finalName . PHP_EOL;
}

// "strtolower" is the name of the function and we can use other name of the function
sayHello("INDRA", "strtolower");
?>