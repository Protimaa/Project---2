<?php
include 'inc/header.php';
include 'db.php';
if(isset($_POST['submit-btn'])){
			
			$product_name = $_POST['product_name'];
			$quantity = $_POST['quantity'];
			$amount = $_POST['amount'];
			$description = $_POST['description'];
			
			$insert = mysql_query("INSERT INTO `productinfo`(`product_name`, `quantity`, `amount`, `description`) VALUES ('$product_name','$quantity','$amount','$description')");
			
			
			
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
					<h2>Add New Product Details</h2>
				</div>
				<div class="panel-body">
				<div style="max-width:600px; margin:0 auto;">
				<form action="" method="POST">
					
					<div class="form-group">
						<label for="product_name">Product Name</label>
						<input type="text" id="product_name" name = "product_name" class="form-control" required="" />						
					</div>
					<div class="form-group">
						<label for="quantity">Quantity</label>
						<input type="text" id="quantity" name = "quantity" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="amount">Amount</label>
						<input type="text" id="amount" name = "amount" class="form-control" required="" />						
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<input type="text" id="description" name = "description" class="form-control" />						
					</div>		<br />			
					<button type="submit" name="submit-btn" class="btn btn-success">Submit</button>
				</form>
				
				</div>
				</div>
		</div>
		
		
		<?php
		include 'inc/footer.php';
		?>
		
		
		