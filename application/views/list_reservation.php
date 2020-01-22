<section class="book-info-area section-gap">
	<div class="container">
        <h2 class="judul-book">This is the reservation list</h2>
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
							foreach ($tb_reservation as $tr){
								echo "
								<tr>
									<td>$tr->name_reservation</td>
									<td>$tr->email_reservation</td>
									<td>$tr->phone_reservaion</td>
									<td>$tr->date_reservation</td>
									<td>$tr->time_reservation</td>
									<td>$tr->person_reservation</td>
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