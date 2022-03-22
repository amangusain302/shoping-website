<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST ');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


    $data =  json_decode(file_get_contents("php://input"),true);

    if(isset($data['submit']))
    {
     
        include "config.php";
     
        $username = $data['username'];
        $user_email = $data['user_email'];
        $password = md5($data['password']);
        $role = $data['role'];
        
        $sql = "insert into user (username, user_email, password, role) values('$username', '$user_email', '$password', '$role');";
        $result = mysqli_query($con,$sql);
        
        if($result>0){
                $status = array("status"=> true,
                                "role" => $data['role']);
                echo json_encode($status);
        } 
        else
        {   
            $status = array("status"=> false,
            "role" => $data['role']);
                echo json_encode($status);
        }

    }   
?>