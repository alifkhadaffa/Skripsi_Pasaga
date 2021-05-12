<?php

session_start();
//connect to db
$db = mysqli_connect('localhost' , 'root', '', 'pasaga') or die("can't connect to database");
?>