<?php
		include('header.php');
	?>

	<div class="container">
	
		<div class="row">
			<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 ">
				<div class="donorForm">
					<div class="submit-form text-center">
						<h4>Blood Donors Register</h4>
						<p>
							Please fill the following information to register donor.
						</p>
						<hr>
					</div>
					<form action="/" method="POST" >
						<div class="form-group">
							<label for="adminEmail">Email Address</label>
							<input type="email" name="adminEmail" class="form-control" id="adminEmail" aria-describedby="fullName" placeholder="">
						</div>
						<div class="form-group">
							<label for="adminPassword">Password</label>							
							<input type="password" name="adminPassword" id="adminPassword" class="form-control">
						</div>					
						
						<button type="submit" class="btn btn-danger">Login</button>
					</form>
				</div>
				
			</div>
		</div>
		
	
</div>
	

	<?php
		include('footer.php');
	?>