<?php
$grade = "A";

switch($grade){
   case "A":
      echo "Gokil lu bro".PHP_EOL;
      break;
   case "B":
   case "C":
      echo "Akhirnya lulus".PHP_EOL;
      break;
   case "D":
      echo "Yah, nt".PHP_EOL;
      break;
   case "E":
      echo "Salah jurusan".PHP_EOL;
      break;
   default:
      echo "Hm".PHP_EOL;
}



?>