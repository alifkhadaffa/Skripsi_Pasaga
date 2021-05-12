<?php?>
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
    <title>How To Book</title>
    <style>
        .judul{
            width: 50%;
            margin: 0 auto;
            text-align: center;
        }
        .spacer{
            width: 100%;
            height: 95px;
        }

        .cara{
            margin-left: 300px;
        }
    </style>
</head>
<body>
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="index.php" class="nav__logo" style="color: rgba(255, 211, 14, 0.829);">Pasaga Unpar</a>
            </div>
            
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>

                <ul class="nav__list">
                    <li class="nav__item"><a href="book.php" class="nav__link active">Book a court</a></li>
                    <li class="nav__item"><a href="howto.php" class="nav__link" style="text-decoration: underline;">How to book</a></li>
                    <li class="nav__item"><a href="about.php" class="nav__link">About us</a></li>
                    <li class="nav__item"><a href="login.php" class="nav__link">Log in</a></li>
                    <li class="nav__item"><a href="register.php" class="nav__link">Register</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="spacer">
        &nbsp;
    </div>
    <div class="content">
        <div class="judul">
            <h1 style="font-weight: bold;">How to Book</h1>
            <h4 style="font-weight: lighter;">Mari berolahraga di Pasaga Unpar dan rasakan pengalaman<br>berolahraga yang menyenangkan</h4>
        </div>

        <div class="cara">
            <embed src="files/cara_book.pdf" type="application/pdf" width="75%" height="700px">
        </div>
    </div>
</body>
</html>