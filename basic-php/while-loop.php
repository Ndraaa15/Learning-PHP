<?php
//the concept of while looping in php is similar to other loops in other programming languages
$counter = 0;

while($counter < 10){
   echo "Helo while looping : " . $counter;
   $counter++;
};

//Alternative syntax for whie looping
while($counter < 10):
   echo "Helo while looping : " . $counter;
   $counter++;
endwhile;

?>