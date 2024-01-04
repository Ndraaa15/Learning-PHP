<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=
   , initial-scale=1.0">
   <title>POST</title>
</head>
<body>
   <!-- Case if we not using action -->
   <?php if(isset($_POST["submit"])) : ?>
      <h1>Welcome, <?php $_POST["name"] ?></h1>
   <?php endif; ?>
   <form action="landing-page.php" method="post">
      <label for="name">Name : </label>
      <input type="text" name="name">
      <br><br>
      <button type="submit" name="submit">submit</button>
   </form>
</body>
</html>