<?php
include('classes/application_top.php');
if(isset($_POST['submit'])){
	$u=$_POST['name'];
	$p=$_POST['password'];
	$logTest=$obj->loginChk($u,$p);
	if($logTest==1){
		$_SESSION['admin']=$u;
		header("Location:dashboard.php");
	}else{
		$err="<strong style='color:red'>User / Password Wrong !!</strong>";
	}

}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>
		Blood Bank Butwal
	</title>

	<!-- online links -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

	<link rel="stylesheet" type="text/css" href="css/index.css">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">

	<!-- offline links -->

	<link rel="stylesheet" type="text/css" href="css/bcss/bootstrap.min.css">

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="bjs/bootstrap.min.js"></script>


	<!-- for data table -->
	<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>

	<script type="text/javascript" src="datatables/datatables.min.js"></script>

</head>

<body>
<div class="container">
	
	<div class="row">
		<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 ">
			<div class="donorForm">
				<div class="submit-form text-center">
					<h4>Admin Login</h4>
					<p>
						Please fill the following information.
					</p>
					<hr>
				</div>
				<form action="adminlogin.php" method="POST" >
					<div class="form-group">
						<label for="adminEmail">Email Address</label>
						<input type="text" name="name" class="form-control" id="email" aria-describedby="fullName" placeholder="Enter Username" required>
					</div>
					<div class="form-group">
						<label for="adminPassword">Password</label>							
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
					</div>					

					<button type="submit" class="btn btn-primary" name="submit">Login</button>
					<button class="btn btn-danger" name="reset">Forgot Password</button>
					<div class="form-group">
						<label><?php if(!empty($err)){ echo $err; }; ?></label>
					</div>
				</form>
			</div>

		</div>
	</div>

	
</div>


<footer>
	<div class="footer">
		<p>&copy; Copyright 2019 <span>Blood Bank Butwal</span></p>
	</div>
</footer>

</body>
</html>