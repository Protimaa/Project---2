<?php
include 'inc/header.php';
include 'db.php';
?>
		
		<div class="panel panel-default">
				<div class="panel-heading">
					<h2>New Product List  </h2>
				</div>
				<div class="panel-body" >
				<table class="table table-striped" border="2"> 
					 <tr> 
						<th width="20%">Product ID</th>
						<th width="20%">Product Name</th>
						<th width="20%">Quantity</th>
						<th width="20%">Amount</th>
						<th width="20%">Description</th>
					 </tr>
	 <?php
		$record2 = mysql_query("SELECT * FROM `productinfo` ");
		while($data = mysql_fetch_array($record2)){
	
	?>
					 <tr> 
					 <td><?php echo $data['product_id']; ?></td>
					 <td><?php echo $data['product_name']; ?></td>
					 <td><?php echo $data['quantity']; ?></td>
					 <td><?php echo $data['amount']; ?></td>
					 <td><?php echo $data['description']; ?></td>
					
					 </tr>
				<?php
			}
			?>
			</table>
		<?php
		include 'inc/footer.php';
		?>