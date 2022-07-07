<?php 
require 'connection.php';
require 'vendor/autoload.php'; // If you're using Composer (recommended)
include 'testmail.php';

$pages = $_POST["pages"];
$deadline = $_POST["deadline"];
echo $deadline;
echo $pages;
$customeremail = $_POST["customeremail"];
if (isset($_POST["customeremail"])) {
    echo "Yes, email is set  ;";
}
else {
    die();
    echo "N0, email is not set  ;";
}
$sql = "SELECT * FROM orders where customeremail='$customeremail' AND deadline='$deadline' AND pages='$pages' ";
$query = mysqli_query($con, $sql);
if ($query) {
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $order_no = $row['order_no'];
        }
        $html=testMail($order_no);

        $email = new \SendGrid\Mail\Mail(); 
$email->setFrom("support@10essays.com", "support");
$email->setSubject("Order Confirmation");
$email->addTo("$customeremail", "Customer");
// $email->addContent("text/plain", "Testing Email");
$email->addContent(
    "text/html", "$html"
);
$api_key='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';
$sendgrid = new \SendGrid($api_key);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
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

