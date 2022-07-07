
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>10Essay Services</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Inside-Art Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
          <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/60ffa939649e0a0a5cce18ce/1fbjaq2gb';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
   </head>
   <body>
      <!--headder-->
    <?php 
    include 'headers/header.php';
    ?>
    
    <style>
       body{
          background: #fff;
       }
    </style>
         <!-- //Navigation -->
         <!--//headder-->
         <!-- banner -->
         <div class="inner_page-banner">
         </div>
         <!--//banner -->
         <!-- short -->
         <div class="using-border py-3">
            <div class="inner_breadcrumb  ml-4">
               <ul class="short_ls">
                  <li>
                     <a href="/">Home</a>
                     <span>/ /</span>
                  </li>
                  <li>service</li>
               </ul>
            </div>
         </div>
      </div>
      <!-- //short-->
      <!--Services -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container-fluid py-lg-5 py-md-5 py-sm-4 py-4">
            <div class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <h3  style="color:#fff !important;">Service & Samples</h3>
            </div>
            <div class="row agile-abt-info ">
               <div class="col-lg-12 ser-left-gird text-center">
                  <div class="row" style="color: #fff !important;">
                                   <?php
                                    include 'connection.php';
                                    $result = mysqli_query($con,"SELECT * FROM `articles` ");
                                    while($row = mysqli_fetch_assoc($result)){
                                        $title=$row['article_title'];
                                        $category=$row['article_category'];
                                        $aid=$row['id'];
                                        $atitle=$title."_".$aid;
                                        $story=$row['article_description'];
                                        
                                        $titlength=strlen($title);
                                        $strlen=strlen($story);
                                        
                                        if($titlength>28){
                                        $title = substr($title, 0, 28)."..";
                                        }
                                        
                                        if($strlen>75){
                                        $story = substr($story, 0, 75)."..";
                                        }
                                        echo "<div class='service'>
                                        <a href='articles?title=$atitle' style='color:#000;'>
                                        <div class='article_category'>".$category."</div>
                                        <div class='article_title'>".$title."</div>
                                        <div class='article_description'>".$story."</div>
                                        <button type='submit' class='read'>READ MORE</button>
                                        </a>
                                        </div>";
                                        
                                        
                                            }
                                    mysqli_close($con);
                                    ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//service -->
      <!--Footer -->
      <section class="buttom-footer py-lg-5 py-md-4 py-sm-3 py-3">
         <div class="headder-logo-icon text-center">
            <h2 class="mb-3"><a href="/">10ESSAYS</a></h2>
         </div>
         <div class="buttom-nav py-3">
            <nav class="border-line">
               <ul class="nav justify-content-center">
                  <li class="nav-item active">
                     <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a href="service" class="nav-link">Services</a>
                  </li>
<!--                  <li class="nav-item">-->
<!--                     <a href="contact" class="nav-link">Contact</a>-->
<!--                  </li>-->
<!--                  <li class="nav-item">-->
<!--                     <a href="review" class="nav-link ">Review</a>-->
<!--                  </li>-->
               </ul>
            </nav>
         </div>
      </section>
      <footer>
         <div class="footer-bottom py-lg-4 py-3 text-center">
            <p>shopilyv©2020. All Rights Reserved</p>
         </div>
      </footer>
      <!-- //Footer -->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>
