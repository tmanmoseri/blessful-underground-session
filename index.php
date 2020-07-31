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

  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <!-- Welcome Slides -->
    <div class="welcome-slides owl-carousel">

      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">The blessful underground Session</h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">By Mjeke</h5>
              </div>

              <!-- Welcome Music Area -->
               <?php
                     $i=1;
                     $sql="select * from `blessful` limit 1";
                     $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                     while($row=mysqli_fetch_array($qry))
                     {

                 ?>
              <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="poca-music-thumbnail">
                  <img src="<?php echo $row['file'];?>" alt="">
                </div>
                <div class="poca-music-content">
                  
                  <h2><?php echo  $row['fname'] ?></h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">Mjeke</a> | <a href="#" class="music-catagory">Blessful</a> | <a href="#"><?php echo  $row['date'] ?></a></p>
                  </div>
                  <!-- Music Player -->
                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="upload/<?php echo $row['music'];?>">
                    </audio>
                  </div>
                  <!-- Likes, Share & Download -->
                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                    <div>
                      <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                      <a href="audio/dummy-audio.mp3"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                    </div>
                  </div>
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
  <!-- ***** Welcome Area End ***** -->

  <!-- ***** Latest Episodes Area Start ***** -->
  <section class="poca-latest-epiosodes section-padding-80">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Latest MixTapes</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Projects Menu -->
    <div class="container">
      <div class="poca-projects-menu mb-30 wow fadeInUp" data-wow-delay="0.3s">
        <div class="text-center portfolio-menu">
          <button class="btn active" data-filter="*">All</button>
          <button class="btn" data-filter=".entre">Blessful Underground</button>
          <button class="btn" data-filter=".media">Deep Sat</button>
         <!-- <button class="btn" data-filter=".tech">Tech</button>
          <button class="btn" data-filter=".tutor">Tutorials</button>-->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row poca-portfolio">

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item entre wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <?php
                     $i=1;
                     $sql="select * from `blessful` limit 2";
                     $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                     while($row=mysqli_fetch_array($qry))
                     {

                 ?>
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            
            <div class="poca-music-thumbnail">
              <img src="./img/bg-img/5.jpg" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2"><?php echo  $row['date'] ?></span>
              <h2><?php echo  $row['fname'] ?>!</h2>
              <div class="music-meta-data">
                <p>| By <a href="#" class="music-author"> Mjeke</a> | <a href="#" class="music-catagory">Blessful</a> | </p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
          <?php
                   $i++;
                 }
              ?>
        </div>

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item media wow fadeInUp" data-wow-delay="0.2s">
           <?php
                     $i=1;
                     $sql="select * from `deep` limit 2";
                     $qry=mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));

                     while($row=mysqli_fetch_array($qry))
                     {

                 ?>
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="./img/bg-img/8.jpg" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2"><?php echo  $row['date'] ?></span>
              <h2><?php echo  $row['fname'] ?></h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author"> Mjeke</a> | <a href="#" class="music-catagory">Deep Sat</a> | </p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
          <?php
                   $i++;
                 }
              ?>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <a href="blessful.php" class="btn poca-btn mt-70">Load More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Latest Episodes Area End ***** -->

  <!-- ***** Featured Guests Area Start ***** -->
  <section class="featured-guests-area">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Your DJ</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row justify-content-around">
        <!-- Single Featured Guest -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="img/bg-img/25.jpg" alt="">
            <div class="guest-info">
              <h5>Mjeke</h5>
              <span>PRODUCER</span>
              <div class="footer-social-info">
              <a href="#" class="facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="twitter" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a>
              <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
            </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ***** Featured Guests Area End ***** -->

  <!-- ***** Newsletter Area Start ***** -->
  <section class="poca-newsletter-area bg-img bg-overlay pt-50 jarallax" style="background-image: url(img/bg-img/15.jpg);">
    <div class="container">
      <div class="row align-items-center">
        <!-- Newsletter Content -->
        <div class="col-12 col-lg-6">
          <div class="newsletter-content mb-50">
            <h2>Sign Up To New Mixtapes</h2>
            <h6>Subscribe to receive info on our latest Mixtapes and events</h6>
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