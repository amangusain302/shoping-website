<?php


header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST ');



$data =  json_decode(file_get_contents("php://input"),true);

if(isset($data['submit']))
{
    include "config.php";
    $user_id = $data['user_id'];
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $location = $data['location'];
    $pincode = $data['pincode'];
    

    $sql = "INSERT INTO `membership`(`user_id`,`first_name`, `last_name`, `email`, `phone`, `location`, `pincode`) VALUES ('$user_id','$first_name','$last_name','$email',$phone,'$location','$pincode');";

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