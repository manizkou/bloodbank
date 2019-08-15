<?php
require_once('classes/application_top.php');
$plist=$obj->getDonorFilter();
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$bloodgroup=$_POST['bloodgroup'];
	$contact=$_POST['contact'];
	$landlinecontact=$_POST['landlinecontact'];
	$city=$_POST['city'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$availability=$_POST['availability'];
	
	//Image
	$i_name=$_FILES['image']['name'];
	$i_size=$_FILES['image']['size'];
	$i_type=$_FILES['image']['type'];
	$i_tmp=$_FILES['image']['tmp_name'];

// Data
	
	$fupload=$obj->UploadFile($i_name,$i_size,$i_type,$i_tmp,'donorimg');
	if($fupload==1){
		$register=$obj->DonorRegister($name,$bloodgroup,$contact,$landlinecontact,$city,$address,$email,$availability,$i_name);
	}else{
		echo $fupload;
	}
}
?>



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
				<form action="donorregister.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="fullName">Full name*</label>
						<input type="text" class="form-control" id="fullName" aria-describedby="fullName" name="name" placeholder="Enter full name">
					</div>

						<div class="form-group">
							<label for="bloodGroup">Blood Group*</label>
							<select class="form-control" id="bloodGroup" name="bloodgroup">
								<option selected="selected" disabled="disabled">-------------- Select Blood Group --------------</option>
								<?php 
								while($data=$plist->fetch_assoc()){ ?>
									<option value="<?php echo $data['bloodgroupname']; ?>"><?php echo $data['bloodgroupname']; ?></option>
									<?php
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<label for="mobileNumber">Mobile Number*</label>
							<input class="form-control" type="text" name="contact" for="mobileNumber">
						</div>

						<div class="form-group">
							<label for="landLineNumber">Landline Number</label>
							<input class="form-control" type="text" name="landlinecontact" id="landLineNumber">
						</div>

						<div class="form-group">
							<label for="city">City</label>
							<input class="form-control" type="text" name="city" id="city">
						</div>
						<div class="form-group">
							<label for="address">Address</label>
							<textarea class="form-control" id="address" rows="4" name="address"></textarea>
						</div>
						<div class="form-group">
							<label for="donorEmail">Email</label>
							<input type="email"  id="donorEmail" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="availability"> Please confirm your availability to donate blood </label>
							<select id="availability" class="form-control" name="availability">
								<option> Available </option>
								<option> Not Available </option>
							</select>
						</div>
						<div class="form-group">
							<label for="profilePicture">Upload Profile Picture(Max 8 Mb)</label>
							<input type="file" name="image" id="profilePicture">
						</div>

						<button type="submit" class="btn btn-danger" name="submit">Submit</button>
					</form>
				</div>

			</div>
		</div>


	</div>

	<?php 
	include('footer.php');
	?>