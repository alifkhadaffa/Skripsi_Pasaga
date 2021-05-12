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
            <div class="info">
                <div class="date-picker">
                    <input type="month" name="datepicker" id="datepicker">
                </div>
            <h3 style="color: #0d7a6f;">Showing total pemesanan pasaga di bulan</h3>

            <div class="container">
                <canvas id="chartArea" style="width: 1000px;height:400px;margin: 0 auto;"></canvas>
            </div>
            <script type="text/javascript" src="js/chart.js"></script>

            <div class="rincian" id="rincian"></div>
                <h4 id="Total-bulan-tsb">Total Peminjam di bulan xx : yy orang</h4>
                <h5 style="color: #0d7a6f;">Detail Rincian</h5>
                <h5>Lapangan Futsal A : xx orang</h5>
                <h5>Lapangan Futsal B : xx orang</h5>
                <h5>Lapangan Basket A : xx orang</h5>
                <h5>Lapangan Basket B : xx orang</h5>
                <h5>Lapangan Voli A : xx orang</h5>
                <h5>Lapangan Voli B : xx orang</h5>
                <h5>Lapangan Tennis A : xx orang</h5>
                <h5>Lapangan Tennis B : xx orang</h5>
                <h5>Lapangan Wall Climbing : xx orang</h5>
            </div>
          </div>
        </div>
</body>

</html>

