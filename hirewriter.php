<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   -->
<style>
.modal.right.fade.in .modal-dialog {
right:0 !important;
transform: translateX(-50%);
}
.modal.right .modal-content {
height:90%;
width:80%;
overflow:auto;
border-radius:0;
}
.modal.right .modal-dialog {
position: fixed;
margin-left:20%;
height:100%;
-webkit-transform: translate3d(0%, 0, 0);
-ms-transform: translate3d(0%, 0, 0);
-o-transform: translate3d(0%, 0, 0);
transform: translate3d(0%, 0, 0);
}
.modal.right.fade.in .modal-dialog {
transform: translateX(0%);
}
.modal.right.fade .modal-dialog {
right:0px;
-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
-moz-transition: opacity 0.3s linear, right 0.3s ease-out;
-o-transition: opacity 0.3s linear, right 0.3s ease-out;
transition: opacity 0.3s linear, right 0.3s ease-out;
}
    
    
   .modal.right .modal-header {background-color:#50caff; color:#fff}
    .modal.right .modal-header::after {content:""; display:inline-block;}
    .modal.right .close {text-shadow:none; opacity:1; color:#ff4d4d; font-size:26px}
/*  form-control  */
    
    .form-control {border-radius:0; box-shadow:none}
    .form-control:focus {box-shadow:none}
    
    
/*  Button  */
    
    .btn {border-radius:0}
</style>
</head>
<body>
    <script>
         wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
    </script>
<div class="container">
    <h2>&nbsp;</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal">Hire</button>

  <!-- Modal -->
  <div class="modal right fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Categories</h4>
        </div>
        <div class="modal-body">
         
            <div class="row">
            
            <div class="col-sm-12 form-group">
                <a href="#">Humanities</a>
            </div>
            <div class="col-sm-12 form-group">
             <a href="#">engeneering</a>
            </div>
            <div class="col-sm-12 form-group">
            <a href="#">engeneering</a>
            </div>
            <div class="col-sm-12 form-group">
            <a href="#">Humanities</a>
            </div>
            <div class="col-sm-12 form-group">
            <a href="#">Humanities</a>
            </div>
                
                
        </div>
          </div>
        <div class="modal-footer"> 
          <button type="button" class="btn btn-default close-btn" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</body>
</html>