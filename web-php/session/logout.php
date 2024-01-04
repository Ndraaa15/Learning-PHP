<?php
session_start();
session_destroy(); //to destroy all value in session, but we can also use unset($_SESSION["login"]) to destroy specific session

header('Location: login.php');
exit();
?>