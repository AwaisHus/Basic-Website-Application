<!DOCTYPE html>
<html>
    <head>
        <title>admin CRUD</title>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <scipt src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    </head>


    <body>
    
        <?php require_once 'process.php'; //Accepting code from process.php


        if (isset($_SESSION['message'])): ?>

        <div class="alert alert-<?=$_SESSION['msg_type']?>"> <!--Creating the alert when making changes [Edit, Delete]-->
            
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif; ?>


        <div class="container"> <!--Adding padding to our all our page contents-->

            <?php //Gaining access to mySQL database to use in this page
                $mysqli = new mysqli('localhost', 'root', '123456', 'userregistration') or die(mysqli_error($mysqli));
                $result = $mysqli->query("SELECT * FROM usertable") or die($mysqli->error);
            ?>

                <div class="row justify-content-center"> <!--Creating table for storing user data-->
                    <table class="table"> 
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Password</th>
                                <th>Email<th>
                            </tr>
                        </thead>


                    <?php //Creating a loop that fetches each data from each ROW in mySQL database
                        while ($row = $result->fetch_assoc()): //Fetches user data in the SQL table
                    ?>
                    <tr>
                        <td> <?php echo $row['name']; ?> </td>     <!--Displays all name variables-->
                        <td> <?php echo $row['password']; ?> </td> <!--Displays all password variables-->
                        <td> <?php echo $row['email']; ?> </td>    <!--Displays all email variables-->
                        
                        <td>    <!--Creating edit and delete buttons-->
                            <a href="admin-CRUD.php?edit=<?php echo $row['id']; ?>" 
                            class="btn btn-info">Edit</a>                           <!--Edit button with bootstrap style-->
                            <a href="process.php?delete=<?php echo $row['id']; ?>"  
                            class="btn btn-danger">Delete</a>                       <!--Delete button with bootstrap style-->
                        </td>
                    </tr>
                    <?php endwhile; ?> 
                    </table>
                </div>

            <?php //Creating the array layout for the page

                function pre_r ($array) {
                    echo '<pre>';
                    print_r($array);
                    echo '</pre>';
                }

            ?>

            <div class="row justify-content-center">
                <form action="process.php" method="POST"> <!--Creating the admin panel for adding users-->
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $pass; ?>" class="form-control" placeholder="Enter your password"> 
                    </div>
                    <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                    
                    <?php //If the edit button is pressed, it changes 'SAVE' to 'UPDATE'.
                    if ($update == true):
                    ?>
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    <?php endif; ?>
                        <button type="submit" class="btn btn-primary" name="exit">Exit</button>
                    </div>
                    
                </form>
            </div>
        
        </div>


    </body>

</html>