<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '123456', 'userregistration') or die(mysqli_error($mysqli));

//Empty strings so that the edit button can work, otherwise values will take over placeholders.

$name = '';
$pass = '';
$email = '';
$update = false;
$id = 0;
$role = '';

if (isset($_POST['save'])) { //Data such as [name, email, password] is saved upon clicking 'save'.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $mysqli->query("INSERT INTO usertable (name, email, password) VALUES('$name' , '$email' , '$pass')") or 
    die($mysqli->error);

    $_SESSION['message'] = "Record has been saved.";
    $_SESSION['msg_type'] = "Success";

    header("location: admin-CRUD.php");
}

if (isset($_GET['delete'])){ //When the delete button is clicked, it will be deleted by 'id'.
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM usertable WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: admin-CRUD.php");
}

if (isset($_GET['edit'])){ //When edit is clicked, fetch the data and place them in the boxes
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM usertable WHERE id=$id") or die($mysqli->error());
    if ($result && mysqli_num_rows($result) == 1){
        $row = $result->fetch_array();
        $name = $row['name'];
        $pass = $row['password'];
        $email = $row['email'];
    } 
}

if (isset($_POST['update'])){ //When update is clicked, replace the input values accordingly [Name, Password, Email]
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    $mysqli->query("UPDATE usertable SET name='$name' , password='$pass' , email='$email' WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: admin-CRUD.php'); //Returns back to admin-CRUD instead of being stuck on processes

}

if (isset($_POST['exit'])){ //Exit button to return to login screen

    header('location: login.php');

}

/*                                                  //Testing admin login functions [DOES NOT WORK]
if(isset($_POST['submit-btn'])) { //Admin Login
    $name = $_POST['name'];
    $pass = $_POST['password]'];

    $query = "SELECT * FROM usertable WHERE name='$name' AND password='$pass'";
    $reuslt = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            if ($row['role'] == "Admin") {
                $_SESSION['LoginUser'] = $row['name'];
                header('location: admin-CRUD.php');
            } 
            else {
                $_SESSION['LoginUser'] = $row['name'];
                header('location: validation.php');    
            }
        }
    } else {
        $message = "Invalid Username or Password";
        header('location: login.php');
    }
}    
*/
?>