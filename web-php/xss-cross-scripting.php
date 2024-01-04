<!-- XSS is security weakness that usually exploitation by hacker (by sending script in parameter) -->
<!-- If the developer make mistake to render code (web page), so the script that send by hacker will be rendered and the hacker can send javascript code -->
<!-- So this is so dangerous, because the hacker can steal the session user that still login in our web -->

<!-- To avoid this we can use htmlspecialchars function to encode special character in html into plain text -->

<?php
$say = "Hello" . htmlspecialchars($_GET["name"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET-GLOBAL-VARIABLE</title>
</head>
<body>
  <h1><?= $say ?></h1>
</body>
</html>