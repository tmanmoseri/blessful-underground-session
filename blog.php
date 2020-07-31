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
                <li><a href="#">Blog</a>
                  <ul class="dropdown">
                    <li class="current-item"><a href="./blog.php">- Blog</a></li>
                    <li><a href="./single-blog.php">- Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="./contact.php">Contact</a></li>
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
          <h2 class="title mt-70">Blog</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Blog Area Start ***** -->
  <section class="blog-area">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">

          <!-- Single Blog Area -->
           <?php
                     $i=1;
                     $sql="select * from `blog`";
                     $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                     while($row=mysqli_fetch_array($qry))
                     {

                 ?>
          <div class="single-blog-area mt-50 mb-50">
            <a href="#" class="mb-30"><img src="./img/bg-img/21.jpg" alt=""></a>
            <!-- Content -->
            <div class="post-content">
              <a href="#" class="post-date"><?php echo  $row['date'] ?></a>
              <a href="#" class="post-title"><?php echo  $row['fname'] ?></a>
              <div class="post-meta mb-15">
                <a href="#" class="post-author">By Mjeke</a> |
                <a href="#" class="post-catagory">New Mixtape</a>
              </div>
              <p><?php echo $row['content'] ?></p>
              <a href="single-blog.php" class="read-more-btn">Continue reading <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <?php
                   $i++;
                 }
              ?>


          <!-- Pagination -->
          <div class="poca-pager d-flex mb-80">
            <a href="#">Previous Post <span>Episode 3 – Wardrobe For Busy People</span></a>
            <a href="#">Next Post <span>Episode 6 – Defining Your Style</span></a>
          </div>
           
            </div>


        <div class="col-12 col-lg-4">
          <div class="sidebar-area mt-5">

            <!-- Single Widget Area -->
            <div class="single-widget-area search-widget-area mb-80">
              <form action="#" method="post">
                <input type="search" name="search" class="form-control" placeholder="Search ...">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area catagories-widget mb-80">
              <h5 class="widget-title">Categories</h5>

              <!-- catagories list -->
              <ul class="catagories-list">
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Entrepreneurship</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Media</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tutorials</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Business</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Entertainment</a></li>
              </ul>
            </div>

            <!-- Single Widget Area -->
            <div class="single-widget-area news-widget mb-80">
              <h5 class="widget-title">Recent Posts</h5>

              <!-- Single News Area -->
              <?php
                     $i=1;
                     $sql="select * from `blog` limit 5";
                     $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                     while($row=mysqli_fetch_array($qry))
                     {

                 ?>
              <div class="single-news-area d-flex">

                <div class="blog-thumbnail">

                  <img src="./img/bg-img/11.jpg" alt="">
                </div>
                <div class="blog-content">
                  <a href="#" class="post-title"><?php echo  $row['fname'] ?></a>
                  <span class="post-date"><?php echo  $row['date'] ?></span>
                  
                </div>
              </div>
              <?php
                   $i++;
                 }
              ?>

            </div>


          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Blog Area End ***** -->

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