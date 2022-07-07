<?php
require 'vendor/autoload.php'; // If you're using Composer (recommended)
include 'testmail.php';
$txt="CONFIRMED. Order $txt Placed Successfully";
$instructions='Login to https://10essays.com/customer to view your order progress';
$html=testMail($txt,$instructions);
// Comment out the above line if not using Composer
// require("<PATH TO>/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("support@10essays.com", "10Essays support");
$email->setSubject("Test Mail");
$email->addTo("queensresearch1@gmail.com", "Benjamin");
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