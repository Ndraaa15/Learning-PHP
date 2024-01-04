<?php

require_once __DIR__ . '/vendor/autoload.php';

use Ndraaa15\PhpComposer\data\people;

$people = new people("Indra Brata", "Jakarta", "08123456789");

echo $people->__getName() . PHP_EOL;

?>