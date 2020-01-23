
<section class="book-info-area section-gap">
	<div class="container">
		<br><br>
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 text-center heading-section ftco-animate">
        	<span class="subheading">Specialties</span>
          <h2 class="mb-4">Our Menu</h2>
        </div>
      </div>
		<div class="row align-items-center">
			<div class="col-lg-12 banner-right">
				<table id="menu" class="table table-stripped text-center mt-3" style="width:100%">
					<thead>
					    <tr>
              <th>No</th>
							<th>Menu</th>
							<th>Description</th>
							<th>Price</th>
							<th>Picture</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($tb_menu as $t){
								echo "
                  <tr>
                  <td>$t->key_menu</td>
									<td>$t->name_menu</td>
									<td>$t->desc_menu</td>
									<td>$t->price_menu</td>
									<td>$t->img_menu</td>
								</tr>
								";
							}
						?>
					</tbody>
				</table>
			</div>
        </div>
	</div>	
</section>

<!-- <div class="row">
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Breakfast</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo base_url("assets/"); ?>images/breakfast-1.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3></h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">Rp17K</span>
	                </div>
	              </div>
	              <p><span>Jamur</span>, <span>Sosis</span>, <span>Tortilla</span>, <span>Paprika</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo base_url("assets/"); ?>images/breakfast-2.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Bubur Ayam</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">Rp15K</span>
	                </div>
	              </div>
	              <p><span>Beras</span>, <span>Ayam</span>, <span>Kaldu Ayam</span>, <span>Kerupuk</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?php echo base_url("assets/"); ?>images/breakfast-3.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Lontong Sayur</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">Rp13K</span>
	                </div>
	              </div>
	              <p><span>Lontong</span>, <span>Udang</span>, <span>Labu</span>, <span>Susu</span></p>
              </div>
            </div>
        	</div> -->