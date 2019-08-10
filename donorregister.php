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
					<form action="/" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="fullName">Full name*</label>
							<input type="text" class="form-control" id="fullName" aria-describedby="fullName" placeholder="Enter full name">
						</div>

						<div class="form-group">
							<label for="bloodGroup">Blood Group*</label>
							<select class="form-control" id="bloodGroup">
								<option selected="selected" disabled="disabled">-----Select-----</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								<option value="A1+">A1+</option>
								<option value="A1-">A1-</option>
								<option value="A1B+">A1B+</option>
								<option value="A1B-">A1B-</option>
								<option value="A2+">A2+</option>
								<option value="A2-">A2-</option>
								<option value="A2B+">A2B+</option>
								<option value="A2B-">A2B-</option>									
							</select>
						</div>

						<div class="form-group">
							<label for="mobileNumber">Mobile Number*</label>
							<input class="form-control" type="text" name="mobileNumber" for="mobileNumber">
						</div>

						<div class="form-group">
							<label for="landLineNumber">Landline Number</label>
							<input class="form-control" type="text" name="landLineNumber" id="landLineNumber">
						</div>

						<div class="form-group">
							<label for="city">City</label>
							<input class="form-control" type="text" name="city" id="city">
						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<textarea class="form-control" id="address" rows="4"></textarea>
						</div>
						<div class="form-group">
							<label for="donorEmail">Email</label>
							<input type="email" name="donorEmail" id="donorEmail" class="form-control">
						</div>
						<div class="form-group">
							<label for="userName">Username</label>
							<input type="text" name="userName" class="form-control" id="userName">
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" class="form-control">
						</div>

						<div class="form-group">
							<label for="rePassword">Retype- Password</label>
							<input type="password" name="rePassword" class="form-control" id="rePassword">
						</div>

						<div class="form-group">
							<label for="availability"> Please confirm your availability to donate blood </label>
							<select id="availability" class="form-control" name="availability">
								<option> Available </option>
								<option> Not Available </option>
							</select>
						</div>
						<div class="form-group">
							<label for="profilePicture">Upload Profile Picture</label>
							<input type="file" name="donorImage" id="profilePicture">
						</div>
						
						<button type="submit" class="btn btn-danger">Submit</button>
					</form>
				</div>
				
			</div>
		</div>
		
	
</div>

<?php
	include('footer.php');
?>