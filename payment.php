<?php
require 'function.php';
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

    <!-- Header Start -->
    <?php include 'header.php';?>
    <!-- Header End -->

    <!-- Navbar Start -->
    <?php include 'navbar2.php'; ?>
    <!-- Navbar End -->

    <!-- Registration -->
    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5" style="border-radius: 10px; margin: 10px 0;">
                        <form class="py-5" action="function_payment.php" method="post" enctype="multipart/form-data">        
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;" name="payment_method">
                                    <option selected hidden>Select your payment method</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BRI">BRI</option>
                                    <option value="Mandiri">Mandiri</option>
                                    <option value="BSI">BSI</option>
                                    <option value="OVO">OVO</option>
                                    <option value="GoPay">GoPay</option>
                                    <option value="ShopeePay">ShopeePay</option>
                                    <option value="Dana">Dana</option>      
                                    <option value="LinkAja">LinkAja</option>    
                                </select>
                            </div>                       
                
                            <div class="form-group">
                                <input type="file" class="form-control border-0 py-1" name="bukti_bayar" id="bukti_bayar" value="Upload" required>
                            </div>
                            <div>
                                <button class="btn btn-dark btn-block border-0 py-3" type="submit" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h4 class="text-secondary mb-3">How would you like to pay?</h4>
                    <h1 class="display-4 mb-4"><span class="text-primary">Payment</span> Method</h1>            
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="text-truncate m-0"></h5>
                                </div>
                                <p>BCA 0123456789</p>
                                <p>BNI  0123456789</p>
                                <p>BRI 0123456789</p>
                                <p>Mandiri 0123456789</p>
                                <p>BSI 0123456789</p>                        
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="text-truncate m-0"></h5>
                                </div>
                                <p>OVO         0123456789</p>
                                <p>GoPay       0123456789</p>
                                <p>ShopeePay   0123456789</p>
                                <p>Dana        0123456789</p>
                                <p>LinkAja     0123456789</p> 
                            </div>
                        </div>
                  
                        </div>
                    </div>
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