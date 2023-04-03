<?php
/*
Global Variables -> created outside of function, can't access variables from the function
Static Variables -> created inside of function
Local Variables -> only for local variables
*/ 

//$GLOBALS is keyword for variable that can access from global scope or local scope
$name = "Indra"; //global variable

function saySomething() {
   // echo "Hello $name" . PHP_EOL; //error message
}

function sayWoof () {
   global $name; //for access to global variables using keyword global
   $animal = "dog"; //local variable
   echo "$animal voice is woof woof" . PHP_EOL;
}

// echo "$animal voice is woof woof" . PHP_EOL; //error message

//static scope variables -> saving the latest value -> to continue life cycle of variables or functions
function increment (){
   static $counter = 1; //static variable
   echo "counter: $counter" . PHP_EOL;
   $counter++;
}

//if variable counter not using static it will be return 1 (always)

increment();
increment();
increment();
?>