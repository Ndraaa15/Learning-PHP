<!-- This page is for admin who can CRUD data -->
<?php 
//Connect to database
$db = mysqli_connect("localhost", "root", "", "basic-php");

//Query data from database
$result = mysqli_query($db, "SELECT * FROM students");

if (!$result) {
   echo mysqli_errno($db);
}

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
      
      <tr>
         <th>No</th>
         <th>Action</th>
         <th>Photo</th>
         <th>NIM</th>
         <th>Name</th>
         <th>Email</th>
         <th>Major</th>
      </tr>
      <?php while ($data = mysqli_fetch_assoc($result)) : ?>
      <tr>
         <td> <?php echo $data["NO"]; ?></td>
         <td>
            <a href="">Edit</a> | <a href="">Delete</a>
         </td>
         <td>
            <img src="../image/<?php echo 
            
            $data["PHOTO"] ?>" width="50px" height="50px" alt="anya">
         </td>
         <td><?php echo $data["NIM"]; ?></td>
         <td><?php echo $data["NAME"]; ?></td>
         <td><?php echo $data["EMAIL"]; ?></td>
         <td><?php echo $data["MAJOR"]; ?></td>
      </tr>
      <?php endwhile; ?>
   </table>
</body>
</html>