<?php
$day = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

$months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",];

$students = [
   ["Indra", "225150200111006", "Computer Science"],
   ["Adi", "225150200111007", "Computer Science"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Array</title>
   <style>
      div{
         width: 100px;
         height: 100px;
         background-color: aqua;
         text-align: center;
         line-height: 50px;
         margin: 3px;
         float: left;
      }
      .clear{
         clear: both;
      }
   </style>
</head>
<body>
   <!-- <h1>Days</h1>
   <?php for ($i = 0; $i < 7 ; $i++) : ?>
      <div>
         <?= $day[$i]; ?>
      </div>
   <?php endfor; ?>

   

   <?php foreach ($day as $x) : ?>
      <div>
         <?= $x ?>
      </div>
   <?php endforeach; ?> -->


   <?php foreach ($students as $student) : ?>
      <ul>
         <li><?= $student[0];?></li>
         <li><?= $student[1];?></li>
         <li><?= $student[2];?></li>
      </ul>
   <?php endforeach; ?>


   
</body>
</html>