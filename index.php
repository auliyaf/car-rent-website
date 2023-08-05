<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sewain</title>
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

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/car-1.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Best Rental Cars Services</h3>
                            <h1 class="display-3 text-white mb-3">Make Your Trip Happy</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">No need to worry about transportation. Just enjoy your trip!</h5>                        
                            <?php 
                                if (isset($_SESSION["login"])) {
                                    include 'carousel1.php';
                                } else {
                                    include 'carousel2.php';                                
                                }
                            ?>                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/car-2.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Best Rental Cars Services</h3>
                            <h1 class="display-3 text-white mb-3">Rental Cars For Your Trip</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">What car do you need? Rent all here.</h5>
                            <?php 
                                if (isset($_SESSION["login"])) {
                                    include 'carousel1.php';
                                } else {
                                    include 'carousel2.php';                                
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">About Us</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Sewain</span> <span class="text-secondary">aja!</span></h1>
                <h5 class="text-muted mb-3">Mau liburan tapi bingung transportasi?</h5>
                <p class="mb-4">Aduh itu sih udah nggak jaman. Percayakan transportasi liburanmu bersama kami! Tinggal pesan, bayar, dan nikmati kemudahan perjalananmu bersama Sewain.</p>
                <ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Around Indonesia</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>24 hours services</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Driver</h5></li>
                </ul>
                <a href="about.php" class="btn btn-lg btn-primary mt-3 px-4">Learn More</a>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="img/about1.jpeg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about2.jpeg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about3.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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
            </div>
            <a href="ourcar.php" class="btn btn-lg btn-secondary mt-3 px-4">More Cars</a>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <!-- Testimonial Start -->
    <div class="container-fluid bg-white my-5 p-0 py-5">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Testimonial</h4>
                <h1 class="display-4 m-0">Our Client <span class="text-primary">Says</span></h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="bg-light mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Rudi</h5>
                            <i>Malang</i>
                        </div>
                    </div>
                    <p class="m-0">Sewain beneran ngebantu banget buat traveling, bikin perjalanan lebih hemat dan nyaman. Fix bakal langganan sih.</p>
                </div>
                <div class="bg-light mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Alexander</h5>
                            <i>Jakarta</i>
                        </div>
                    </div>
                    <p class="m-0">Pelayanannya cepat dan bagus. Sangat membantu untuk perjalanan selama liburan. Thank you Sewain!</p>
                </div>
                <div class="bg-light mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Issac</h5>
                            <i>Surabaya</i>
                        </div>
                    </div>
                    <p class="m-0">Dulu tiap mau traveling pasti bingung transportasi. Sekarang udah ngga bingung lagi berkat Sewain.</p>
                </div>
                <div class="bg-light mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Bambang</h5>
                            <i>Semarang</i>
                        </div>
                    </div>
                    <p class="m-0">Sewain benar-benar membantu perjalanan liburan saya bersama keluarga.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    
    <!-- Footer Start -->
    <?php include 'footer.php';?>
    <!-- Footer End -->

    <!-- Javascript -->
    <?php include 'js.php';?>
</body>

</html>