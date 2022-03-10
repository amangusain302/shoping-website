<?php
if (isset($_SESSION['username']) && $_SESSION['role'] == 0) {
?>
    <div class="col-2"><a href="profile.php?user_id=<?php echo $_SESSION['user_id']; ?> " class="ancor-container float-end">
            <div class="profile-icon"><img src=<?php echo "image/profile-image/" . $_SESSION['user_image']; ?>></div> 
            <span><?php echo $_SESSION['username']; ?></span>
        </a></div>
    <div class="col-1"><a href="form/logout.php">LOGOUT</a></div>
<?php } else { ?>
    <div class="col-1"><a href="form/login.php">LOGIN/SIGNUP</a></div>
<?php }
?>