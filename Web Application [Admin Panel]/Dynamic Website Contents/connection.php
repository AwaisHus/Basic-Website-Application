<?php 

$conn = mysqli_connect('localhost','root','123456', 'userregistration');

if(!$conn){ //Connecting to the database, required in 'validation.php'
    echo "Connection Successful";
} else {
    "Connection Failed";
}

?>