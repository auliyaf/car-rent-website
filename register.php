<?php
require 'function.php';

    if (isset($_POST["daftar"])) {
        if ( registrasi($_POST) > 0) {
            //mengarah ke halaman login
            header("Location: login.php");
        }
        else {
            echo mysqli_error ($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
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

    <!-- Registration -->
    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h1 class="display-4 m-0">Register <span class="text-primary">Here</span></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="" method="post">
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="nama" name="nama" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control p-4" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control p-4" id="password" name="password" placeholder="Make Your Password" required="required" data-validation-required-message="Please enter your password" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="password" class="form-control p-4" id="password2" name="password2" placeholder="Confirm Your Password" required="required" data-validation-required-message="Please enter your confirmation password" />
                            <p class="help-block text-danger"></p>
                        </div>    
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit" name="daftar" id="RegisterButton">Register</button>
                        </div>
                        <div class="text-center">
                            <p>Already have an account? <a href="login.php">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

    <<!-- Footer Start -->
    <?php include 'footer.php';?>
    <!-- Footer End -->

    <!-- Javascript -->
    <?php include 'js.php';?>
</body>

</html>