<?php

    //Logging out terminates the session and redirects you to login.php.

    session_start();
    session_destroy();

    header('location:login.php');

?>