<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST ');



$data =  json_decode(file_get_contents("php://input"),true);

if(isset($data['submit']))
{
    include "config.php";
    
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $email = $data['email'];
    $mobile_no = $data['mobile_no'];
    $message = $data['message'];
    

    $sql = "INSERT INTO `contact_us`(`first_name`, `last_name`, `email`, `mobile_no`, `message`) VALUES ('$first_name','$last_name','$email',$mobile_no,'$message');";

    if(mysqli_query($con,$sql)){
        $status = array("status"=> true);
        echo json_encode($status);
    } 
    else
    {
         $status = array("status"=> false);
        echo json_encode($status);
    }
}

?>