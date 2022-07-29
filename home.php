<?php 

include "component/config.php";

?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>

    <?php include "component/header.php" ?>

</head>

<body>
<div id="preloader-active">
	<div class="preloader d-flex align-items-center justify-content-center">
		<div class="preloader-inner position-relative">
			<div class="preloader-circle"></div>
			<div class="preloader-img pere-text">
				<img src="assets/img/logo/loder.png" alt="">
			</div>
		</div>
	</div>
</div>
<header>

    <!-- navbar -->

        <?php include "component/navbar.php"; ?>

    <!-- End Navbar -->

</header>


<?php 

if(isset($_GET['page']))
{
	if($_GET['page'] == "AboutReward")
	{
		include 'pages/About_IysaReward.php';
	}
	elseif($_GET['page'] == "AboutScholarship")
	{
		include 'pages/About_IysaScholarship.php';
	}
	elseif($_GET['page'] == "Contact")
	{
		include 'pages/contact.php';
	}
	elseif($_GET['page'] == "Photo")
	{
		include 'pages/photo.php';
	}
	elseif($_GET['page'] == "Video")
	{
		include 'pages/video.php';
	}
}
else{
	include 'pages/404.php';
}

?>



</main>
<footer>
<!-- Footer -->
    <?php include "component/footer.php"; ?>
<!-- End Footer -->
</footer>
<div id="back-top">
	<a title="Go to Top" href="#"><i class="fas fa-level-up-alt"></i></a>
</div>

<!-- LinkFooter -->

    <?php include "component/LinkFooter.php"; ?>

<!-- End LinkFooter -->

</body>
</html>