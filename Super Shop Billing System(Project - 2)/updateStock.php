<?php
include 'inc/header.php';
?>
		
		<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Update Stock</h2>
				</div>
				<div class="panel-body">
				<div style="max-width:600px; margin:0 auto;">
				<form action="" method="POST">
					<div class="form-group">
						<label for="product_id">Product ID</label>
						<input type="text" id="product_id" name = "product_id" placeholder="Search.." class="form-control" />	<br />
						<button type="submit" name="search-btn" class="btn btn-light">Search</button>
					</div>
					<div class="form-group">
						<label for="product_name">Product Name</label>
						<input type="text" id="product_name" name = "product_name" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="quantity_available">Quantity Available</label>
						<input type="text" id="quantity_available" name = "quantity_available" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="quantity_purchased">Quantity Purchased</label>
						<input type="text" id="quantity_purchased" name = "quantity_purchased" class="form-control"  /><br />
					<button type="submit" name="update-btn" class="btn btn-info">Update</button>
				</form>
				
				</div>
				</div>
		</div>
		
		
		<?php
		include 'inc/footer.php';
		?>
		
	