<?php 
if(isset($_POST['btn'])){
	require_once 'login_m.php';
	$login_m = new login_m();
	$login_m->login($_POST);
}

?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Super Shop Billing System</title>
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css" media="all" />
	<script type="text/javascript" src="inc/jquery.min.js" ></script>
	<script type="text/javascript" src="inc/bootstrap.min.js" ></script>
</head>

<body>
	<div class="container"> 
		<nav class="navbar navbar-default">
			<div class="container-fluid"> 
				<div class="navbar-header">
					<!-- <h1><a class="navbar-brand" href="index.php"><strong>Super Shop Billing System Using PHP </strong>
					</a></h1> -->
					<div class="page-header ">
  <h1><a  href="index.php"><strong><img src ="pic.png"; height="80px" width="80px" >Super  Shop  Billing  System   </strong></a></h1>
</div>
				</div>
				
			</div>	
		</nav>

<!-- -->
		
		<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Login Form</h2>
				</div>
				<div class="panel-body">
				<div style="max-width:600px; margin:0 auto;">
				<form action="login_m.php" method="POST">
					
						<div class="form-group">
						<label for="email">Email</label>
						<input type="email" id="email" name = "email" class="form-control" required="" />						
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name = "password" class="form-control" />						
					</div>
					<br />		
					<input type="submit" name="submit-btn"  class="btn btn-success" value="Login">
					
					<button type="submit" name="submit-btn" class="btn btn-info"><a href="register.php">Rigester here </a></button>
					<br />	
				</form>
				
				</div>
				</div>
		</div>
		
		
		<?php
		include 'inc/footer.php';
		?>
		
		
		