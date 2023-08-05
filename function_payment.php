<?php
require 'harga.php';
session_start();
if (isset($_POST["submit"]) && isset($_FILES["bukti_bayar"])) {
    $payment_method = $_POST['payment_method'];
    $file_name = $_FILES['bukti_bayar']['name'];
    $file_size = $_FILES['bukti_bayar']['size'];
    $error = $_FILES['bukti_bayar']['error'];
    $tmpName = $_FILES['bukti_bayar']['tmp_name'];

    if ($error === 0) {
        if ($file_size > 1000000) {
            echo '<script>
                        alert("Your file is too large! Please choose file under 1MB!");history.go(-1);
                        </script>';
           
        } else {
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $file_ext_lc = strtolower($file_ext);

            $allowed_ext = array('jpg', 'jpeg', 'png');

            if (in_array($file_ext_lc, $allowed_ext)) {
                $new_file_name = uniqid("$verif_option-", true) . '.' . $file_ext_lc;
                $file_upload_path = "images/bukti_bayar/" . $new_file_name;
                move_uploaded_file($tmpName, $file_upload_path);

                //insert into database
                $query = "INSERT INTO payment (payment_method, bukti_bayar) VALUES ('$payment_method','$new_file_name')";
                $query_run = mysqli_query($conn, $query);
                require ("fpdf/fpdf.php");
                $pdf = new FPDF();
                $pdf-> AddPage();
                ob_start(); 
                $pdf->output();
                header("Location: form.php");
            } else {
                echo '<script>
                        alert("File not supported. Please choose .jpg/.jpeg/.png file!");history.go(-1);
                    </script>';               
            }
        }
    } 
    else {
        echo '<script>
                alert("Unknown error occured!");history.go(-1);
                </script>';
       
    }    
} 
