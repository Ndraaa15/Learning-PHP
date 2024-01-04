<?php

if(isset($_GET["key"]) && $_GET["key"] == "123") {
  echo "Download file";
  header("Content-Disposition: attachment; filename=111.jpg");
  header("Content-Type: image/jpeg");
  readfile("../upload-file/file/111.jpg");
  exit();
} else {
  echo "Invalid Key";
}

?>