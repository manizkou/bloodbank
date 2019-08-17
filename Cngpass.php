<?php
require_once('classes/application_top.php');
if(isset($_POST['submit'])){
	$cp=md5($_POST['cp']);
	$np=$_POST['np'];
	$rnp=$_POST['rnp'];
	$u=$_SESSION['admin'];
	$chk=$obj->loginChk($u,$cp);
	if($chk==1){
		if($np==$rnp){
			
			$chng=$obj->cngPassword($u,md5($np));
		}
		else{
			$err="New Password Not Match !!";
		}
	}
	else{
		$err="Current Password wrong !!";
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
					<h4>Change Password</h4>
					<hr>
				</div>
				<form action="CngPass.php" method="POST">
					<div class="form-group">
						<strong style="color:#DD080C"><?php if(!empty($err)){ echo $err."<br>"; }?></strong>
						<strong style="color: #099C27;"><?php if(!empty($_REQUEST['smg'])){ echo $_REQUEST['smg']."<br>"; }?></strong>
						<label for="cp">Current Password*</label>
						<input type="Password" name="cp" placeholder="Type your Current Password" required class="form-control"  id="cp" >
					</div>
					<div class="form-group">
						<label for="np">New Password *</label>
						<input type="Password" name="np" placeholder="Type your New Password" required class="form-control"  id="np" >
					</div>
					<div class="form-group">
						<label for="rnp">Re-Type New Password*</label>
						<input type="Password" name="rnp" placeholder="Type your New Password" required class="form-control"  id="rnp" >
					</div>


					<button type="submit" class="btn btn-danger" name="submit">Change</button>
				</form>
			</div>

		</div>
	</div>


</div>
