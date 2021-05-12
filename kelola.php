<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin Pasaga</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-cardKelola.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Pasaga Admin</h2>
            <ul>
                <li><a href="index.php" class="active"><i class="fas fa-file-alt" aria-hidden="true"></i>Pemesanan</a></li>
                <li><a href="statistik.php"><i class="fas fa-chart-bar"></i>Statistik</a></li>
                <li><a href="kelola.php" style="text-decoration: underline;"><i class="fas fa-volleyball-ball"></i>Kelola Fasilitas</a></li>
                <li><a href="verifikasi.php"><i class="fas fa-user"></i>Verifikasi Anggota</a></li>
            </ul> 
            <div class="social_media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="main_content">
            <div class="header">Kelola Fasilitas</div>  
            <div class="info">
                <div class="search-container">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Cari Pesanan" name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                
                <div class="card">
                    <img src="Image/futsal.jpg" alt="lapangan" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Futsal A</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;">Lapangan Tennis A adalah lapangan outdoor untuk olahraga tennis yang sudah berstandar nasional dan terletak disebelah lapangan basket.
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <a href="editFasilitas.php"><button>Edit</button></a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="Image/futsalB.jpg" alt="Denim Jeans" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Futsal B</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;">Lapangan Tennis A adalah lapangan outdoor untuk olahraga tennis yang sudah berstandar nasional dan terletak disebelah lapangan basket.
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <button>Edit</button>
                    </div>
                </div>

                <div class="card">
                    <img src="Image/basket.jpg" alt="Denim Jeans" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Basket A</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;">Lapangan Tennis A adalah lapangan outdoor untuk olahraga tennis yang sudah berstandar nasional dan terletak disebelah lapangan basket.
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <button>Edit</button>
                    </div>
                </div>

                <div class="card">
                    <img src="Image/basketB.jpg" alt="Denim Jeans" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Basket B</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;">Lapangan Tennis A adalah lapangan outdoor untuk olahraga tennis yang sudah berstandar nasional dan terletak disebelah lapangan basket.
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <button>Edit</button>
                    </div>
                </div>

          </div>
        </div>
    </div>
</body>

</html>

