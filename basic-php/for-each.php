<?php

$names = array(
   "Gede",
   "Indra",
   "Adi",
   "Brata",
);

$identity = [
   "Name" => "Indra",
   "NIM" => "225150200xxxxxx",
];

//Without using for loop
for($i = 0; $i < count($names); $i++){
   echo "Name : " . $names[$i].PHP_EOL;
};

//Using for foreach loop
foreach($names as $name){
   echo "Name : " . $name . PHP_EOL;
};

//Using foreach loop using key and value;
foreach($identity as $key => $value){
   echo "$key  :  $value" . PHP_EOL;
};
?>