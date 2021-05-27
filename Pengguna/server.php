<?php

session_start();

//inisialisasi variabel
$name = "";
$email = "";
$password = "";
$password2 = "";
$id = "";
$errors = array();
//connect to db
$db = mysqli_connect('localhost' , 'root', '', 'pasaga') or die("can't connect to database");

//register user
if(isset($_POST['btnRegister'])){
$name = mysqli_real_escape_string($db , $_POST['name']);
$email = mysqli_real_escape_string($db , $_POST['email']);
$password = mysqli_real_escape_string($db , $_POST['password']);
$password2 = mysqli_real_escape_string($db , $_POST['password2']);
$phone = mysqli_real_escape_string($db , $_POST['phone']);
$nik = mysqli_real_escape_string($db , $_POST['nik']);
}
//form validation
if($password != $password2) {
    array_push($errors, "Password do not match");
}

//Check database jika ada user dengan email yang sama
$user_check_query = "SELECT * FROM anggota WHERE Email = '$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){
    if($user['Email'] === $email){
        array_push($errors, "This email is already registered");
    }
}

//Register user jika tidak ada error
if(count($errors) == 0){
    // List of allowed domains
        $allowed = [
            'unpar.ac.id',
            'student.unpar.ac.id'
        ];

        if (filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // Separate string by @ characters (there should be only one)
            $parts = explode('@', $email);
        
            // Remove and return the last part, which should be the domain
            $domain = array_pop($parts);
        
            // Check if the domain is in our list
            if ( ! in_array($domain, $allowed))
            {
                $query = "INSERT INTO anggota (Nama,Email,Nomor_Handphone,Password,NIK,Asal_Instansi) VALUES ('$name' , '$email', '$phone' , '$password' , '$nik' , 'Umum')";
                mysqli_query($db, $query);
                $_SESSION["name"] = $name;
                $_SESSION["id"] = $id;
                $_SESSION['success'] = "You are now registered";

                header('location: login.php');
            }
            else{
                $query = "INSERT INTO anggota (Nama,Email,Nomor_Handphone,Password,NIK,Asal_Instansi) VALUES ('$name' , '$email', '$phone' , '$password' , '$nik' , 'Unpar')";
                mysqli_query($db, $query);
                $_SESSION['name'] = $name;
                $_SESSION['id'] = $id;
                $_SESSION['success'] = "You are now registered";

                header('location: login.php');
            }
        }
}

if(isset($_POST['btnLogin'])){
    $name = "";
    $email = mysqli_real_escape_string($db , $_POST['login-email']);
    $password = mysqli_real_escape_string($db , $_POST['login-password']);
    if(empty($email)){
        array_push($errors, "Email is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0){
        $query = "SELECT * FROM anggota WHERE Email='$email' AND Password='$password'";
        $res = mysqli_query($db, $query);
        $row  = mysqli_fetch_array($res);
    if(is_array($row)){
        $_SESSION["name"] = $row['Nama'];
        $_SESSION["id"] = $row['ID_Anggota'];
        $_SESSION["password"] = $row['Password'];
        $_SESSION["email"] = $row['Email'];
        $_SESSION["Nomor_Handphone"] = $row['Nomor_Handphone'];
        $_SESSION['success'] = "You are now logged in";
        
    }
    else{
        array_push($errors, "Wrong email/password");
    }
    if(isset($_SESSION["id"])) {
        header('location: home-logged.php');
    }
    }
}

if (isset($_POST['btnConfirm'])) {
    $tanggal = mysqli_real_escape_string($db , $_POST['tanggal-pilihan']);
    $final_tanggal = date('Y-m-d' , strtotime($tanggal));
    $jam = time();
    $query = "INSERT INTO memesan(ID_Anggota, ID_Fasilitas, Tanggal_Pemakaian, Status_Pembayaran, Status_Pemesanan, Jam_Pemesanan)
    VALUES ('{$_SESSION['id']}','1' , '$final_tanggal' , 'Pending' , 'Pending', NOW())";
    $res = mysqli_query($db, $query);

    if($res){
        $_SESSION['success'] = "Your booking is on review";
        header('location: myBooking.php');
    }
    else{
        echo "Booking Gagal";
    }
}

if(isset($_POST['btnEdit'])){
    $namaBaru =  $_POST['name'];
    $emailBaru = $_POST['email'];
    $nomorhp = $_POST['Nomor_Handphone'];
    $password = $_POST['password'];
    $query = "UPDATE anggota SET Nama = '$namaBaru', Email = '$emailBaru', Nomor_Handphone = '$nomorhp' , Password = '$password' WHERE ID_Anggota = '{$_SESSION['id']}'";
    $res = mysqli_query($db,$query);
    if($res){
        $_SESSION['success'] = "Your booking is on review";
        $_SESSION['name'] = $namaBaru;
        $_SESSION['password'] = $password;
        $_SESSION['email'] = $emailBaru;
        $_SESSION['Nomor_Handphone'] = $nomorhp;
        header('location: editProfile.php');
    }
    else{
        echo "Update Profile Gagal";
    }
}

//Batalkan pesanan dari user
if(isset($_POST['btnDeletePesanan'])){
    $idPemesanan = $_POST['IdPemesanan'];
    $queryDelete = "DELETE FROM memesan WHERE ID_Pemesanan = $idPemesanan AND ID_Anggota = $_SESSION[id] ";
    $res = mysqli_query($db,$queryDelete);
}

//Batalkan pesanan dari admin
if(isset($_POST['batalkanPesanan'])){
    $idPemesanan = $_POST['IdPemesanan'];
    $queryDelete = "DELETE FROM memesan WHERE ID_Pemesanan = $idPemesanan";
    $res = mysqli_query($db,$queryDelete);
}

//Konfirmasi Pembayaran dengan upload bukti transfer
if(isset($_POST['btnUpload'])){
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $idPemesanan = $_POST['IdPemesanan'];

    //File yang boleh di upload extensionnya apa aja
    $fileExt = explode('.' , $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg' , 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = uniqid(',' , true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                //Insert into db
                $sql = "UPDATE memesan SET bukti_pembayaran = '$fileNameNew' WHERE ID_Pemesanan = '$idPemesanan'";
                mysqli_query($db , $sql);

                header("Location: myBooking.php?uploadSuccess");
            }
            else{
                echo "File is too big!";
            }
        }
        else{
            echo "There was an error uploading your file";
        }
    }
    else{
        echo "Extension file tidak diperbolehkan (input file JPG, JPEG, PNG, atau PDF only)";
    }
}

//Accept Pesanan oleh Admin (Update status pemesanan dan pembayaran)
if(isset($_POST['btnAcceptPesanan'])){
    $idPemesanan = $_POST['IdPemesanan'];
    $sql = "UPDATE memesan SET Status_Pembayaran = 'Pembayaran diterima' , Status_Pemesanan = 'Booking diterima' WHERE ID_Pemesanan = '$idPemesanan'";
    mysqli_query($db , $sql);
    $_SESSION["accept_booking"] = "yes";
    header("Location: index.php?acceptBookingBerhasil");
}
?>