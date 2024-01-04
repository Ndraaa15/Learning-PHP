<!-- This page is for admin who can CRUD data -->
<?php
require 'function.php';

$datas = Query("SELECT * FROM students");


if (isset($_POST["search"])){
   $datas = search($_POST["keyword"]);
}


// if (!$result) {
//    echo mysqli_errno($db);
// }

//Fetch data from database
//mysqli_fetch_row() -> return array numeric
//mysqli_fetch_assoc() -> return array associative
//mysqli_fetch_array() -> return array numeric and associative
//mysqli_fetch_object() -> return object

// while ($student = mysqli_fetch_assoc($result)) {
//    var_dump($student["PHOTO"]);
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>
</head>
<body>
   <h1>Student List</h1>

   <table border="1px" cellpadding="10" cellspacing="0">
      <a href="create.php">Add Student</a>
      <br><br>
      
      <form action="" method="post">
         <input type="text" name="keyword" size="40" autofocus placeholder="Search Student" autocomplete="off">
         <button type="submit" name="search">Search</button>
      </form>
      <br><br>
      <tr>
         <th>No</th>
         <th>Action</th>
         <th>Photo</th>
         <th>NIM</th>
         <th>Name</th>
         <th>Email</th>
         <th>Major</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($datas as $data) : ?>
      <tr>
         <td> <?php echo $i; ?></td>
         
         <td>
            <a href="update.php?id=<?= $data["NO"]?>">Edit</a> | <a href="delete.php?id=<?= $data["NO"]; ?>" onclick="return confirm ('Are you sure delete this user ? ')">Delete</a>
         </td>
         <td>
            <img src="../image/<?php echo $data["PHOTO"] ?>" width="50px" height="50px" alt="anya">
         </td>
         <td><?php echo $data["NIM"]; ?></td>
         <td><?php echo $data["NAME"]; ?></td>
         <td><?php echo $data["EMAIL"]; ?></td>
         <td><?php echo $data["MAJOR"]; ?></td>
      </tr>
      <?php $i+=1; ?>
      <?php endforeach; ?>
   </table>
</body>
</html>