<?php
include('classes/application_top.php');
$a=$_SESSION['admin'];
$plist=$obj->getDonar();
$plist1=$obj->getDonorFilter();
// $flist=$obj->DonorResult('');
if(isset($_POST['submit'])){
	$f=$_POST['bloodgroup'];
	// $plist=$obj->DonorResult($f);
}
elseif(!empty($_REQUEST['donorid'])){
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
					<div class="list-group">
						
						<div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
							<?php 
							while($data=$plist1->fetch_assoc()){ ?>
								<div class="list-group-item checkbox">
									<label><input type="checkbox" class="common_selector bloodgroup" value="<?php echo $data['bloodgroup']; ?>"><?php echo $data['bloodgroup']; ?></label>
								</div>
								<?php
							}

							?>
						</div>
					</div>
					
					
					<input type="hidden" name="hidden_country" id="hidden_country" />
					<div style="clear:both"></div>
				</div>
				<br>
				<!-- <button type="submit" class="btn btn-danger mx-2"> Search Donor</button> -->
			</form>
		</div>


		
		<div class="col-sm-6 col-md-3">

			

		</div>
	</div>
	<script>
		$(document).ready(function(){

			filter_data();

			function filter_data()
			{
				$('.filter_data').html('<div id="loading" style="" ></div>');
				var action = 'fetch';
				var bloodgroup = get_filter('bloodgroup');
				$.ajax({
					url:"fetch.php",
					method:"POST",
					data:{action:action,bloodgroup:bloodgroup},
					success:function(data){
						$('.filter_data').html(data);
					}
				});
			}

			function get_filter(class_name)
			{
				var filter = [];
				$('.'+class_name+':checked').each(function(){
					filter.push($(this).val());
				});
				return filter;
			}

			$('.common_selector').click(function(){
				filter_data();
			});


		});
	</script>

</body>

</html>

<?php
include 'footer.php';
?>
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style