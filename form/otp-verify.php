<?php
include "../server.php";
?>
<?php
if(isset($_GET['email']) || isset($_POST['otp']))
{
    if(isset($_POST['otp']))
    {
    $url = "http://".$server_name."/api/otp-verify-api.php";
    $data_array = array(
        'user_email'=> $_POST['user_email'],
        'otp'=> $_POST['otp']
    );
    
    $data = json_encode($data_array);
    $ch= curl_init();
    
    //grab URL and pass it to the variable.
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     
     
    $result = curl_exec($ch);
    
    $user_data= json_decode($result,true);
    
    if($user_data['status']==true)
    {
        header("Location: change-password.php?user_id=".$user_data['user_id']);
    }
    else
    {
        header("Location: otp-verify.php?email=".$_POST['user_email']."&status=false");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login12.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 04:14:00 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fixebuy</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme12.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="../seller/">
                                <div class="logo">
                                    <!-- <img class="logo-size" src="images/logo-light.svg" alt=""> -->
                                    <h1 class="fw-bold text-white">Welcome to FixeBuy</h1>
                                </div>
                            </a>
                        </div>
                        
                        <h3>Verify Email </h3>
                        <!-- <p>Access to the most powerfull tool in the entire design and web industry.</p> -->
                        <form action="http://<?php echo $server_name ?>/form/otp-verify.php" method="post">
                            <input class="form-control text-dark shadow-none" type="hidden" name="user_email" placeholder="E-mail Address" value=<?php echo $_GET['email'];?> >
                            <input class="form-control text-dark shadow-none" type="text" name="otp" placeholder="Enter OTP" required>
                            <?php
                              if(isset($_GET['status']))
                              {
                              ?>
                              <div  style="color: #991818 ; text-align: left; ">
                                  <b>Invalid OTP</b>
                              <?php
                              }
                              ?>
                            <div class="form-button">
                                <button id="submit" type="submit" value="true" name="verify" class="ibtn w-100 p-2 login-bt ">Verify OTP</button>
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
        <!-- <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> -->
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login12.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 04:14:01 GMT -->

</html>
<?php
}
?>