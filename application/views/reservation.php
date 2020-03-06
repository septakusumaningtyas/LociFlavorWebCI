    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url("assets/"); ?>images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Reservation</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Reservation <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	
		<?php if(isset($_SESSION['reservation_insert_id'])){ ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Thank you.</strong> Your reservation has been sent.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php } ?>

		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row d-flex no-gutters">
          <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-5">
		          	<span class="subheading">Book a table</span>
		            <h2 class="mb-4">Make Reservation</h2>
		          </div>
							<?php echo form_open('Reservation/input_simpan');?>
	            <form action="" method="post">
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Name</label>
	                    <input type="text" class="form-control" name="book_name" id="book_name" placeholder="Your Name" >
											<?php echo form_error('book_name');  ?>
										</div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Email</label>
	                    <input type="text" class="form-control" name="book_email" id="book_email" placeholder="Your Email">
											<?php echo form_error('book_email');  ?>
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Phone</label>
	                    <input type="text" class="form-control" name="book_phone" id="book_phone" placeholder="Phone">
											<?php echo form_error('book_phone');  ?>
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Date</label>
	                    <input type="text" class="form-control" name="book_date" id="book_date" placeholder="Date">
											<?php echo form_error('book_date');  ?>
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Time</label>
	                    <input type="text" class="form-control" name="book_time" id="book_time" placeholder="Time">
											<?php echo form_error('book_time');  ?>
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Person</label>
	                    <input type="number" class="form-control" name="book_person" id="book_person" placeholder="Person">
											<?php echo form_error('book_person');  ?>
	                  </div>
	                </div>
	                <div class="col-md-12 mt-3">
	                  <div class="form-group">
	                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
	                  </div>
	                </div>
	              </div>
	            </form>
							<?php echo  form_close();?>
	          </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
						<div id="map"></div>
					</div>
        </div>
			</div>
		</section>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  </body>
  </html>