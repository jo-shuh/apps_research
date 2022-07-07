<?php
include 'connection.php';
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

$sql = "INSERT INTO payment(amount,currency,status,transaction_id,name,email,phone_number) VALUES('$amount','$currency','$status','$transaction_id','$name','$email','$phone_number')";
$query = mysqli_query($con, $sql);
if ($query) {
    $response["success"] = ' Payment Records added Successfully';

} else {
    $response["error"] = true;
    $response["error"] = 'ERROR: Not able to execute payment $sql. ' . mysqli_error($con);

}


echo json_encode($response);
?>