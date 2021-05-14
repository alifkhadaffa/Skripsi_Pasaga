<?php
use phpmailer\phpmailer\phpmailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

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
?>