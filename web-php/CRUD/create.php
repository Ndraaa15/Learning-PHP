<?php

require "function.php";

$conn = mysqli_connect ("localhost", "root", "", "basic-php");

//Checking the submit button if has been clicked or no
if(isset($_POST["submit"])){
   if(addData($_POST) > 0){
      echo "
         <script>
            alert('Data has been added!');
            document.location.href = 'index.php';
         </script>";
   }else{
      echo "
         <script>
            alert('Data has not been added!');
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
   <title>Create Student</title>
</head>
<body>
   <h1>Create Data Student</h1>

   <form action="" method="post">
      <ul>
         <li>
            <label for="NIM">NRP   : </label>
            <input type="text" name="NIM" id="NIM" required>
         </li>
         <br>
         <li>
            <label for="NAME">Name : </label>
            <input type="text" name="NAME" id="NAME" required>
         </li>
         <br>
         <li>
            <label for="EMAIL">Email : </label>
            <input type="text" name="EMAIL" id="EMAIL" required>
         </li>
         <br>
         <li>
            <label for="MAJOR">Major : </label>
            <input type="text" name="MAJOR" id="MAJOR" required>
         </li>
         <br>
         <li>
            <label for="PHOTO">Photo : </label>
            <input type="text" name="PHOTO" id="PHOTO">
         </li>
         <br>
         <button type="submit" name="submit">Add Student</button>
      </ul>
   </form>
</body>
</html>