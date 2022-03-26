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
<?php
// fetch
$data_array = array(
    'user_id'=> $_GET['user_id'],
);

$data = json_encode($data_array);

$url = "http://".$server_name."/admin/seller/dashboard/api/single-user-item-api.php";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);

$fetch_data = json_decode($result, true);



curl_close($ch);
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
    
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <!-- custom css -->
    <link rel="stylesheet" href="admin/seller/css/custom.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="heading.css">
    <link rel="stylesheet" href="mob-res.css">
    <link rel="stylesheet" href="tab-res.css">
    <link rel="stylesheet" href="admin/seller/dashboard/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="admin/seller/dashboard/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="admin/seller/dashboard/assets/css/header-colors.css" />
    <link rel="stylesheet" href="admin/seller/dashboard/assets/css/custom.css">
    <link href="admin/seller/dashboard/assets/css/bootstrap.min.css" rel="stylesheet">
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
                Your Request for Services has been submited successfully. FixeBuy team will contact you within 2-3 working days.
            </div>
        <?php
        }
        ?>
    <div class="for-center service-form">
        <div class="container-heading service-form">
            <span>Posted Items</span>
        </div>
    </div>  
    <div class="page-wrapper">
            <div class="page-content">
                

                    <div class="card-body card radius-10">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>category</th>
                                        <th>Ad title</th>
                                        <th>Product Image</th>
                                        <th>Selling Price</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                     foreach ($fetch_data as $value) {
                                 ?>
                                    <tr>
                                        <td><?php echo $value['main_category'] ?></td>
                                        <td><?php echo $value['ad_title'] ?></td>
                                        <td><img style="height:50px; width=auto;" src="<?php echo "image/upload/".$value['pdt_image'] ?>" alt=""></td>
                                        <td><?php echo $value['set_price'] ?></td>
                                        <td><p><?php echo $value['description'] ?></p></td>
                                
                                        <td>
                                            <?php
                                            if($value['status']=="review")
                                            {
                                        
                                          echo '<span class=" btn btn-warning  status approve" name="status" value="review">Review</span>';
                                            }
                                            else
                                            {
                                            if($value['status']=="approve")
                                            {
                                            
                                            echo '<span class=" btn btn-success  status" name="status" value="Approve">Approve</span>';
                                            
                                            }
                                            else
                                            {
                                            
                                            echo '<span class=" btn btn-danger  status" name="status" value="Reject" >
                                            Reject</span>';
                                               
                                            }
                                        }
                                            ?>

                                    </td>
                                        <td class="d-flex align-items-center padding-td">
                                            <div class="me-3 px-1"> <a  href="single-product.php?pdt_id=<?php echo $value['pdt_id'];?>&main_category=<?php echo $value['main_category']?>" class=" btn color-btn text-decoration-none"> View more</a></div>

                                        </td>

                                    </tr>
                                    <?php
                                    }
                                    ?>
                                    </tbody>
                            </table>
                        </div>
                    </div>

               
                <!--end row-->
            </div>
        </div>
    </div>

    <!-- section end -->




    <!-- footer -->
    <?php include "footer.php"; ?> 