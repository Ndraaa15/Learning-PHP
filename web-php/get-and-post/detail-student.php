<?php 
//Checking if the user already bring the data to access this page or no
   if (!isset($_GET["name"]) || !isset($_GET["nim"]) || !isset($_GET["major"])){
      //redicrect to get-and-post.php
      header("Location: get-and-post.php");
      exit;
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail Student</title>
</head>
<body>

<ul>
   <!-- The key is based on the name of the variable in the URL -->
   <li>Nama  : <?php echo $_GET["name"] ?></li>
   <li>NIM   : <?php echo $_GET["nim"] ?></li>
   <li>Major : <?php echo $_GET["major"]?></li>
</ul>
   
<a href="get-and-post.php">Back</a>

</body>
</html>