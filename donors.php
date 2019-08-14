<?php
include('classes/application_top.php');
$a=$_SESSION['admin'];
$plist=$obj->getDonar();
if(!empty($_REQUEST['donorid'])){
	$id=$_REQUEST['donorid'];
	
	$pg=$_REQUEST['pg'];
	$del=$obj->del($id,$pg,DONORREGISTER,'','');
	
}
?>



<?php
include 'header.php';
?>

<div class="container">
	<div class="row donor-cards">

		<div class="col-sm-12">
			<h2 class="text-center "><u> Donors </u></h2>	
		</div>

		<div class="col-sm-12">
			<h1>Donor Filter:</h1>
			<form action="#" method="" class="form-inline">
				<div class="form-group">
					<!-- <label for="bloodGroup"> Blood Group</label> -->
					<select class="form-control" id="bloodGroup" name="bloodgroup">
						<option selected="selected" disabled="disabled">
							-----Select Blood Group -----
						</option>
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
				<br>
				<button type="submit" class="btn btn-danger mx-2"> Search Donor</button>
			</form>
		</div>

		<?php
			$i=1;
			while($data=$plist->fetch_assoc()){
		?>
		<div class="col-sm-6 col-md-4">
			<div class="card">
				<img class="card-img-top" src="img/blooddonation.jpg" alt="">
				<div class="card-body">
					<p><i class="fas fa-user-alt"></i> &nbsp; <?php echo $data['name']; ?> </p>
					<p><i class="fas fa-tint red"></i> &nbsp; <?php echo $data['bloodgroup']; ?> </p>
					<p><i class="fas fa-user-circle"></i> &nbsp; <?php echo $data['availability']; ?> </p>
					<p><i class="fas fa-location-arrow"> &nbsp; </i> <?php echo $data['address']; ?> </p>
					<p><i class="fas fa-mobile-alt"></i> &nbsp; <?php echo $data['contact']; ?> </p>
				</div>
			</div>
		</div>	
		<?php
			}
		?>

	</div>
</div>
<?php
	include 'footer.php';
?>