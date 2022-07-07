<?php
session_start();
    include 'connection.php';
    $customeremail = $_POST['customeremail'];
    $order = $_POST['order'];
    $sql = "SELECT * FROM orders WHERE customeremail='$customeremail' AND order_no='$order'";
    $query = mysqli_query($con, $sql);
    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['customer_email']=$customeremail;
            $_SESSION['ordern']=$order;
            echo 'otracks';
        }
        else{
            echo 'tracks';
        }
    }
    ?>