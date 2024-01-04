<!-- In HTTP req and res, there is data called header
    Header usually used for sending metadata from client to server or server to client, excluded URL, METHOD, and BODY
    in PHP we can create header as response from server to client by using header(key: value) function
    and we can get the header from client to server by using global variable $_SERVER

    KEY in header automatically change into UPPERCASE and if there is dash (-) it will be change into underscore (_)
    example: Content-Type will be change into CONTENT_TYPE

    to distinguish the request header, there was HTTP_ prefix
-->

<?php
  header("Content-Type: application/json");
  header("X-Powered-By: Indra Brata");

  $client = $_SERVER["HTTP_USER_AGENT"];
  echo "Hello $client";
?>