<?php
include "../server.php";
?>
<?php
if(isset($_POST['submit']))
{
   
$url = "http://".$server_name."/api/search-result-api.php";

$data_array  = array(
    'search' => $_GET['search']
);



$data = json_encode($data_array);
$ch= curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch); 
var_dump($result);
$status = json_decode($result,true);
// var_dump($status);
if($status)
{
    header("Location: ../service-form.php?submit=true");
}
else
{
    echo "please fill all data";  
}

curl_close($ch);
}
?>