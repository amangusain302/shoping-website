<?php
include "../server.php";
?>
<?php

if(isset($_POST['update']))
{
    print_r($_POST);
    print_r($_FILES);
        $filename = $_FILES['user_image']['name'];
        $filetemp = $_FILES['user_image']['tmp_name'];

        $fileext = explode('.',$filename);
        $filecheck = strtolower(end($fileext));


        $fileextstored = array('png','jpg','jpeg');

        if(in_array($filecheck,$fileextstored))
        {
            if(!file_exists('../image/profile-image/'.$filename))
            {
                $destinationfile ='../image/profile-image/'.$filename;
                move_uploaded_file($filetemp, $destinationfile);
            }
            else
            {
                    $filename=str_replace('.', '-', basename($filename,$filecheck));
                    $filename=$filename.time().".".$filecheck;
                    $destinationfile ='../image/profile-image/'.$filename;
                    move_uploaded_file($filetemp, $destinationfile);

            }
        }
                      


$url = "http://".$server_name."/fixbuy/api/profile-update-api.php";

$data_array  = array(
    'user_id'  =>  $_GET['user_id'],
    'user_image' => $filename,
    'username'  =>  $_POST['username'],
    'user_email'  => $_POST['user_email'],
    'phone'  =>  $_POST['phone'],    
    'address'  => $_POST['address'],
    'adhaar_no' => $_POST['adhaar_no'],
    'date_of_birth' => $_POST['date_of_birth'],
    'update' => $_POST['update']
);


$data = json_encode($data_array);
$ch= curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch); 
$status = json_decode($result,true);
print_r($status);
if($status)
{
     header("Location: ../profile.php?user_id=$_GET[user_id]&status=$status[status]");
}
else
{
     header("Location: ../profile.php?user_id=$_GET[user_id]&status=$status[status] "); 
}

curl_close($ch);
}
?>
