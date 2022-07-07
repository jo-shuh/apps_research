
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>10Essays/order now</title>
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
       
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
 
       <!--headder-->
  <?php 
    include 'headers/header.php';
    ?>
    <style>
        body{
            background: #00e6e6;
        }
        .container-3{
            padding: 10px;
        }
        .o-form{
            /*border: 1px solid;*/
            padding: 10px;
            border-radius: 8px;
            margin-top: 20%;
            /*background: #e6f7ff;*/
            background: linear-gradient(to top right, #003366 0%, #00ffff 100%);
        }
        .row {
            margin-left: 7%;
        }

        .col-75 {
            /*float: left;*/
            width: 95%;
            margin-top: 135px;
        }
        .col-25 {
            width: 95%;
        }

        .country {
            margin-left: 10px;
        }

        .pages {
            width: 20%;
            color: #000;
            font-size: 13px;
        }

        .deadline {
            margin-left: 49%;
            margin-top: -23%;
            width: 25%;
            color: #000;
            font-size: 13px;
        }

        .deadline input {
            color: #000;
        }

        .total {
            background-color: #00334d;
            float: right;
            border-radius: 8px;
            margin-top: -190px;
            margin-left: -280px;
            padding: 5px;
            text-align: center;
            color: #ffff;
        }
        
        .projectname{
            margin-top: 10px;
        }
        .pages input {
            color: #000;
        }

        .file {
            width: 40%;
        }

        .email {
            width: 100%;
        }

        .roww {
            border: 2px solid blue;
        }

        .select:hover {
            display: block;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .pop-up {
            float: right;
            margin-top: 0px;
            width: 100%;
            z-index: 1000;
            position: relative;
            display: block;
        }
        .payment {
            background-color: #00334d;;
            color: #fff;
            width: 200px;
            margin: auto;
            border-radius: 8px;
            height: 50px;
            display: block;
            border: none;
        }
         input[type=text], select, textarea {
            width: 90%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            color: black;
        }
        .deadline input {
            color: #000;
            width: 35%;
        }
        .pages input {
            color: #000;
            width: 85%;
        }
       
    </style>
<div class="container-3">

    <div class="o-form">
    <div class="row">
      <div class="col-75">
        <input type="text" id="projectnamee" name="projectnamee" placeholder="Project Name" class="projectname">
      </div>
    </div>


      <div class="row">
      <div class="pages">
          
           <label for="deadline">Pagess</label>
         <div class="cost">10$ each</div>
        <div class="amount"><input type="number" value="1" class="form-page" id="pages" name="pages" min="1"></div>
        <div class="total">10$</div> <br>
      </div>
      </div>

      <div class="row">
      <div class="deadline">
        <label for="deadline">Deadline</label><br>
        <input type="datetime-local" class="form-check-input" id="deadline" name="deadline" min="today">
      </div>
    </div>
   
    <div class="row">
      <div class="country">
        <label for="subject"></label>
      </div>
      <div class="col-25">
        <textarea id="instructions" name="instructions" placeholder="Write your instructions"  class="test" style="height:80px"></textarea>
      </div>
    </div>

<div class="row">
<div class="file">
       <label for="deadline" class="label">Upload File</label><br>
        <input type="file" id="myFile" name="file" class="label" multiple>
      </div>
    </div>
    <br>
    <div class="row">
<div class="email">
<input type="text" id="customeremail" name="customeremail" class="label" placeholder="Your email">
      </div>
    </div>
    <br>
<div class="row pay">
<?php include 'payment.php';?>
    </div>
    </div>
</div>

<?php include 'headers/footer.php';?>
<script>
    $('.amount > input[type="number"]').on('input', updateTotal);

    function updateTotal(e){
        var amount = parseInt(e.target.value);

        if (!amount || amount < 0)
            return;

        var $parentRow = $(e.target).parent().parent();
        var cost = parseFloat($parentRow.find('.cost').text());
        var total = (cost * amount).toFixed(2);

        $parentRow.find('.total').text(total);
    }
</script>

<script language="javascript">
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    $('#deadline').attr('min',today);
</script>


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
