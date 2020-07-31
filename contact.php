<?php

include('db.php');
 ?>
<?php
/*Yeah! Displays user information and some useful messages */
session_start();

//Yeah! Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] == true ) {
   //Yeah! Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    //$active = $_SESSION['active'];
    $page = "Uploads";
    
    $profile ='Logged in:'.$first_name.' '.$last_name;
     $status = 'Logout';
     $rel = 'loggedout.php';
      $pel = 'podcast.php';
     }
else{
    $profile = 'You are not logged in!';
     $status = 'Login / Register';
     $rel = 'login.html';
      $pel = 'http://www.saachs.org/index.php';
     $page = " ";
    }

?>

<script type="text/javascript">
function newwin() {  
  var num = <?php echo $rel ?>;
  }
  </script>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Mjeke -  &amp; Underground</title>

  <!-- Favicon -->
  <link rel="icon" href="./img/core-img/favicon.ico">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">

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
                <li><a href="./index.php">Home</a></li>
                
                </li>
                <li><a href="./about.php">About</a></li>
                <li><a href="blog.php">Blog</a>
                  <ul class="dropdown">
                    <li><a href="./blog.php">- Blog</a></li>
                    <li><a href="./single-blog.php">- Blog Details</a></li>
                  </ul>
                </li>
                <li class="current-item"><a href="./contact.php">Contact</a></li>
                 <li><a href="./blessful.php">Downloads</a>
                  <ul class="dropdown">
                     <li><a href="./blessful.php">- Bessful underground</a></li>
                    <li><a href="./single-blessful.php">- Deep Sat</a></li>

                  
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
          <h2 class="title mt-70">Contact</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Contact Area Start ***** -->
  <section class="poca-contact-area mt-50 mb-100">
    <div class="container">
     

      <div class="row">
        <!-- Contact Information -->
        <div class="col-12 col-md-6">
          <div class="contact-information">
            <div class="contact-heading mb-50">
              <h2>Contact Info</h2>
              <h6>We will be happy to assist you with any question</h6>
              <p>We provide sound for hire and available upon booking for Dj slots .</p>
            </div>


            <h5>Address: 15 Monrovia Str Isiphethweni Tembisa</h5>
            <h5>Phone: 0824361912</h5>
            <h5>Email: mjeke@gmail.com </h5>
            <h5>Open Hours: Mon - Fri: 8:00 AM to 6:00 PM</h5>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-12 col-md-6">
          <div class="contact-form">
            <div class="contact-heading">
              <h2>For bookings</h2>
              <h5>Don't hesitate to contact us</h5>
            </div>
            <!-- Form -->
            <form action="#" method="post">
              <div class="row">
                <div class="col-12">
                  <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                </div>
                <div class="col-12">
                  <input type="email" name="message-email" class="form-control mb-30" placeholder="Your Email">
                </div>
                <div class="col-12">
                  <textarea name="message" class="form-control mb-30" placeholder="Your Message"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn poca-btn">Send Message</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Contact Area End ***** -->

  <!-- ***** Newsletter Area Start ***** -->
  <section class="poca-newsletter-area bg-img bg-overlay pt-50 jarallax" style="background-image: url(img/bg-img/15.jpg);">
    <div class="container">
      <div class="row align-items-center">
        <!-- Newsletter Content -->
        <div class="col-12 col-lg-6">
          <div class="newsletter-content mb-50">
            <h2>Sign Up To Newsletter</h2>
            <h6>Subscribe to receive info on our latest news and episodes</h6>
          </div>
        </div>
        <!-- Newsletter Form -->
        <div class="col-12 col-lg-6">
          <div class="newsletter-form mb-50">
            <form action="#" method="post">
              <input type="email" name="nl-email" class="form-control" placeholder="Your Email">
              <button type="submit" class="btn">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Newsletter Area End ***** -->

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

        <!-- Single Footer Widget -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="single-footer-widget mb-80">
            <!-- Widget Title -->
            <h4 class="widget-title">Lastest Episodes</h4>

            <!-- Single Latest Episodes -->
            <div class="single-latest-episodes">

               <?php
                     $i=1;
                     $sql="select * from `blessful` limit 1";
                     $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                     while($row=mysqli_fetch_array($qry))
                     {

                 ?>

              <p class="episodes-date"><?php echo  $row['date'] ?></p>
              <a href="#" class="episodes-title"><?php echo  $row['fname'] ?></a>
              <?php
                   $i++;
                 }
              ?>
            </div>

            <!-- Single Latest Episodes -->
            <div class="single-latest-episodes">
               <?php
                     $i=1;
                     $sql="select * from `deep` limit 1";
                     $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                     while($row=mysqli_fetch_array($qry))
                     {

                 ?>
              <p class="episodes-date"><?php echo  $row['date'] ?></p>
              <a href="#" class="episodes-title"><?php echo  $row['fname'] ?></a>
              <?php
                   $i++;
                 }
              ?>
            </div>
          </div>
        </div>
        

        <div class="copywrite-content">
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