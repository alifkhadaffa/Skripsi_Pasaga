<?php
//connect to db
$db = mysqli_connect('localhost' , 'root', '', 'pasaga') or die("can't connect to database");

//inisialisasi
$tanggal = "";
$jam = "";
$errors = array();

if (isset($_POST['submit'])) {
    $tanggal = mysqli_real_escape_string($db , $_POST['tanggal-pilihan']);
    $final_tanggal = date('Y-m-d' , strtotime($tanggal));
    $jam = time();
    $query = "INSERT INTO memesan(ID_Anggota, ID_Fasilitas, Tanggal_Transaksi, Status_Pembayaran, Status_Pemesanan, Jam_Pemesanan)
    VALUES ('{$_SESSION['id']}','1' , '$final_tanggal' , 'Pending' , 'Pending', '$jam')";
    $res = mysqli_query($db, $query);

    if($res){
        $_SESSION['success'] = "Your booking is on review";
        header('location: myBooking.php');
    }
    else{
        echo "Booking Gagal";
    }
}
?>