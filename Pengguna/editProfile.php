<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/myBooking.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <title>My Booking</title>
    <style>
       .spacer{
            width: 100%;
            height: 95px;
        }

        h3{
            margin-left: 24px;
            color: #0D7A6F;
        }
        input[type=text]{
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            color : #1b1e23;
        }
        input[type=number]{
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            color : #1b1e23;
        }
        input[type=password]{
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            color : #1b1e23;
        }
        input[type=text]:focus {
            background-color: #13b9a8;
        }
        input[type=number]:focus {
            background-color: #13b9a8;
        }
        input[type=password]:focus {
            background-color: #13b9a8;
        }
        .form{
            display: block;
            text-align: center;
        }
        form{
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
        }
        .button {
            display: inline-block;
            border-radius: 4px;
            background-color: #0D7A6F;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 16px;
            padding: 16px;
            width: 245px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
</head>
<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="home-logged.php" class="nav__logo" style="color: rgba(255, 211, 14, 0.829);">Pasaga Unpar</a>
            </div>
            
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>

                <ul class="nav__list">
                    <div class="navbar">
                        <a href="book-logged.php">Book a court</a>
                        <a href="howto-logged.php">How to book</a>
                        <a href="about-logged.php">About us</a>
                        <div class="dropdown">
                          <button class="dropbtn"><i class="fa fa-user"></i><?php if($_SESSION['name']) ?>
                          <?php echo $_SESSION['name']; ?>
                            <i class="fa fa-caret-down"></i>
                          </button>
                          
                          <div class="dropdown-content">
                            <a href="myBooking.php"><i class="fa fa-file-alt"></i> My Booking</a>
                            <a href="editProfile.php"><i class="fa fa-user"></i> Edit Profile</a>
                            <a href="logout.php" tite="Logout"><i class="fa fa-power-off"></i> Logout</a>
                          </div>
                        </div> 
                      </div>
                </ul>
        </nav>
    </header>
    <div class="spacer">
        &nbsp;
    </div>

    <h3>Edit Profile</h3>

<div class="form">
    <form action="editProfile.php" method="POST">
    <i class="fas fa-user-circle fa-7x" style="color:#0D7A6F; margin-left:64px"></i> <br> <br>

    <label for="">Nama Anggota</label> <br>
    <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"> <br> <br>

    <label for="">Email</label> <br>
    <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>"> <br> <br>

    <label for="">Nomor Handphone</label> <br>
    <input type="number" name="Nomor_Handphone" value="<?php echo $_SESSION['Nomor_Handphone']; ?>"> <br> <br>

    <label for="">Password</label> <br>
    <input type="password" name="password" value="<?php echo $_SESSION['password']; ?>">  
    <br> <br>
    <button type="submit" name="btnEdit" class="button"><span>Save Changes</span></button>
    </form>
</div>

    <footer style="margin-top:24px">
            <div class="footer-content">
                <img src="../Image/Logo_UNPAR.png" alt="" style="width:5%; margin-top: 24px;">
                <h3>Pasaga Unpar</h3>
                <p>Pasaga Unpar adalah sarana dan prasarana olahraga <br>yang dikelola oleh Yayasan Unpar</p>
                <ul class="socials">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <p id="copyright">copyright &copy;2020 of Alif Khadaffa for Thesis</span></p>
            </div>       
        </footer> 
</body>
</html>