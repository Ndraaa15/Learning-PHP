<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Loop & Condition</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="">
      <style>
         .row-color {
            background-color: gold;
         }
      </style>
   </head>
   <body>

   <table border="1" cellpadding="10" cellspacing="0">
      <?php for ($i=1; $i <= 3; $i++) : ?>
         <?php if ( $i % 2 == 0) : ?>
            <tr class="row-color">
         <?php else: ?>
            <tr>
         <?php endif; ?>
            <?php for ($j=1; $j <= 5; $j++) : ?>
               <!-- using '=' is same like echo -->
               <td><?= "$i,$j"; ?></td>
            <?php endfor; ?>
         </tr>
      <?php endfor; ?>
   </table>
   </body>
</html>