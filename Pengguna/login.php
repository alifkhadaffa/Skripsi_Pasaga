<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <title>Login Page</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: rgb(219, 226, 226);
        }
        .row{
            background: white;
            border-radius: 30px;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            margin-left: -16px;
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 100%;
            background-color: #0D7A6F;
            color: white;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn1:hover{
            background-color: white;
            border: 1px solid;
            color: #0D7A6F;
        }
        #logo{
            width: 10%;
        }

        .no-gutters{
            margin-top: 120px;
        }
        #inline{
            text-decoration: underline;
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
                    <li class="nav__item"><a href="howto.php" class="nav__link">How to book</a></li>
                    <li class="nav__item"><a href="about.php" class="nav__link">About us</a></li>
                    <li class="nav__item"><a href="login.php" class="nav__link" style="text-decoration: underline;">Log in</a></li>
                    <li class="nav__item"><a href="register.php" class="nav__link">Register</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="Form my-4 mx-5 mt-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <img src="..//Image/wall.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <img src="../Image/Logo_UNPAR.png" alt="" id="logo">
                    <h1 class="font-weight-bold py-3" style="color: rgba(194, 161, 15, 0.829);">Pasaga Unpar</h1>
                    <h4>Sign in to your account</h4>
                    <form action="login.php" method="post">
                    <?php include('errors.php') ?>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email-Address" class="form-control my-4 p-3" name="login-email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="******" class="form-control my-3 p-3" name="login-password" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5" name="btnLogin">Login</button>
                            </div>
                        </div>
                        <a href="#" id="inline">Forgot Password?</a>
                        <p style="color: black;">Don't have an account? <a href="register.php" id="inline">Register here!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>