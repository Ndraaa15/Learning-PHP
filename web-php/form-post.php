<!-- FORM usually used for sending data from client to server -->
<!-- By default method in form is GET, so when we send the form, the data will sent by query params that catch use $_GET in PHP -->

<!-- But if we used POST method in form, the request from client to server by automatically change into POST -->
<!-- It makes the request is send via request body not query params -->
<!-- we need to use global variable $_POST in server side to get the data -->
<!-- global variable $_POST include array of data that send from client to server -->