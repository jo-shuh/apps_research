<?php
include 'connection.php';
$email = $_POST['email'];
$sql = "SELECT * FROM orders where email='$email' ";
$query = mysqli_query($con, $sql);
// $order_no;
// $amount;
if ($query) {
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $order_no = $row['order_no'];
            $amount = $row['amount'];
            }
      
            $to = "email";
            $subject = "My subject";
            $txt= "order successfully placed:  order no". "$order_no ";
            $txt= $txt." ".$amount ;
            $txt = $txt." ". " ,use the order number and your email to acess your answer account via link given.  "."10essays.blackboardmaster.com/customer";
            $headers = "From: admin@queensclassy.com" . "\r\n";

            mail($to,$subject,$txt,$headers);
            echo $txt;
    }
}


            function sendMessage($to, $from, $text){
                $username = "shopilyv";
                $password = "@Millionaire_2021";
                $auth = base64_encode($username . ':' . $password);
                $headers = ['Authorization' => 'Basic ' . $auth, 'Content-Type' => ' application/json', 'Accept' => 'application/json',];
                $api_url = 'https://api.infobip.com/sms/2/text/single';
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.infobip.com/sms/2/text/single",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => "{ \"from\":\"$from\", \"to\":\"$to\", \"text\":\"$text.\" }",
                    CURLOPT_HTTPHEADER => array(
                        "accept: application/json",
                        "authorization: Basic " . json_encode($auth),
                        "content-type: application/json"
                    ),
                ));
                $response = curl_exec($curl);
                echo $response;
            }
    
            