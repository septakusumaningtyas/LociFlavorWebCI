
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url("assets/"); ?>images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	
	<?php if(isset($_SESSION['contact_insert_id'])){ ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Thank you.</strong> Your message has been sent.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
		  </button>
		</div>
	<?php } ?>
	<?php if(isset($_SESSION['testimony_insert_id'])){ ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
		  <strong>Thank you.</strong> Your testimony has been sent.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
		  </button>
		</div>
	<?php } ?>
	<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4 font-weight-bold">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Address:</span> Jl Sudimoro No 24 Lowokwaru, Malang</p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Phone:</span> <a href="tel://1234567920">+ 62 81234567891</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">loci_flavor@gmail.com</a></p>
            </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="dbox">
	            <p><span>Website</span> <a href="#">lociflavor.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-5 order-md-last">
						<h2 class="h4 mb-5 font-weight-bold">Contact Us</h2>
						<form action="<?php echo base_url(). 'Contact/input_simpan'; ?>" method="post">
						  <div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name" name="name_email" id="name_email">
						  </div>
						  <div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email" name="email_email" id="email_email">
						  </div>
						  <div class="form-group">
							<input type="text" class="form-control" placeholder="Subject" name="subject_email" id="subject_email">
						  </div>
						  <div class="form-group">
							<textarea cols="30" rows="7" class="form-control" placeholder="Message" name="msg_email" id="msg_email"></textarea>
						  </div>
						  <div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
						  </div>
						</form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</section>

		<!-- Form Testimony -->
		<br><br>
		<section class="ftco-section testimony-section img" style="background-image: url(<?php echo base_url("assets/"); ?>images/bg_5.jpg);">
		<div class="overlay"></div>
			<div class="container-fluid px-0">
				<div class="row d-flex no-gutters">
					<div class="col-md-3 d-flex align-items-stretch pb-5 pb-md-0">
					</div>
          <div class="col-md-6 ftco-animate makereservation p-4 p-md-5 pt-5 pt-md-0">
          	<div class="heading-section ftco-animate mb-5">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-2"></div>
									<div class="col-md-8">
										<h2 class="ml-4">Testimony</h2>
									</div>
									<div class="col-md-2"></div>
								</div>
              </div>
	          </div>
            <form action="<?php echo base_url(). 'Contact/input_testimony'; ?> " method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name_test" id="name_test" placeholder="Your Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Position</label>
                    <input type="text" class="form-control" name="position_test" id="position_test" placeholder="Your Position">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Testimony</label>
                    <input type="text" class="form-control" name="msg_test" id="msg_test" placeholder="Your Testimony">
                  </div>
                </div>
                <div class="col-md-12">
									<div class="row">
										<div class="col-md-4"></div>
										<div class="col-md-4">
											<div class="form-group">
												<input type="submit" value="Send" class="btn btn-primary py-3 px-5">
											</div>
										</div>
										<div class="col-md-4"></div>
									</div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-3 d-flex align-items-stretch pb-5 pb-md-0">
					</div>
        </div>
			</div>
		</section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-md">
						<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url("assets/"); ?>images/insta-1.jpg);">
							<span class="ion-logo-instagram"></span>
						</a>
					</div>
					<div class="col-md">
						<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url("assets/"); ?>images/insta-2.jpg);">
							<span class="ion-logo-instagram"></span>
						</a>
					</div>
					<div class="col-md">
						<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url("assets/"); ?>images/insta-3.jpg);">
							<span class="ion-logo-instagram"></span>
						</a>
					</div>
					<div class="col-md">
						<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url("assets/"); ?>images/insta-4.jpg);">
							<span class="ion-logo-instagram"></span>
						</a>
					</div>
					<div class="col-md">
						<a href="#" class="instagram img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url("assets/"); ?>images/insta-5.jpg);">
							<span class="ion-logo-instagram"></span>
						</a>
					</div>
				</div>
			</div>
		</section>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  </body>
