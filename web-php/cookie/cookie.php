<?php
setcookie("name", "Indra Brata");
 //setcookie(key, value, time)
header("Location: show-cookie.php");
?>

<!-- Cookie is saved data in form key value that send as HTTP response, saved in web browser-->
<!-- When web browser accept the cookie, it will be included when the req is sent again -->
<!-- we can use setcookie() in php -->
<!-- we can use global variable $_COOKIE to get the value -->