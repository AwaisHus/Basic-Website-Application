<!DOCTYPE html>
<html>

    <head>  
        <title>Login and Registration</title>
        <link rel="stylesheet" href="style.css"> <!--Adding styling to login.php page via style.css-->
    </head>

    <body>

        <?php include "process.php";?> <!--Involving process.php, where all functions for this page is involved via php-->

        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div> <!--Login & Register-->
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                    <div class="social-icons"> <!--Facebook, Twitter, Google Icons-->
                    <img src="fb.png">
                    <img src="tw.png">
                    <img src="gp.png">
                    </div>

                    <!--Login Form-->
                    <form action="validation.php" id="login" class="input-group" method="post">
                        <input type="text" class="input-field" placeholder="User Id" name="user" required>
                        <input type="password" class="input-field" placeholder="Enter Password" name="pass" required>
                        <input type="checkbox" class="check-box"><span>Remember Password</span>
                        <button type="submit" class="submit-btn">Log in</button>
                    </form>
                    
                    <!--Registration Form-->
                    <form action="register.php" id="register" class="input-group" method="post">
                        <input type="text" class="input-field" placeholder="User Id" name="user" required>
                        <input type="email" class="input-field" placeholder="Email ID" name="email" required>
                        <input type="password" class="input-field" placeholder="Enter Password" name="pass" required>
                        <input type="checkbox" class="check-box"><span>I agree to the terms and conditions.</span>
                        <button type="submit" class="submit-btn">Register</button>
                    </form>
                    
                </div>    
            </div>    
        </div>
                <!--Setting positions for the login and register fields-->
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register() {
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px";
            }

            function login() {
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0";
            }

        </script>

    </body>
    
</html>