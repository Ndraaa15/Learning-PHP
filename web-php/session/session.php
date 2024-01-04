<!-- Session is mechanism that use to remember last interaction from client -->
<!-- Session is technique we can save client information in server, so when we got same req from same client we can know in server -->
<!-- Example : after login, we will create session so for next request, the req will bring that session -->
<!-- Session is usually used for authentication -->
<!-- Global Variable $_SESSION (Included sessiond data) -->
<!-- We need to use session start first -->
<!-- If not using session_start first so the data will be not claimed -->

<!-- Session is saved in file (in server) cuz that not recommended to save big data in session -->
<!-- This also impact the scalability because when 2 PHP web run in more than one server, the session can be dissapear when its send req to another server -->