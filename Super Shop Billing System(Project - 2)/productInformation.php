<?php
include 'inc/header.php';
?>
		
		<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Product Information</h2>
				</div>
				<div class="panel-body">
				<div style="max-width:600px; margin:0 auto;">
				<form action="" method="POST">
				<div class="form-group">
						<label for="">Product ID</label>
						<input type="text" placeholder="Search.." name="search" class="form-control" >	<br />
						 <button type="submit" name="search-btn" class="btn btn-light">Search</button>
					</div><hr /><hr />
					<div class="form-group">
						<label for="product_id">Product ID</label>
						<input type="text" id="product_id" name = "product_id" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="product_name">Product Name</label>
						<input type="text" id="product_name" name = "product_name" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="quantity">Quantity</label>
						<input type="text" id="quantity" name = "quantity" class="form-control" />						
					</div>
					<div class="form-group">
						<label for="amount">Amount</label>
						<input type="text" id="amount" name = "amount" class="form-control"  />						
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
		
		
		