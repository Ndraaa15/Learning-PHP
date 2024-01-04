<?php
   //SuperGlobals
   // var_dump($_GET); -> To get the information from URL as a superglobal variable

   // var_dump($_POST);

   // var_dump($_SERVER);

   // var_dump($_SESSION);

   //$_GET
   // $_GET["name"] = "Indra";
   // $_GET["age"] = 20;
   // var_dump("Name : " . $_GET["name"] .  PHP_EOL);
   // var_dump("Age : " . $_GET["age"] .  PHP_EOL);

   $students = [
      [
      "Name" => "Indra",
      "NIM" => "225150200111006",
      "Major" => "Informatics Engineering",
      ],
      [
      "Name" => "Adi",
      "NIM" => "225150200111002",
      "Major" => "Informatics Engineering",
      ],
   ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GET</title>
</head>
   <body>
   <ul>
   <?php foreach ($students as $student) : ?>
      <li>
         <!-- The value name, nim, and major will be store in $_GET -->
         <a href="detail-student.php?name=<?= $student["Name"];?>&nim=<?= $student["NIM"];?>&major=<?= $student["Major"]?>"> <?=$student["Name"];?> </a>
      </li>
   <?php endforeach; ?>
   </body>
   </ul>

</html>