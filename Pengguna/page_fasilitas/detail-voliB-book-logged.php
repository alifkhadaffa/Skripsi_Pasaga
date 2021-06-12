<?php include('../server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Lapangan Futsal A</title>
    <style>
        *{
            font-family: 'Bahnschrift';
        }
        body{
            background-color: #f3f5f9;
        }
        h1{
            width: 50%;
            margin: 0 auto;
            text-align: center;
            color: rgb(54, 54, 54);
            margin-top: -16px;
        }
        i{
            margin-top: 24px;
            margin-left: 24px;
            font-size: 24px;
        }
        .header-photo{
            width: 80%;
            height: 600px;
            background: url(../../Image/voliA.jpg);
            background-size: cover;
            margin : 0 auto;
            text-align: center;
            margin-top: 36px;
        }
        section{
            display: flex;
        }
        h3{
            margin-left: 24px;
            font-weight: lighter;
            width: 85%;
        }
        .desc{
            width: 50%;
        }
        .gallery{
            width: 50%;
        }
        #slider {
	        overflow: hidden;
        }
        #slider figure {
	        position: relative;
	        width: 500%;
	        margin: 0;
	        left: 0;
	        animation: 20s slider infinite;
        }
        #slider figure img {
	        width: 20%;
	        float: left;
            margin-top: 24px;
        }
        @keyframes slider {
	    0% {
	    	left: 0;
	    }
	    20% {
		    left: 0;
	    }
	    25% {
		    left: -100%;
	}
	    45% {
		    left: -100%;
	}
	    50% {
		    left: -200%;
	}
	    70% {
		    left: -200%;
	}
	    75% {
		    left: -300%;
	}
	    95% {
		    left: -300%;
	}
    	100% {
		    left: -400%;
	    }
    }   
    .style-calendar{
        margin-left: 24px;
    }

    #table-harga{
        margin-top: 24px;
        margin-left: 24px;
        width: 80%;
        margin: 0 auto;
        text-align: center;
        margin-top: 24px;
    }
    table,th,td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    th,td{
        padding: 5px;
        text-align: left;
    }
    td{
        padding-top: 8px;
    }
    #table-harga tr:nth-child(even){background-color: #ffffff;}

    .style-calendar{
        margin: 0 auto;
        text-align: center;
        margin-top: 24px;
    }

    form{
        margin-top: 24px;
        margin-left: 24px;
    }

    form input{
        width: 20%;
    }

    footer{
  position: relative;
  background: #0D7A6F;
  margin-top: 36px;
  color: #fff;
}

.footer-content{
  margin-left: 24px;
}

#copyright{
  font-size: 14px;
  font-weight: 100;
  margin-top: 16px;
}

.socials{
  list-style: none;
  display: flex;
}

.socials a{
  text-decoration: none;
  color: #fff;
  font-size: 24px;
}

.socials a i{
    margin-left: -36px;
}
    </style>
