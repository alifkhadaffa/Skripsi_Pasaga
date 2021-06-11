<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bookLapangan.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Booking Page</title>
    <style>
        .card-link{
            text-decoration: none;
        }
        .spacer{
            width: 100%;
            height: 95px;
        }
        .judul{
            width: 50%;
            margin: 0 auto;
            text-align: center;
        }
        .iconCard{
            text-align: center;
            font-size: 16px;
            width: 100%;
        }

        .iconCard i{
            font-size: 12px;
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

    <div class="content">
        <div class="judul">
            <h1 style="font-weight: bold;">Court List</h1>
            <h4 style="font-weight: lighter;">Mari berolahraga di Pasaga Unpar dan rasakan pengalaman<br>berolahraga yang menyenangkan</h4>
        </div>

        <a href="detail-futsal-book-logged.php" class="card-link">
        <div class="card">
            <img src="../Image/futsal.jpg" alt="Lap Futsal" style="width:100%">
            
            <div class="namaFasilitas">
                <h3 style="color: #0d7a6f;">Lapangan Futsal A</h3>
            </div>

            <div class="detail-peminjam">
                <p style="margin-bottom: 8px;color: #0a2724;">Lapangan Futsal A adalah lapangan outdoor untuk olahraga Futsal yang sudah berstandar nasional dan terletak disebelah lapangan basket.
                </p>
                <div class="iconCard">
                <p style="color:#0d7a6f;">Jam operasional <i class="fa fa-clock-o" style="color: #0d7a6f;"></i> : 06.00 - 21.00 WIB</p>
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp66.000 - Rp163.000 (*per jam) </p>
                </div>
            </div>
          </div>
        </a>

        <a href="detail-futsalB-book-logged.php" class="card-link">
          <div class="card">
            <img src="../Image/futsalB.jpg" alt="Lap Futsal" style="width:100%">
            
            <div class="namaFasilitas">
                <h3 style="color: #0d7a6f;">Lapangan Futsal B</h3>
            </div>

            <div class="detail-peminjam">
                <p style="margin-bottom: 8px;color: #0a2724;">Lapangan Futsal B adalah lapangan semi-indoor untuk olahraga Futsal yang sudah berstandar nasional dan terletak diatas area lapangan basket.
                </p>
                <div class="iconCard">
                <p style="color:#0d7a6f;">Jam operasional <i class="fa fa-clock-o" style="color: #0d7a6f;"></i> : 06.00 - 21.00 WIB</p>
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp79.000 - Rp193.000 (*per jam) </p>
                </div>
            </div>
          </div>
        </a>

        <a href="detail-basketA-book-logged.php" class="card-link">
          <div class="card">
            <img src="../Image/basket.jpg" alt="Lap Futsal" style="width:100%">
            
            <div class="namaFasilitas">
                <h3 style="color: #0d7a6f;">Lapangan Basket A</h3>
            </div>

            <div class="detail-peminjam">
                <p style="margin-bottom: 8px;color: #0a2724;">Lapangan Basket A adalah lapangan semi-indoor untuk olahraga Basket yang sudah berstandar nasional dan terletak disebelah kantor Pasaga Unpar.
                </p>
                <div class="iconCard">
                <p style="color:#0d7a6f;">Jam operasional <i class="fa fa-clock-o" style="color: #0d7a6f;"></i> : 06.00 - 21.00 WIB</p>
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp79.000 - Rp193.000 (*per jam) </p>
                </div>
            </div>
          </div>
        </a>


          <div class="card">
            <img src="../Image/basketB.jpg" alt="Lap Futsal" style="width:100%">
            
            <div class="namaFasilitas">
                <h3 style="color: #0d7a6f;">Lapangan Basket B</h3>
            </div>

            <div class="detail-peminjam">
                <p style="margin-bottom: 8px;color: #0a2724;">Lapangan Basket B adalah lapangan semi-indoor untuk olahraga Basket yang sudah berstandar nasional dan terletak disebelah kantor Pasaga Unpar.
                </p>
                <div class="iconCard">
                <p style="color:#0d7a6f; margin-top: 16px;">Jam operasional <i class="fa fa-clock-o" style="color: #0d7a6f;"></i> : 06.00 - 21.00 WIB</p>
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp79.000 - Rp193.000 (*per jam) </p>
                </div>
            </div>
          </div>

          <div class="card">
            <img src="../Image/tennis.jpg" alt="Lap Futsal" style="width:100%">
            
            <div class="namaFasilitas">
                <h3 style="color: #0d7a6f;">Lapangan Tennis</h3>
            </div>

            <div class="detail-peminjam">
                <p style="margin-bottom: 8px;color: #0a2724;">Lapangan Tennis A dan B adalah Lapangan outdoor untuk olahraga tennis yang terletak dibawah lapangan basket, terletak.
                </p>
                <div class="iconCard">
                <p style="color:#0d7a6f; margin-top: 16px;">Jam operasional <i class="fa fa-clock-o" style="color: #0d7a6f;"></i> : 06.00 - 21.00 WIB</p>
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp30.000 - Rp104.000 (*per jam) </p>
                </div>
            </div>
          </div>

          <div class="card">
            <img src="../Image/VoliB.jpg" alt="Lap Futsal" style="width:100%;">
            
            <div class="namaFasilitas">
                <h3 style="color: #0d7a6f;">Lapangan Voli A</h3>
            </div>

            <div class="detail-peminjam">
                <p style="margin-bottom: 8px;color: #0a2724;">Lapangan Tennis A dan B adalah Lapangan outdoor untuk olahraga tennis yang terletak dibawah lapangan basket, terletak.
                </p>
                <div class="iconCard">
                <p style="color:#0d7a6f; margin-top: 16px;">Jam operasional <i class="fa fa-clock-o" style="color: #0d7a6f;"></i> : 06.00 - 21.00 WIB</p>
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp79.000 - Rp193.000 (*per jam) </p>
                </div>
            </div>
          </div>

          <div class="card">
            <img src="../Image/VoliA.jpg" alt="Lap Futsal" style="width:100%">
            
            <div class="namaFasilitas">
                <h3 style="color: #0d7a6f;">Lapangan Voli B</h3>
            </div>

            <div class="detail-peminjam">
                <p style="margin-bottom: 8px;color: #0a2724;">Lapangan voli B adalah lapangan yang terletak bersamaan dengan lapangan basket dan bisa dipergunakan untuk latihan maupun berolahraga.
                </p>
                <div class="iconCard">
                <p style="color:#0d7a6f; margin-top: 16px;">Jam operasional <i class="fa fa-clock-o" style="color: #0d7a6f;"></i> : 06.00 - 21.00 WIB</p>
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp79.000 - Rp193.000 (*per jam) </p>
                </div>
            </div>
          </div>

          <div class="card">
            <img src="../Image/wall-climb.jpg" alt="Lap Wall Climbing">
            
            <div class="namaFasilitas">
                <h3 style="color: #0d7a6f;">Wall Climbing</h3>
            </div>

            <div class="detail-peminjam">
                <p style="margin-bottom: 8px;color: #0a2724;">Wall Climbing diperuntukan untuk olahraga maupun latihan panjat tebing dan sudah berstandar internasional.
                </p>
                <div class="iconCard">
                <p style="color:#0d7a6f; margin-top: 16px;">Jam operasional <i class="fa fa-clock-o" style="color: #0d7a6f;"></i> : 06.00 - 18.00 WIB</p>
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp73.000 (*per jam) </p>
                </div>
            </div>
          </div>


    </div>
</body>
</html>