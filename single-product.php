<?php
include "server.php";
?>
<?php
session_start();
if (!(isset($_GET['pdt_id']) && isset($_GET['main_category']))) {
    header("location: product.php");
}
$data_array = array(
    'pdt_id' => $_GET['pdt_id'],
    'main_category' => $_GET['main_category']
);

$data = json_encode($data_array);

// mobile-curl-call

$url = "http://" . $server_name . "/api/product-detail-api.php";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);

$fetch_data = json_decode($result, true);

curl_close($ch);

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
    <title>Document</title>

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
    <link rel="stylesheet" href="single-product.css">
    <link rel="stylesheet" href="heading.css">
    <link rel="stylesheet" href="mob-res.css">
    <link rel="stylesheet" href="tab-res.css">
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- cdn js for owl crausal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- cdn js css for owl crausal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

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
    <?php include "header.php"; ?>



    <!-- section start -->
    <div class="ccc">

        <div class="container-fluidd c">
            <div class="wrappper">
                <div class="product-box">
                    <div class="small-images">
                        <img src="<?php echo 'image/upload/' . $fetch_data['data']['pdt_image'] ?>" alt="" onClick="clickimg(this)">
                        <img src="<?php echo 'image/upload/' . $fetch_data['data']['pdt_image2'] ?>" alt="" onClick="clickimg(this)">
                        <img src="<?php echo 'image/upload/' . $fetch_data['data']['pdt_image3'] ?>" alt="" onClick="clickimg(this)">
                        <img src="<?php echo 'image/upload/' . $fetch_data['data']['pdt_image4'] ?>" alt="" onClick="clickimg(this)">
                        <img src="<?php echo 'image/upload/' . $fetch_data['data']['pdt_image'] ?>" alt="" onClick="clickimg(this)">
                        <img src="<?php echo 'image/upload/' . $fetch_data['data']['pdt_image2'] ?>" alt="" onClick="clickimg(this)">
                    </div>
                    <div id="main-imgg">
                        <img src="<?php echo 'image/upload/' . $fetch_data['data']['pdt_image'] ?>" alt="product image" id="imm">
                    </div>
                </div>
                <div class="text-buy">
                    <div class="brand">
                        <p><span>Brand: <?php echo $fetch_data['data']['brand'] ?></span></p>
                        <h2>
                            <?php echo $fetch_data['data']['ad_title'] ?>
                        </h2>
                        <span>(4)</span>
                        <span class="fa fa-star ratingg"></span>
                        <span class="fa fa-star ratingg"></span>
                        <span class="fa fa-star ratingg"></span>
                        <span class="fa fa-star ratingg"></span>
                        <span class="fa fa-star "></span>

                    </div>
                    <div class="price-box">
                        <strike>Price:- &#8377; <?php echo ((25 / 100) * $fetch_data['data']['set_price']) + $fetch_data['data']['set_price'] ?> </strike>
                        <h4> &#8377; <?php echo $fetch_data['data']['set_price'] ?> </h4>

                    </div>
                    <!-- <p>Color:
                <select name="clr" class="set-ww">
                    <optgroup value="color" label=" COLOR"></optgroup>
                    <option value=""></option>
                    <option value="red">RED</option>
                    <option value="grey">GREY</option>
                    <option value="grey">WHITE</option>
                </select>
            </p> -->
                    <p>
                        Qty:- <input type="number" value="1" class="set-ww">
                    </p>

                    <?php
                    include "api/config.php";
                    $user_id = $fetch_data['data']['user_id'];
                    $sql = "select * from user where user_id = $user_id ;";

                    $result = mysqli_query($con, $sql) or die("query failed");

                    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    // print_r($output);

                    ?>

                    <div class="btn-both">
                        <?php
                        if (isset($_SESSION['user_id'])) {
                        ?>
                            <a href="https://wa.me/<?php echo '91' . $fetch_data['data']['seller_phone'] ?> " target="_blank" style="text-decoration: none;" class=" edit-cl">
                            <?php
                        } else {
                            ?>
                                <a href="form/login.php" style="text-decoration: none;" class=" edit-cl">
                                <?php
                            }
                                ?>

                                <i class="fa-brands fa-whatsapp"></i>
                                Chat with seller</a>
                                <a id="clickbtn" <?php
                                                    if (!isset($_SESSION['user_id'])) {
                                                    ?> href="" <?php
                                                    }
                                    ?> style="text-decoration: none;" class="edit-cll" onclick="showDiv()" value="Show Div"><i class="fa-solid fa-address-card"></i> Contact with seller</a>
                    </div>

                    <div id="seller-details1" style="display:none;" class="seller-contact">
                        <i class="fa-solid fa-phone"></i> FixeBuy contact: &emsp;&emsp; 999999999 <br>

                        <i class="fa-solid fa-envelope"></i> FixeBuy Email. :&emsp;&emsp; contactforbuy@fixebuy.com <br>
                    </div>
                    <div id="seller-details" style="display:none;" class="seller-contact">
                        <i class="fa-solid fa-user"></i> Seller Name: &emsp;&emsp;&emsp;&emsp;<?php echo $fetch_data['data']['seller_name'] ?> <br>
                        <i class="fa-solid fa-phone"></i> Seller Mobile no. :&emsp;&emsp; <?php echo $fetch_data['data']['seller_phone'] ?><br>
                        <i class="fa-solid fa-envelope"></i> Seller Email: &emsp;&emsp;&emsp;&emsp;<?php echo $output[0]['user_email'] ?> <br>
                        <i class="fa-solid fa-location-dot"></i> Location:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $fetch_data['data']['location'] ?>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="fetrd">
        <div class="details-ad">
            <h2> FEATURED DETAILS : -</h2><br>
            <div class="row">
                <div class="col-md-6">
                    <ul class="li-cl">
                        <li>Brand :- <?php echo $fetch_data['data']['brand'] ?></li>
                        <li>Model Name :- <?php echo $fetch_data['data']['model'] ?></li>
                        <li>Buy year :-<?php echo $fetch_data['data']['year'] ?> </li>
                        <li>Location of product :- <?php echo $fetch_data['data']['location'] ?></li>
                        <li>brand :- <?php echo $fetch_data['data']['brand'] ?></li>
                        <li>Model Name :- <?php echo $fetch_data['data']['model'] ?></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="li-cl">
                        <li>Brand :- <?php echo $fetch_data['data']['brand'] ?></li>
                        <li>Model Name :- <?php echo $fetch_data['data']['model'] ?></li>
                        <li>Buy year :-<?php echo $fetch_data['data']['year'] ?> </li>
                        <li>Location of product :- <?php echo $fetch_data['data']['location'] ?></li>
                        <li>brand :- <?php echo $fetch_data['data']['brand'] ?></li>
                        <li>Model Name :- <?php echo $fetch_data['data']['model'] ?></li>
                    </ul>
                </div>
            </div>

        </div>
        <br>
        <br>

        <div class="about-ad">
            <h4>About this item:-</h4>
            <br>
            <div class="ad-bt">
                <ul class="li-cl">
                    <li><?php echo $fetch_data['data']['description'] ?></li>
                    <!-- <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatullum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
              
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam obcaecati eveniet ducimus aut impedit, minima corrupti explicabo similique cupidirrupti explicabo similique cupidirrupti explicabo similique cupiditate illum aperiam neque aspernatur esse repellat deserunt, vel possimus sint. Dolorem.</li> -->

                </ul>
            </div>
        </div>
    </div>



    <br>
    <!-- owl casusal -->
    <div class="container-relate">
        <div class="for-center-relate">
            <div class="container-heading-relate">
                <span>Related Products:-</span>
            </div>
        </div>

        <div class="carousel owl-carousel">

            <?php
            if ($fetch_data['data']['main_category'] == $fetch_data_mobile[0]['main_category']) {
            ?>
                <?php
                $flag = 0;
                foreach ($fetch_data_mobile as $value) {
                    if ($flag == 10) {
                        break;
                    }
                ?>
                    <div class="col-md-3 col-12 ">
                        <a href="single-product.php?pdt_id=<?php echo $value['pdt_id']; ?>&main_category=<?php echo $value['main_category'] ?>" class="ancher">
                            <div class="shadow p-3 mb-5 bg-white maindiv1">
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
            <?php
            } elseif ($fetch_data['data']['main_category'] == $fetch_data_bike[0]['main_category']) {
            ?>
                <?php
                $flag = 0;
                foreach ($fetch_data_bike as $value) {
                    if ($flag == 10) {
                        break;
                    }
                ?>
                    <div class="col-md-3 col-12">
                        <a href="single-product.php?pdt_id=<?php echo $value['pdt_id']; ?>&main_category=<?php echo $value['main_category'] ?>" class="ancher">
                            <div class="shadow p-3 mb-5 bg-white maindiv1">
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
            <?php
            } else {
            ?>
                <?php
                $flag = 0;
                foreach ($fetch_data_car as $value) {
                    if ($flag == 10) {
                        break;
                    }
                ?>
                    <div class="col-md-3 col-12">
                        <a href="single-product.php?pdt_id=<?php echo $value['pdt_id']; ?>&main_category=<?php echo $value['main_category'] ?>" class="ancher">
                            <div class="shadow p-3 mb-5 bg-white maindiv1">
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
            <?php
            }
            ?>

        </div>
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
    <!-- 5 version  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- photo change  -->
    <script>
        function clickimg(small) {
            var fullimg = document.getElementById("imm");
            fullimg.src = small.src
        }
    </script>
    <!-- openssl_csr -->
    <script>
        $(document).ready(function() {
            $(".carousel").owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
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
                        items: 4,
                        nav: true,
                        loop: true
                    }
                }

            })
        })
    </script>
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
    <script>
        var status = "<?php echo $output[0]['status']; ?>";

        function showDiv() {
            <?php
            if (isset($_SESSION["user_id"])) {
            ?>
                if (status == 'active') {
                    document.getElementById('seller-details1').style.display = "block";
                } else {
                    document.getElementById('seller-details').style.display = "block";
                }
            <?php
            } else {
            ?>

                document.getElementById('clickbtn').href = "form/login.php";
            <?php
            }
            ?>
        }
    </script>

    <!-- bootsrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
    <!-- 5 version  -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>


</html>