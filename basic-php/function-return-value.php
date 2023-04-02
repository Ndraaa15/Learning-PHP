<?php

function sumNumbers(int $number1, int $number2) : int{
   return $number1 + $number2;
}

$total = sumNumbers(1,2);
var_dump($total);

function getFinalGrade (string $grade) : string{
   if ($grade >= 80 && $grade <=100){
      return "A";
   }elseif($grade >= 50 && $grade <80){
      return "B";
   }else{
      return "C";
   }
}

$myGrade = getFinalGrade(100);
echo "myGrade : " . $myGrade

?>