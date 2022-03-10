
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/register12.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 04:14:14 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FixeBuy register</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme12.css">
    <link rel="stylesheet" href="css/custom.css">
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
                                    <h1 class="fw-bold text-white">Welcome to Fixe Buy</h1>
                                </div>
                            </a>
                        </div>
                        <!-- <h3>Become a seller</h3> -->

                            <?php
                            if (isset($_GET['token'])==1)
                            {
                                ?>
                                <div class ="alert alert-danger" style="background-color: #d50000" >oops!&nbsp;&nbsp;&nbsp;these credentials are in already used</div>
                            <?php
                            }
                            
                            ?>
                        <h3>Register </h3>
                        <div class="page-links">
                            <a href="login.php">Login</a><a href="register.php" class="active">Register</a>
                        </div>
                        <form action="http://localhost/fixbuy/api-call/register-api-call.php" method="post">
                            <input class="form-control shadow-none text-dark" type="text" name="username" placeholder="Username" required>
                            <input class="form-control shadow-none text-dark" type="email" name="user_email" placeholder="E-mail Address" required>
                            <input class="form-control shadow-none text-dark" type="password" name="password" placeholder="Password" required>
                            <input type="hidden" name="role" value="0">
                            <div class="form-button">

                            <button id="submit" type="submit" name="submit" value="true" class="ibtn w-100 p-2 login-bt">Register</button> <input type="text" class="form-control error-input">
                            </div>
                        </form>
                        <!-- <div class="other-links">
                            <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> -->
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/register12.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Apr 2021 04:14:14 GMT -->

</html>