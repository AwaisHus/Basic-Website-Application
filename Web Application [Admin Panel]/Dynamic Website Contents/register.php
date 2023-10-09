<?php

    session_start();
    header('refresh:3;url=login.php');

    $con = mysqli_connect('localhost','root','123456'); //Connecting to server

    mysqli_select_db($con, 'userregistration'); //Select database

    $name = $_POST['user']; //Stores the name from the form
    $email = $_POST['email']; //Stores email from the form
    $pass = $_POST['pass']; //Stores the password from the form

    $s = " select * from usertable where name = '$name'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1) { //Checks for duplicate usernames
        echo" Username is already taken";
    } else {
        $reg = " insert into usertable (name, email, password) values ('$name' , '$email' , '$pass')";
        mysqli_query($con, $reg);
        echo " Registration Successful, Redirecting to log in...";
    }



?>