<?php
require 'harga.php';

//if (isset($_POST["submit"])) {
 require ("fpdf/fpdf.php");
 $pdf = new FPDF();
 $pdf-> AddPage();

$sql_id = mysqli_query($conn, "SELECT MAX(id) from payment");
//data id tertinggi
$data_id = mysqli_fetch_array($sql_id);
// ambil id terbesar
$id_akhir = $data_id['MAX(id)'];

$payment_method = mysqli_query($conn, "SELECT payment_method FROM payment WHERE id='$id_akhir'");
$paymentMethod = mysqli_fetch_array($payment_method);
$method = $paymentMethod['payment_method'];
echo $method;

$pdf->SetFont("Arial","B",16);
 $pdf->Cell(0,10,"Rincian Pemesanan",1,1,"C");


 $pdf->SetFont("Arial","I",12);
 $pdf->Cell(0,10,"Nama Mobil : {$namamobil}",1,1);
 
 $pdf->SetFont("Arial","I",12);
 $pdf->Cell(0,10,"Jumlah Hari : {$days}",1,1);
 
 $pdf->SetFont("Arial","I",12);
 $pdf->Cell(0,10,"Harga Perhari : {$harga}",1,1);
 
 $pdf->SetFont("Arial","I",12);
 $pdf->Cell(0,10,"Subtotal : {$total_harga}",1,1);
 
 $pdf->SetFont("Arial","I",12);
 $pdf->Cell(0,10,"Pajak (5%) : {$tax}",1,1);
 
 $pdf->SetFont("Arial","I",12);
 $pdf->Cell(0,10,"Total : {$total_hargatax}",1,1);
 
$pdf->SetFont("Arial","I",12);
$pdf->Cell(0,10,"Metode Pembayaran : {$method}",1,1);
//$pdf->Cell(50,10,$method,1,0);

ob_start(); 
$pdf->output();
?>