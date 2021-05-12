<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin Pasaga</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-cardVerifikasi.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Pasaga Admin</h2>
            <ul>
                <li><a href="index.php" class="active"><i class="fas fa-file-alt" aria-hidden="true"></i>Pemesanan</a></li>
                <li><a href="statistik.php"><i class="fas fa-chart-bar"></i>Statistik</a></li>
                <li><a href="kelola.php"><i class="fas fa-volleyball-ball"></i>Kelola Fasilitas</a></li>
                <li><a href="verifikasi.php" style="text-decoration: underline;"><i class="fas fa-user"></i>Verifikasi Anggota</a></li>
            </ul> 
            <div class="social_media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="main_content">
        <div class="header">Verifikasi Anggota</div>  
        <?php
            $sql = "SELECT nama, email, nik, asal_instansi FROM anggota";
            $results = mysqli_query($db, $sql) or die( mysqli_error($db));
            $check = mysqli_num_rows($results);
                if($check > 0){
                    while($row = mysqli_fetch_array($results))
                    {
                        ?>
                        <div class="info">
                            <div class="card" style="height:250px">
                            <div class="namaFasilitas">
                            <h4>Verifikasi Calon Anggota</h4>
                            </div>
                            
                            <div class="detail-peminjam">
                            <?php
                                    echo "Nama Anggota : " .$row["nama"]."<br>"; 
                                    echo "Email : " .$row["email"]."<br>" ;
                                    echo "NIK : " .$row["nik"]."<br>" ;
                                    echo "Instansi : " .$row["asal_instansi"]."<br>" ;
                            ?>     
                            </div>
                        
                        <p><button id="btnAccept" style="margin-top : 40px">Accept</button></p>
                        <p><button id="btnDecline" style="margin-top : 40px">Decline</button></p>
                        </div>
                        </div>
                        <?php
                        



                        
                    }
                }
                else{
                    echo "Nothing found";
                }
                ?>

                </div>
                  
</body>

</html>

