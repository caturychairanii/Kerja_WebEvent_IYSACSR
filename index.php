<?php 

include "component/config.php";

?>
<html class="no-js" lang="en">
<head>
    <!-- header -->
    <?php include "component/header.php" ?>
    <!-- end header -->
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
    <?php include "component/navbar.php" ?>
    <!-- end navbar -->
</header>

<main>
<div class="slider-area slider-bg ">
    <div class="slider-active">
        <div class="single-slider d-flex align-items-center slider-height ">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-9 ">
                        <div class="hero__caption">
                            <span data-animation="fadeInLeft" data-delay=".3s">New From IYSA</span>
                            <h1 data-animation="fadeInLeft" data-delay=".6s ">IYSA CSR 2022</h1>
                            <p data-animation="fadeInLeft" data-delay=".8s">
                            </p>
                            <div class="slider-btns">
                                <a data-animation="fadeInLeft" data-delay="1s" href="https://docs.google.com/forms/d/e/1FAIpQLScbJlh9JP7MxNMRSh7zkj0rq75_v_IiHx_cQTnS_-Ol5xglIg/viewform
" class="btn radius-btn"><?= $lang['registration'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="hero__img d-none d-lg-block f-right">
                            <img src="assets/img/hero/IYSACSR.png" alt="" data-animation="fadeInRight" data-delay="1s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider d-flex align-items-center slider-height ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-9 ">
                        <div class="hero__caption">
                            <span data-animation="fadeInLeft" data-delay=".3s">Best Domain & hosting service provider</span>
                            <h1 data-animation="fadeInLeft" data-delay=".6s">Powerful web hosting</h1>
                            <p data-animation="fadeInLeft" data-delay=".8s">
                                Supercharge your WordPress hosting with detailed website analytics, marketing tools, security, and data backups all in one place.
                            </p>
                            <div class="slider-btns">
                                <a data-animation="fadeInLeft" data-delay="1s" href="industries.html" class="btn radius-btn">get started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero__img d-none d-lg-block f-right">
                            <img src="assets/img/hero/hero_right.png" alt="" data-animation="fadeInRight" data-delay="1s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-shape d-none d-lg-block">
        <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
    </div>
</div>

<div class="about-area1 section-padding40">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-5 col-md-8 col-sm-10">
                <div class="about-img ">
                    <img src="assets/img/hero/IllustrationAboutCsr.png" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="about-caption ">
                    <div class="section-tittle section-tittle2 mb-30">
                        <h2><?= $lang['about iysa reward'] ?></h2>
                    </div>
                    <p class="mb-40">

                        <?= $lang['aboutcsr'] ?>
                        
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Price -->
<section class="pricing-card-area section-padding40 fix">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-8">
            <div class="section-tittle text-center mb-90">
                <h2><?= $lang['scholarship A'] ?></h2>
                <p>
                    <?= $lang['quota scholarship'] ?>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
            <div class="single-card text-center mb-30">
                <div class="card-top">
                    <img src="assets/img/icon/price1.svg" alt="">
                    <h4>SD / MI</h4>
                    <p>
                        <?= $lang['starting at'] ?>
                    </p>
                </div>
                <div class="card-mid">
                    <h4>Rp.1.500.000<span>/ <?= $lang['people'] ?></span></h4>
                </div>
                <div class="card-bottom">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc-yTIsg96Fd0AZSigqaad18EIzQ6WAz-hStkiynWhLjTqmcw/viewform
" class="borders-btn"><?= $lang['registration'] ?></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
            <div class="single-card text-center mb-30">
                <div class="card-top">
                    <img src="assets/img/icon/price2.svg" alt="">
                    <h4>SMP / MTs & SMA / MA</h4>
                    <p>
                        <?= $lang['starting at'] ?>
                    </p>
                </div>
                <div class="card-mid">
                    <h4>Rp.2.000.000 <span>/ <?= $lang['people'] ?></span></h4>
                </div>
                <div class="card-bottom">
                    
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc-yTIsg96Fd0AZSigqaad18EIzQ6WAz-hStkiynWhLjTqmcw/viewform
" class="borders-btn"><?= $lang['registration'] ?></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
            <div class="single-card text-center mb-30">
                <div class="card-top">
                    <img src="assets/img/icon/price3.svg" alt="">
                    <h4>Mahasiswa</h4>
                    <p>
                        <?= $lang['starting at'] ?>
                    </p>
                </div>
                <div class="card-mid">
                    <h4>Rp.2.500.000 <span>/ <?= $lang['people'] ?></span></h4>
                </div>
                <div class="card-bottom">
                    
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc-yTIsg96Fd0AZSigqaad18EIzQ6WAz-hStkiynWhLjTqmcw/viewform
" class="borders-btn"><?= $lang['registration'] ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<!-- Testimonial -->
<section class="testimonial-area section-bg1">
<?php include "component/testimoni.php" ?>
</section>
<!-- End Testimonial -->

</main>


<footer>
    <!-- footer -->
    <?php include "component/footer.php" ?>
    <!-- end footer -->
</footer>

<div id="back-top">
    <a title="Go to Top" href="#"><i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- Link Footer -->

        <?php include "component/LinkFooter.php" ?>

    <!-- End LinkFooter -->

</body>
</html>

<!-- <?php  

	$project_location = "/weB_IYSA/WebsiteCSR";
    $me = $project_location;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/' :
            	require "home.php";
            break;
        // Contact
        case $me.'/contact' :
            	require "pages/contact.php";
            break;
        // Phooto
        case $me.'/Photo' :
        		require "pages/photo.php";
        	break;

        // Video
        case $me.'/Video' :
        		require "pages/video.php";
        	break;
        	
        // Iysa Reward
        case $me.'/Iysa_Reward' :
        		require "pages/About_IysaReward.php";
        	break;	
        // Iysa Scholarship
        case $me.'/Iysa_Scholarship' :
        		require "pages/About_IysaScholarship.php";
        	break;

        default:
            http_response_code(404);
            echo "404";
            break;
    }
?> -->