
<?php
require 'connection.php';
require 'vendor/autoload.php'; // If you're using Composer (recommended)
include 'testmail.php';
include 'testmail1.php';
    $response = array("error" => false);

      $projectname = $_POST['projectname'];
      $pages = $_POST['pages'];
      $deadline = $_POST['deadline'];
      $instructions = $_POST['instructions'];
      $customeremail = $_POST['customeremail'];
      $final_file_post=$_POST['imagenames'];
        $final_file=$final_file_post[0];
      $file =""; //$_FILES['file_data']['name'];
      $file_loc =""; //$_FILES['file_data']['tmp_name'];
      $file_size =""; //$_FILES['file_data']['size'];
      $file_type =""; //$_FILES['file_data']['type'];
    //   $file_type = "TYPE";

      $folder="upload/";

    /* new file size in KB */
    $new_size = $file_size/1024;
    /* new file size in KB */

    /* make file name in lower case */
    $new_file_name = strtolower($file);
    /* make file name in lower case */

   // $final_file=str_replace(' ','-',$new_file_name);
    $instructions1=str_replace("'","",$instructions);

    //timezone for order creation
    date_default_timezone_set('Africa/Nairobi');
    $date = strtotime("now");

//   if(move_uploaded_file($file_loc,$folder.$final_file))
//  {
    $sql = "INSERT INTO orders(projectname,pages,deadline,instructions,customeremail,file,type,size) VALUES('$projectname','$pages','$deadline','$instructions1','$customeremail','$final_file','$file_type','$new_size')";
    $query = mysqli_query($con, $sql);
    //echo mysqli_error($con);

    $last_id = mysqli_insert_id($con);
    $st = 'ES-';
    $ord_no = $st . $last_id;

   if ($query) {
  // echo $last_id;
    //update orders table
    $update = "UPDATE orders SET order_no='$ord_no' WHERE id='$last_id'";
    mysqli_query($con, $update);
    
        $html=testMail($ord_no);

        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("support@10essays.com", "10Essays Support");
        $email->setSubject("Order Confirmation");
        $email->addTo("$customeremail", "Customer");
        // $email->addContent("text/plain", "Testing Email");
        $email->addContent(
            "text/html", "$html"
        );
        $sendgrid = new \SendGrid($api_key);
        try {
            $sendgrid->send($email);
            $response["success"] = 'orders Records added Successfully';
        } catch (Exception $e) {
            $response["error"] = true;
            $response["error"]=$e->getMessage();
        }
        if($response["error"] !=true){
           $html1=testMail1($ord_no);

        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("support@10essays.com", "10Essays Support");
        $email->setSubject("Order Confirmation");
        $email->addTo("queensresearch1@gmail.com", "QRC");
        // $email->addContent("text/plain", "Testing Email");
        $email->addContent(
            "text/html", "$html1"
        );
        $sendgrid = new \SendGrid($api_key);
        try {
            $sendgrid->send($email);
            $response["success"] = 'orders Records added Successfully';
        } catch (Exception $e) {
            $response["error"] = true;
            $response["error"]=$e->getMessage();
        } 
        }

    } else {
        $response["error"] = true;
        $response["error"] = 'ERROR: Not able to execute orders $sql. ' . mysqli_error($con);

    }

    //header("location:http://localhost/essay");
    //  echo '<script> alert("order successfully placed thank you for choosing us"); window.location= "http://localhost/essay"</script>';
	//	}
echo json_encode($response);
?>
