<?php
$grade = 80;
$absent = 3;

if ($grade > 70 && $absent < 5){
   echo "Excelent".PHP_EOL;
}else if($grade < 70 && $grade > 50 && $absent < 7){
   echo "Not Bad".PHP_EOL;
}else{
   echo "So bad".PHP_EOL;
}

//alternate syntax using (:)

if ($grade > 70 && $absent < 5):
   echo "Excelent".PHP_EOL;
elseif($grade < 70 && $grade > 50 && $absent < 7):
   echo "Not Bad".PHP_EOL;
else :
   echo "So bad".PHP_EOL;
endif;
?>