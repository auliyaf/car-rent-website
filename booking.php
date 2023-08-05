<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
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
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5" style="border-radius: 10px; margin: 10px 0;">
                        <form class="py-5" action="function.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" name="full_name" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" name="email" />
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;" name="your_city">
                                    <option selected hidden>Select your city</option>
                                    <option value="Jkt">Jakarta</option>
                                    <option value="YK">Yogyakarta</option>
                                    <option value="Sby">Surabaya</option>
                                    <option value="Klt">Kalimantan</option>
                                    <option value="Plb">Palembang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control" placeholder="Start Date" onfocus="(this.type='date')" name="start" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control" placeholder="End Date" onfocus="(this.type='date')" name="end" />
                                </div>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;" name="your_car">
                                    <option selected hidden>Select you car</option>
                                    <option value="avanza-at">Toyota Avanza Matic</option>
                                    <option value="avanza-mt">Toyota Avanza Manual</option>
                                    <option value="fortuner">Toyota Fortuner</option>
                                    <option value="aphard">Toyota Alphard</option>
                                    <option value="innova">Kijang Innova Reborn</option>
                                    <option value="mobilio-at">Honda Mobilio Matic</option>
                                    <option value="mobilio-mt">Honda Mobilio Manual</option>
                                    <option value="apv">Suzuki APV</option>
                                    <option value="r3-mt">Suzuki Ertiga Manual</option>
                                    <option value="r3-at">Suzuki Ertiga Matic</option>
                                    <option value="xpander">Mitsubishi Xpander</option>
                                    <option value="jeep">Jeep</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="custom-select border-0 px-4" style="height: 47px;" name="verif_option">
                                    <option selected hidden>Select your verification ID</option>
                                    <option value="ktp">Kartu Tanda Penduduk</option>
                                    <option value="sim">Surat Izin Mengemudi</option>
                                    <option value="passport">Passport</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control border-0 py-1" name="idPhoto" id="idPhoto" value="Upload" required>
                            </div>
                            <div>
                        
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit" name="book">Book Now</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h4 class="text-secondary mb-3">Mau healing, tapi takut panas?</h4>
                    <h1 class="display-4 mb-4"><span class="text-primary">Sewa</span>in aja!</h1>
                    <p>Maksimalkan healing-mu bersama keluarga atau kerabat terdekat bersama Kami.</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fi fi-br-car text-secondary m-0 mr-3" style="font-size:2.5em; display: flex; align-items: center;"></i>
                                    <h5 class="text-truncate m-0">Up to 7 Seater</h5>
                                </div>
                                <p>Menyediakan mobil berkapasitas mulai dari 4 hingga 7 penumpang</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fi fi-br-map-marker text-secondary m-0 mr-3" style="font-size:2.5em; display: flex; align-items: center;"></i>
                                    <h5 class="text-truncate m-0">Around Indonesia</h5>
                                </div>
                                <p>Tersebar di 5 kota besar Indonesia (Jakarta, Yogyakarta, Surabaya, Kalimantan, dan Palembang)</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fi fi-br-time-twenty-four text-secondary m-0 mr-3" style="font-size:2.5em; display: flex; align-items: center;"></i>
                                    <h5 class="text-truncate m-0">24 Hours Service</h5>
                                </div>
                                <p class="m-0">Pelayanan 24 jam mulai dari pagi hingga pagi</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fi fi-br-steering-wheel text-secondary m-0 mr-3" style="font-size:2.5em; display: flex; align-items: center;"></i>
                                    <h5 class="text-truncate m-0">Driver</h5>
                                </div>
                                <p class="m-0">Males nyetir? Pake driver juga bisa! Nyetir sendiri pun bisa!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <!-- Javascript -->
    <?php include 'js.php'; ?>
</body>

</html>