</head>
<body>
    <div class="top-content"></div>
        <a href="../book-logged.php"><i class="fa fa-arrow-left" aria-hidden="true" style="color: #0d7a6f; font-size: 24px;"></i></a>
        <?php
                $sql = "SELECT * FROM fasilitas WHERE ID_Fasilitas = '6'";
                $results = mysqli_query($db, $sql) or die( mysqli_error($db));
                $row = mysqli_fetch_array($results)
        ?>
        <h1><?php echo $row["Nama_Fasilitas"]; ?></h1>
    </div>
    <div class="header-photo"></div>
    <section>
        <div class="desc">
            <i class="fa fa-file-text-o" id="iconDesc" aria-hidden="true" style="color: #0d7a6f; font-size: 24px;"> Description</i>
            
            <h3> <?php echo $row["Deskripsi"]; ?></h3>
        </div>
        <div class="gallery">
            <i class="fa fa-camera" id="iconCamera" aria-hidden="true" style="color: #0d7a6f; font-size: 24px;"> Gallery</i>
            <div id="slider">
                <figure>
                    <img src="../../Image/voliA.jpg">
                    <img src="../../Image/voliB.jpg">
                    <img src="../../Image/voliA.jpg">
                    <img src="../../Image/voliB.jpg">
                    <img src="../../Image/voliA.jpg">
                </figure>
            </div>
        </div>
    </section>
    <div class="jadwal">
        <i class="fa fa-calendar" id="iconCalendar" aria-hidden="true" style="color: #0d7a6f; font-size: 24px;"> Jadwal Lapangan</i>
        <div class="style-calendar">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FJakarta&amp;src=bWF0aWFzYWxpZkBnbWFpbC5jb20&amp;color=%237986CB&amp;showTitle=1&amp;showPrint=0&amp;showTabs=1&amp;showDate=1" style="border-width:0" width="1200" height="1000" frameborder="0" scrolling="no"
            ></iframe>
        </div>
    </div>

    <div class="tarif">
        <i class="fa fa-money" id="iconCamera" aria-hidden="true" style="color: #0d7a6f; font-size: 24px;"> Tarif</i>
        <br>
        <table id="table-harga">
            <tr>
                <th>06.00 - 14.00 WIB</th>
                <th>14.00 - 17.00 WIB</th>
                <th>17.00 - 21.00 WIB</th>
            </tr>
            <tr>
                <td>Weekday : <?php echo "Rp".$row["Tarif_Per_Jam(Weekday 06.00-14.00)"]; ?></td>
                <td>Weekday : <?php echo "Rp".$row["Tarif_Per_Jam(Weekday 14.00-17.00)"]; ?></td>
                <td>Weekday : <?php echo "Rp".$row["Tarif_Per_Jam(Weekday 17.00-21.00)"]; ?></td>
            </tr>

            <tr>
                <td>Friday : <?php echo "Rp".$row["Tarif_Per_Jam(Jumat 06.00-14.00)"]; ?></td>
                <td>Friday : <?php echo "Rp".$row["Tarif_Per_Jam(Jumat 14.00-17.00)"]; ?></td>
                <td>Friday : <?php echo "Rp".$row["Tarif_Per_Jam(Jumat 17.00-21.00)"]; ?></td>
            </tr>

            <tr>
                <td>Weekend : <?php echo "Rp".$row["Tarif_Per_Jam(Weekend 06.00-14.00)"]; ?></td>
                <td>Weekend : <?php echo "Rp".$row["Tarif_Per_Jam(Weekend 14.00-17.00)"]; ?></td>
                <td>Weekend : <?php echo "Rp".$row["Tarif_Per_Jam(Weekend 17.00-21.00)"]; ?></td>
            </tr>
        </table>
    </div>

    <div class="form-booking">
        <i class="fa fa-file-text-o" id="iconForm" aria-hidden="true" style="color: #0d7a6f; font-size: 24px;"> Form Booking</i>
        <form action="detail-voliB-book-logged.php" method="POST">
            <label for="">Pilih Tanggal</label> <br>
            <input type="date" name="tanggal-pilihan" id="datePicker" value="" onchange="handler()" min="<?php echo date("Y-m-d"); ?>"> <br> <br>

            <label for="">Pilih jam mulai</label> <br>
            <input type="time" name="jam-mulai" id="jam-mulai" step="3600" min="06:00" max="21:00" onchange="handler()"> <br> <br>
            
            <label for="">Pilih jam selesai</label> <br>
            <input type="time" name="jam-selesai" id="jam-selesai" step="3600" min="06:00" max="21:00" onchange="handler()"> <br> <br>

            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="btnAction">Book Now</button>

            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times</button>
                            <h4 class="modal-title">Booking Summary</h4>
                        </div>

                        <div class="modal-body">
                            <?php echo "Tanggal booking : <br>" .date("Y-m-d") . "<br>" ; ?> <br>
                            <p>Booking untuk tanggal : </p> <p id="info-tanggal-booking" style="color:#0d7a6f" name="info-tanggal-booking"></p>
                            <p>Waktu mulai pemakaian: </p> <span id="info-jam-mulai" style="color:#0d7a6f" name="info-jam-mulai"></span> <br>
                            <p>Waktu akhir pemakaian: </p> <span id="info-jam-selesai" style="color:#0d7a6f" name="info-jam-selesai"></span> <br> <br>
                            <p>Tarif: </p> <span id="tarif" style="color:#0d7a6f" name="tarif"></span> <br> <br>
                            <p>Bayar ke nomor rekening : BCA 76367281 a/n Pasaga Unpar</p>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" name='btnConfirmVoliB' value='send'>Confirm Booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <div class="footer-content">
            <img src="../../Image/Logo_UNPAR.png" alt="" style="width:5%; margin-top: 24px;">
            <h3>Pasaga Unpar</h3>
            <p>Pasaga Unpar adalah sarana dan prasarana olahraga <br>yang dikelola oleh Yayasan Unpar</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li style="margin-left: 36px;"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li style="margin-left: 48px;"><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <p id="copyright">copyright &copy;2020 of Alif Khadaffa for Thesis</span></p>
        </div>       
    </footer>
