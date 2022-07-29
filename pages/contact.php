<?php 

	include_once('pages/master/m_header.php');

?>


<div class="slider-area slider-bg ">
	<div class="single-slider d-flex align-items-center slider-height3">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-8 col-lg-9 col-md-12 ">
					<div class="hero__caption hero__caption3 text-center">
						<h1 data-animation="fadeInLeft" data-delay=".6s ">Contact</h1>
						<p>
							Home <span>/</span> Contact
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

<section class="contact-section">
	<div class="container">
		
		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Get in Touch</h2>
			</div>
			<div class="col-lg-8">
				<form class="form-contact contact_form" action="https://preview.colorlib.com/theme/ecohosting/contact_process.php" method="post" id="contactForm" novalidate>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" enter message"></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name"></div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email"></div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject"></div>
						</div>
					</div>
					<div class="form-group mt-3">
						<button type="submit" class="button button-contactForm boxed-btn">Send</button>
					</div>
				</form>
			</div>
			<div class="col-lg-3 offset-lg-1">
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-home"></i></span>
					<div class="media-body">
						<h3>Jalan Kemang No. 63 RT. 3 RW. 06, Pasir Putih. Sawangan, Kota Depok, Jawa Barat 16511, Indonesia.</h3>
						<!-- <p>
							Rosemead, CA 91770
						</p> -->
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-tablet"></i></span>
					<div class="media-body">
						<h3>+62 817-7091-4129</h3>
						<p>
							Mon to Fri 9 AM to 5 PM
						</p>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-email"></i></span>
					<div class="media-body">
						<h3>youngscientist.iysa@gmail.com</h3>
						<p>
							Send us your query anytime!
						</p>
					</div>
				</div>
			</div>
		</div>

		<hr>

		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.9028695454435!2d106.77451711419539!3d-6.406512964438103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e906913915c7%3A0x1de9ddf653d9736f!2sIndonesian%20Young%20Scientist%20Association%20(IYSA)!5e0!3m2!1sen!2sid!4v1634218580572!5m2!1sen!2sid" width="1120" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

		</hr>

	</div>
</section>

<?php include 'pages/master/m_footer.php' ?>

