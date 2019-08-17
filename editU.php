<?php
include('classes/application_top.php');
$a=$_SESSION['admin'];
$data=$obj->userData($a);
if(isset($_POST['submit'])){
	$fn=$_POST['fn'];
	$nu=$_POST['u'];
	$e=$_POST['e'];
	$cp=md5($_POST['cp']);
	$u=$_SESSION['admin'];
	$chk=$obj->loginChk($u,$cp);
	if($chk==1){
		$i=$data['id'];
		$data=$obj->cngProfile($fn,$nu,$e,$i);

	}else{
		$err="Enter Password is Wrong !!";
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
					<h4>Change Profile</h4>
					<hr>
				</div>
				<form action="editU.php" method="POST">
					<div class="form-group">
						<strong style="color:#DD080C"><?php if(!empty($err)){ echo $err."<br>"; }?></strong>
						<strong style="color: #099C27;"><?php if(!empty($_REQUEST['smg'])){ echo $_REQUEST['smg']."<br>"; }?></strong>
						<label for="fn">Full name*</label>
						<input type="text" class="form-control" id="fullName" aria-describedby="fullName" name="fn" placeholder="Enter full name" value="<?php echo $data['name']; ?>">
					</div>
					<div class="form-group">
						<label for="un">Username*</label>
						<input type="text" class="form-control" id="Username" aria-describedby="fullName" name="u" placeholder="Enter full name" id="un"  value="<?php echo $data['user']; ?>">
					</div>
					<div class="form-group">
						<label for="donorEmail">Email*</label>
						<input type="email" name="e" placeholder="Type your E-mail" required class="form-control"  id="email"  value="<?php echo $data['email']; ?>">
					</div>
					<div class="form-group">
						<label for="cp">Password*</label>
						<input type="Password" name="cp" placeholder="Type your Password" required class="form-control"  id="email" >
					</div>
				

					<button type="submit" class="btn btn-danger" name="submit">Update</button>
				</form>
			</div>

		</div>
	</div>


</div>
