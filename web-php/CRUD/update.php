<?php
require "function.php";

$id = $_GET["id"];

//Query data based on id
$student = Query("SELECT * FROM students WHERE NO = $id")[0];

//Checking the submit button if has been clicked or no
if(isset($_POST["submit"])){
   if(updateData($_POST) > 0){
      echo "
         <script>
            alert('Data has been updated!');
            document.location.href = 'index.php';
         </script>";
   }else{
      echo "
         <script>
            alert('Data has not been udpdated!');
            document.location.href = 'index.php';
         </script>";
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Student</title>
</head>
<body>
   <h1>Update Data Student</h1>

   <form action="" method="post">
      <input type="hidden" name="ID" value="<?= $student["NO"]?>">
      <ul>
         <li>
            <label for="NIM">NRP   : </label>
            <input type="text" name="NIM" id="NIM" required value="<?= $student["NIM"]?>">
         </li>
         <br>
         <li>
            <label for="NAME">Name : </label>
            <input type="text" name="NAME" id="NAME" required value="<?= $student["NAME"]?>">
         </li>
         <br>
         <li>
            <label for="EMAIL">Email : </label>
            <input type="text" name="EMAIL" id="EMAIL" required value="<?= $student["EMAIL"]?>">
         </li>
         <br>
         <li>
            <label for="MAJOR">Major : </label>
            <input type="text" name="MAJOR" id="MAJOR" required value="<?= $student["MAJOR"]?>">
         </li>
         <br>
         <li>
            <label for="PHOTO">Photo : </label>
            <input type="text" name="PHOTO" id="PHOTO" value="<?= $student["PHOTO"]?>">
         </li>
         <br>
         <button type="submit" name="submit">Update Student</button>
      </ul>



   </form>
   
</body>
</html>