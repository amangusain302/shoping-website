<?php
include "../server.php";
?>
<?php
if(isset($_POST['submit']))
{
    $image_path = array();

    foreach ($_FILES as $key => $value) {
        

        $filename = $value['name'];
        $filetemp = $value['tmp_name'];

        $fileext = explode('.',$filename);
        $filecheck = strtolower(end($fileext));


        $fileextstored = array('png','jpg','jpeg');

        if(in_array($filecheck,$fileextstored))
        {
            if(!file_exists('../image/upload/'.$filename))
            {
            $destinationfile = "../image/upload/".$filename;
            move_uploaded_file($filetemp, $destinationfile);
        
            }
            else
            {
                    $filename=str_replace('.', '-', basename($filename,$filecheck));
                    $filename=$filename.time().".".$filecheck;
                    $destinationfile = "../image/upload/".$filename;
                    move_uploaded_file($filetemp, $destinationfile);

            }
        }
        array_push($image_path, $filename);
    }


$url = "http://".$server_name."/fixbuy/api/bike-product-api.php";

$data_array  = array(
    'user_id'  =>  $_POST['user_id'],
    'seller_name'  =>  $_POST['seller_name'],
    'seller_phone'  => $_POST['seller_phone'],
    'main_category'  =>  $_POST['main_category'],    
    'sub_category'  => $_POST['sub_category'],
    'brand' => $_POST['brand'],
    'model' => $_POST['model'],
    'year' =>  $_POST['year'],
    'km_driven' => $_POST['km_driven'],
    'no_of_owner' => $_POST['no_of_owner'],
    'ad_title' => $_POST['ad_title'],
    'description' => $_POST['description'],
    'set_price' => $_POST['set_price'],
    'pdt_image' => $image_path[0],
    'pdt_image2' => $image_path[1],
    'pdt_image3' => $image_path[2],
    'pdt_image4' => $image_path[3],
    'location'  =>  $_POST['location'],
    'status' => 'review',
    'submit' => $_POST['submit']
);



$data = json_encode($data_array);
$ch= curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch); 
$status = json_decode($result,true);
if($status['status'])
{
    header("Location: ../post-product.php?posted=1");
}
else
{
    echo "please fill all data";  
}

curl_close($ch);
}
?>