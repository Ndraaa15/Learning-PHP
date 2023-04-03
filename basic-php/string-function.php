<?php
// link reference for string function :
// https://www.php.net/manual/en/ref.strings.php

var_dump(join(",", [1,2,3,4,5,6,7,8,9,10]));

var_dump(explode(" ", "Gede Indra Adi Brata")); //split in java

var_dump(strtolower("INDRA"));

var_dump(strtoupper("indra"));

var_dump(trim("               Indra                  "));

var_dump(substr("Indra", 0, 3));

?>