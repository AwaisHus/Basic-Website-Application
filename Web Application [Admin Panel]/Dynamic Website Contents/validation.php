<?php

    session_start();
    require_once "connection.php"; //Used for validating connection to the server.

    $con = mysqli_connect('localhost','root','123456'); //Connecting to server

    mysqli_select_db($con, 'userregistration'); //Select database


    $name = $_POST['user']; //Stores the name from the form
    $pass = $_POST['pass']; //Stores the password from the form

    $s = " select * from usertable where name = '$name' && password ='$pass'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    
    if($num == 1) { //Checks for valid account
        $_SESSION['username'] = $name;
        header('location:home.php');
    } else {
        header('location:login.php'); //Return here if login fails.
    }


    

?>