<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            background: url(../Image/futsal.jpg);
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
        <a href="book.html"><i class="fa fa-arrow-left" aria-hidden="true" style="color: #0d7a6f; font-size: 24px;"></i></a>
        <h1>Lapangan Futsal A</h1>
    </div>
    <div class="header-photo"></div>
    <section>
        <div class="desc">
            <i class="fa fa-file-text-o" id="iconDesc" aria-hidden="true" style="color: #0d7a6f; font-size: 24px;"> Description</i>
            <h3>Lapangan Futsal A adalah lapangan outdoor. Lapangan ini sudah berstandar nasional dan bisa dipergunakan untuk berolahraga
                    maupun untuk latihan. Lapangan Futsal A terletak disebelah lahan parkir PASAGA. Bola Futsal 
                    sudah disediakan. Lapangan ini berukuran 28 meter x 15 meter dan 
                    berstandar nasional. Booking minimal 2 jam dan kelipatan 2 jam.
            </h3>
        </div>
        <div class="gallery">
            <i class="fa fa-camera" id="iconCamera" aria-hidden="true" style="color: #0d7a6f; font-size: 24px;"> Gallery</i>
            <div id="slider">
                <figure>
                    <img src="img/futsal1.jpg">
                    <img src="img/futsal2.jpg">
                    <img src="img/futsal.jpg">
                    <img src="img/futsal1.jpg">
                    <img src="img/futsal2.jpg">
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
                <td>Weekday : Rp66.000</td>
                <td>Weekday : Rp70.000</td>
                <td>Weekday : Rp75.000</td>
            </tr>

            <tr>
                <td>Friday : Rp70.000</td>
                <td>Friday : Rp75.000</td>
                <td>Friday : Rp80.000</td>
            </tr>

            <tr>
                <td>Weekend : Rp80.000</td>
                <td>Weekend : Rp85.000</td>
                <td>Weekend : Rp88.000</td>
            </tr>
        </table>
    </div>

    <div class="form-booking">
        <i class="fa fa-file-text-o" id="iconForm" aria-hidden="true" style="color: #0d7a6f; font-size: 24px;"> Form Booking</i>
        <form action="" method="post">
            <label for="">Pilih Tanggal</label> <br>
            <input type="date"> <br> <br>
            <label for="">Pilih jam mulai</label> <br>
            <input type="time" name="" id=""> <br> <br>
            <label for="">Pilih jam selesai</label> <br>
            <input type="time" name="" id=""> <br> <br>

            <button type="submit" onclick="alert('Harap Login sebelum melakukan booking')">Book Now</button>
        </form>
    </div>

    <footer>
        <div class="footer-content">
            <img src="../Image/Logo_UNPAR.png" alt="" style="width:5%; margin-top: 24px;">
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
</script>
</html>
