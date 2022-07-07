 
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}
.advertising {
  padding: 16px;
  width:50%;
  color:white;
}
.description{
 font-size:35px;
}
img{
    width:500px;
    height:240px;
}
@media(max-width: 1080px) {
.description{
 font-size:20px;
}    
}
</style>
</head>
<body>
       <?php
    include 'connection.php';
    $sql = "SELECT * FROM discounts where='0' LIMIT 1";
    $query = mysqli_query($con, $sql);
    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_array($query)) {
                $description = $row['description'];
                $offer_info = $row['offer_info'];
                $filename = $row['filename'];
                ?>
<form action="/action_page.php">
  <div class="advertising">
    <p class="description"><b><b><?php echo $description; ?></b></b></p>
    <br>
    <?php echo $offer_info; ?>
    <br>
    <img  src="https://admin10essays.blackboardmaster.com/upload/<?php echo $filename; ?>">
  </div>
  
                 <?php }
        }
    }
    ?>
</form>

</body>
</html>
