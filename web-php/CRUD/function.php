<?php 

//Connect to database
$conn = mysqli_connect("localhost", "root", "", "basic-php");

//Query data from database
function Query ($query) {
   //The  function of globas is to make the variable $conn can be used in this function (refer to the variable outside the function)
   global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}

function addData ($data){
   global $conn;

   $PHOTO = htmlspecialchars($data["PHOTO"]);
   $NIM = htmlspecialchars($data["NIM"]);
   $NAME = htmlspecialchars($data["NAME"]);
   $EMAIL = htmlspecialchars($data["EMAIL"]);
   $MAJOR = htmlspecialchars($data["MAJOR"]);

   //query for the data
   $query = "INSERT INTO students VALUES ('', '$PHOTO', '$NIM', '$NAME', '$EMAIL', '$MAJOR')";
   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}

function deleteData ($ID){

   global $conn;

   $query = "DELETE FROM students WHERE NO = $ID";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}

?>