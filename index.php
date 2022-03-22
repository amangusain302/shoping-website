<?php
include "server.php";

session_start();
// mobile-curl-call

$url = "http://localhost/fixbuy/api/mobile-product-fetch-api.php";
$mobile = curl_init();

curl_setopt($mobile, CURLOPT_URL, $url);
curl_setopt($mobile, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($mobile);

$fetch_data_mobile = json_decode($result, true);
curl_close($mobile);

// car-curl-call

$url = "http://".$server_name."/api/car-product-fetch-api.php";
$car = curl_init();

curl_setopt($car, CURLOPT_URL, $url);
curl_setopt($car, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($car);

$fetch_data_car = json_decode($result, true);

curl_close($car);

// bike-curl-call

$url = "http://".$server_name."/api/bike-product-fetch-api.php";
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
    <link rel="stylesheet" href="tab-res.css">
    <link rel="stylesheet" href="mob-res.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
    <?php
    include "header.php";
    ?>
    <!-- slider -->
<div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
    <div class="parallax-bg" data-swiper-parallax="-23%"></div>
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(image/service/car_poster.jpg);    height: 47vh;
            background-position: center;
            background-size: cover;">
            <!-- <div class="title" data-swiper-parallax="-300">Slide 1</div>
                <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                <div class="buttonn" data-swiper-parallax="-200"><a href="#" class="btn">+ SELL</a></div> -->
            <div class="text" data-swiper-parallax="-100">
                <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh
                        euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.
                    </p> -->
            </div>
        </div>
        <div class="swiper-slide" style="background-image: url(image/service/Mobile_service.jpg);     height: 47vh;
            
            background-size: cover;background-position: center;">
            <!-- <div class="title" data-swiper-parallax="-300">Slide 2</div>
                <div class="subtitle" data-swiper-parallax="-200">Subtitle</div> -->
            <!-- <div class="buttonn" data-swiper-parallax="-200"><a href="#" class="btn">+ SELL</a></div> -->
            <div class="text" data-swiper-parallax="-100">
                <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh
                        euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.
                    </p> -->
            </div>
        </div>
        <div class="swiper-slide" style="background-image: url(image/service/Bike_service.jpg); height: 47vh;
            background-position: center;
            background-size: cover;">
            <!-- <div class="title" data-swiper-parallax="-300">Slide 3</div>
                <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
                <div class="buttonn" data-swiper-parallax="-200"><a href="#" class="btn">+ SELL</a></div> -->
            <div class="text" data-swiper-parallax="-100">
                <!-- <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla laoreet justo vitae porttitor porttitor. Suspendisse in sem justo. Integer laoreet magna nec elit suscipit, ac laoreet nibh
                        euismod. Aliquam hendrerit lorem at elit facilisis rutrum. Ut at ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec, tincidunt ut libero. Aenean feugiat non eros quis feugiat.
                    </p> -->
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
<div class="container">
    <div class="container-1">
        <div class="row" id="search_item">


        </div>

    </div>
</div>
</div>
<!-- slider end  -->
    <!-- property section  -->
    
    <div class="for-center">
        <div class="container-heading">
            <span>ALL PRODUCTS</span>
        </div>
    </div>
    <div class="container" id="card_box">

        <!-- Mobile products -->
        <div class="row">
            <?php
            $flag = 0;
            foreach ($fetch_data_mobile as $value) {
                if ($flag == 4) {
                    break;
                }
            ?>
                <div class="col-md-3 col-12">
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
                $flag++;
            }
            ?>
        </div>
        <!-- <div class="for-center-car">
            <div class="container-heading-car">
                <span>CAR ITEMS</span>
            </div>
        </div> -->

        <!-- car products -->
        <div class="row">
            <?php
            $flag = 0;
            foreach ($fetch_data_car as $value) {
                if ($flag == 4) {
                    break;
                }
            ?>
                <div class="col-md-3 col-12">
                    <a href="single-product.php?pdt_id=<?php echo $value['pdt_id']; ?>&main_category=<?php echo $value['main_category'] ?>" class="ancher">
                        <div class="shadow p-3 mb-5 bg-white maindiv">
                            <div class="img-wh"><img src="<?php echo "image/upload/" . $value['pdt_image']; ?>" class="pdt-img"></div>
                            <div class="pdt-details">
                                <div class="price"><?php echo "₹" . $value['set_price'] ?></div>
                                <div class="font-weight-light desc"><?php echo $value['year'] . " - " . $value['km_driven'] . "Km" ?></div>
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
                $flag++;
            }
            ?>
        </div>
        <!-- <div class="for-center-car">
            <div class="container-heading-car">
                <span>BIKE ITEMS</span>
            </div>
        </div> -->

        <!-- car products -->

        <div class="row">
            <?php
            $flag = 0;
            foreach ($fetch_data_bike as $value) {
                if ($flag == 4) {
                    break;
                }
            ?>
                <div class="col-md-3 col-12">
                    <a href="single-product.php?pdt_id=<?php echo $value['pdt_id']; ?>&main_category=<?php echo $value['main_category'] ?>" class="ancher">
                        <div class="shadow p-3 mb-5 bg-white maindiv">
                            <div class="img-wh"><img src="<?php echo "image/upload/" . $value['pdt_image']; ?>" class="pdt-img"></div>
                            <div class="pdt-details">
                                <div class="price"><?php echo "₹" . $value['set_price'] ?></div>
                                <div class="font-weight-light desc"><?php echo $value['year'] . " - " . $value['km_driven'] . "Km" ?></div>
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
                $flag++;
            }
            ?>

        </div>
    </div>

    </div>

    <!-- our testmonials -->
    <div class="container">
        <div class="for-center-test">
            <div class="container-heading-test">
                <span> OUR TESTOMONIALS</span>
            </div>
        </div>

        <!-- owl casusal -->
        <div class="carousel owl-carousel">
            <div class="card-testo">
                <div class="test-inline">
                    <div class="testo-img">
                        <img src="image/testo/1.png" alt="img">
                    </div>
                    <div class="test-name">
                        Robert Hook
                    </div>
                </div>
                <div class="des-testo">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ab aspernatur, accusamus error ipsa asperiores, voluptatibus dolorem rem consequatur dolorum officia vitae et fuga recusandae aperiam.
                </div>
            </div>
            <div class="card-testo">
                <div class="test-inline">
                    <div class="testo-img">
                        <img src="image/testo/1.png" alt="img">
                    </div>
                    <div class="test-name">
                        Robert Hook
                    </div>
                </div>
                <div class="des-testo">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ab aspernatur, accusamus error ipsa asperiores, voluptatibus dolorem rem consequatur dolorum officia vitae et fuga recusandae aperiam.
                </div>
            </div>
            <div class="card-testo">
                <div class="test-inline">
                    <div class="testo-img">
                        <img src="image/testo/1.png" alt="img">
                    </div>
                    <div class="test-name">
                        Robert Hook
                    </div>
                </div>
                <div class="des-testo">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ab aspernatur, accusamus error ipsa asperiores, voluptatibus dolorem rem consequatur dolorum officia vitae et fuga recusandae aperiam.

                </div>
            </div>
            <div class="card-testo">
                <div class="test-inline">
                    <div class="testo-img">
                        <img src="image/testo/1.png" alt="img">
                    </div>
                    <div class="test-name">
                        Robert Hook 
                    </div>
                </div>
                <div class="des-testo">
                    Lorem ipsum dolor sit amet  consectetur adipisicing elit. Minima ab aspernatur, accusamus error ipsa asperiores, voluptatibus dolorem rem consequatur dolorum officia vitae et fuga recusandae aperiam.
                </div>
            </div>
        </div>



        <div class="container">
            <div class="for-center-servise">
                <div class="container-heading-servise">
                    <span> OUR SERVICES</span>
                </div>
            </div>
            <div class="service">
                <div class="row m-0 p-0">
                    <div class="col-md-4">
                        <div class="card-service">
                            <div class="service-img">
                                <img src="image/service/3.png" alt="img">
                            </div>
                            <div class="des-service">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ab aspernatur, accusamus error ipsa asperiores, voluptatibus dolorem rem consequatur dolorum
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-service">
                            <div class="service-img">
                                <img src="image/service/4.png" alt="img">
                            </div>
                            <div class="des-service">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ab aspernatur, accusamus error ipsa asperiores, voluptatibus dolorem rem consequatur dolorum
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-service">
                            <div class="service-img">
                                <img src="image/service/6.png" alt="img">
                            </div>
                            <div class="des-service">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ab aspernatur, accusamus error ipsa asperiores, voluptatibus dolorem rem consequatur dolorum
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br><br><br><br>
    </div>
    <!-- footer -->
    <footer>
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
        </div>
        <div class="copyright">
            <hr>
            <div class="row copyrightt p-0 m-0">
                <div class="col-md-6 col-12 foocet">@copyright 2021 - Fixebuy.in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| </div>
                <div class="col-md-6 col-12 mobcopy"> All rights reserved</div>
            </div>

        </div>
    </footer>
    <!-- bootsrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
    <!-- 5 version  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="http://<?php echo $server_name; ?>/api-call/search-call.js"></script>
    <!-- slider of swiper -->
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
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
    </script>
    <!-- GetButton.io widget -->
    <!-- <script type="text/javascript">
        (function() {
            var options = {
                call: "+1 8322329150",
                call_to_action: "Get Appointment",
                position: "right",
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script> -->
    <!-- /GetButton.io widget -->
    <!-- owl testomnial-->
    <script>
        $(document).ready(function() {
            $(".carousel").owlCarousel({
                loop: true,
                margin: 50,

                // autoplay: true,
                autoplayTimeout: 2000,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    700: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: true
                    }
                }
            })
        })
    </script>

</body>

</html>