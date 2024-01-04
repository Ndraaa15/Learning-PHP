<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SERVER-GLOBAL</title>
</head>
<body>
  <table>
    <?php foreach($_SERVER as $key => $value) : ?>
    <tr>
      <td><?= $key?></td>
      <td><?= $value?></td>
    </tr>
    <?php endforeach; ?>
  </table>
  
</body>
</html>

<!-- $SERVER is global variable that is array include information like HTTP Header, Path, script location and many more. -->
<!-- $SERVER is create when request is coming into web server -->