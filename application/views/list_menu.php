<section class="ftco-section">
    <div class="container-fluid px-4">
    	<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">Specialties</span>
				<h2 class="mb-4">Our Menu</h2>
			</div>
        </div>
		<div class="row">
			<?php 
				$arrKat = array(
					array("Breakfast", array(1,2,3)),
					array("Lunch", array(4,5,6)),
					array("Dinner", array(7,8,9)),
					array("Dessert", array(10,11,12)),
					array("Coffee", array(13,14,15)),
					array("Drinks", array(16,17,18))
				);
				
				foreach ($arrKat as $kat){ ?>
					<div class="col-md-6 col-lg-4 menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3><?php echo $kat[0]; ?></h3>
						</div>
						<?php 
						foreach ($tb_menu as $t){
								if (in_array($t->key_menu, $kat[1])) { ?>
									<div class="menus d-flex ftco-animate">
									  <div class="menu-img img" style="background-image: url(<?php echo base_url('assets/'.$t->img_menu); ?>);"></div>
									  <div class="text">
										<div class="d-flex">
											<div class="one-half">
											  <h3><?php echo $t->name_menu; ?></h3>
											</div>
											<div class="one-forth">
											  <span class="price"><?php echo $t->price_menu; ?></span>
											</div>
										  </div>
										  <p><?php echo $t->desc_menu; ?></p>
									  </div>
									</div>
								
								<?php } ?>
							<?php }
						?>
					</div>
				<?php } ?>
				
		</div>
	</div>
</section>