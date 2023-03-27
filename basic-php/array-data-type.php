<?php
//array in php is dynamic (can add more size)
//array in php can filled by multi data type

//simple array
$values = array(1, 2, 3, 4, 5);
var_dump($values); //checking array

$sports = ["football", "badminton", "swimming"];
var_dump($sports); //checking array

$combination = ["Indra", 15, 7.8];
var_dump($combination); //checking array

//array operation

//access value in array using index
echo "access value in array using index : ";
echo $values[0];
echo "\n";

//changing value in array using index
$sports[0] = "volleyball";
echo "changing value in array using index : ";
echo $sports[0];
echo "\n";

//counting all data array
$sizeValues = count($values);
echo "counting all data array : ";
echo $sizeValues;
echo "\n";

//adding data in back order (posisi paling belakang)
$values[] = 12345;
echo "adding data in back order (last order) : ";
echo $values[5];
echo "\n";

//deleting array and index "unset($array[index])"
unset($combination[0]);
echo $combination[0]; //return error

//array as a map (assosation between key and value)
$hobbies = array(
   "Indra" => "football",
   "Javier" => "coding",
   "Fauzi" => "sleep",
);
var_dump($hobbies);

$identity = [
   "NIM" => "225150200xxxxxx",
   "Name" => "Gede Indra Adi Brata",
   "Age" => 19,
   "Address" => [
      "City" => "Malang",
      "Country" => "Indonesia"
   ],
];
var_dump($identity);

//get data from map
echo "Indra's hobby : ";
echo $hobbies["Indra"];
echo "\n";
echo "Indra's city  : ";
echo $identity["Address"]["City"];

//array operator
//$a + $b -> merge two array
//$a == $b (equality) -> if array have same key and value will return true
//$a === $b (identity)
//$a != $b (inequality) -> checking if not same
//$a !== $b (nonidentity)

$fistname = [
   "first" => "Indra",
];

$lastname = [
   "last" => "Adi",
];

$full = $fistname + $lastname;
var_dump($full);

?>