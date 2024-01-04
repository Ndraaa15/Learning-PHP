<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $file_name = $_FILES['upload-file']['name'];
  $file_size = $_FILES['upload-file']['size'];
  $file_tmp = $_FILES['upload-file']['tmp_name'];
  $file_type = $_FILES['upload-file']['type'];
  $file_error = $_FILES['upload-file']['error'];

  move_uploaded_file($file_tmp, __DIR__ .'/file/' . $file_name);
}

?>

<!-- For PHP, to get the file that uploaded we can use $_FILES (global variable) -->
<!-- $_FILES will be included about information about file -->
<!-- The file will be uploaded in temporary folder in server -->
<!-- To move the file in temp folder to directory we want we can use a lot of function, one of them is move_uploaded_file -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload File</title>
</head>
<body>
  <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
    <h1>File Properties</h1>
    <table>
      <tr>
        <td>Name</td>
        <td><?= $file_name ?></td>
      </tr>
      <tr>
        <td>Size</td>
        <td><?= $file_size ?></td>
      </tr>
      <tr>
        <td>Temp</td>
        <td><?= $file_tmp ?></td>
      </tr>
      <tr>
        <td>Type</td>
        <td><?= $file_type ?></td>
      </tr>
      <tr>
        <td>Error</td>
        <td><?= $file_error ?></td>
      </tr>
    </table>
  <?php } ?>

  <form action="upload-files.php" method="POST" enctype="multipart/form-data">
    <label> File :
      <input type="file" name="upload-file">
    </label>
    <br><br>
    <input type="submit" value="Upload">
  </form>
</body>
</html>