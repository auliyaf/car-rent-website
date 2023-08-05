<?php
session_start();
require "harga.php";
require "function.php";

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    // exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Book yours - Sewain</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <?php include 'tools.php'; ?>
</head>

<body>
    <!-- Topbar Start -->
    <?php include 'header.php'; ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php include 'navbar2.php'; ?>
    <!-- Navbar End -->

    <!-- Booking Start -->
    <div class="container-fluid">
        <form action="function.php" method="post">
            <div class="container">
                <div style="margin: 25px 0">
                    <h4><center>Summary Order</center></h4>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                            </div>
                            <div class="panel-body">
                                <table class="table borderless">
                                    <tbody>
                                        <tr>
                                            <td class="col-md-3">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="media-heading"> Car Merk : <?php echo $namamobil;?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">Per Hari: <br>Rp. <?php echo $harga;?></td>
                                            <td class="text-center">Jumlah Hari: <?php echo $days;?></td>
                                            <td class="text-right">Total: <br>Rp. <?php echo $total_harga;?></td>                                            
                                            <td class="text-right"><button type="submit" name="remove" class="btn btn-danger">Remove</button></td> 
                                            <!-- <td class="text-right"><button type="button" class="btn btn-danger"><a href="remove.php?id="></a></button></td> -->
                                            <td class="text-right"><button type="submit" name="edit" class="btn btn-danger">Edit</button></td>                                            
                                        </tr>                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="margin-left: 15%;">
                        <div class="panel-heading text-center">
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <strong>Subtotal</strong>
                                <div class="pull-right"><span>Rp. </span><span><?php echo $total_harga;?></span></div>
                            </div>
                            <div class="col-md-12">
                                <strong>Tax (5%)</strong>
                                <div class="pull-right"><span>Rp. </span><span><?php echo $tax;?></span></div>
                            </div>
                            <div class="col-md-12">
                                <strong>Order Total</strong>
                                <div class="pull-right"><span>Rp. </span><span><?php echo $total_hargatax;?></span></div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="text-align:center; width: 50%; margin: 3% auto;">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="checkout">Checkout</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Booking Start -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <!-- Javascript -->
    <?php include 'js.php'; ?>
</body>

</html>