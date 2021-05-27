<?php include('Pengguna/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin Pasaga</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Pasaga Admin</h2>
            <ul>
                <li><a href="index.php" class="active"><i class="fas fa-file-alt" aria-hidden="true"></i>Pemesanan</a></li>
                <li><a href="statistik.php" style="text-decoration: underline;"><i class="fas fa-chart-bar"></i>Statistik</a></li>
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
            <div class="header">Statistik
                <button style="border: none;
                outline: 0;
                padding: 6px;
                color: white;
                background-color: #0d7a6f;
                text-align: center;
                cursor: pointer;
                font-size: 16px;
                width: 20%;
                margin-top: -6px;
                float: right;" >Download as Excel</button>
            </div>
            <form action="statistik.php" method="POST">
            <?php
                //kode untuk mencari total peminjam
                $sql = "SELECT COUNT(*) as total FROM memesan";
                $results = mysqli_query($db, $sql) or die( mysqli_error($db));
                $data=mysqli_fetch_assoc($results);
            ?>
            <div class="info">
                <div class="date-picker">
                <input type="month" name="bulan" id="datePicker" value="<?=date('Y-m')?>"> 
                <button type="submit" name="generate">Generate Statistik</button><br> <br>
                </div>
            <h3 style="color: #0d7a6f;">Showing total pemesanan pasaga di bulan <?php echo date("F", strtotime('m'));?></h3>
            <?php
                //kode untuk mencari total peminjam pada lapangan futsal A
                if(isset($_POST['generate'])){
                $month = $_POST['bulan'];
                $queryFutsalA = "SELECT COUNT(*) as totalFA FROM memesan INNER JOIN fasilitas
                ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota
                WHERE fasilitas.Nama_Fasilitas = 'Lapangan Futsal A' AND MONTH(memesan.Tanggal_Pemakaian) = $month AND YEAR(memesan.Tanggal_Pemakaian) = $month";
                $res2 = mysqli_query($db, $queryFutsalA) or die( mysqli_error($db));
                $data2=mysqli_fetch_assoc($res2);
                }
            ?>
            <div class="container">
                <canvas id="chartArea" style="width: 1000px;height:400px;margin: 0 auto;"></canvas>
            </div>
            <script type="text/javascript" src="js/chart.js"></script>

            <div class="rincian" id="rincian" style="margin-left:24px">
                <h4 id="Total-bulan-tsb">Total Peminjam di bulan <?php echo date("F", strtotime('m'));?> : <?php echo $data['total']; ?> orang</h4>
                <h5 style="color: #0d7a6f;">Detail Rincian</h5>
                <h5>Lapangan Futsal A : <?php echo $data2['totalFA'] ?> orang</h5>
                <h5>Lapangan Futsal B : <?php echo $data2['totalFA'] ?> orang</h5>
                <h5>Lapangan Basket A : 0 orang</h5>
                <h5>Lapangan Basket B : 0 orang</h5>
                <h5>Lapangan Voli A : 0 orang</h5>
                <h5>Lapangan Voli B : 0 orang</h5>
                <h5>Lapangan Tennis A : 0 orang</h5>
                <h5>Lapangan Tennis B : 0 orang</h5>
                <h5>Lapangan Wall Climbing : 0 orang</h5>
            </div>
          </div>
        </div>
        </form>

        <?php
            $namaFasilitas = mysqli_query($db, "SELECT Nama_Fasilitas FROM fasilitas");
            $jumlahPeminjam = mysqli_query($db, "SELECT COUNT(*) as jumlah FROM memesan INNER JOIN fasilitas
            ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota WHERE fasilitas.Nama_Fasilitas = 'Lapangan Futsal A'");


            $jumlahPeminjamBasketA = mysqli_query($db, "SELECT COUNT(*) as jumlah FROM memesan INNER JOIN fasilitas
            ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota WHERE fasilitas.Nama_Fasilitas = 'Lapangan Basket A'");
        ?>
        <script>
            var ctx = document.getElementById('chartArea').getContext('2d');
            var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php while($row = mysqli_fetch_array($namaFasilitas)) {echo '"'.$row['Nama_Fasilitas']. '",';} ?>],
                        datasets: [{
                            label: 'Jumlah Peminjam',
                            data: [<?php while($row = mysqli_fetch_array($jumlahPeminjam)) {echo '"'.$row['jumlah']. '",';} ?> , <?php while($row = mysqli_fetch_array($jumlahPeminjamBasketA)) {echo '"'.$row['jumlah']. '",';} ?>],
                            backgroundColor: [
                                '#BFB133' , '#BFB133' , '#BFB133' , '#BFB133' , '#BFB133'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        title: {
                            display: true,
                            text: 'Statistik Jumlah Pemesan Fasilitas Pasaga per Bulan'
                        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

        </script>
</body>


</html>

