<?php
include "../../../server.php";
?>
<header>
	<div class="topbar d-flex align-items-center">
		<nav class="navbar navbar-expand">
			<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
			</div>
			<!-- <div class="search-bar flex-grow-1">
				<div class="position-relative search-bar-box">
					<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
					<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
				</div>
			</div> -->
			<div class="top-menu ms-auto">
				
				<ul class="navbar-nav align-items-center">
					
					<li class="nav-item dropdown dropdown-large">
						
						<div class="dropdown-menu dropdown-menu-end">
							
							<div class="header-notifications-list">
								
							</div>
							<a href="javascript:;">
								<div class="text-center msg-footer">View All Notifications</div>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown dropdown-large">
						<!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
							<i class='bx bx-comment'></i>
						</a> -->
						<div class="dropdown-menu dropdown-menu-end">
							<a href="javascript:;">
								<div class="msg-header">
									<p class="msg-header-title">Messages</p>
									<p class="msg-header-clear ms-auto">Marks all as read</p>
								</div>
							</a>
							<div class="header-message-list">
								
							</div>
							<a href="javascript:;">
								<div class="text-center msg-footer">View All Messages</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
			<div class="user-box dropdown">
				<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="assets/images/avatars/pf-icon.png"  class="user-img" alt="user avatar">
					<div class="user-info ps-3">
						<p class="user-name mb-0"><?php echo $_SESSION['username']; ?></p>
						
					</div>
				</a>

				<ul class="dropdown-menu dropdown-menu-end">
					<li><a class="dropdown-item" href="index.php"><i class="fas fa-home "></i><span>Dashboard</span></a>
					</li>
					<!-- <li><a class="dropdown-item" href="user-profile.php"><i class="fas fa-user "></i><span>Admin Profile</span></a>
					</li> -->

					<div class="dropdown-divider mb-0"></div>
					</li>
					<li><a class="dropdown-item" href="http://<?php echo $server_name; ?>/admin/seller/logout-admin.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>