<?php
//Operator to checking if the variable exists or not
//by using ?? operator

$data = [
   "action" => "coding",
];

if (isset($data["action"])) {
   $action = $data["action"];
}else{
   $action = "Nothings";
}

//Instead of using code above, can use the null coalescing operator
//Similar to ternary operator

//first argument checks if the variable exists in array (true) the second argument to check if the variable not exists (false)
$checkingAction = $data["action"] ?? "Nothings";

echo $action . PHP_EOL;
echo $checkingAction . PHP_EOL;
?>