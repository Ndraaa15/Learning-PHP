<?php
//callback is a mechanism for function that calling another function
//using data type "callable"
function sayHello (string $name, callable $filter){
   $finalName = call_user_func($filter, $name);
   echo "heloo" . $finalName. PHP_EOL;
};

sayHello("Indra", function (string $name) : string{
   return strtoupper($name);
});


?>