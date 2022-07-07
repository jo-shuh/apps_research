
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="keywords" content="Inside-Art Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="css/lightbox.css">
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" rossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <style>
        input[type=text], select, textarea {
            width:100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            color: black;
            background-color: rgba(255, 255, 255, 0.8);
        }
        .rev{
            width:100%;

        }
        .bg-image{
            width:50%;
            float:left;
        }
        .pay{
            width:50%;
            float:right;
        }
        .design{
            width:70%;
            margin-left:20px;
        }
        /*.pages{*/
        /*    width:50%;*/
        /*    margin-left:20px;*/
        /*}*/
        .payment{
            background-color: #0c0c27;
            color: #fff;
            width: 300px;
            margin-left:50%;
            border-radius: 19px;
            height: 50px;
            margin-top:40%;
        }
        label {
            font-size:20px;
            margin-left:50px;
            color: black;
        }
        .terminal {
            width: 100%;
            margin-top: 29.7%;
        }
        @media(max-width:414px){
            .bg-image{
                width:65%;
                float:left;
            }
            .pay{
                width:35%;
                float:right;
            }
            .payment{
                background-color: #0c0c27;
                color: #fff;
                width:100px;
                margin-left:10%;
                border-radius: 19px;
                height: 50px;
                margin-top:130%;
            }
            .design{
                width:90%;
                margin-left:20px;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="icons">
        <ul>
            <a class="navbar-brand" href="index"><img src="images/logo.png"style=" height:40px; width:150px;"></a>
        </ul>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav ">
            <li class="nav-item active">
                <a class="nav-link" href="index">how to order<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="customer">the answer<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="service">services<span class="sr-only">(current)</span></a>
            </li>

            <!--<li class="nav-item active">-->
            <!--    <a class="nav-link" href="contact">contact<span class="sr-only">(current)</span></a>-->
            <!--</li>-->

            <!--<li class="nav-item active">-->
            <!--    <a class="nav-link" href="review">review<span class="sr-only">(current)</span></a>-->
            <!--</li>-->

        </ul>
    </div>
</nav>

<div class="rev">

    <div class="bg-image" style="background-image:  url(images/reason.jpg) ;height:400px" ;>
        <div class="design">
            <label for="reason">Revision instructions</label><br>
            <textarea id="reason" name="reason" placeholder="reason for revision" class="reason" style="height:80px"></textarea>
        </div>
        <div class="design">
            <label for="deadline" class="label">Add File</label><br>
            <input type="file" id="myFile" name="file" class="file">
        </div>
        <br>
        <div class="design">
            <button type="button" class="submit"  data-toggle="modal" data-target="#exampleModalLong">submit</button>
        </div>
    </div>
    <div class="pay" style="background-image:  url(images/mack.jpg) ;height:400px" ;>
        <button class="payment"><a href="index">Order now</a></button>
    </div>
</div>
<div class="terminal">
    <section class="buttom-footer py-lg-5 py-md-4 py-sm-3 py-3">
        <div class="headder-logo-icon text-center">
            <h2><a href="index">10ESSAY</a></h2>
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
                    <!--    <a href="contact" class="nav-link">Contact</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a href="review" class="nav-link ">review</a>-->
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
</div>
<!-- //Footer -->
<!--//js working-->
<script src='js/jquery-2.2.3.min.js'></script>
<!--//js working-->
<!--  light box js -->
<script src="js/lightbox-plus-jquery.min.js"></script>
<!-- //light box js-->
<!--responsiveslides banner-->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 900,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--// responsiveslides banner-->
<!--Slider flexiselDemo3-->
<script src="js/jquery.flexisel.js"></script>
<script>
    $("#flexiselDemo3").flexisel({
        visibleItems: 4,
        itemsToScroll: 1,
        autoPlay: {
            enable: true,
            interval: 2000,
            pauseOnHover: true
        }
    });
</script>
<!--Slider flexiselDemo3-->
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
            scrollSpeed: 1100,
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
<script>
    $(document).ready(function () {

        $(document).on('blur', '.reason', function () {
            var reason = $(this).val();
            if (reason == "") {
                $("#reason").css({"border-color": "red"});
                // $(this).focus();
                $('#exampleModalLong').modal('hide');
            } else if (reason != "") {
                $("#reason").css({"border-color": "green"});
            }
        });
        $(document).on("click", '.submit', function (e) {
            e.preventDefault();
            var reason = $('#reason').val();
            var file_data = $('#myFile').prop('files')[0];
            var fd = new FormData();

            fd.append('reason', reason);
            fd.append('file_data', file_data);
           if (reason == "") {
                    $('#exampleModalLong').modal('hide');
                    $("#reason").css({"border-color": "red"});
                }
            else {

                $.ajax({
                    url: "revisiondb.php",
                    method: "POST",
                    data: fd,
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        if (response.success) {
                            $('#exampleModalLong').modal('hide');
                            alert(response.success);
                            location.reload();
                        } else {
                            alert(response.error);
                        }

                    }
                });


            }
        });
    });
</script>
</body>
</html>
