<nav class="navbar navbar-expand-lg headerr">
    <div class="container-fluid">

        <div class="logo">
            <a class="navbar-brand" href="#"><img src="image/logo/FB.png" alt="logo"></a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="inline-menu">
                <div class="setmnu">
                    <ul class="navbar-nav menu">
                        <li class="nav-item aa">
                            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item aa">
                            <a class="nav-link" href="product.php">PRODUCT</a>
                        </li>
                        <li class="nav-item aa">
                            <a class="nav-link" href="contact.php">CONTACT US</a>
                        </li>
                        <li class="nav-item aa">
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                    </ul>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" id="search" placeholder="Search" aria-label="Search">
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" id="Search" type="submit">Search</button> -->
                    <div class="row p-0 m-0 mob-cen">
                        <div class="col-12 mainbutton">
                            <a href="<?php
                                        if (isset($_SESSION['username'])) {
                                            echo "post-product.php";
                                        } else {
                                            echo "form/login.php";
                                        } ?>" class="btn"> + POST PRODUCTS</a>
                        </div>
                    </div>
                </form>

            </div>


        </div>

    </div>

</nav>
<!-- category -->
<div class="row m-0 p-0">
    <div class="col  p-0">
        <div class="catagry">
            <div class="row catagry-color p-0 m-0">
                <div class="col-1 disp"><i class="fas fa-grip-lines"></i>&nbsp;&nbsp;<a href="product.php">ALL</a></div>
                <div class="col-1 disp"><a href="#">BIKES</a></div>
                <div class="col-1 disp"><a href="#">CARS</a></div>
                <div class="col-1 disp"><a href="#">PHONE</a></div>
                <div class="col-1 disp"><a href="service-section.php">SERVICES</a></div>
                <div class="col-1 disp"><a href="#"></a></div>
                <div class="col-1 disp"><a href="#"></a></div>
                <div class="col-1 disp"><a href="#"></a></div>

                <div class="col-4">
                    <!-- <a href="#"></a> -->
                    <!--dropdown  -->
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-d dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            LOGIN/SIGNUP
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#"> <i class="fas fa-user"></i>&nbsp;&nbsp;Logout</a></li>
                            <li><a class="dropdown-item" href="#"> <i class="fas fa-bars"></i>&nbsp;&nbsp;Profile</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </div>
                    <!-- end -->
                </div>
                <!-- <div class="col-1">
                        <a href="#"></a>
                    </div> -->

                <?php
                include "form/login-session.php";
                ?>

            </div>
        </div>
    </div>
</div>
<!-- slider of swiper -->
<!-- Swiper -->
                                        