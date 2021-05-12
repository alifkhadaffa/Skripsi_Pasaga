<?php include('server.php') ?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>About Us</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Page-12.css" media="screen">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.10.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"}   
    </script>
    <meta property="og:title" content="Page 12">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
  </head>
  <body class="u-body">
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
                            <a href="#"><i class="fa fa-file-alt"></i> My Booking</a>
                            <a href="#"><i class="fa fa-user"></i> Edit Profile</a>
                            <a href="logout.php" tite="Logout"><i class="fa fa-power-off"></i> Logout</a>
                          </div>
                        </div> 
                      </div>
                </ul>
            </div>
        </nav>
    </header>
    <section class="u-black u-clearfix u-section-1" id="carousel_9626">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-33 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1" style="margin-top: 20%;">
                  <blockquote class="u-border-10 u-border-palette-3-base u-text u-text-1">about Pasaga Unpar</blockquote>
                  <p class="u-text u-text-white-50 u-text-2">Pasaga adalah fasilitas yang menyediakan sarana & prasarana olahraga untuk kebutuhan masyarakat dan Sivitas Unpar dalam berolahraga. Pasaga menyediakan berbagai lapangan yang sudah berstandar nasional seperti Lapangan Futsal, Lapangan Basket, Lapangan Voli, Lapangan Tennis,
                      dan Wall Climbing untuk kebutuhan berolahraga maupun latihan.</p>
                </div>
              </div>
              <div class="u-container-style u-image u-layout-cell u-left-cell u-size-27 u-image-1" style="margin-top: 5%;">
                <div class="u-container-layout u-container-layout-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>