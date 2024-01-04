<?php
require 'function.php';

//Getting the id (?id= ..) from the URL
$ID = $_GET["id"];

if (deleteData($ID) > 0){
   echo "
      <script>
         alert('Data has been deleted!');
         document.location.href = 'index.php';
      </script>";
}else{
   echo "
      <script>
         alert('Data has not been deleted!');
         document.location.href = 'index.php';
      </script>";
}
?>