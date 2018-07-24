<?php
include 'inc/header.php';
include 'db.php';
?>

<div class="panel panel-default">
				<div class="panel-heading">
					<h2>All Cashier Details  </h2>
				</div>
				<div class="panel-body">
<table class="table table-striped" border="2">
	<tr>
		<th>Cashier ID</th>
		<th>Cashier Name</th>
		<th>Address</th>
		<th>E-mail</th>
		<th>Password</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>

<?php
$record = mysql_query("SELECT * FROM `cashierinfo` ");
while($data = mysql_fetch_array($record)){
	
	?>
	<tr> 
	<td><?php echo $data['cashier_id']; ?></td>
	<td><?php echo $data['cashier_name']; ?></td>
	<td><?php echo $data['address']; ?></td>
	<td><?php echo $data['email']; ?></td>
	<td><?php echo $data['password']; ?></td>
	<td><a class="btn btn-primary" href="editCashier.php?cashier_id=<?php echo $data['cashier_id'];?>">Edit</a></td>
	<td><a class="btn btn-danger" href="deleteCashier.php?cashier_id=<?php echo $data['cashier_id'];?>">Delete</a></td>
	</tr>
	<?php
}
?>
</table>
<?php
		include 'inc/footer.php';
		?>