<?php include('Pengguna/server.php') ?>
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
        <?php
        $sql = "SELECT * FROM fasilitas WHERE ID_Fasilitas = '1'";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $row = mysqli_fetch_array($results);

        $sql = "SELECT * FROM fasilitas WHERE ID_Fasilitas = '2'";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $row2 = mysqli_fetch_array($results);

        $sql = "SELECT * FROM fasilitas WHERE ID_Fasilitas = '3'";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $row3 = mysqli_fetch_array($results);

        $sql = "SELECT * FROM fasilitas WHERE ID_Fasilitas = '4'";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $row4 = mysqli_fetch_array($results);

        $sql = "SELECT * FROM fasilitas WHERE ID_Fasilitas = '5'";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $row5 = mysqli_fetch_array($results);

        $sql = "SELECT * FROM fasilitas WHERE ID_Fasilitas = '6'";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $row6 = mysqli_fetch_array($results);

        $sql = "SELECT * FROM fasilitas WHERE ID_Fasilitas = '7'";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $row7 = mysqli_fetch_array($results);

        $sql = "SELECT * FROM fasilitas WHERE ID_Fasilitas = '8'";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $row8 = mysqli_fetch_array($results);

        $sql = "SELECT * FROM fasilitas WHERE ID_Fasilitas = '9'";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $row9 = mysqli_fetch_array($results);
        ?>
            <div class="header">Kelola Fasilitas</div>  
            <div class="info">
                <div class="card" style="height:480px">
                    <img src="uploads/<?php echo $row["foto_fasilitas"]?>" style="width:100%" alt="lapangan">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Futsal A</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;"><?php echo $row["Deskripsi"]?>
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <a href="kelola_fasilitas/editFasilitas.php"><button>Edit</button></a>
                    </div>
                  </div>

                  <div class="card" style="height:480px">
                    <img src="Image/futsalB.jpg" alt="" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Futsal B</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;">
                        </p><?php echo $row2["Deskripsi"]?>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <a href="kelola_fasilitas/editFasilitas_futsalB.php"><button>Edit</button></a>
                    </div>
                </div>

                <div class="card" style="height:480px">
                    <img src="Image/basket.jpg" alt="lap" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Basket A</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;"><?php echo $row3["Deskripsi"]?>
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <a href="kelola_fasilitas/editFasilitas_basketA.php"><button>Edit</button></a>
                    </div>
                </div>

                <div class="card" style="height:480px">
                    <img src="Image/basketB.jpg" alt="" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Basket B</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;"><?php echo $row4["Deskripsi"]?>
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <a href="kelola_fasilitas/editFasilitas_basketB.php"><button>Edit</button></a>
                    </div>
                </div>

                <div class="card" style="height:480px">
                    <img src="Image/voliA.jpg" alt="" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Voli A</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;"><?php echo $row5["Deskripsi"]?>
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <a href="kelola_fasilitas/editFasilitas_voliA.php"><button>Edit</button></a>
                    </div>
                </div>

                <div class="card" style="height:480px">
                    <img src="Image/voliB.jpg" alt="" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Voli B</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;"><?php echo $row6["Deskripsi"]?>
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <a href="kelola_fasilitas/editFasilitas_voliB.php"><button>Edit</button></a>
                    </div>
                </div>

                <div class="card" style="height:480px">
                    <img src="Image/tennis.jpg" alt="" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Tennis A</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;"><?php echo $row7["Deskripsi"]?>
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <a href="kelola_fasilitas/editFasilitas_tennisA.php"><button>Edit</button></a>
                    </div>
                </div>

                <div class="card" style="height:480px">
                    <img src="Image/tennis.jpg" alt="" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Lapangan Tennis B</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;"><?php echo $row8["Deskripsi"]?>
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <a href="kelola_fasilitas/editFasilitas_tennisB.php"><button>Edit</button></a>
                    </div>
                </div>

                <div class="card" style="height:480px">
                    <img src="Image/wall-climb.jpg" alt="" style="width:100%">
                    
                    <div class="namaFasilitas">
                        <h3>Wall Climbing</h3>
                    </div>

                    <div class="detail-peminjam">
                        <p style="margin-bottom: 8px;"><?php echo $row9["Deskripsi"]?>
                        </p>
                        <div class="iconCard">
                        <i class="fas fa-clock" style="color: #0d7a6f;"></i> <pre style="color:#0d7a6f;float: right; margin-right: 128px;">06.00 - 21.00 WIB</pre><br>
                        <i class="fas fa-dollar-sign" style="color: #0d7a6f; margin-left: 2px;"></i> <pre style="color:#0d7a6f; float: right;margin-right: 90px;">Rp40.000 - Rp100.000 </pre>
                        </div>
                        <a href="kelola_fasilitas/editFasilitas_wall.php"><button>Edit</button></a>
                    </div>
                </div>

          </div>
        </div>
    </div>
</body>

</html>

