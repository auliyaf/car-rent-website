<?php
    require "harga.php";
    // require "function.php"; 
    
    $id = $id_akhir;
    mysqli_query($conn, "DELETE FROM booking_list WHERE id = $id");


    // if (hapus($id) > 0) {
    //     echo "
    //         <script> 
    //             alert('Pesanan berhasil dihapus!');
    //             document.location.href 'booking.php';
    //         </script>
    //     ";
    // } else {
    //     echo "
    //         <script> 
    //             alert('Pesanan gagal dihapus!');
    //             document.location.href 'booking.php';
    //         </script>
    //     ";
    // };
?>