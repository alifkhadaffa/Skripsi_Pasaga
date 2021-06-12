<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/myBooking.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>My Booking</title>
    <style>
       .spacer{
            width: 100%;
            height: 95px;
        }

        h3{
            margin-left: 24px;
            color: rgb(51, 51, 51);
        }

.new-button {
    display: inline-block;
    padding: 8px 12px; 
    cursor: pointer;
    border-radius: 4px;
    background-color: #0d7a6f;
    font-size: 16px;
    color: #fff;
    margin-top: 16px;
}
input[type="file"] {
  width:70%;
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

    <h3 style="margin-left:42px">My Booking</h3>

    <?php
        $sql = "SELECT * FROM memesan INNER JOIN fasilitas
        ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota WHERE memesan.ID_Anggota = {$_SESSION['id']}";
        $results = mysqli_query($db, $sql) or die( mysqli_error($db));
        $check = mysqli_num_rows($results);
            if($check > 0){
                while($row = mysqli_fetch_array($results))
                {
                    ?>
                
                <div class="card-style">
                    <div class="card" style="height:350px;float:left">
                    <img src="../Image/illus-myBook.png" alt="Lap Futsal" style="width:25%; float: left;">
            
                    <div class="namaFasilitas">
                        <h3 style="color: #0d7a6f;"> <?php echo $row["Nama_Fasilitas"]."<br>"; ?> </h3>
                    </div>

                    <div class="detail-peminjam" style="width:30%;float:left">
                        <p style="margin-bottom: 8px;margin-left:24px;color: #0a2724;">Booking untuk Tanggal: <?php $tanggalPakai = date_create($row["Tanggal_Pemakaian"]);
                        echo date_format($tanggalPakai, "d-m-Y")."<br>"; ?> </p>
                        <p style="margin-bottom: 8px;margin-left:24px;color: #0a2724;">Jam Pemakaian: <?php $jamAwal = date_create($row["Jam_Awal_Pemakaian"]); 
                        $jamAkhir = date_create($row["Jam_Selesai_Pemakaian"]);echo date_format($jamAwal, "H:i")." - ".date_format($jamAkhir, "H:i")."<br>"; ?> </p>
                        <p style="margin-bottom: 8px;color: #0a2724;">Status Pemesanan: <?php echo $row["Status_Pemesanan"]."<br>"; ?> </p>
                        <p style="margin-bottom: 8px;color: #0a2724;">Status Pembayaran: <?php echo $row["Status_Pembayaran"]."<br>"; ?> </p>
                        <p style="margin-bottom: 8px;margin-left:-80px;color: #0a2724;">Bukti Pembayaran :</p>
                        <img src="uploads/<?php echo $row["bukti_pembayaran"]?>" alt="" style="width:15%">
                    </div>

                    <div class="btnAction" style="width:30%">
                        <button type="button" style="margin-right: 16px" id="btnBatal" onclick="document.getElementById('modalBatalkan-<?=$row['ID_Pemesanan'] ?>').style.display='block'" class="w3-button w3-red">Batalkan</button>
                        <button type="button" id="btnKonfirmasi" onclick="document.getElementById('modalKonfirmasi-<?=$row['ID_Pemesanan'] ?>').style.display='block'" class="w3-button w3-flat-turquoise">Konfirmasi Pembayaran</button>
                    </div>
                    </div>
                    <form action="myBooking.php" method="post" enctype="multipart/form-data">
                    <div id="modalBatalkan-<?=$row["ID_Pemesanan"] ?>" class="w3-modal">
                        <div class="w3-modal-content">
                            <div class="w3-container">
                            <input type="hidden" name="IdPemesanan" value='<?php echo $row["ID_Pemesanan"]; ?>'>
                                <span onclick="document.getElementById('modalBatalkan-<?=$row['ID_Pemesanan'] ?>').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <h2>Konfirmasi pembatalan</h2>
                                <p style="color:black">Apakah anda yakin ingin membatalkan pemesanan?</p>
                                <button type="submit" class="btnDelete" name='btnDeletePesanan' value='send' style="background-color: #c03131;cursor:pointer;
                                border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none;margin-top:24px">Batalkan Booking</button> <br><br>
                           </div>
                        </div>
                    </div>
                    </form>

                    <form action="myBooking.php" method="post" enctype="multipart/form-data">
                    
                    <div id="modalKonfirmasi-<?=$row["ID_Pemesanan"] ?>" class="w3-modal">
                        <div class="w3-modal-content">
                            <div class="w3-container">
                                <input type="hidden" id="IdPemesanan" name="IdPemesanan" value='<?php echo $row["ID_Pemesanan"]; ?>'>
                                <span onclick="document.getElementById('modalKonfirmasi-<?=$row['ID_Pemesanan'] ?>').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <h2>Konfirmasi Pembayaran</h2>
                                <p style="color:black">Bukti Pembayaran akan di proses maksimal 1x24 jam setelah upload. Anda akan menerima email jika pembayaran sudah diterima.</p>
                                <label class="new-button" for="upload"> Upload Bukti Pembayaran <br>
                                <input type="file" name="file">
                                <button type="submit" class="btnUpload" name="btnUpload">Submit Bukti Pembayaran</button> <br><br>
                           </div>
                        </div>
                    </div>
                    </form>
                </div>
                
                <?php
                }
            }
            else{
                echo "<h4 style='margin-left:40%;color:#c03131'> No booking found, Book a court now! </h4>";
            }

            ?>
                
</body>
</html>