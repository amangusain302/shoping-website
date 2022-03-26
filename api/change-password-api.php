<?php
header('Content-Type: application/json');   
header('Access-Control-Allow-Origin: *');

$data =  json_decode(file_get_contents("php://input"),true);

include "config.php";   

$user_id = $data['user_id'];
$password = md5($data['password']);

$update_password = "UPDATE `user` SET `password` ='$password' WHERE user_id = $user_id ;";  
$update_query = mysqli_query($con,$update_password);



if($update_query==true)
{
    $sql = "select * from user where user_id = $user_id";
        $result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0)
{
     
    while($row = mysqli_fetch_assoc($result))
    {
        $collect = array(
        "role"=> $row['role'],
        "status"=>true
        );
    }
}

    echo json_encode($collect);    
}
else
{
    echo json_encode($update_query);
}
    
?> 