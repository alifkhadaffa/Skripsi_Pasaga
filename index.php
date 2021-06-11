<?php include('Pengguna/server.php') ?>
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
    <style>
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Pasaga Admin</h2>
            <ul>
                <li><a href="index.php" class="active" style="text-decoration: underline;"><i class="fas fa-file-alt" aria-hidden="true"></i>Pemesanan</a></li>
                <li><a href="statistik.php"><i class="fas fa-chart-bar"></i>Statistik</a></li>
                <li><a href="kelola.php"><i class="fas fa-volleyball-ball"></i>Kelola Fasilitas</a></li>
                <li><a href="verifikasi.php"><i class="fas fa-user"></i>Verifikasi Anggota</a></li>
            </ul> 
            <div class="social_media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="main_content">
            <div class="header">Pemesanan</div>  
            <div class="info">
                <div class="date-picker">
                    <input type="date" name="datepicker" id="datepicker">
                </div>
                <div class="search-container">
                    <form action="/action_page.php">
                      <input type="text" placeholder="Cari Pesanan" name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <?php
                    $sql = "SELECT *
                    FROM anggota INNER JOIN memesan ON anggota.ID_Anggota = memesan.ID_Anggota INNER JOIN fasilitas ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas";
                    $results = mysqli_query($db, $sql) or die( mysqli_error($db));
                    $check = mysqli_num_rows($results);
                        if($check > 0){
                            while($row = mysqli_fetch_array($results))
                        {

                        ?>
                
                <form action="index.php" method="post">
                <div class="card" style="height:580px">
                    <img src="Image/futsal.jpg" alt="Lap Futsal" style="width:100%">
                    <div class="namaFasilitas">
                        <h3><?php echo $row["Nama_Fasilitas"]."<br>"; ?></h3>
                    </div>

                    <div class="detail-peminjam">

                        <p>Nama Peminjam : <?php echo $row["Nama"]."<br>"; ?></p>
                        <p>Email Peminjam : <?php echo $row["Email"]."<br>"; ?></p>
                        <p>Durasi Peminjam : <?php echo $row["Jam_Awal_Pemakaian"]." - ".$row["Jam_Selesai_Pemakaian"]."<br>"; ?></p>
                        <p>Booking untuk tanggal : <?php echo $row["Tanggal_Pemakaian"]."<br>"; ?></p>
                        <p>Status Pembayaran : <?php echo $row["Status_Pembayaran"]."<br>"; ?></p>
                        <p>Bukti Pembayaran : <img src="Pengguna/uploads/<?php echo $row["bukti_pembayaran"]?>" alt="" style="width:15%"></p>

                    </div>
                    <div class="buttonaction" style="margin-top:50px">
                    <p><button type="submit" id="btnAccept_index" name="btnAcceptPesanan" style="padding:12px; <?php if(isset($_POST['btnAcceptPesanan'])) echo" color:red;"?>">Accept</button></p>
                    <p><button type="button" id="btnDecline" name="btnDecline" style="margin-top:0px" onclick="document.getElementById('id01-<?=$row['ID_Pemesanan'] ?>').style.display='block'" class="w3-button w3-red">Decline</button></p>
                    </div>
                </div>

                <div id="id01-<?=$row["ID_Pemesanan"] ?>" class="w3-modal">
                    <div class="w3-modal-content">
                        <div class="w3-container">
                            <input type="hidden" id="IdPemesanan" name="IdPemesanan" value='<?php echo $row["ID_Pemesanan"]; ?>'>
                            <span onclick="document.getElementById('id01-<?=$row['ID_Pemesanan'] ?>').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                            <label for="">Masukkan Alasan Pembatalan (Required)</label> <br>
                            <textarea name="message" id="" cols="30" rows="10"></textarea> <br>
                            <button type="submit" name='batalkanPesanan'>Batalkan</button> <br> <br>
                        </div>
                    </div>
                </div>
                    </form>
                <?php
                        }
                    }
                    else{
                        echo "Tidak ada booking";
                    }
                ?>
          </div>
        </div>
    </div>
</body>

</html>

