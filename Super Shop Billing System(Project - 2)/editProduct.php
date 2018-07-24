<?php
include 'inc/header.php';
include 'db.php';
	$product_id  = $_GET['product_id'];
	echo $product_id;
	$m  = mysql_query("SELECT * FROM productinfo WHERE product_id = '$product_id'");
	$check = mysql_fetch_array($m);
	
	if(isset($_POST['submit-btn'])){
			
			$product_name = $_POST['product_name'];
			$quantity = $_POST['quantity'];
			$amount = $_POST['amount'];
			$description = $_POST['description'];
			
			$edit = mysql_query("UPDATE productinfo SET product_name='$product_name',quantity='$quantity',amount='$amount', description='$description' WHERE product_id = '$product_id'");
			
			if(!$edit){
				echo mysql_error(); 
			}
			else{
				header('location:viewProduct.php');
			}
			}


	
	


?>


<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Update Product Details</h2>
				</div>
				<div class="panel-body">
				<div style="max-width:600px; margin:0 auto;">
				<form action="" method="POST">
					
					<div class="form-group">
						<label for="product_name">Product Name</label>
						<input type="text" id="product_name" name = "product_name" value = "<?php echo $check['product_name'];?>" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="quantity">Mobile Number</label>
						<input type="text" id="quantity" name = "quantity" value = "<?php echo $check['quantity'];?>" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="amount">Address</label>
						<input type="text" id="amount" name = "amount" value = "<?php echo $check['amount'];?>" class="form-control"  />						
					</div>
					<div class="form-group">
						<label for="description">E-mail</label>
						<input type="text" id="description" name = "description" value = "<?php echo $check['description'];?>" class="form-control" />						
					</div>
					<br />
					<button type="submit" name="submit-btn" class="btn btn-success">Submit</button>
				</form>
				
				</div>
				</div>
		</div>
		















<?php
		include 'inc/footer.php';
		?>