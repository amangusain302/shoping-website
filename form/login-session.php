<?php
if (isset($_SESSION['username']) && $_SESSION['role'] == 0) {
?>
    
        <button class="btn btn-secondary dropdown btn-d" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="text-capitalize ancor-container">
                    <div class="profile-icon"><img src=<?php if($_SESSION['user_image']!=null){echo "image/profile-image/".$_SESSION['user_image'];}else{echo "image/testo/1.png";} ?>></div>
                    <span><?php echo $_SESSION['username']; ?></span>
                </a></div>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item " href="profile.php?user_id=<?php echo $_SESSION['user_id']; ?> "> <i class="fas fa-user"></i>&nbsp;&nbsp;Profile</a></li>
            <li><a class="dropdown-item" href="form/logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a></li>
            <li><a class="dropdown-item" href="membership.php"> <i class="fas fa-landmark"></i>&nbsp;&nbsp;membership</a></li>
            <li><a class="dropdown-item" href="posted-items.php?user_id=<?php echo $_SESSION['user_id'];?>"> <i class="fa-solid fa-list"></i>&nbsp;&nbsp;Posted Items</a></li>
            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
        </ul>
<?php } else { ?>
<a href="form/login.php"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Login&nbsp;&nbsp;</a>
<a href="form/register.php"><i class="fa-solid fa-user-plus"></i>&nbsp;Regsiter</a>
<?php }
?>