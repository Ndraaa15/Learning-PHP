<?php

//make sure the position of include and require files above because php read the program from top to bottom

//include_once function is to detect if the file have been called it will be not called again
include_once "myFunction.php";

echo saySomething();

?>