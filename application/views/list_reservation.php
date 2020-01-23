
<section class="book-info-area section-gap">
	<div class="container">
		<br><br>
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-7 text-center heading-section ftco-animate">
        	<span class="subheading">List</span>
          <h2 class="mb-4">Reservation List</h2>
        </div>
      </div>
		<div class="row align-items-center">
			<div class="col-lg-12 banner-right">
				<table id="reservation" class="table table-stripped text-center mt-3" style="width:100%">
					<thead>
					    <tr>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Date</th>
							<th>Time</th>
							<th>Person</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($tb_reservation as $t){
								echo "
								<tr>
									<td>$t->name_reservation</td>
									<td>$t->email_reservation</td>
									<td>$t->phone_reservation</td>
									<td>$t->date_reservation</td>
									<td>$t->time_reservation</td>
									<td>$t->person_reservation</td>
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