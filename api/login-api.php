<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data =  json_decode(file_get_contents("php://input"),true);

if(isset($data['login'])){
    include "config.php";
    $user_email = $data['user_email'];
    $password = md5($data['password']);
    $role=$data['role'];

    $sql = "select user_id, username, user_email, user_image     from user where user_email = '$user_email' and password = '$password' and role ='$role'";
    $result = mysqli_query($con, $sql) or die("Query failed");

    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){
            $status = array("status"=> true,
                            "data"=> $row,
                            "role" =>$data['role']
                            );
        }
        echo json_encode($status);
    }
    else{
        $status = array("status"=> false,
                         "role" =>$data['role']);
        echo json_encode($status);
        // header("Location: http://localhost/fixbuy/form/login.php");
        // echo '<div class ="alert alert-danger">Username and password are not match</div>';
    }

}


?>