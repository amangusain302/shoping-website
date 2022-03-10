<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST ');



$data =  json_decode(file_get_contents("php://input"),true);

if(isset($data['submit']))
{
    include "config.php";
    
    $user_id = $data['user_id'];
    $seller_name = $data['seller_name'];
    $seller_phone =$data['seller_phone'];
    $main_category = $data['main_category'];   
    $sub_category =$data['sub_category'];
    $brand=$data['brand'];
    $model=$data['model'];
    $year= $data['year'];
    $km_driven=$data['km_driven'];
    $no_of_owner=$data['no_of_owner'];
    $ad_title=$data['ad_title'];
    $description=$data['description'];
    $set_price=$data['set_price'];
    $pdt_image=$data['pdt_image'];
    $pdt_image2=$data['pdt_image2'];
    $pdt_image3=$data['pdt_image3'];
    $pdt_image4=$data['pdt_image4'];
    $location = $data['location'];
    $status = $data['status'];

    $sql = "INSERT INTO `bike_post` ( `user_id`, `seller_name`, `seller_phone`, `main_category`, `sub_category`, `brand`, `model`, `year`, `km_driven`, `no_of_owner`, `ad_title`, `description`, `set_price`, `pdt_image`, `pdt_image2`, `pdt_image3`, `pdt_image4`, `location`,`status`, `post_date`) VALUES ( '$user_id', '$seller_name', '$seller_phone', '$main_category', '$sub_category', '$brand', '$model', '$year', '$km_driven', '$no_of_owner', '$ad_title', '$description', '$set_price', '$pdt_image', '$pdt_image2', '$pdt_image3', '$pdt_image4', '$location','$status',  current_timestamp())";

    if(mysqli_query($con,$sql)){
        $status1 = array("status"=> true);
        echo json_encode($status1);
    } 
    else
    {
         $status1 = array("status"=> false);
        echo json_encode($status1);
    }
}
?>
