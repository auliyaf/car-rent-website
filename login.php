<?php
session_start();

require 'function.php';

    if (isset($_POST["login"])) {
        
        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

        //cek apakah username terdaftar
        if (mysqli_num_rows($result) === 1) {
            //cek apakah password benar
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {
                //set session
                $_SESSION["login"] = true;

                //mengarah ke halaman index
                header("Location: index.php");
                exit;
            }
        }        
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <?php include 'tools.php';?>
</head>

<body>
    <?php
        //header start 
        include 'header.php';
        
        //navbar start
        if (isset($_SESSION["login"])) {
            include 'navbar2.php';
        } else {
            include 'navbar1.php';
        }
    ?>

    <!-- Login -->
    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h1 class="display-4 m-0">Log<span class="text-primary">in</span></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 mb-5">
                <div class="contact-form">
                    <form action="" method="post">
                        <div class="control-group">
                            <input type="email" class="form-control p-4" id="email" name="email" placeholder="Enter Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control p-4" id="password" name="password" placeholder="Enter Your Password" required="required" data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div>  
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit" name="login" id="LoginButton">Login</button>
                        </div>
                        <div class="text-center">
                            <p>Don't have an account? <a href="register.php">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Login End -->

    <!-- Footer Start -->
    <?php include 'footer.php';?>
    <!-- Footer End -->

    <!-- Javascript -->
    <?php include 'js.php';?>
</body>

</html>