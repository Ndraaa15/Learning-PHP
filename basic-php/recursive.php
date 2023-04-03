<?php

//factorial using looping function
function factorial (int $value):int{
   $total = 1;
   for($i = 1; $i <= $value; $i ++){
      $total *= $i;
   }
   return $total;
};

//factorial using recursion
function factorial_recursive (int $value):int{
   if($value == 1){
      return 1;
   }else{
      return $value * factorial_recursive($value - 1);
   }
}

var_dump(factorial(5));
var_dump(factorial_recursive(100));

//if the recursion too deep that can be memory overflow (error memory)

?>