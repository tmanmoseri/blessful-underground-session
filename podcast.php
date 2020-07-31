<?php
/*Yeah! Displays user information and some useful messages */
session_start();

//Yeah! Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != true ) {
  $_SESSION['message'] = "You must log in again. Your session has expired!!";
  header("location: login.php");
    $status = 'Login / Register';
     $page = "logout";
}
else {
    //Yeah! Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    //$active = $_SESSION['active'];
      $status = 'Logout';
    
    $profile ='Logged in: '.$first_name.' '.$last_name;
    $rel = 'loggedout.php';
     $page = "";
}


?>
<script type="text/javascript">

function myFunction() {
    var num = <?php echo $rel ?>;
    }

  </script>
  <?php
include('upload.php');
include('db.php');
 ?>

<DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>uploader</title>

     <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="main.css" rel="stylesheet" media="all">
</head>

<body>


  <!-- Preloader -->
  <div id="preloader">
    <div class="preloader-thumbnail">
      <img src="./img/core-img/preloader.png" alt="">
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="pocaNav">

          <!-- Logo -->
           <a class="nav-brand" href="index.php"><img alt=""><span><b>MJEKE</b></span></a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">

            <!-- Menu Close Button -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li class="current-item"><a href="./index.php">Home</a></li>
                
                </li>
                <li><a href="./about.php">About</a></li>
                <li><a href="blog.php">Blog</a>
                  <ul class="dropdown">
                    <li><a href="./blog.php">- Blog</a></li>
                    <li><a href="./single-blog.php">- Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="./contact.php">Contact</a></li>
                 <li><a href="./blessful.php">Downloads</a>
                  <ul class="dropdown">
                     <li><a href="./blessful.php">- Bessful underground</a></li>
                    <li><a href="./deep.php">- Deep Sat</a></li>
                  </ul>
                </li>
                 <li><a href='<?php echo $pel;?>' onclick='return myFunction()'><?= $page; ?></a></li>
                 <li><a href='<?php echo $rel;?>' onclick='return myFunction()'><?= $status; ?></a></li>
                        
              </ul>

              <!-- Top Search Area -->
              <div class="top-search-area">
                <form action="index.php" method="post">
                  <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div>

              <!-- Top Social Area -->
              <div class="top-social-area">
                <a href="#" class="fa fa-facebook" aria-hidden="true"></a>
                <a href="#" class="fa fa-twitter" aria-hidden="true"></a>
                <a href="#" class="fa fa-pinterest" aria-hidden="true"></a>
                <a href="#" class="fa fa-instagram" aria-hidden="true"></a>
                <a href="#" class="fa fa-youtube-play" aria-hidden="true"></a>
              </div>

            </div>
            <!-- Nav End -->
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

   <!-- ***** Breadcrumb Area Start ***** -->
  <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title mt-70">File uploader</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Breadcrumb Area End ***** -->


  <!-- Contact Form -->
  <div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="container">
      <div class="row poca-portfolio">

        <!-- Single gallery Item -->
        <div class="col-10 col-md-10 single_gallery_item entre wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">



        <div class="col-12 col-md-10">
          <div class="contact-form">
            <div class="contact-heading">
              <h2>Upload new item here</h2>
            </div><hr>

            <!-- Form -->
            <form action="submit.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-12"><h4>Title</h4>
                  <input type="text" name="fname" id="fname" class="form-control mb-30" placeholder="Title">
                </div>
                </div><hr>

                <div class="value"><h4>Picture</h4>
                  <div class="input-group js-input-file">
                    <input type="file" name="uploadfile">
                  </div>
                  <div class="label--desc">Upload a picture or any other relevant file. Max file size 5MB</div>
                </div><hr>

                

                <div class="col-12"><h4>Content</h4>
                  <textarea id="content" name="content" class="form-control mb-30" placeholder="content"></textarea>
                </div>
                <hr>

                 <div class="row">
                <div class="col-12"><h4>Date published</h4>
                   <input type="date" name="pdate" class="form-control mb-30" placeholder="Pick a date" />
                 
                </div>
                </div>

                <hr><div class="value"><h4>Mixtape</h4>
                  <div class="input-group js-input-file">
                   <input type="file" name="uploadmusic">
                  </div>
                  <div class="label--desc">Upload your Mixtape or any other relevant file. Max file size 300MB</div>
                </div>

                <hr>
                <h4><span>File</span> category</h4>
                   <input type="radio" value="blessful" name="tablename">Blessful underground<br>
                   <input type="radio" value="deep" name="tablename">Deep Sat<br>
                   <input type="radio" value="blog" name="tablename">blog<br>
                    <hr>
                   

                 <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn poca-btn" name="submitform">Publish</button>
                </div>
              </div>

            </form>

          </div>
        </div>

        </div>
        </div>
        </div>
        </div>
        </div>
  </div>
  


  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area section-padding-80-0">
    <div class="container">
      <div class="row">

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-8 col-lg-5">
          <div class="single-footer-widget mb-80">
            <!-- Widget Title -->
            <h4 class="widget-title">About Us</h4>

            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
            
          </div>
        </div>

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-footer-widget mb-80">
            <!-- Widget Title -->
            <h4 class="widget-title">Categories</h4>

            <!-- Catagories Nav -->
            <nav>
              <ul class="catagories-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="blessful.php">Downloads</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="copywrite-content" col-md="12">
              <p>&copy; 

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>

      </div>
    </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="js/poca.bundle.js"></script>
  <!-- Active js -->
  <script src="js/default-assets/active.js"></script>

</body>

</html>