<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        header('location:login.php'); //Prevents people logging in without account
    }

    header('refresh:3;url=userhomepage.php'); //Redirecting user to homepage once successfully logged in
    
?>

<html>
<head>
    
    <title>Homepage</title>

</head>

<body> <!--Logout button in redirection page in case of a connection error-->

   <h1>Welcome <?php echo $_SESSION['username']; ?>, Please wait...</h1>

   <a href="logout.php">Emergency Log out</a>

</body>

</html>