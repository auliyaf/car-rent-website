<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Our Cars</title>
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

    <!-- Pricing Plan Start -->
    <div class="container-fluid bg-light pt-5 pb-4">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Pricing Plan</h4>
                <h1 class="display-4 m-0">Choose the <span class="text-primary">Best Price</span></h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/avanza.jpeg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Toyota Avanza</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>350k<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Day</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Max 7 People</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Weekly Rent</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Monthly Rent</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="booking.php" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/ertiga.jpeg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-secondary mb-3">Suzuki Ertiga</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>370k<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Day</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Max 9 People</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Weekly Rent</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Monthly Rent</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="booking.php" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/apv.jpeg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Suzuki APV</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>370k<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Day</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Max 9 People</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Weekly Rent</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Monthly Rent</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="booking.php" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/mobilio.jpeg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-secondary mb-3">Honda Mobilio</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>350k<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Day</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Max 7 People</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Weekly Rent</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Monthly Rent</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                        <a href="booking.php" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/xpander.jpeg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Mitsubishi Expander</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>450k<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Day</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Max 7 People</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Weekly Rent</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Monthly Rent</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="booking.php" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/innova.jpeg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-secondary mb-3">Innova Reborn</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>500k<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Day</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Max 7 People</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Weekly Rent</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Monthly Rent</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="booking.php" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/fortuner.jpeg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Toyota Fortuner</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>1500k<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Day</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Max 6 People</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Weekly Rent</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Monthly Rent</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="booking.php" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/alphard.jpeg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-secondary mb-3">Toyota Alphard</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>2000k<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Day</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Max 6 People</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Weekly Rent</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Monthly Rent</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="booking.php" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="img/jeep.jpeg" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Jeep</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">Rp</small>600k<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Day</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Max 6 People</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Weekly Rent</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>Monthly Rent</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="booking.php" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <!-- Footer Start -->
    <?php 
        include 'footer.php';
    ?>
    <!-- Footer End -->

    <!-- Javascript -->
    <?php include 'js.php';?>
</body>

</html>