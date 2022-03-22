<?php
header('Content-Type: application/json');   
header('Access-Control-Allow-Origin: *');

$data =  json_decode(file_get_contents("php://input"),true);

include "config.php";   

if(isset($data['update']))
{

$user_id = $data['user_id'];
$user_image = $data['user_image'];
$username = $data['username'];
$user_email = $data['user_email'];
$phone = $data['phone'];
$date_of_birth = $data['date_of_birth'];
$address = $data['address'];
$adhaar_no = $data['adhaar_no'];

$update_query = "UPDATE `user` SET `username` ='$username', `user_email` ='$user_email', `phone` ='$phone', `date_of_birth` ='$date_of_birth', `address` ='$address', `adhaar_no` ='$adhaar_no', `user_image` ='$user_image' WHERE user_id = $user_id ;";  
$update = mysqli_query($con,$update_query);

echo json_encode($update);

// $sql = "select * from user where user_id = $user_id";
// $result = mysqli_query($con,$sql);

// if(mysqli_num_rows($result)>0)
// {
     
//     while($row = mysqli_fetch_assoc($result))
//     {
//         $collect = array(
//         "data"=> $row
//         );
//     }
// }

}
?> 