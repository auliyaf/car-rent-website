<?php  
   //  require "function.php"; 
   $harga = 0;

   $conn = mysqli_connect("localhost", "root", "", "sewain");
   //id tertinggi
   $sql_id = mysqli_query($conn, "SELECT MAX(id) from booking_list");
   //data id tertinggi
   $data_id = mysqli_fetch_array($sql_id);
   // ambiil id terbesar
   $id_akhir = $data_id['MAX(id)'];

   $mobil = mysqli_query($conn, "SELECT your_car FROM booking_list WHERE id='$id_akhir'");
   $hari = mysqli_query($conn, "SELECT count_days FROM booking_list WHERE id='$id_akhir'");
   $nama_mobil =  mysqli_fetch_array($mobil);
   $jumlah_hari =  mysqli_fetch_array($hari);
   $namamobil = $nama_mobil['your_car'];

   if ($nama_mobil['your_car'] === "fortuner") {
       $harga = 1500000;
       $namamobil = "Toyota Fortuner";
   } else if ($nama_mobil['your_car'] === "xpander") {
       $harga = 450000;
       $namamobil = "Mitsubishi Expander";
   } else if ($nama_mobil['your_car'] === "avanza-mt"){
      $harga = 350000;
      $namamobil = "Toyota Avanza Manual";
   } else if ($nama_mobil['your_car'] === "avanza-at"){
      $harga = 350000;
      $namamobil = "Toyota Avanza Matic";
   } else if ($nama_mobil['your_car'] === "r3-mt"){
      $harga = 370000;
      $namamobil = "Suzuki Ertiga Manual";
   } else if ($nama_mobil['your_car'] === "r3-at"){
      $harga = 370000;
      $namamobil = "Suzuki Ertiga Matic";
   } else if ($nama_mobil['your_car'] === "apv"){
      $harga = 370000;
       $namamobil = "Suzuki APV";
   } else if ($nama_mobil['your_car'] === "mobilio-at"){
      $harga = 350000;
       $namamobil = "Honda Mobilio Matic";
   } else if ($nama_mobil['your_car'] === "mobilio-mt"){
      $harga = 350000;
       $namamobil = "Honda Mobilio Manual";
   } else if ($nama_mobil['your_car'] === "innova"){
      $harga = 500000;
       $namamobil = "Innova Reborn";
   } else if ($nama_mobil['your_car'] === "aphard"){
      $harga = 2000000;
       $namamobil = "Toyota Alphard";
   } else if ($nama_mobil['your_car'] === "jeep"){
      $harga = 600000;
      $namamobil = "Jeep";
   }

   $days = $jumlah_hari['count_days'];
   $total_harga = $harga * $days;

   $tax = $total_harga * 0.1;

   $total_hargatax = $total_harga + $tax;
?>