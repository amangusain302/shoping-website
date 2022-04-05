<?php
include "server.php";
?>
<?php
session_start();

// mobile-curl-call

$url = "http://" . $server_name . "/api/mobile-product-fetch-api.php";
$mobile = curl_init();

curl_setopt($mobile, CURLOPT_URL, $url);
curl_setopt($mobile, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($mobile);

$fetch_data_mobile = json_decode($result, true);

curl_close($mobile);

// car-curl-call

$url = "http://" . $server_name . "/api/car-product-fetch-api.php";
$car = curl_init();

curl_setopt($car, CURLOPT_URL, $url);
curl_setopt($car, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($car);

$fetch_data_car = json_decode($result, true);

curl_close($car);

// bike-curl-call

$url = "http://" . $server_name . "/api/bike-product-fetch-api.php";
$bike = curl_init();

curl_setopt($bike, CURLOPT_URL, $url);
curl_setopt($bike, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($bike);

$fetch_data_bike = json_decode($result, true);

curl_close($bike);
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
    <?php include("header.php"); ?>
    <!-- prodyuct section start -->

    <div class="container">
        <div class="for-center-car">
            <div class="container-heading-car">
                <span>CAR ITEMS</span>
            </div>
        </div>
        <div class="container-1">
            <div class="row">
                <?php
                foreach ($fetch_data_car as $value) {
                ?>
                    <div class="col-md-3 col-6">
                        <a href="single-product.php?pdt_id=<?php echo $value['pdt_id']; ?>&main_category=<?php echo $value['main_category'] ?>" class="ancher">
                            <div class="shadow p-3 mb-5 bg-white maindiv">
                                <div class="img-wh"><img src="<?php echo "image/upload/" . $value['pdt_image']; ?>" class="pdt-img"></div>
                                <div class="pdt-details">
                                    <div class="price"><?php echo "₹" . $value['set_price'] ?></div>
                                    <div class="font-weight-light desc"><?php echo $value['year'] ?></div>
                                    <div class="prd-name"><?php if (strlen($value['ad_title']) > 25) {
                                                                $adtitle = str_split($value['ad_title']);
                                                                $showtitle = "";
                                                                for ($x = 0; $x < 25; $x++) {
                                                                    $showtitle = $showtitle . $adtitle[$x];
                                                                }

                                                                echo $showtitle . "...";
                                                            } else {
                                                                echo $value['ad_title'];
                                                            }
                                                            ?></div>
                                    <span class="adrs"><?php echo $value['location'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ?></span><span class="year"><?php echo $value['post_date'] ?></span>
                                    <div class="row p-0 m-0">
                                        <div class="col p-0">
                                            <div class="buy-bt"> <a href="single-product.php?pdt_id=<?php echo $value['pdt_id']; ?>&main_category=<?php echo $value['main_category'] ?>" class="buy-bttn"><i class="fa fa-shopping-cart">&nbsp;&nbsp;Buy Now</i></a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>



                <div class="for-center-car">
                    <div class="container-heading-car">
                        <span>BIKE ITEMS</span>
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <?php
                    foreach ($fetch_data_bike as $value) {
                    ?>
                        <div class="col-md-3 col-6">
                            <a href="single-product.php?pdt_id=<?php echo $value['pdt_id']; ?>&main_category=<?php echo $value['main_category'] ?>" class="ancher">
                                <div class="shadow p-3 mb-5 bg-white maindiv">
                                    <div class="img-wh"><img src="<?php echo "image/upload/" . $value['pdt_image']; ?>" class="pdt-img"></div>
                                    <div class="pdt-details">
                                        <div class="price"><?php echo "₹" . $value['set_price'] ?></div>
                                        <div class="font-weight-light desc"><?php echo $value['year'] ?></div>
                                        <div class="prd-name"><?php if (strlen($value['ad_title']) > 25) {
                                                                    $adtitle = str_split($value['ad_title']);
                                                                    $showtitle = "";
                                                                    for ($x = 0; $x < 25; $x++) {
                                                                        $showtitle = $showtitle . $adtitle[$x];
                                                                    }

                                                                    echo $showtitle . "...";
                                                                } else {
                                                                    echo $value['ad_title'];
                                                                }
                                                                ?></div>
                                        <span class="adrs"><?php echo $value['location'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ?></span><span class="year"><?php echo $value['post_date'] ?></span>
                                        <div class="row p-0 m-0">
                                            <div class="col p-0">
                                                <div class="buy-bt"> <a href="single-product.php?pdt_id=<?php echo $value['pdt_id']; ?>&main_category=<?php echo $value['main_category'] ?>" class="buy-bttn"><i class="fa fa-shopping-cart">&nbsp;&nbsp;Buy Now</i></a></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>


                </div>
                <div class="for-center-PHONE">
                    <div class="container-heading-PHONE">
                        <span>PHONE ITEMS</span>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($fetch_data_mobile as $value) {
                    ?>
                        <div class="col-md-3 col-6">
                            <a href="single-product.php?pdt_id=<?php echo $value['pdt_id']; ?>&main_category=<?php echo $value['main_category'] ?>" class="ancher">
                                <div class="shadow p-3 mb-5 bg-white maindiv">
                                    <div class="img-wh"><img src="<?php echo "image/upload/" . $value['pdt_image']; ?>" class="pdt-img"></div>
                                    <div class="pdt-details">
                                        <div class="price"><?php echo "₹" . $value['set_price'] ?></div>
                                        <div class="font-weight-light desc"><?php echo $value['year'] ?></div>
                                        <div class="prd-name"><?php if (strlen($value['ad_title']) > 25) {
                                                                    $adtitle = str_split($value['ad_title']);
                                                                    $showtitle = "";
                                                                    for ($x = 0; $x < 25; $x++) {
                                                                        $showtitle = $showtitle . $adtitle[$x];
                                                                    }

                                                                    echo $showtitle . "...";
                                                                } else {
                                                                    echo $value['ad_title'];
                                                                }
                                                                ?></div>
                                        <span class="adrs"><?php echo $value['location'] . " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ?></span><span class="year"><?php echo $value['post_date'] ?></span>
                                        <div class="row p-0 m-0">
                                            <div class="col p-0">
                                                <div class="buy-bt"> <a href="single-product.php?pdt_id=<?php echo $value['pdt_id']; ?>&main_category=<?php echo $value['main_category'] ?>" class="buy-bttn"><i class="fa fa-shopping-cart">&nbsp;&nbsp;Buy Now</i></a></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
    <!-- footer -->
    <!-- <footer>
        <div class="footer">
            <di class="row p-0 m-0">
                <div class="col-md-3 col-12">
                    <div class="footerlogo">
                        <img src="image/logo/FB-white.png" alt="logo" class="footer-logo">
                    </div>
                    <div class="pp">
                        <p><i class="far fa-address-card"></i>&nbsp;&nbsp;&nbsp;&nbsp; Noida Sector-64 , UP</p>
                        <p><i class="fas fa-phone-volume"></i>&nbsp;&nbsp;&nbsp;&nbsp; 9891****91
                        </p>
                        <p><i class="fas fa-envelope-open-text"></i>&nbsp;&nbsp;&nbsp;&nbsp; xyz@gmail.com</p>
                    </div>


                </div>
                <div class="col-md-3 col-12">
                    <div class="subhead">
                        menu
                    </div>
                    <div class="menuu">
                        <ul class="submenuu">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">CONTACT US</a></li>
                            <li><a href="#">PROPERTIES</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="subhead">
                        Learn More
                    </div>

                    <ul class="sub-head">
                        <li><a href="#">PRIVACY</a></li>
                        <li><a href="#">TERM & CONDITION</a></li>
                        <li><a href="#">ACCOUNT</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-12">
                    <div class="subhead">
                        Get IN Touch
                    </div>
                    <div class="social">
                        <a href="#"><img src="image/white/1.png" alt=""></a>
                        <a href="#"><img src="image/white/2.png" alt=""></a>
                        <a href="#"><img src="image/white/3.png" alt=""></a>
                    </div>
                </div>

        </div>
        <div class="copyright">
            <hr>
            <div class="row copyrightt p-0 m-0">
                <div class="col-md-6 col-12 foocet">@copyright 2021 - Fixebuy.in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| </div>
                <div class="col-md-6 col-12 mobcopy"> All rights reserved</div>
            </div>

        </div>

    </footer> -->
    <!-- bootsrap -->
     <script src="http://<?php echo $server_name; ?>/fixbuy/api-call/search-call.js"></script> 
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
    <!-- 5 version  -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
    <!-- slider of swiper -->
    <!-- Swiper JS -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->


    <!-- Initialize Swiper
    <script>
        var swiper = new Swiper(".mySwiper", {
            speed: 600,
            parallax: true,
            autoplay: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script> -->


</body>

</php>