<?php
include 'inc/header.php';
?>
		
		<div class="panel panel-default">
				<div class="panel-heading">
					<h2>View Cashier Details</h2>
				</div>
				<div class="panel-body">
				<div style="max-width:600px; margin:0 auto;">
				<form action="" method="POST">
				<div class="form-group"><hr />
						<label for="">Cashier ID</label>
						<select name="Place" class="form-control">
							  <option value="" >Select Cashier ID</option>
						</select>						
					</div>
					<hr /><hr />
					<div class="form-group">
						<label for="cashier_id">Cashier ID</label>
						<input type="text" id="cashier_id" name = "cashier_id" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="cashier_name">Cashier Name</label>
						<input type="text" id="cashier_name" name = "cashier_name" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="mobile_number">Mobile Number</label>
						<input type="text" id="mobile_number" name = "mobile_number" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" id="address" name = "address" class="form-control"  />						
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="text" id="email" name = "email" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="text" id="password" name = "password" class="form-control" />						
					</div>
				</form>
				
				</div>
				</div>
		</div>
		
		
		<?php
		include 'inc/footer.php';
		?>
		
	