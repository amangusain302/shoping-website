<?php
	session_start();
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


    <style>
        .swiper {
            width: 100%;
            height: 100%;
            background: #000;
        }

        .swiper-slide {
            font-size: 18px;
            color: #fff;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 40px 60px;
        }

        .parallax-bg {
            position: absolute;
            left: 0;
            top: 0;
            width: 130%;
            height: 100%;
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center;
        }

        .swiper-slide .title {
            font-size: 41px;
            font-weight: 300;
        }

        .swiper-slide .subtitle {
            font-size: 21px;
        }

        .swiper-slide .text {
            font-size: 14px;
            max-width: 400px;
            line-height: 1.3;
        }
    </style>
</head>

<body>
    <!-- header -->
    <?php include "header.php";?>
    <!-- section  -->
    <div class="container">
        <div class="for-center-contact">
            <div class="container-heading-contact">
                <span> LETS CONVERSATION?</span>
            </div>
        </div>
    </div> 
    <form action="http://localhost/fixbuy/api-call/contact-us-api-call.php" method="post">
    <div class="form-set">
        <div class="row p-0 m-0 form-group">
            <div class="col-md-6 col-12">
                <input type="text" name="first_name" placeholder="First Name" class="form-control imput-paddin">
            </div>
            <div class="col-md-6 col-12 form-group">
                <input type="text" name="last_name" placeholder="Last Name" class="form-control imput-paddin">
            </div>
        </div>
        <div class="row p-0 m-0 form-group">
            <div class="col-md-12 col-12">
                <input type="email" name="email" placeholder="Your Email" class="form-control imput-paddin">
            </div>
        </div><br>
        <div class="row p-0 m-0 form-group">
            <div class="col-md-12 col-12">
                <input type="text" name="mobile_no" placeholder="Mobile Number" class="form-control imput-paddin">
            </div>
        </div><br>
        <div class="row p-0 m-0 form-group">
            <div class="col-md-12 col-12">
                <textarea name="message" id="" class="textareaa form-control">
                
            </textarea>
            </div>
        </div>
        <input type="submit" name="submit" value="submit" class="btn contact-btnn"> 
        </form>
    </div>


    <!-- map -->
    <section class="mapp">
        <div class="map-container">
            <div class="row p-0 m-0">
                <div class="col-md-4 col-12 mapss">


                    <div class="get-in-touch">
                        <h3 class="get-in"> GET IN TOUCH</h3>
                        <p><i class="far fa-address-card "></i>&nbsp;&nbsp;&nbsp;&nbsp; Noida Sector-64 , UP</p>
                        <p><i class="fas fa-phone-volume "></i>&nbsp;&nbsp;&nbsp;&nbsp; 9891****91
                        </p>
                        <p><i class="fas fa-envelope-open-text "></i>&nbsp;&nbsp;&nbsp;&nbsp; xyz@gmail.com</p>
                    </div>

                </div>
                <div class="col-md-8 col-12 maapss">
                    <div class="mapembed">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d112165.47872071648!2d77.34710104062584!3d28.534573150195893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNOIDA%20-SECTOR%2064!5e0!3m2!1sen!2sin!4v1642665255385!5m2!1sen!2sin" style="border:0;"
                            allowfullscreen="" loading="lazy" class="whmap"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include "footer.php";?>

    
</body>

</php>