<!-- In PHP all query parameter will be stored in global variable called $GET -->
<!-- ?key=value -->
<!-- ?key=value&key2=value2 -->
<!-- ?name[]=indra&name[]=adi&name[]=brata (this is will be got as an array) -->

<!-- $GET also is assosiative array with key and value -->
<!-- we need tp check first, cuz that client might be not send the query param -->

<?php
$say = "Hello" . $_GET["name"];
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