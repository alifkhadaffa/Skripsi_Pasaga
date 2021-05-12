<?php
use phpmailer\phpmailer\phpmailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submitMasukan'])){
    $sender = $_POST['emailSender'];
    $subject = $_POST['subjectMail'];
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
        $mail->addAddress('unparpasaga@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "Masukkan & Saran ($subject)";
        $mail->Body = "<h3>Sender: $sender <br> Message: $message </h3>";

        $mail->send();
        $alert = '<span>Message dikirim! terima kasih atas masukannya. </span';
    }

    catch(Exception $e){
        $alert = '<span>Terjadi kesalahan, Message gagal dikirim! </span';
    }
}

?>