<?php

//menyambung ke database
$conn = mysqli_connect("localhost", "root", "", "sewain");
$result = mysqli_query($conn, "SELECT * FROM mobil ORDER BY id DESC");

    $sql_id = mysqli_query($conn, "SELECT MAX(id) from booking_list");
   //data id tertinggi
   $data_id = mysqli_fetch_array($sql_id);
   // ambiil id terbesar
   $id_akhir = $data_id['MAX(id)'];

function registrasi($data) {
    global $conn;

    $nama = $data["nama"];
    $email = $data["email"];
    $password = $data["password"];

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //masukkan data user ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$nama', '$email', '$password')");

    return mysqli_affected_rows($conn);
}

if (isset($_POST["book"]) && isset($_FILES["idPhoto"])) {
    $fullName = $_POST['full_name'];
    $email = $_POST['email'];
    $start_date = date('Y-m-d', strtotime($_POST['start']));
    $count_days = $_POST['end'];
    $your_car = $_POST['your_car'];
    $verif_option = $_POST['verif_option'];
    $your_city = $_POST['your_city'];

    $file_name = $_FILES['idPhoto']['name'];
    $file_size = $_FILES['idPhoto']['size'];
    $error = $_FILES['idPhoto']['error'];
    $tmpName = $_FILES['idPhoto']['tmp_name'];

    if ($error === 0) {
        if ($file_size > 1000000) {
            echo '<script>
                        alert("Your file is too large! Please choose file under 1MB!");history.go(-1);
                        </script>';
            // $em = "Sorry, your image is too large.";
            // header("Location: booking.php?error=$em");
        } else {
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $file_ext_lc = strtolower($file_ext);

            $allowed_ext = array('jpg', 'jpeg', 'png');

            if (in_array($file_ext_lc, $allowed_ext)) {
                $new_file_name = uniqid("$verif_option-", true) . '.' . $file_ext_lc;
                $file_upload_path = "images/user_id_photos/" . $new_file_name;
                move_uploaded_file($tmpName, $file_upload_path);

                //insert into database
                $query = "INSERT INTO booking_list (namaFile, full_name, email, start_date, count_days, your_car, verif_option, your_city) VALUES ('$new_file_name','$fullName','$email','$start_date', '$count_days','$your_car','$verif_option', '$your_city')";
                $query_run = mysqli_query($conn, $query);    
                header("Location: orderreview.php");
            } else {
                echo '<script>
                        alert("File not supported. Please choose .jpg/.jpeg/.png file!");history.go(-1);
                        </script>';
            }
        }
    } else {
        echo '<script>
                alert("Unknown error occured!");history.go(-1);
                </script>';
    }
} else if (isset($_POST["remove"])) {  
    $query = "DELETE FROM `booking_list` WHERE id = '$id_akhir'";  
    $run = mysqli_query($conn,$query);  
    if ($run) {  
         header('location:booking.php');  
    }else{  
         echo "Error: ".mysqli_error($con);  
    }  
}  else if (isset($_POST["edit"])) {  
    // $id = $_GET['id'];  
    $query = "DELETE FROM `booking_list` WHERE id = '$id_akhir'";  
    $run = mysqli_query($conn,$query);  
    if ($run) {  
         header('location:booking.php');  
    }else{  
         echo "Error: ".mysqli_error($con);  
    }  
} else if (isset($_POST["checkout"])) {  
    header('location:payment.php');
}

?>
