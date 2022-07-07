<?php
session_start();
include 'connection.php';
$response = array("error" => false);
if (isset($_POST['reason'])) {

    $reason = $_POST['reason'];
    $page = $_POST['page'];

    $file = $_FILES['file_data']['name'];
    $file_loc = $_FILES['file_data']['tmp_name'];
    $file_size = $_FILES['file_data']['size'];
    $file_type = $_FILES['file_data']['type'];
//$file_type = "TYPE";
    $folder = "revise/";

    /* new file size in KB */
    $new_size = $file_size / 1024;
    
    /* make file name in lower case */
    $new_file_name = strtolower($file);
    
    /* make file name in lower case */
    $final_file = str_replace(' ', '-', $new_file_name);

    move_uploaded_file($file_loc, $folder . $final_file);

    $sql = "INSERT INTO revision(reason,page,file,type,size) VALUES('$reason','$page','$final_file','$file_type','$new_size')";
    $query = mysqli_query($con, $sql);
    
    $last_id = mysqli_insert_id($con);
    $st = 'RS-';
    $ord_no = $st . $last_id;
    if(isset($_SESSION['ordern'])){
        $ord_no=$_SESSION['ordern'];
    }

    //echo $last_id;
    //update revision table
    $updateo = "UPDATE revision SET order_no='$ord_no' WHERE id='$last_id'";
    mysqli_query($con, $updateo);
    
    
    if ($query) {
        $updateql = "UPDATE orders SET status='4' WHERE order_no='$ord_no'";
         mysqli_query($con, $updateql);
        $response["success"] = 'Records added Successfully';

    } else {
        $response["error"] = true;
        $response["error"] = 'ERROR: Not able to execute $sql. ' . mysqli_error($con);

    }
    //header("location:http://localhost/essay");
    //  echo '<script> alert("order successfully placed thank you for choosing us"); window.location= "http://localhost/essay"</script>';

}
echo json_encode($response);
?>