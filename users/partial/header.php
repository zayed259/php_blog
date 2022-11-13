<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo isset($page) ? $site . " | " . $page : $site; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- CSS only -->

	<link rel="stylesheet" href="../assets/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/animate.css">

	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">

	<link rel="stylesheet" href="../assets/css/aos.css">

	<link rel="stylesheet" href="../assets/css/ionicons.min.css">

	<link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../assets/css/jquery.timepicker.css">


	<link rel="stylesheet" href="../assets/css/flaticon.css">
	<link rel="stylesheet" href="../assets/css/icomoon.css">
	<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight">
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="<?php if (isset($page) && $page == "Home") { echo "colorlib-active";}?>"><a href="../index.php">Home</a></li>
					<li class="<?php if (isset($page) && $page == "Web Development") { echo "colorlib-active";}	?>"><a href="fashion.html">Web Development</a></li>
					<li class="<?php if (isset($page) && $page == "Graphics Design") { echo "colorlib-active";}	?>"><a href="fashion.html">Graphics Design</a></li>
					<li class="<?php if (isset($page) && $page == "Networking Technology") { echo "colorlib-active";}	?>"><a href="travel.html">Networking Technology</a></li>
					<li class="<?php if (isset($page) && $page == "Database Design") { echo "colorlib-active";}	?>"><a href="travel.html">Database Design</a></li>
					<li class="<?php if (isset($page) && $page == "C#") { echo "colorlib-active";}?>"><a href="travel.html">C#</a></li>
					<li class="<?php if (isset($page) && $page == "Java") { echo "colorlib-active";}?>"><a href="travel.html">Java</a></li>
					<li class="<?php if (isset($page) && $page == "About") { echo "colorlib-active";}?>"><a href="about.html">About</a></li>
                    <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
                    <li class="<?php if (isset($page) && $page == "Profile") { echo "colorlib-active";}	?>"><a href="users/profile.php">Profile</a></li>
                    <li class="<?php if (isset($page) && $page == "Post") { echo "colorlib-active";}?>"><a href="../post.php">Create Post</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                    <?php else: ?>
					<li><a href="../login.php">Login</a></li>
                    <?php endif; ?>
				</ul>
			</nav>

			<!-- <div class="colorlib-footer">
				<div class="mb-4">
					<h3>Subscribe for newsletter</h3>
					<form action="#" class="colorlib-subscribe-form">
						<div class="form-group d-flex">
							<div class="icon"><span class="icon-paper-plane"></span></div>
							<input type="text" class="form-control" placeholder="Enter Email Address">
						</div>
					</form>
				</div>
				<p class="pfooter">
					Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
					Copyright &copy;
					<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
					made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
						target="_blank">Colorlib</a>
					 Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
				</p>
			</div> -->
		</aside> <!-- END COLORLIB-ASIDE -->
