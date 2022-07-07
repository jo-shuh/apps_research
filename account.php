<?php
session_start();
    include 'connection.php';
    $customeremail = $_POST['customeremail'];
    $order = $_POST['order'];
$_SESSION['ordern']=$order;
    $sql = "SELECT * FROM orders WHERE customeremail='$customeremail' AND order_no='$order'";
    $query = mysqli_query($con, $sql);
    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_array($query)) {
                $projectname = $row['projectname'];
                $pages = $row['pages'];
                $deadline = $row['deadline'];
                $instructions = $row['instructions'];
                $order_answers=$row['order_answers'];
                ?>
 
        <div class="row">
            <div class="col-75">
             <label for="deadline">projectname</label>
             <div class="field">
            <?php echo $projectname; ?>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="pages">
            <label for="deadline">Pages</label>
            <div class="field">
            <?php echo $pages; ?>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="deadline">
            <label for="deadline">Deadline</label>
            <div class="field">
             <?php echo $deadline; ?>
             </div>
             </div>
        </div>
        <div class="row">
             <div class="country">
             <label for="subject">Instruction</label>
             <div class="field">
            <?php echo $instructions; ?>
           </div>
             </div>
        </div>
    <div class="answer">
      <b><a style="color:blue;" href="<?php echo "https://admin10essays.blackboardmaster.com/upload/" . $order_answers?>">Download Answer<i class="fa fa-download"></i></a></b>
    </div>

               <?php }
        }
    }
    ?>