<?php
include('classes/application_top.php');
$a=$_SESSION['admin'];
$plist=$obj->getDonar();
$plist1=$obj->getDonorFilter();
$flist=$obj->DonorResult('');
if(isset($_POST['submit'])){
	$f=$_POST['bloodgroup'];
	$plist=$obj->DonorResult($f);
	}
	else{
		$plist=$obj->DonorResult('');
		}
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
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-inline">
				<div class="form-group">
					
					<!-- <label for="bloodGroup"> Blood Group</label> -->
					<select class="form-control" id="bloodGroup" name="bloodgroup">
						<option selected="selected" disabled="disabled">
							-------------- Select Blood Group --------------
						</option>
						<?php 
						while($data=$plist1->fetch_assoc()){ ?>
							<option value="<?php echo $data['bloodgroupname']; ?>"><?php echo $data['bloodgroupname']; ?></option>
							<?php
						}
						?>								
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
			<div class="col-sm-6 col-md-3">
				<div class="card">
					<img class="card-img-top" src="donorimg/<?php echo $data['image']; ?>" alt="" width="360px" height="200px">
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