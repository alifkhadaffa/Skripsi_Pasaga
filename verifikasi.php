<?php include('server.php') ?>
<?php include('sendMail.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin Pasaga</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-cardVerifikasi.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                        <p><button id="btnDecline" style="margin-top : 40px" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-red">Decline</button></p>

                        <form action="verifikasi.php" method="post">
                        <div id="id01" class="w3-modal">
                            <div class="w3-modal-content">
                                <div class="w3-container">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                    <label for="">Masukkan Alasan Pembatalan Anggota(Required)</label> <br>
                                    <textarea name="message" id="" cols="30" rows="10"></textarea> <br>
                                    <button type="submit" name='batalkanAnggota' style="float:left; width:30%;padding:8px;background-color:#7a0d0d">Batalkan</button> <br> <br>
                                </div>
                            </div>
                        </div>
                        </form>

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

