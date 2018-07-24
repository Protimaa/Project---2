<?php
include 'inc/header.php';
include 'db.php';
	$cashier_id  = $_GET['cashier_id'];
	echo $cashier_id;
	$m  = mysql_query("SELECT * FROM cashierinfo WHERE cashier_id = '$cashier_id'");
	$check = mysql_fetch_array($m);
	
	if(isset($_POST['submit-btn'])){
			
			$cashier_name = $_POST['cashier_name'];
			$mobile_number = $_POST['mobile_number'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			$edit2 = mysql_query("UPDATE cashierinfo SET cashier_name='$cashier_name',mobile_number='$mobile_number',address='$address',email='$email',password='$password' WHERE cashier_id ='$cashier_id'");
			
			if(!$edit2){
				echo mysql_error(); 
			}
			else{
				header('location:viewAllCashier.php');
			}
			}


	
	


?>


<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Update Cashier Details</h2>
				</div>
				<div class="panel-body">
				<div style="max-width:600px; margin:0 auto;">
				<form action="" method="POST">
					
					<div class="form-group">
						<label for="cashier_name">Cashier Name</label>
						<input type="text" id="cashier_name" name = "cashier_name" value = "<?php echo $check['cashier_name'];?>"  class="form-control" />						
					</div>
					<div class="form-group">
						<label for="mobile_number">Mobile Number</label>
						<input type="text" id="mobile_number" name = "mobile_number" value = "<?php echo $check['mobile_number'];?>" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" id="address" name = "address" value = "<?php echo $check['address'];?>" class="form-control"  />						
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="text" id="email" name = "email" value = "<?php echo $check['email'];?>" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name = "password" value = "<?php echo $check['password'];?>" class="form-control" />						
					</div><br />
					<button type="submit" name="submit-btn" class="btn btn-success">Submit</button>
				</form>
				
				</div>
				</div>
		</div>
		















<?php
		include 'inc/footer.php';
		?>