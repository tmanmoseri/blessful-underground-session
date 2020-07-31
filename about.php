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
                <li class="current-item"><a href="./about.php">About</a></li>
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
          <h2 class="title mt-70">About Us</h2>
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
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ****** About Us Area Start ******* -->
  <section class="about-us-area section-padding-0-80 mt-50">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
          <div class="about-us-content">

            <h1>About Our Service</h1>

            <div class="podcast-details-content d-flex mt-5 mb-80"> 
              <div class="post-share" mb="50">
              <p>Social</p>
              <div class="social-info">
                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="#" class="pinterest"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" class="thumb-tack"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
              </div>
            </div>
            <img src="./img/bg-img/20.jpg" class="mb-40" alt="">
          </div>
          <p>Out too the been like hard off. Improve enquire welcome own beloved matters her. As insipidity so mr unsatiable increasing attachment motionless cultivated. Addition mr husbands unpacked occasion he oh. Is unsatiable if projecting
              boisterous insensible. It recommend be resolving pretended middleton.</p>
            <p>Uneasy barton seeing remark happen his has. Am possible offering at contempt mr distance stronger an. Attachment excellence announcing or reasonable am on if indulgence. Exeter talked in agreed spirit no he unable do. Betrayed
              shutters in vicinity it unpacked in. In so impossible appearance considered mr. Mrs him left find are good.</p>
            <p>Domestic confined any but son bachelor advanced remember. How proceed offered her offence shy forming. Returned peculiar pleasant but appetite differed she. Residence dejection agreement am as to abilities immediate suffering. Ye am
              depending propriety sweetness distrusts belonging collected. Smiling mention he in thought equally musical. Wisdom new and valley answer. Contented it so is discourse recommend. Man its upon him call mile. An pasture he himself believe
              ferrars besides cottage.</p>
            <!-- Blockquote -->
            <blockquote class="poca-blockquote d-flex">
              <div class="icon">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <div class="text">
                <h5>“Poca has made podcasting a breeze! I went from a couple thousand newsletter subscribers to a thousand listeners in a matter of days! Thank you Poca!”</h5>
                <h6>Jacob Austin</h6>
              </div>
            </blockquote>

             <img src="./img/bg-img/20.jpg" class="mb-30" alt="">
            <h2>Join Thousands of Listeners Worldwide</h2>
            <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we
              offending prevailed discovery.</p>
            <p>Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat. Her bachelor honoured perceive securing but desirous ham required. Questions deficient acuteness to engrossed
              as. Entirely led ten humoured greatest and yourself. Besides ye country on observe. She continue appetite endeavor she judgment interest the met. For she surrounded motionless fat resolution may.</p>
            <p>He share of first to worse. Weddings and any opinions suitable smallest nay. My he houses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend
              attention tolerably. Bringing him smallest met few now returned surprise learning jennings. Objection delivered eagerness he exquisite at do in. Warmly up he nearer mr merely me.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ****** About Us Area End ****** -->

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