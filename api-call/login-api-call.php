<?php


$url = "http://localhost/fixbuy/api/login-api.php";
$data_array = array(
    'user_email'=> $_POST['user_email'],
    'password'=> $_POST['password'],
    'role'=> $_POST['role'],
    'login'=> $_POST['login']
);

$data = json_encode($data_array);
$ch= curl_init();

//grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
 
$result = curl_exec($ch);

$session = json_decode($result,true);

if($session['status'])
{
    if($session['role']==1)
    {
        session_start();
   $_SESSION["username"] = $session['data']['username'];
   $_SESSION["user_id"] = $session['data']['user_id'];
   $_SESSION["user_image"] = $session['data']['user_image'];
   $_SESSION["role"] = $session['role'];
   header("Location: ../admin/seller/dashboard/index.php");
    }
    else{
    session_start();
   $_SESSION["username"] = $session['data']['username'];
   $_SESSION["user_id"] = $session['data']['user_id'];
   $_SESSION["user_image"] = $session['data']['user_image'];
   $_SESSION["role"] = $session['role'];
   header("Location: ../index.php");
    }
}
else
{
    if($session['role']==1)
    {
        header("Location: ../admin/seller/index.php?error=true");
    }
    else{
    header("Location: ../form/login.php?error=true");
    }
 }

curl_close($ch);
 
?>