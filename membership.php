<?php
include "server.php";
?>
<?php
session_start();
if(!(isset($_SESSION['role']) && $_SESSION['role']== 0))
    {
        header("location: form/login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- sweiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="heading.css">
    <link rel="stylesheet" href="mob-res.css">
    <link rel="stylesheet" href="tab-res.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- cdn js css for owl crausal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- cdn js for owl crausal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</head>

<body>
    <!-- header -->
    <?php include "header.php"; ?>

    <!-- section start -->
    <div class="container my-cont border">
    <?php
    if (isset($_GET['submit']))
        {
            ?>
            <div class="alert alert-success" role="alert">
                Your Request for membership program has been submited successfully. FixeBuy team will contact you within 2-3 working days.
            </div>
        <?php
        }
        ?>
    <div class="for-center member">
        <div class="container-heading member">
            <span>MEMBERSHIP FORM</span>
        </div>
    </div>  
    <form action="api-call/membership-api-call.php?user_id=<?php echo $_SESSION['user_id'];?>" method="post">
        <div class="row form-group">
            <div class="col-md-6">

                <input type="text" name="first_name" placeholder="First Name" class="form-control log-f">
            </div>
            <div class="col-md-6">

                <input type="text" name="last_name" placeholder="Last Name" class="form-control log-f">
            </div>
        </div>
        <div class="row form-group">
            <div class="col">
                <input type="Email" name="email" placeholder="E-mail" class="form-control log-f">
            </div>
        </div>
        <div class="row form-group">
            <div class="col">
                <input type="text" name="phone" placeholder="Phone No" class="form-control log-f">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-6">

                <input type="text" name="location" placeholder="Location" class="form-control log-f">
            </div>
            <div class="col-md-6">

                <input type="text" name="pincode" placeholder="Pincode" class="form-control log-f">
            </div>
        </div>
        <input type="submit" name="submit" value="submit" class="btn contact-btnn"> 
    </form>
    </div>

    <!-- section end -->




    <!-- footer -->
    <?php include "footer.php"; ?>