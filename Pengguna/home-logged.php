<?php include('server.php') ?>
<?php include('sendmail.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <title>Home Pengguna</title>
</head>
<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="home-logged.php" class="nav__logo" style="color: rgba(255, 211, 14, 0.829);text-decoration: underline;">Pasaga Unpar</a>
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
            </div>
        </nav>
    </header>

    <main class="l-main">
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <div class="home__img">
                    
                </div>
                <div class="home__data">
                    <h1 class="home__title">Start Your<br> Training Today</h1>
                    <p class="home__description">Sehat bersama di Pasaga Unpar</p>
                    <a href="#" class="home__button">Book Now</a>
                </div>
            </div>
        </section>
    </main>

    <div class="row">
        <div class="column">
          <div class="card">
            <h3><i class="fas fa-basketball-ball"></i></h3>
            <h3>2 Basketball Court</h3>
            <p>Tersedia 2 lapangan basket bertipe semi indoor yang siap dipakai
                untuk berolahraga maupun latihan rutin</p>
            <a href="#" class="button__card">Book Now</a>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <h3><i class="fas fa-futbol"></i></h3>
            <h3>2 Futsal Court</h3>
            <p>Tersedia 2 lapangan futsal bertipe semi indoor dan outdoor yang siap dipakai
                untuk berolahraga maupun latihan rutin</p>
            <a href="#" class="button__card">Book Now</a>
          </div>
        </div>
        
        <div class="column">
          <div class="card">
            <h3><i class="fas fa-baseball-ball"></i></h3>
            <h3>2 Lapangan Tennis</h3>
            <p>Tersedia pula lapangan tennis berstandar nasional bertipe outdoor yang siap dipakai
                untuk berolahraga maupun latihan rutin</p>
            <a href="#" class="button__card">Book Now</a>
          </div>
        </div>
    </div>

    <div class="gallery">
        <h1>Gallery</h1>
            <div class="slider owl-carousel">
            <div class="card__slider">
                <div class="img">
                    <img src="../Image/futsal.jpg" alt="">
                    <div class="content">
                        <div class="title">Lapangan Futsal A</div>
                    </div>
                </div>
            </div>

            <div class="card__slider">
                <div class="img">
                    <img src="../Image/tennis.jpg" alt="">
                    <div class="content">
                        <div class="title">Lapangan Tennis</div>
                    </div>
                </div>
            </div>

            <div class="card__slider">
                <div class="img">
                    <img src="../Image/basket.jpg" alt="">
                    <div class="content">
                        <div class="title">Lapangan Basket A</div>
                    </div>
                </div>
            </div>

            <div class="card__slider">
                <div class="img">
                    <img src="../Image/futsalB.jpg" alt="">
                    <div class="content">
                        <div class="title">Lapangan Futsal B</div>
                    </div>
                </div>
            </div>

            <div class="card__slider">
                <div class="img">
                    <img src="../Image/wall.jpg" alt="" style="height: 284px;">
                    <div class="content">
                        <div class="title">Wall Climbing</div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="maps" style="margin-top: 64px;">
            <h2>Maps menuju Pasaga</h2>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.140028278754!2d107.60943411403237!3d-6.873820595032771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6e5b90c8cc1%3A0x9908ab6b6703596c!2sPasaga%20Unpar!5e0!3m2!1sen!2sid!4v1616493686897!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
            <form action="home-logged.php" method="post">
            <div class="form">
                <h3>Masukan dan Saran</h3>
                <label for="Email">Your Email</label> <br>
                <input type="text" name="emailSender" id=""> <br>
                <label for="Subject">Subject</label> <br>
                <input type="text" name="subjectMail" id=""> <br>
                <label for="message">Enter Your Message..</label> <br>
                <textarea name="message" id="" cols="30" rows="10"></textarea> <br>
                <input type="submit" value="SEND" name="submitMasukan">
            </div>
            </form>
        </div>

        <footer>
            <div class="footer-content">
                <img src="../Image/Logo_UNPAR.png" alt="" style="width:5%; margin-top: 24px;">
                <h3>Pasaga Unpar</h3>
                <p>Pasaga Unpar adalah sarana dan prasarana olahraga <br>yang dikelola oleh Yayasan Unpar</p>
                <ul class="socials">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <p id="copyright">copyright &copy;2020 of Alif Khadaffa for Thesis</span></p>
            </div>       
        </footer>
            

    <script>
        $(".slider").owlCarousel({
            loop: true,
            autoplay : true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>