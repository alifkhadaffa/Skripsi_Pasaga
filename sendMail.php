<?php
use phpmailer\phpmailer\phpmailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['batalkanPesanan'])){
    $message = $_POST['message'];
    $emailTujuan = $_POST['emailTujuan'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'unparpasaga@gmail.com';
        $mail->Password = 'raisA6690';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('unparpasaga@gmail.com');
        $mail->addAddress($emailTujuan);

        $mail->isHTML(true);
        $mail->Subject = "Booking Lapangan Dibatalkan";
        $mail->Body = "<h3>Alasan Pembatalan: $message </h3>";
        $mail->Body .= "<h5> Pasaga Unpar <br> Address : Jl. Cisitu Indah VI, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135
        <br> Phone : (022) 20451999 </h5>";
        $mail->send();
        $alert = '<span>Message dikirim!</span>';
        header("Location: index.php");
    }

    catch(Exception $e){
        $alert = '<span>Terjadi kesalahan, Message gagal dikirim! </span>';
    }
}

if(isset($_POST['batalkanAnggota'])){
    $message = $_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'unparpasaga@gmail.com';
        $mail->Password = 'raisA6690';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('unparpasaga@gmail.com');
        $mail->addAddress('alifkhadaffaaa@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "Pendaftaran akun anggota Pasaga dibatalkan";
        $mail->Body = "<h3>Alasan Pembatalan: $message </h3>";
        $mail->Body .= "<h5> Pasaga Unpar <br> Address : Jl. Cisitu Indah VI, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135
        <br> Phone : (022) 20451999 </h5>";
        $mail->send();
        $alert = '<span>Message dikirim!</span>';
    }

    catch(Exception $e){
        $alert = '<span>Terjadi kesalahan, Message gagal dikirim! </span>';
    }
}

if(isset($_POST['btnAcceptPesanan'])){
    $emailTujuan = $_POST['emailTujuan'];
    $namaPemesan = $_POST['namaPeminjam'];
    $namaFasilitas = $_POST['namaFasilitas'];
    $tanggalPakai = $_POST['tanggalPakai'];
    $jamMulai = $_POST['jamAwal'];
    $jamSelesai = $_POST['jamSelesai'];
    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'unparpasaga@gmail.com';
        $mail->Password = 'raisA6690';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('unparpasaga@gmail.com');
        $mail->addAddress($emailTujuan);

        $mail->isHTML(true);
        $mail->Subject = "Pemesanan Lapangan Berhasil";
        $mail->Body = "<h3>Pembayaran sudah diterima.</h3>";
        $mail->Body .= "<h3 style='text-decoration:underline'>Info Pemesanan anda </h3>";
        $mail->Body .= "<h3>Fasilitas yang akan dipakai: </h3>".$namaFasilitas."<h3>Nama Pemesan: </h3>".$namaPemesan.
        "<h3>Tanggal pemakaian: </h3>".$tanggalPakai."<h3>Jam Mulai Pemakaian Fasilitas: </h3>".$jamMulai."<h3>Jam Selesai Pemakaian Fasilitas:</h3>".$jamSelesai."<br>"."<br>";
        $mail->Body .= "Terima kasih telah menggunakan fasilitas Pasaga Unpar, Selamat berolahraga!";
        $mail->Body .= "<br> <h5> Pasaga Unpar <br> Address : Jl. Cisitu Indah VI, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135
        <br> Phone : (022) 20451999 </h5>";
        $mail->send();
        $alert = '<span>Message dikirim!</span>';
        header("Location: statistik.php");
    }

    catch(Exception $e){
        $alert = '<span>Terjadi kesalahan, Message gagal dikirim! </span>';
    }
}
?>