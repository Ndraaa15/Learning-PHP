<?php
//references make us to able reference variables to have same value

$name = "Indra";

//before change
$otherName = &$name;
echo $name . PHP_EOL; //Indra
echo $otherName . PHP_EOL; //Indra

//after change
$otherName = "Adi";
echo $name . PHP_EOL; //Adi
echo $otherName . PHP_EOL; //Adi

//pass by reference (passing data to function using reference)
function increment(int &$value) {
   $value++;
}

//if not using & the value of counter will be still 1 because we just passing the value not the reference
$counter = 1;
increment($counter);

echo $counter.PHP_EOL;

//returning reference
function &getValue (){
   static $value = 100;
   return $value;
}

$a = &getValue();
echo $a . PHP_EOL;
//because pass by refernce variable value in getvalue() function change
$a = 200;
echo $a . PHP_EOL;

?>