<?php

session_start();

//inisialisasi variabel
$email = "";
$password = "";
$id = "";
$name = "";
$errors = array();
//connect to db
$db = mysqli_connect('localhost' , 'root', '', 'pasaga') or die("can't connect to database");

//LOGIN user
if(isset($_POST['btnLogin'])){
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

    if(mysqli_num_rows($res)){
        $_SESSION['Name'] = $name;
        $_SESSION['ID_Anggota'] = $id;
        $_SESSION['success'] = "You are now logged in";
        header('location: home-logged.php');
    }
    else{
        array_push($errors, "Wrong email/password");
    }
    }

}
?>