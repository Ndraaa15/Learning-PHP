<?php 
$numbers = [1,2,3,4,5,6,7,8,9,10];
$students = [
   [
   "Nama" => "Indra",
   "NIM" => "225150200111006",
   "Major" => "Informatics Engineering",
   ],
   [
   "Nama" => "Adi",
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
   <title>Document</title>
   <style>
      .box {
         width: 30px;
         height: 30px;
         background-color: aquamarine;
         text-align: center;
         margin: 3px;
         float: left;
         transition: 1s;
      }
      .box:hover {
         transform: rotate(360deg);
         border-radius: 50%;
      }
   </style>
</head>
   <body>
      <?php foreach ($numbers as $number) : ?>
         <div class="box"> <?= $number; ?> </div>
      <?php endforeach ?>
      <br>
      <h1>Students List</h1>
      <?php foreach ($students as $student) : ?>
         <ul>
            <li> <?=$student["Nama"]?> </li>
            <li> <?=$student["NIM"]?> </li>
            <li> <?=$student["Major"]?> </li>
         </ul>
      <?php endforeach ?>
   </body>
</html>