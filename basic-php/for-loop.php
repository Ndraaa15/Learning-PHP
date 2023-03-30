<?php
//the concept of for looping in php is similar to other loops in other programming languages

//----------------------------
for ($i=0; $i < 10; $i++) { 
   echo "Hello World" . PHP_EOL; 
};
//----------------------------
//----------------------------
$i = 0;
for (; $i < 10; ) { 
   echo "Hello Guys". PHP_EOL; 
   $i++;
};
//----------------------------
//----------------------------
for ($i = 0; $i < 10; ) { 
   echo "Hi Peeps". PHP_EOL; 
   $i++;
};
//----------------------------
//----------------------------
//alternative syntax for looping
for ($j =0; $j < 10; $j++):
   echo "Hello World" . PHP_EOL; 
endfor;

//unlimited looping doesn't have init statement, condition, and post statement
for(;;){
   echo "Unlimited Looping". PHP_EOL;
}
?>