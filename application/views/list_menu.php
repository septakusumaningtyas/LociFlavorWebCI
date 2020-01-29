
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
									<td><img  src='".base_url('assets/'.$t->img_menu)."' height=200px width=200px></td>
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
