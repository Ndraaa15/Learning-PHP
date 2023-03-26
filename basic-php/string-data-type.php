<?php

//single quote
echo 'Name : ';
echo 'Gede Indra Adi Brata';

//double quote (can adding escape sequence)
echo "\n";
echo "Age  : ";
echo "19 years old";
echo "\n";

//Heredoc (for create a long string, so don't need escape sequence)
echo <<<INDRA
Hello everyone, my name is Indra.
Currenty studying in Brawijaya University, majoring Informatics Engineering.
Really like to explore something new.\n
INDRA;

//Nowdoc (can't using parsing and similar with single quote)
echo <<<'INDRA'
Now, i'm learning about basic PHP
-
INDRA
?>