<?php
include "server.php";
?>
<div class="container post border p-0">
    <div class="heading-post-product">
        POST YOUR AD
    </div>
    <hr>
    <div class="container set-pd-post">
        <div class="sub-heading-post">
            Include Some Details
        </div>
        <br>
        <form action="http://<?php echo $server_name; ?>/fixbuy/api-call/car-product-api-call.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>"><br>
            <input type="hidden" name="seller_name" value="<?php echo $_SESSION['username'] ?>"><br>

            <label for="title">SELLER PHONE*</label>
            <input type="text" name="seller_phone" placeholder="SELLER PHONE*" class="form-control set-pd-input-post"><br>

            <label for="title">MAIN CATEGORY*</label>
            <input type="text" name="main_category" placeholder="MAIN CATEGORY*" class="form-control set-pd-input-post"><br>
            <label for="title">SUB CATEGORY*</label>
            <input type="text" name="sub_category" placeholder="SUB CATEGORY*" class="form-control set-pd-input-post"><br>



            <label for="brand">BRAND*</label>
            <select id="make" name="brand" class="form-control set-pd-input-post">
                <option value=""></option>
                <optgroup label="Popular Brand"></optgroup>
                <option value="maruti-suzuki">Maruti Suzuki</option>
                <option value="hyundai">Hyundai</option>
                <option value="tata">Tata</option>
                <option value="mahindra">Mahindra</option>
                <option value="toyota">Toyota</option>
                <option value="cars-honda">Honda</option>
                <optgroup label="All Brand"></optgroup>
                <option value="ashok">Ashok</option>
                <option value="aston">Aston</option>
                <option value="hindustan">Hindustan</option>
                <option value="mercedes-benz-1">Mercedes Benz</option>
                <option value="ambassador">Ambassador</option>
                <option value="ashok-leyland">Ashok Leyland</option>
                <option value="aston-martin">Aston Martin</option>
                <option value="audi">Audi</option>
                <option value="bajaj1">Bajaj</option>
                <option value="bentley">Bentley</option>
                <option value="bmw">BMW</option>
                <option value="bugatti">Bugatti</option>
                <option value="cadillac">Cadillac</option>
                <option value="caterham">Caterham</option>
                <option value="chevrolet">Chevrolet</option>
                <option value="chrysler">Chrysler</option>
                <option value="citroen">Citroen</option>
                <option value="conquest">Conquest</option>
                <option value="daewoo">Daewoo</option>
                <option value="datsun">Datsun</option>
                <option value="dc">Dc</option>
                <option value="dodge">Dodge</option>
                <option value="eicher-polaris">Eicher Polaris</option>
                <option value="ferrari">Ferrari</option>
                <option value="fiat">Fiat</option>
                <option value="force-motors">Force Motors</option>
                <option value="ford">Ford</option>
                <option value="hindustan-motors">Hindustan Motors</option>
                <option value="cars-honda">Honda</option>
                <option value="hummer">Hummer</option>
                <option value="hyundai">Hyundai</option>
                <option value="icml">ICML</option>
                <option value="infiniti">Infiniti</option>
                <option value="isuzu">Isuzu</option>
                <option value="jaguar">Jaguar</option>
                <option value="jeep">Jeep</option>
                <option value="kia">Kia</option>
                <option value="lamborghini">Lamborghini</option>
                <option value="land-rover">Land Rover</option>
                <option value="lexus">Lexus</option>
                <option value="mahindra">Mahindra</option>
                <option value="mahindra-renault">Mahindra Renault</option>
                <option value="maruti-suzuki">Maruti Suzuki</option>
                <option value="maserati">Maserati</option>
                <option value="maybach">Maybach</option>
                <option value="mazda">Mazda</option>
                <option value="mercedes-benz">Mercedes-Benz</option>
                <option value="mg">MG</option>
                <option value="mini">Mini</option>
                <option value="mitsubishi">Mitsubishi</option>
                <option value="nissan">Nissan</option>
                <option value="opel">Opel</option>
                <option value="peugeot">Peugeot</option>
                <option value="porsche">Porsche</option>
                <option value="premier">Premier</option>
                <option value="renault">Renault</option>
                <option value="rolls-royce">Rolls-Royce</option>
                <option value="san">San</option>
                <option value="sipani">Sipani</option>
                <option value="skoda">Skoda</option>
                <option value="smart">Smart</option>
                <option value="ssangyong">Ssangyong</option>
                <option value="subaru">Subaru</option>
                <option value="tata">Tata</option>
                <option value="tesla">Tesla</option>
                <option value="toyota">Toyota</option>
                <option value="volkswagen">Volkswagen</option>
                <option value="volvo">Volvo</option>
                <option value="cars-other">Other Brands</option>
            </select>

            <BR>
            <label for="title">MODEL*</label>
            <input type="text" name="model" placeholder="MODEL*" class="form-control set-pd-input-post"><br>
            <label for="title">VARIANT*</label>
            <input type="text" name="variant" placeholder="VARIANT*" class="form-control set-pd-input-post"><br>


            <label for="title">YEAR*</label>
            <input type="text" name="year" placeholder="YEAR*" class="form-control set-pd-input-post"><br>

            <label for="title">FUEL*</label>
            <input type="text" name="fuel" placeholder="FUEL*" class="form-control set-pd-input-post"><br>
            <label for="title">TRANSMISSION*</label>
            <input type="text" name="transmission" placeholder="TRANSMISSON*" class="form-control set-pd-input-post"><br>


            <label for="title">KM DRIVEN*</label>
            <input type="text" name="km_driven" placeholder="km*" class="form-control set-pd-input-post"><br>

            <label for="title">NO. OF OWNERS*</label>
            <input type="text" name="no_of_owner" placeholder="NO. OF OWNERS*" class="form-control set-pd-input-post"><br>

            <label for="title">ADD TTILE*</label>
            <input type="text" name="ad_title" placeholder="ADD TITLE*" class="form-control set-pd-input-post"><br>
            <textarea name="description" id="" class="form-control" cols="30" rows="10" width="100%" placeholder="DESCRIPTION*"></textarea>
            <br>
            <br>

    </div>
    <hr>
    <div class="container set-pd-post">
        <div class="sub-heading-post">
            SET A PRICE
        </div>
        <br>
        <input type="text" name="set_price" class="form-control set-pd-input-post" placeholder="PRICE*">
    </div>
    <hr>
    <br>
    <div class="container set-pd-post">
        <div class="sub-heading-post">
            UPLOAD SOME PHOTOS
        </div>
        <div class="row">
            <div class="col-3 d-flex align-items-center">
                <div class=" image-upload my-2 p-2 border  bg-white ">
                    <div class="preview-container">
                        <img src="image/post-product/1.png" alt="">
                        <span class="fileName d-block my-2">No file chosen</span>
                        <div class="icon-container bg-secondary ">
                            <i class="fas fa-times icon text-white"></i>
                        </div>
                    </div>
                    <input type="file" name="pdt_image" class="form-control w-100 my-2 shadow-none fileUpload">
                </div>
            </div>
            <div class="col-3 d-flex align-items-center">
                <div class=" image-upload my-2 p-2 border  bg-white ">
                    <div class="preview-container">
                        <img src="image/post-product/1.png" alt="">
                        <span class="fileName d-block my-2">No file chosen</span>
                        <div class="icon-container bg-secondary ">
                            <i class="fas fa-times icon text-white"></i>
                        </div>
                    </div>
                    <input type="file" name="pdt_image2" class="form-control w-100 my-2 shadow-none fileUpload">
                </div>
            </div>
            <div class="col-3 d-flex align-items-center">
                <div class=" image-upload my-2 p-2 border  bg-white ">
                    <div class="preview-container">
                        <img src="image/post-product/1.png" alt="">
                        <span class="fileName d-block my-2">No file chosen</span>
                        <div class="icon-container bg-secondary ">
                            <i class="fas fa-times icon text-white"></i>
                        </div>
                    </div>
                    <input type="file" name="pdt_image3" class="form-control w-100 my-2 shadow-none fileUpload">
                </div>
            </div>
            <div class="col-3 d-flex align-items-center">
                <div class=" image-upload my-2 p-2 border  bg-white ">
                    <div class="preview-container">
                        <img src="image/post-product/1.png" alt="">
                        <span class="fileName d-block my-2">No file chosen</span>
                        <div class="icon-container bg-secondary ">
                            <i class="fas fa-times icon text-white"></i>
                        </div>
                    </div>
                    <input type="file" name="pdt_image4" class="form-control w-100 my-2 shadow-none fileUpload">
                </div>
            </div>
        </div>
    </div>


    <hr>
    <div class="container set-pd-post">
        <div class="sub-heading-post">
            CONFIRM YOUR LOCATION
        </div><br>
        <div class="select-loaction">
        <select id="State" name="location" class="form-control set-pd-input-post">
                <option value="unknown"></option>
                <option value="Andaman & Nicobar Islands">Andaman &amp; Nicobar Islands</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadra & Nagar Haveli">Dadra &amp; Nagar Haveli</option>
                <option value="Daman & Diu">Daman &amp; Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu & Kashmir">Jammu &amp; Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Pondicherry">Pondicherry</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttaranchal">Uttaranchal</option>
                <option value="West Bengal">West Bengal</option>
            </select>
        </div>
        <div class="post-pr">
            <!-- <a href="#" name ="submit" >POST NOW</a> -->
            <input type="submit" name="submit" value="POST NOW">
        </div>
        </form>
    </div>
</div>