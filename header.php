<?php
include "server.php";
?>
<link rel="icon" href="image/service/favicon.ico">
<nav class="navbar navbar-expand-lg headerr">
    <div class="container-fluid">
    <div class="mob-login">
                <?php
                include "form/login-session.php";
                ?>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <i class="fas fa-bars"></i>
        </button>
        <div class="logo">
            <a class="navbar-brand" href="index.php"><img src="image/logo/FB.png" alt="logo"></a>
        </div>
        
        
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
                <form class="form-inline my-2 my-lg-0 desk-version" action="search-result.php" method="get">
                    <input class="form-control mr-sm-2" type="text" id="search" placeholder="Search" name="search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" id="Search" type="submit" name="submit" value="true">Search</button>
                    </form>
                    <div class="row p-0 m-0 mob-cen">
                        <div class="col-12 mainbutton">
                            <a href="<?php
                                        if (isset($_SESSION['username'])) {
                                            echo "post-product.php";
                                        } else {
                                            echo "form/login.php";
                                        } ?>" class="btn"> + SELL</a>
                        </div>
                    </div>

            </div>


        </div>

    </div>

</nav>
<div class="mob-version search-box col-12">
<form class="form-inline my-2 my-lg-0" action="search-result.php" method="get">
                    <input class="form-control mr-sm-2 col-12" type="text" id="search" placeholder="Search" name="search" aria-label="Search">
                    <!-- <button class="btn btn-outline-success col-0 my-2 my-sm-0" id="Search" type="submit" name="submit" value="true">Search</button> -->
</form>
</div>

<!-- category -->
<div class="desk-category">
<div class="row m-0 p-0">
    <div class="col  p-0">
        <div class="catagry">
            <div class="row catagry-color p-0 m-0">
                <div class="col-1 disp"><i class="fas fa-grip-lines"></i>&nbsp;&nbsp;<a href="product.php">ALL</a></div>
                <div class="col-1 disp"><a href="bikes-page.php">BIKES</a></div>
                <div class="col-1 disp"><a href="cars-page.php">CARS</a></div>
                <div class="col-1 disp"><a href="mobiles-page.php">PHONE</a></div>
                <div class="col-1 disp"><a href="service-form.php">SERVICES</a></div>
                <div class="col-1 disp"><a href="#"></a></div>
                <div class="col-1 disp"><a href="#"></a></div>
                <div class="col-1 disp"><a href="#"></a></div>
                <div class="col-1 disp"><a href="#"></a></div>
                <div class="col-3 desk-login">
                <?php
                include "form/login-session.php";
                ?>
                </div>

                <!-- <div class="col-4"> -->
                    <!-- <a href="#"></a> -->
                    <!--dropdown  -->
                   
                    <!-- end -->
                <!-- /div>< -->
                <!-- <div class="col-1">
                        <a href="#"></a>
                    </div> -->

               

            </div>
        </div>
    </div>
</div>
</div>
<!-- mobile version category -->
<div class="mob-category">
<div class="row m-0 p-0 ">
    <div class="col  p-0">
        <div class="catagry" id="navbox">
            <div class="row catagry-color p-0 m-0">
                <div class="col-3 disp <?php if(isset($_GET['active'])){if($_GET['active']=='bike'){echo "active";}}?>"><a href="bikes-page.php?active=bike"><div><img src="image/service/bike.png" >Bikes</div></a></div>
                <div class="col-3 disp <?php if(isset($_GET['active'])){if($_GET['active']=='car'){echo "active";}}?>"><a href="cars-page.php?active=car"><div><img src="image/service/car-icon.png" >Cars</div></a></div>
                <div class="col-3 disp <?php if(isset($_GET['active'])){if($_GET['active']=='mobile'){echo "active";}}?>"><a href="mobiles-page.php?active=mobile"><div><img src="image/service/mobile.png" >Mobiles</div></a></div>
                <div class="col-3 disp <?php if(isset($_GET['active'])){if($_GET['active']=='service'){echo "active";}}?>"><a href="service-form.php?active=service"><div><img src="image/service/service-icon.png" >Services</div></a></div>

                <!-- <div class="col-4"> -->
                    <!-- <a href="#"></a> -->
                    <!--dropdown  -->
                   
                    <!-- end -->
                <!-- /div>< -->
                <!-- <div class="col-1">
                        <a href="#"></a>
                    </div> -->

               

            </div>
        </div>
    </div>
</div>
 </div>
 <!-- <script>
     var btnContainer = document.getElementById("navbox");  
     var btns = btnContainer.getElementsByClassName("col-3 disp")

     for(var i=0 ; i<btns.length; i++){
         btns[i].addEventListener('click',function(){
             var current = document.getElementsByClassName("col-3 disp active");
             current[0].className = current[0].className.replace(" col-3 disp active","");
             this.className += " col-3 disp active";
         })
     }
</script> -->
<!-- <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("navbox");
var btns = header.getElementsByClassName("col-3 disp");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace( " active","");
  this.className += " active";
  });
} -->
</script>
<!-- slider of swiper -->
<!-- Swiper -->
                                        