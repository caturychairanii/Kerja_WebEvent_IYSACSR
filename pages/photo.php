
<?php include_once('pages/master/m_header.php'); ?>

<div class="slider-area slider-bg ">
	<div class="single-slider d-flex align-items-center slider-height3">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-8 col-lg-9 col-md-12 ">
					<div class="hero__caption hero__caption3 text-center">
						<h1 data-animation="fadeInLeft" data-delay=".6s ">Photo</h1>
						<p>
							Home <span>/</span> Photo
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-shape d-none d-lg-block">
		<img class="slider-shape1" src="assets/img/hero/xtop-left-shape.png.pagespeed.ic.0SImSSj_TA.png" alt="">
	</div>
</div>

<section class="blog_area section-padding">
<div class="container box_1170">
	
	<div class="section-top-border">
		<h3>Photo Gallery</h3>

			<div class="row gallery-item">
					<?php foreach($avicenna_gllry as $x => $x_glly){ ?>

						<div class="col-md-4">
							<a href="img/elements/<?= $x ?>.jpeg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(img/elements/<?= $x_glly ?>.jpeg);"></div>
							</a>
						</div>

					<?php } ?>

					<?php foreach ($smpu as $s => $s_value) { ?>

						<div class="col-md-4">
							<a href="img/elements/<?= $s ?>.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(img/elements/<?= $s_value ?>.jpg);"></div>
							</a>
						</div>

					<?php } ?>
				
				</div>
		</div>

	</div>
</div>	

</section>

<?php include 'pages/master/m_footer.php' ?>