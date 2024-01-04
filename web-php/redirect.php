<!-- Redirect is using keyword Location in header -->

<?php
  header('Location: http://www.google.com');
  exit(); //make sure no other content is sent or executed after redirect
?>