</body>

<script type="text/javascript">

//Script untuk mengeluarkan tanggal pengguna akan memakai lapangan
    $(document).ready(function() {
    let now = new Date();
 
    let day = ("0" + now.getDate()).slice(-2);
    let month = ("0" + (now.getMonth() + 1)).slice(-2);

    let today = (day)+"-"+(month)+"-"+ now.getFullYear();


   $("#datePicker").val(today);
    
    $("#btnAction").click(function(){
        
        testClicked();
        
    });
});
function testClicked()
{
  $("#info-tanggal-booking").html($("#datePicker").val());
}

//Script untuk mengeluarkan info jam mulai dan jam selesai
var startTime = document.getElementById("jam-mulai");
var endTime = document.getElementById("jam-selesai");
var valueSpan = document.getElementById("info-jam-mulai");
var valueSpan2 = document.getElementById("info-jam-selesai");
startTime.addEventListener("input", function() {
  valueSpan.innerText = startTime.value;
}, false);

endTime.addEventListener("input", function() {
  valueSpan2.innerText = endTime.value;
}, false);
</script>

<script>
    function handler(){
    var valueTarif = document.getElementById("tarif");
    var date = document.getElementById("datePicker").value;
    var yourDate = new Date(date);
    console.log(yourDate.getDay());

    var startTime = $('#jam-mulai').val(),
    endTime = $('#jam-selesai').val(),
    hours = endTime.split(':')[0] - startTime.split(':')[0],
    minutes = endTime.split(':')[1] - startTime.split(':')[1];

    var jamBooking = endTime.split(':')[0];

    minutes = minutes.toString().length<2?'0'+minutes:minutes;
    if(minutes<0){ 
        hours--;
        minutes = 60 + minutes;
    }
    hours = hours.toString().length<2?'0'+hours:hours;
    console.log(hours);
    console.log(jamBooking);

    var weekday_14 = <?php echo $row["Tarif_Per_Jam(Weekday 06.00-14.00)"]; ?>;
    var weekday_17 = <?php echo $row["Tarif_Per_Jam(Weekday 14.00-17.00)"]; ?>;
    var weekday_21 = <?php echo $row["Tarif_Per_Jam(Weekday 17.00-21.00)"]; ?>;

    var jumat_14 = <?php echo $row["Tarif_Per_Jam(Jumat 06.00-14.00)"]; ?>;
    var jumat_17 = <?php echo $row["Tarif_Per_Jam(Jumat 14.00-17.00)"]; ?>;
    var jumat_21 = <?php echo $row["Tarif_Per_Jam(Jumat 17.00-21.00)"]; ?>;


    var weekend_14 = <?php echo $row["Tarif_Per_Jam(Weekend 06.00-14.00)"]; ?>;
    var weekend_17 = <?php echo $row["Tarif_Per_Jam(Weekend 14.00-17.00)"]; ?>;
    var weekend_21 = <?php echo $row["Tarif_Per_Jam(Weekend 17.00-21.00)"]; ?>;

    //Jika weekend, kondisi jam booking <=14.00 , <= 17.00, <= 21.00
    if((yourDate.getDay() == 6 || yourDate.getDay() == 0) && jamBooking <= 14 && hours == 02){
        valueTarif.textContent = "Rp." + (weekend_14*2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if((yourDate.getDay() == 6 || yourDate.getDay() == 0) && jamBooking <= 14 && hours == 04){
        valueTarif.textContent = "Rp." + (weekend_14*4).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if((yourDate.getDay() == 6 || yourDate.getDay() == 0) && jamBooking <= 14 && hours == 06){
        valueTarif.textContent = "Rp." + (weekend_14*6).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if((yourDate.getDay() == 6 || yourDate.getDay() == 0) && jamBooking <= 14 && hours == 08){
        valueTarif.textContent = "Rp." + (weekend_14*8).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if((yourDate.getDay() == 6 || yourDate.getDay() == 0) && jamBooking > 14 && jamBooking <= 17 && hours == 01){
        valueTarif.textContent = "Rp." + (weekend_17).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if((yourDate.getDay() == 6 || yourDate.getDay() == 0) && jamBooking > 14 && jamBooking <= 17 && hours == 02){
        valueTarif.textContent = "Rp." + (weekend_17*2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if((yourDate.getDay() == 6 || yourDate.getDay() == 0) && jamBooking > 14 && jamBooking <= 17 && hours == 03){
        valueTarif.textContent = "Rp." + (weekend_17*3).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if((yourDate.getDay() == 6 || yourDate.getDay() == 0) && jamBooking > 17 && jamBooking <= 21 && hours == 02){
        valueTarif.textContent = "Rp." + (weekend_21*2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if((yourDate.getDay() == 6 || yourDate.getDay()) == 0 && jamBooking > 17 && jamBooking <= 21 && hours == 04){
        valueTarif.textContent = "Rp." + (weekend_21*3).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }


    //Jika hari jumat, kondisi jam booking <=14.00 , <= 17.00, <= 21.00
    else if(yourDate.getDay() == 5 && jamBooking <= 14 && hours == 02){
        valueTarif.textContent = "Rp." + (jumat_14*2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() == 5 && jamBooking <= 14 && hours == 04){
        valueTarif.textContent = "Rp." + (jumat_14*4).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() == 5 && jamBooking <= 14 && hours == 06){
        valueTarif.textContent = "Rp." + (jumat_14*6).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() == 5 && jamBooking <= 14 && hours == 08){
        valueTarif.textContent = "Rp." + (jumat_14*8).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() == 5 && jamBooking <= 17 && hours == 01){
        valueTarif.textContent = "Rp." + (jumat_17).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() == 5 && jamBooking <= 17 && hours == 02){
        valueTarif.textContent = "Rp." + (jumat_17*4).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() == 5 && jamBooking <= 17 && hours == 03){
        valueTarif.textContent = "Rp." + (jumat_17*3).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() == 5 && jamBooking <= 21 && hours == 02){
        valueTarif.textContent = "Rp." + (jumat_21*2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() == 5 && jamBooking <= 21 && hours == 04){
        valueTarif.textContent = "Rp." + (jumat_17*4).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    
    

    //Jika Weekday
    else if(yourDate.getDay() < 5 && jamBooking <= 14 && hours == 02){
        valueTarif.textContent = "Rp." + (weekday_14*2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() < 5 && jamBooking <= 14 && hours == 04){
        valueTarif.textContent = "Rp." + (weekday_14*4).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() < 5 && jamBooking <= 14 && hours == 06){
        valueTarif.textContent = "Rp." + (weekday_14*6).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() < 5 && jamBooking <= 14 && hours == 08){
        valueTarif.textContent = "Rp." + (weekday_14*8).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() < 5 && jamBooking <= 17 && hours == 01){
        valueTarif.textContent = "Rp." + (weekday_17).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() < 5 && jamBooking <= 17 && hours == 02){
        valueTarif.textContent = "Rp." + (weekday_17*2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() < 5 && jamBooking <= 17 && hours == 03){
        valueTarif.textContent = "Rp." + (weekday_17*3).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() < 5 && jamBooking <= 21 && hours == 02){
        valueTarif.textContent = "Rp." + (weekday_21*2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    else if(yourDate.getDay() < 5 && jamBooking <= 21 && hours == 04){
        valueTarif.textContent = "Rp." + (weekday_21*4).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }


    }
</script>
</html>
