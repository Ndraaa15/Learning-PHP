<?php
session_start();

if ($_SESSION["login"]){
  header("Location: member.php");
  exit();
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if ($_POST["username"] == "admin" && $_POST["password"] == "123"){
    $_SESSION["login"] = true;
    $_SESSION["username"] = $_POST["username"];
    header("Location: member.php");
    exit();
  }else{
    $error = "Username or Password is wrong";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <?php if($error != ""){ ?>
      <?= $error ?>
  <?php } ?>
  <h1>Login</h1>
  <form action="login.php" method="post">
    <label for="username">Username:
      <input type="text" name="username" id="username">
    </label>
    <br>
    <label for="password">Password:
      <input type="password" name="password" id="password">
    </label>
    <br><br>
    <input type="submit" value="login">
  </form>
</body>
</html>