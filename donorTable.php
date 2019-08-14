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
								<th><CENTER><i class="fas fa-eye view-details" data-toggle="modal" data-target="#modal" style="cursor: pointer;transition: 0.5s;"></i></CENTER></th>

								
								
								<td><a href="editdonar.php?id=<?php echo $data['donarid'];?>"><i class="fas fa-edit"></i></a> / <a href="dashboard.php?id=<?php echo $data['donarid'];?>&pg=<?php echo $page; ?>" style="color:#EB0206;"><i class="fas fa-trash-alt"></i></a></td>

								<!-- Modal -->

								<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
									<div class="modal-dialog modal-dialog-scrollable" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="modal">Donar Details</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="donor-profile">
													<div class="donor-img">
														<img style="align=middle;" src="donorimg/<?php echo $data['image']; ?>" >
													</div>
													<center>
														<div class="donor-details" style="color:white;">
															<p><strong>Name :</strong>&nbsp;<?php echo $data['name']; ?></p>
															<p><strong>Email :</strong>&nbsp;<?php echo $data['email']; ?></p>
															<p><strong>Blood Group :</strong>&nbsp;<?php echo $data['bloodgroup']; ?></p>
															<p><?php echo $data['availability']; ?>&nbsp;&nbsp;<i class="far fa-check-square" style="color:white;background-color: green;"></i></p>
															<p><strong>Contact :</strong>&nbsp;<?php echo $data['contact']; ?></p>
															<p><strong>Landline :</strong>&nbsp; <?php echo $data['landlinecontact']; ?></p>
															<p><strong>City :</strong>&nbsp;<?php echo $data['city']; ?></p>
															<p><strong>Address :</strong>&nbsp;<?php echo $data['address']; ?></p>
														</div>
													</center>

												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>

								

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
	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').trigger('focus')
	});
</script>
<?php
include('footer.php');
?>