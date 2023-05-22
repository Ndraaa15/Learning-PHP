<!-- FUNCTION TIME -->

<!-- <?php
   //Function Library
   //Date
   echo "Date : ";
   echo date("l, d,M,Y");
   // l >> day
   // d >> date
   // M >> month
   // Y >> year

   //Time
   //Unix time stamp / Epoch time -> second from 1 January 1970
   echo "\nTime : " . PHP_EOL;
   echo time();

   //Operation Time
   echo date("l", time()+60*60*24*100);

   //Mk time
   echo date("l", mktime(0,0,0,8,25,1985));

   //String to time
   echo date("l", strtotime("25 aug 1985"));
?> -->

<?php
   function sayHello(string $name = "Guest", string $greeting = "Hello") : string {
      return "$greeting, $name!";
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Function</title>
</head>
<body>  
   <h2><?= sayHello("Indra", "Nite");?></h2>
</body>
</html>