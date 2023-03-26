<?php

// variable (keyword $)
$name = "Indra Adi";
$college = "Brawijaya University";

echo "Name : ";
echo $name;

echo "\nAge  : ";
echo $college;

//variable variables (keyword $$) -> Change the value of first var become the name variable for second value

$var1 = "Satu";
$$var1 = "Dua";

echo "\n";
echo "var1 : ";
echo $var1;
echo "\n";
echo "Satu : ";
echo $Satu;

?>