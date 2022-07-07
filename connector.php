<?php
require 'connection.php';
$response = array("error" => false);

$data = json_decode(file_get_contents("php://input"));
//echo file_get_contents("php://input");
$amount = $data->amount;
$currency = $data->currency;
$status = $data->status;
$transaction_id = $data->transaction_id;
$name = $data->customer->name;
$email = $data->customer->email;
$phone_number = $data->customer->phone_number;

$projectname = $_POST['projectname'];
$pages = $_POST['pages'];
$deadline = $_POST['deadline'];
$instructions = $_POST['instructions'];
$customeremail = $_POST['customeremail'];

$file = $_FILES['file_data']['name'];
$file_loc = $_FILES['file_data']['tmp_name'];
$file_size = $_FILES['file_data']['size'];
$file_type = $_FILES['file_data']['type'];

//$file_type = "TYPE";
$folder = "upload/";

/* new file size in KB */
$new_size = $file_size / 1024;

/* make file name in lower case */
$new_file_name = strtolower($file);

/* make file name in lower case */
$final_file = str_replace(' ', '-', $new_file_name);

move_uploaded_file($file_loc, $folder . $final_file);

$sql1 = "INSERT INTO orders(projectname,pages,deadline,instructions,customeremail,file,type,size) VALUES('$projectname','$pages','$deadline','$instructions','$customeremail','$final_file','$file_type','$new_size')";
$query1 = mysqli_query($con, $sql1);

$last_id = mysqli_insert_id($con);
$st = 'ES-';
$ord_no = $st . $last_id;

//echo $last_id;
//update orders table
$update = "UPDATE orders SET order_no='$ord_no' WHERE id='$last_id'";
mysqli_query($con, $update);

$sql2 = "INSERT INTO payment(amount,currency,status,transaction_id,name,email,phone_number) VALUES('$amount','$currency','$status','$transaction_id','$name','$email','$phone_number')";
$query2 = mysqli_query($con, $sql2);
if ($query1 && $query2) {
    $response["success"] = 'Records added Successfully';

} else {
    $response["error"] = true;
    $response["error"] = 'ERROR: Not able to execute $sql. ' . mysqli_error($con);

}


echo json_encode($response);
?>