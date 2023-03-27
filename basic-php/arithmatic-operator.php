<?php

//plus
$result = 100 + 100;
echo "Operator plus   : ";
echo var_dump($result+=10);
echo "\n";

//minus
echo "Operator minus  : ";
$result = 10 - 5;
echo var_dump($result -= 10);
echo "\n";

//times
echo "Operator times  : ";
$result = 11 * 5;
echo var_dump($result *= 10);
echo "\n";

//divide
echo "Operator divide : ";
$result = 10 / 5;
echo var_dump($result /= 10);
echo "\n";

//power
echo "Operator power  : ";
$result = 11 ** 2;
echo var_dump($result **= 2);
echo "\n";

echo "Operator modulo : ";
$result = 11 % 2;
echo var_dump($result %= 2);
echo "\n";

?>