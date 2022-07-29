<div class="container">
	<div class="testimonial-wrapper">
		<div class="row align-items-center justify-content-center">
			<div class=" col-lg-10 col-md-12 col-sm-11">
				<div class="h1-testimonial-active">
					
					<?php 

						foreach($testmoni as $x => $x_value){

					?>
					<div class="single-testimonial text-center mt-55">
						<div class="testimonial-caption">
							<img src="assets/img/icon/quotes-sign.png" alt="" class="quotes-sign">
							<p>
								<?= $x_value ?>
							</p>
						</div>
						<div class="testimonial-founder d-flex align-items-center justify-content-center">
							<div class="founder-img">
								<img src="assets/img/icon/<?= $x ?>.png" alt="">
							</div>
							<div class="founder-text">
								<span><?= $x; ?></span>
								
							</div>
						</div>
					</div>

					<?php 
						}
					?>

					
				</div>
			</div>
		</div>
	</div>
</div>