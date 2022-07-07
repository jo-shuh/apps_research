<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>10essay|review</title>
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
      <style>
.contentbody{
      width:100%;
  }
.majorcontainer{
    float:left;
    margin-left:10px;
    margin-top:2%;
    margin-bottom:10px;
    background:#f2f2f2;
    padding-top:5px;
    border-radius: 12px 50px 30px;
    box-shadow:3px 2px #000033;
    display: flex;
    overflow: auto;
    flex: none;
}
.majorcontainer.y {
  width: 49%;
  height: 280px;
  flex-flow: column nowrap;
}
.y.proximity-scroll-snapping {
  scroll-snap-type: y proximity;
}
.majorcontainer > div {
  text-align: center;
  scroll-snap-align: center;
  flex: none;
}
.y.majorcontainer > div {
  width:100%;
}
.y.majorcontainer > div:first-child {
  font-size:40px;
}
.article_title{
color: #000066;
text-align: center;
}
.article_file{
font-size:20px;
text-align: center;
}
.buynow{
font-size:35px;
text-align: center;
margin-bottom:10px;
}
.buynow button{
    background-color:#00004d;
    font-size:25px;
    border-radius: 16px;
}
@media(max-width:414px){
   .contentbody{
      width:100%;
  }
  .majorcontainer.y {
  width:94%;
  margin-top:9%;
  height: 280px;
  flex-flow: column nowrap;
}
}
      </style>
   </head>
   <body>
      <!--headder-->
      <div class="header-outs" id="header">
         <div class="headder-nav-icon">
            <!--//navigation section -->
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="service" class="nav-link">Service</a>
                     </li>
                     <!--<li class="nav-item ">-->
                     <!--   <a href="contact" class="nav-link">Contact</a>-->
                     <!--</li>-->
                     <!--<li class="nav-item ">-->
                     <!--   <a href="review" class="nav-link">review</a>-->
                     <!--</li>-->
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <div class="contentbody">
                      <div class="row">
               <div class="col-lg-12">
                              <div class="comments-w3layouts-grid pt-lg-5 pt-md-4 pt-3">
                    <?php
                    include 'connection.php';
                    $sql = "SELECT * FROM articles WHERE article_category='Journal'";
                    $query = mysqli_query($con, $sql);
                    if ($query) {
                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_array($query)) {
                                $article_title = $row['article_title'];
                                $article_file = $row['article_file'];
                                ?>
                    <div class="majorcontainer y proximity-scroll-snapping" dir="ltr">
                        <div class="article_title">
                            <?php echo $article_title; ?>
                        </div>
                        <div class="article_file">
                            <?php echo $article_file; ?>
                        </div>
                        <div class="buynow">
                            <button>
                                <a href="/">Buy Custom Answer</a>
                            </button>
                        </div>
                    </div>
            <?php }
        }
    }
    ?>
       </div>
    </div>
    </div>
    </div>
      <!--Footer -->
      <section class="buttom-footer py-lg-5 py-md-4 py-sm-3 py-3">
         <div class="headder-logo-icon text-center">
            <h2 class="mb-3"><a href="index">10ESSAYS</a></h2>
         </div>
         <div class="buttom-nav py-3">
            <nav class="border-line">
               <ul class="nav justify-content-center">
                  <li class="nav-item active">
                     <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a href="service" class="nav-link">Services</a>
                  </li>
                  <!--<li class="nav-item">-->
                  <!--   <a href="contact" class="nav-link">Contact</a>-->
                  <!--</li>-->
                  <!--<li class="nav-item">-->
                  <!--   <a href="review" class="nav-link ">Review</a>-->
                  <!--</li>-->
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