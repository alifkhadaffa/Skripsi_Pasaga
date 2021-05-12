<?php?>
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
                <a href="index.php" class="nav__logo" style="color: rgba(255, 211, 14, 0.829);">Pasaga Unpar</a>
            </div>
            
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>

                <ul class="nav__list">
                    <li class="nav__item"><a href="book.php" class="nav__link active" style="text-decoration:underline;">Book a court</a></li>
                    <li class="nav__item"><a href="howto.php" class="nav__link">How to book</a></li>
                    <li class="nav__item"><a href="about.php" class="nav__link">About us</a></li>
                    <li class="nav__item"><a href="login.php" class="nav__link">Log in</a></li>
                    <li class="nav__item"><a href="register.php" class="nav__link">Register</a></li>
                </ul>
            </div>
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

        <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Cari Lapangan" name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <a href="detail-futsal-book.html" class="card-link">
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
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp40.000 - Rp100.000 </p>
                </div>
            </div>
          </div>
        </a>
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
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp40.000 - Rp100.000 </p>
                </div>
            </div>
          </div>

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
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp40.000 - Rp100.000 </p>
                </div>
            </div>
          </div>

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
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp40.000 - Rp100.000 </p>
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
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp40.000 - Rp100.000 </p>
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
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp40.000 - Rp100.000 </p>
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
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp40.000 - Rp100.000 </p>
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
                <p style="color:#0d7a6f; margin-top: 16px;">Jam operasional <i class="fa fa-clock-o" style="color: #0d7a6f;"></i> : 06.00 - 21.00 WIB</p>
                <p style="color:#0d7a6f;margin-top: 16px;">Kisaran Tarif <i class="fa fa-usd" style="color: #0d7a6f;"></i>: Rp40.000 - Rp100.000 </p>
                </div>
            </div>
          </div>


    </div>
</body>
</html>