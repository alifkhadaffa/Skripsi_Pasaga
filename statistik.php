<?php include('Pengguna/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Admin Pasaga</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" defer></script>
    <style>
        body{
            overflow-x : hidden;
        }
        table,th,td{
        border: 1px solid black;
        border-collapse: collapse;
        }
        th,td{
            padding: 5px;
            text-align: left;
            font-size:12px;
        }
        td{
            padding-top: 8px;
        }
        table tr:nth-child(even){background-color: #eeebe3;}
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Pasaga Admin</h2>
            <ul>
                <li><a href="index.php" class="active"><i class="fas fa-file-alt" aria-hidden="true"></i>Pemesanan</a></li>
                <li><a href="statistik.php" style="text-decoration: underline;"><i class="fas fa-chart-bar"></i>Statistik</a></li>
                <li><a href="kelola.php"><i class="fas fa-volleyball-ball"></i>Kelola Fasilitas</a></li>
            </ul> 
            <div class="social_media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="main_content">
            <div class="header">Statistik
               <a target="_blank" href="download_excel.php" style="margin-left: -48px;"> <button style="border: none;
                outline: 0;
                padding: 6px;
                color: white;
                background-color: #0d7a6f;
                text-align: center;
                cursor: pointer;
                font-size: 16px;
                width: 20%;
                margin-top: -6px;
                float: right;" >Download as Excel</button> </a>
            </div>
            <form action="statistik.php" method="POST">
            <?php
                //kode untuk mencari total peminjam
                if(isset($_POST['generate'])){
                $month = $_POST['bulan'];
                $year = $_POST['tahun'];
                $sql = "SELECT COUNT(*) as total FROM memesan WHERE Status_Pemesanan = 'Booking diterima' AND MONTH(Tanggal_Pemakaian) = '$month'
                AND YEAR(Tanggal_Pemakaian) = '$year'";
                $results = mysqli_query($db, $sql) or die( mysqli_error($db));
                $data=mysqli_fetch_assoc($results);
                }
            ?>
            <div class="info">
                <div class="date-picker">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <select id="year" name="tahun">
                <option value="2021">2021</option>
                </select>
                <select id="month" name="bulan">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
                </select>
                <button type="submit" name="generate">Generate Statistik</button><br> <br>
                </div>
            
            <?php
                //kode untuk mencari total peminjam pada lapangan futsal A
                if(isset($_POST['generate'])){
                $month = $_POST['bulan'];
                $year = $_POST['tahun'];
                $queryFutsalA = "SELECT COUNT(*) as totalFA FROM memesan INNER JOIN fasilitas
                ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota
                WHERE fasilitas.Nama_Fasilitas = 'Lapangan Futsal A' AND MONTH(memesan.Tanggal_Pemakaian) = $month AND YEAR(memesan.Tanggal_Pemakaian) = $year
                AND Status_Pemesanan = 'Booking diterima'";
                $res2 = mysqli_query($db, $queryFutsalA) or die( mysqli_error($db));
                $data2=mysqli_fetch_assoc($res2);

                //Lapangan Futsal B
                $queryFutsalB = "SELECT COUNT(*) as totalFA FROM memesan INNER JOIN fasilitas
                ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota
                WHERE fasilitas.Nama_Fasilitas = 'Lapangan Futsal B' AND MONTH(memesan.Tanggal_Pemakaian) = $month AND YEAR(memesan.Tanggal_Pemakaian) = $year
                AND Status_Pemesanan = 'Booking diterima'";
                $res3 = mysqli_query($db, $queryFutsalB) or die( mysqli_error($db));
                $data3=mysqli_fetch_assoc($res3);

                //Lapangan Basket A
                $queryBasketA = "SELECT COUNT(*) as totalFA FROM memesan INNER JOIN fasilitas
                ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota
                WHERE fasilitas.Nama_Fasilitas = 'Lapangan Basket A' AND MONTH(memesan.Tanggal_Pemakaian) = $month AND YEAR(memesan.Tanggal_Pemakaian) = $year
                AND Status_Pemesanan = 'Booking diterima'";
                $res4 = mysqli_query($db, $queryBasketA) or die( mysqli_error($db));
                $data4=mysqli_fetch_assoc($res4);

                //Lapangan Basket B
                $queryBasketB = "SELECT COUNT(*) as totalFA FROM memesan INNER JOIN fasilitas
                ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota
                WHERE fasilitas.Nama_Fasilitas = 'Lapangan Basket B' AND MONTH(memesan.Tanggal_Pemakaian) = $month AND YEAR(memesan.Tanggal_Pemakaian) = $year
                AND Status_Pemesanan = 'Booking diterima'";
                $res5 = mysqli_query($db, $queryBasketB) or die( mysqli_error($db));
                $data5=mysqli_fetch_assoc($res5);

                //Lapangan Voli A
                $queryVoliA = "SELECT COUNT(*) as totalFA FROM memesan INNER JOIN fasilitas
                ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota
                WHERE fasilitas.Nama_Fasilitas = 'Lapangan Voli A' AND MONTH(memesan.Tanggal_Pemakaian) = $month AND YEAR(memesan.Tanggal_Pemakaian) = $year
                AND Status_Pemesanan = 'Booking diterima'";
                $res6 = mysqli_query($db, $queryVoliA) or die( mysqli_error($db));
                $data6=mysqli_fetch_assoc($res6);

                //Lapangan Voli B
                $queryVoliB = "SELECT COUNT(*) as totalFA FROM memesan INNER JOIN fasilitas
                ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota
                WHERE fasilitas.Nama_Fasilitas = 'Lapangan Voli B' AND MONTH(memesan.Tanggal_Pemakaian) = $month AND YEAR(memesan.Tanggal_Pemakaian) = $year
                AND Status_Pemesanan = 'Booking diterima'";
                $res7 = mysqli_query($db, $queryVoliB) or die( mysqli_error($db));
                $data7=mysqli_fetch_assoc($res7);

                //Lapangan Tennis A
                $queryTennisA = "SELECT COUNT(*) as totalFA FROM memesan INNER JOIN fasilitas
                ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota
                WHERE fasilitas.Nama_Fasilitas = 'Lapangan Tennis A' AND MONTH(memesan.Tanggal_Pemakaian) = $month AND YEAR(memesan.Tanggal_Pemakaian) = $year
                AND Status_Pemesanan = 'Booking diterima'";
                $res8 = mysqli_query($db, $queryTennisA) or die( mysqli_error($db));
                $data8 = mysqli_fetch_assoc($res8);

                //Lapangan Tennis B
                $queryTennisB = "SELECT COUNT(*) as totalFA FROM memesan INNER JOIN fasilitas
                ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota
                WHERE fasilitas.Nama_Fasilitas = 'Lapangan Tennis B' AND MONTH(memesan.Tanggal_Pemakaian) = $month AND YEAR(memesan.Tanggal_Pemakaian) = $year
                AND Status_Pemesanan = 'Booking diterima'";
                $res9 = mysqli_query($db, $queryTennisB) or die( mysqli_error($db));
                $data9=mysqli_fetch_assoc($res9);

                //Lapangan Wall Climbing
                $queryWallClimbing = "SELECT COUNT(*) as totalFA FROM memesan INNER JOIN fasilitas
                ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota
                WHERE fasilitas.Nama_Fasilitas = 'Wall Climbing' AND MONTH(memesan.Tanggal_Pemakaian) = $month AND YEAR(memesan.Tanggal_Pemakaian) = $year
                AND Status_Pemesanan = 'Booking diterima'";
                $res10 = mysqli_query($db, $queryWallClimbing) or die( mysqli_error($db));
                $data10=mysqli_fetch_assoc($res10);
                }
            ?>

            <h3 style="color: #0d7a6f;">Menunjukkan total pemesanan fasilitas</h3>

            <div class="container">
                <canvas id="chartArea" style="width: 1000px;height:400px;margin: 0 auto;"></canvas>
            </div>

            <div class="rincian" id="rincian" style="margin-left:24px">
                <h4 id="Total-bulan-tsb">Total Peminjam di bulan <?php echo date('F', mktime(0, 0, 0, $month, 10))?> : <?php echo $data['total']; ?> orang</h4>
                <h5 style="color: #0d7a6f;">Detail Rincian</h5>
                <h5>Lapangan Futsal A : <?php echo $data2['totalFA'] ?> orang</h5>
                <h5>Lapangan Futsal B : <?php echo $data3['totalFA'] ?> orang</h5>
                <h5>Lapangan Basket A : <?php echo $data4['totalFA'] ?> orang</h5>
                <h5>Lapangan Basket B : <?php echo $data5['totalFA'] ?> orang</h5>
                <h5>Lapangan Voli A : <?php echo $data6['totalFA'] ?> orang</h5>
                <h5>Lapangan Voli B : <?php echo $data7['totalFA'] ?> orang</h5>
                <h5>Lapangan Tennis A : <?php echo $data8['totalFA'] ?> orang</h5>
                <h5>Lapangan Tennis B : <?php echo $data9['totalFA'] ?> orang</h5>
                <h5>Lapangan Wall Climbing : <?php echo $data10['totalFA'] ?> orang</h5>
            </div>

            <table id="example">
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Asal Instansi</th>
                    <th>Fasilitas yang Dipesan</th>
                    <th>Tanggal Pemakaian</th>
                    <th>Jam Awal Pemakaian</th>
                    <th>Jam Selesai Pemakaian</th>
                    <th>Status Pembayaran</th>
                    <th>Pilihan Pembayaran</th>
                    <th>Status Pemesanan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sqlTabel = "SELECT anggota.Nama , anggota.Asal_Instansi , fasilitas.Nama_Fasilitas , memesan.Tanggal_Pemakaian,
                    memesan.Jam_Awal_Pemakaian, memesan.Jam_Selesai_Pemakaian , memesan.Status_Pembayaran , memesan.Jenis_Pembayaran ,memesan.Status_Pemesanan FROM
                    anggota INNER JOIN memesan ON anggota.ID_Anggota = memesan.ID_Anggota INNER JOIN fasilitas ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas
                    WHERE MONTH(Tanggal_Pemakaian) = '$month' AND YEAR(Tanggal_Pemakaian) = '$year'";
                    $restabel = mysqli_query($db, $sqlTabel) or die( mysqli_error($db));
                    while($row = mysqli_fetch_array($restabel)){
                        echo "<tr>
                        <td>".$row['Nama']."</td>
                        <td>".$row['Asal_Instansi']."</td>
                        <td>".$row['Nama_Fasilitas']."</td>
                        <td>".$row['Tanggal_Pemakaian']."</td>
                        <td>".$row['Jam_Awal_Pemakaian']."</td>
                        <td>".$row['Jam_Selesai_Pemakaian']."</td>
                        <td>".$row['Status_Pembayaran']."</td>
                        <td>".$row['Jenis_Pembayaran']."</td>
                        <td>".$row['Status_Pemesanan']."</td>
                        </tr>";
                   }
                ?>
                </tbody>
            </table>
            
            <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
            </script>
          </div>
        </div>
        </form>
        <script type="text/javascript">
            document.getElementById('month').value = "<?php echo $month;?>";
        </script>

        
        
        <?php
            $month = $_POST['bulan'];
            $year = $_POST['tahun'];
            $namaFasilitas = mysqli_query($db, "SELECT Nama_Fasilitas FROM fasilitas");
            $jumlahPeminjam = mysqli_query($db, "SELECT COUNT(ID_Pemesanan) as jumlahFA FROM memesan INNER JOIN fasilitas
            ON memesan.ID_Fasilitas = fasilitas.ID_Fasilitas INNER JOIN anggota ON memesan.ID_Anggota = anggota.ID_Anggota WHERE MONTH(memesan.Tanggal_Pemakaian) = $month AND YEAR(memesan.Tanggal_Pemakaian) = $year AND Status_Pemesanan = 'Booking diterima'
            GROUP BY Nama_Fasilitas ORDER BY memesan.ID_Fasilitas ASC");
        ?>
        <script>
            var ctx = document.getElementById('chartArea').getContext('2d');
            var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php while($row = mysqli_fetch_array($namaFasilitas)) {echo '"'.$row['Nama_Fasilitas']. '",';} ?>],
                        datasets: [{
                            label: 'Jumlah Peminjam',
                            data: [<?php while($row = mysqli_fetch_array($jumlahPeminjam)) {echo '"'.$row['jumlahFA']. '",';} ?>],
                            backgroundColor: [
                                '#BFB133' , '#BFB133' , '#BFB133' , '#BFB133' , '#BFB133' , '#BFB133' , '#BFB133' , '#BFB133' , '#BFB133'
                            ],
                            borderWidth: 1,
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
                    beginAtZero: true,
                    stepSize : 1,
                }
            }]
        }
    }
});

        </script>

</body>


</html>

