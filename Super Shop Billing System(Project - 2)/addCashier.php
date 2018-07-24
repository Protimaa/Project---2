	<?php
	include 'inc/header.php';
	include 'db.php';
			
			if(isset($_POST['submit-btn'])){
			
			$cashier_name = $_POST['cashier_name'];
			$mobile_number = $_POST['mobile_number'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			$insert = mysql_query("INSERT INTO `cashierinfo`( `cashier_name`, `mobile_number`, `address`, `email`, `password`) VALUES ('$cashier_name','$mobile_number','$address','$email','$password')");
			
			if(!$insert){
				echo mysql_error(); 
			}
			else{
				echo "inserted ";
			}
			}
	?>
		<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Add New Cashier Details</h2>
				</div>
				<div class="panel-body">
				<div style="max-width:600px; margin:0 auto;">
				<form action="" method="POST">
					
					<div class="form-group">
						<label for="cashier_name">Cashier Name</label>
						<input type="text" id="cashier_name" name = "cashier_name" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="mobile_number">Mobile Number</label>
						<input type="text" id="mobile_number" name = "mobile_number" class="form-control" required="" />						
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" id="address" name = "address" class="form-control"  />						
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" id="email" name = "email" class="form-control " placeholder="Enter email" /> 
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name = "password" class="form-control" required="" />						
					</div><br />
					<button type="submit" name="submit-btn" class="btn btn-success">Submit</button>
				</form>
				
				</div>
				</div>
		</div>
		
		
		<?php
		include 'inc/footer.php';
		?>
		
	