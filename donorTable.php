<?php
include('classes/application_top.php');
$a=$_SESSION['admin'];
$plist=$obj->getDonar();
if(!empty($_REQUEST['donarid'])){
	$id=$_REQUEST['donarid'];
	
	$pg=$_REQUEST['pg'];
	$del=$obj->del($id,$pg,DONARREGISTER,'','');
	
}
?>

<?php
include('header.php');
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="donorTable  my-5" >
				<h1 class="text-center pb-3" style="text-decoration: underline;"><b>DONOR TABLE</b></h1>
				<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th>S.N.</th>
							<th>Name</th>
							<th>Blood Group</th>
							<th>Mobile No.</th>
							<th>Landline Contact</th>
							<th>City</th>
							<th>Address</th>
							<th>Email</th>
							<th>Availability</th>
							<th>View Details</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i=1;
						while($data=$plist->fetch_assoc()){
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $data['name']; ?></td>
								<td><?php echo $data['bloodgroup']; ?></td>
								<td><?php echo $data['contact']; ?></td>
								<td><?php echo $data['landlinecontact']; ?></td>
								<td><?php echo $data['city']; ?></td>
								<td><?php echo $data['address']; ?></td>
								<td><?php echo $data['email']; ?></td>
								<td><?php echo $data['availability']; ?></td>
								<th><a href="#" style="text-decoration: none !important;"><CENTER><i class="fas fa-eye"></i></CENTER></th>
			
								<td><a href="editdonar.php?id=<?php echo $data['donarid'];?>"><i class="fas fa-edit"></i></a> / <a href="dashboard.php?id=<?php echo $data['donarid'];?>&pg=<?php echo $page; ?>" style="color:#EB0206;"><i class="fas fa-trash-alt"></i></a></td>


							</tr>


							<?php
							$i++;
						}
						?>
					</tbody>
					
				</table>	
			</div>
			
		</div>
	</div>
	
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
<?php
include('footer.php');
?>