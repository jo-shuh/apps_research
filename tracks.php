<html lang="zxx">

<head>
	<title>10Essays | Track Order</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="10Essays Login, to academic writing websites, 10Essays.com" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src='js/jquery-2.2.3.min.js'></script>
	<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="track/css/style.css" type="text/css" media="all" />
<link rel="icon" href="http://localhost/project/images/icon2.png" type="image/x-icon">
</head>

<body>
	<!-- /login-section -->

    <div class="nav">
        <?php include 'headers/header.php'; ?>
      </div>
      <br><br>
  
	<section class="w3l-forms-23">
		<div class="forms23-block-hny">
			<div class="wrapper">
				<!--<h1>10Essays | Track order progress</h1>-->
				<!-- if logo is image enable this   
					<a class="logo" href="index.html">
					  <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
					</a> 
				-->
				<div class="d-grid forms23-grids">
					<div class="form23">
						<div class="main-bg">
							<h6 class="sec-one">Track Your Order</h6>
							<div class="speci-login first-look">
								<img src="track/images/user.png" alt="" class="img-responsive">
							</div>
						</div>
						<div class="bottom-content">
							<form id="ordprog" action="#" method="post">
								<input type="email" name="customeremail" id="customeremail" class="input-form" placeholder="Your Email" required="required" />
								<input type="text" name="order" id="order" class="input-form" placeholder="Order Number" required="required" />
								<button type="submit" class="loginhny-btn btn account1">Login</button>
							</form>
							<p>Not a member yet? <a href="/">Place Order</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //login-section -->
	<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Order review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 <div class="modal-body" id="mbody"></div>
      <div class="modal-footer">
        <button type="button" class="approve"><a href="index">Approve</a></button>
        <button type="button" class="revision"><a href="revision">Rewrite My Essay</a></button>
      </div>
    </div>
  </div>
</div>
 <style>
    .nav {
      width: 250%;
      /* margin-top: -38; */
      background-color: #fff;
      margin-left: -140px;
      position: fixed;
      z-index: 500;
    }

    .navbar-brand img {
      margin-left: 265px;
    }
    @media(max-width:600px) {
        .navbar-brand img {
            margin-left: 135px;

            }

        .nav-item {
            margin-left: 30px;
            }
        }
    </style>
<script>
    addEventListener("load", function () {
    			setTimeout(hideURLbar, 0);
    		}, false);
    
    		function hideURLbar() {
    			window.scrollTo(0, 1);
    		}
    $(document).ready(function () {

            $(document).on('blur', '.customeremail', function () {
                var customeremail = $(this).val();
                if (customeremail == "") {
                    $("#email").css({"border-color": "red"});
                    // $(this).focus();
                    $('#exampleModalLong').modal('hide');
                } else if (customeremail != "") {
                    $("#customeremail").css({"border-color": "green"});
                }
            });
            
            $(document).on('blur', '.order', function () {
                var order = $(this).val();
                if (order == "") {
                    $("#order").css({"border-color": "red"});
                    // $(this).focus();
                    $('#exampleModalLong').modal('hide');
                } else if (email != "") {
                    $("#order").css({"border-color": "green"});
                }
            });

            $(document).on('submit','#ordprog',function(e){
                e.preventDefault();
            });
            $(document).on("click", '.account1', function (e) {
                e.preventDefault();
             var btn=$(this);
                var customeremail = $('#customeremail').val();
                var order = $('#order').val();
                
                //alert(email);
                if (customeremail == "" || order == "") {
                    if (customeremail == "") {
                      $('#exampleModalLong').modal('hide');
                      $("#customeremail").css({"border-color": "red"});
                        }
                    if (order == "") {
                        $('#exampleModalLong').modal('hide');
                        $("#order").css({"border-color": "red"});
                    }
                }
                 else {

                    $.ajax({
                        url: "otrackslogin.php",
                        method: "POST",
                        data: {customeremail: customeremail, order: order},
                        beforeSend: function(){
                          btn.html("Checking..").addClass("disabled");  
                        },
                        success: function (data) {
                            btn.html("login").removeClass("disabled");
                            if(data==="otracks"){
                            window.location.href=data;
                           }
                            else{
                                console.log(data);
                                alert("Order not found")
                            }
                            //  $('#mbody').html(data);
                            //  $('#exampleModalLong').modal('show');

                        }
                    });


                }
             });
        });
</script>
</body>

</html>