<?php 
   if (isset($_POST["submit"])) {
      if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
         header("Location: admin-page.php");
         exit;
      }else{
         $error = true;
      }
   }


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Page</title>
</head>
<body>
   <h1>Login Page</h1>

   <?php if (isset($error)) : ?>

   <p style="color:red; font-style:italic;">Username or Password is wrong</p>

   <?php endif ?>

   <ul>
      <form action="" method="post">
         <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
         </li>
         <br>
         <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password">
         </li>
         <li>
            <button type="submit" name="submit">login</button>
         </li>
      </form>
   </ul>
</body>
</html>