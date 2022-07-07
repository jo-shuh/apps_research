<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>10Essays | Buy Essays</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="samples/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="samples/assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!--<link href="samples/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <link href="samples/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="samples/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="samples/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="samples/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="samples/assets/css/style.css" rel="stylesheet">
    <script src="js/jquery-2.2.3.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!-- Template Main JS File -->
 
</head>

<body style="background-color: #f5f5f5">

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="images/logo.png" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="/">10Essays</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/shopilyv" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/shopilyv" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/uzaplus_ke" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/shopilyv/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <!--<li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Introduction</span></a></li>-->
           <li><a href="/" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="otracks" class="nav-link scrollto active"><i class="bx bx-server"></i> <span>Track your Order</span></a></li>
          <li><a href="discounts" class="nav-link scrollto active"><i class="bx bx-file-blank"></i> <span>Claim a discount</span></a></li>
          <li><a href="#" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>Sample Essays</span></a></li>
          <li><a href="service" class="nav-link scrollto active"><i class="bx bx-server"></i> <span>Read Articles</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!--<section id="hero" class="d-flex flex-column justify-content-center align-items-center">-->
  <!--  <div class="hero-container" data-aos="fade-in">-->
  <!--    <h1>10Essays.com</h1>-->
  <!--    <p>We're <span class="typed" data-typed-items="Professional research writers, Located in Kenya, Reknowned for competent, error-free academic writing, Reliable and deadline-oriented "></span></p>-->
  <!--  </div>-->
  <!--</section><!-- End Hero -->
<style>
    .about{
        height: auto;
        max-height: 100vh;
        margin-top:10px;
        margin-bottom: 5px;
        background-color: #ffffff;
        margin-left:5%;
        margin-right: 5%;
    }
</style>
  <main id="main">
    <h3 style="text-align:center"><u>Sample Essays</u></h3>
    <!-- ======= About Section ======= -->
    <?php
        include 'connection.php';
        $result = mysqli_query($con,"SELECT * FROM `articles` LIMIT 20");
        if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $title=$row['article_title'];
            $category=$row['article_category'];
            $aid=$row['id'];
            $atitle=$title."_".$aid;
            $story=$row['article_description'];
            
            $titlength=strlen($title);
            $strlen=strlen($story);
            
            // if($titlength>28){
            // $title = substr($title, 0, 28)."..";
            // }
            
            if($strlen>3000){
            $story = substr($story, 0, 3000)."..";
            }
        ?>
    <section id="business" class="about">
      <div class="container">
        <div class="section-title">
            <h3>Title: <?php echo $title ?></h3>
        </div>

        <div class="row">
            <p><?php echo $story ?></p>
          
        </div>
        <button class="btn btn-success" art_id="<?php echo $aid ?>">Buy Now</button>
      </div>
    </section><!-- End About Section -->
<?php } } ?>
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 <script src="samples/assets/vendor/aos/aos.js"></script>
  <script src="samples/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="samples/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="samples/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="samples/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="samples/assets/vendor/php-email-form/validate.js"></script>
  <script src="samples/assets/vendor/purecounter/purecounter.js"></script>
  <script src="samples/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="samples/assets/vendor/typed.js/typed.min.js"></script>
  <script src="samples/assets/vendor/waypoints/noframework.waypoints.js"></script>
   <script src="samples/assets/js/main.js"></script>
  <!-- Vendor JS Files -->
  <script>
//   $(document).ready(function(){
//   var click=0;
//       $(document).on('click','dropdown-toggle',function(){
//           click++;
//           var par=$(this).parent();
//           if(click%2==0){
//           par.addClass('show');
//           par.find('dropdown-menu').addClass('show');
//           }
//           else{
//             par.removeClass('show');
//           par.find('dropdown-menu').removeClass('show');  
//           }
//       });
      
//   });
  </script>

</body>

</html>