<?php
ob_start();
include('../classes/application_top.php');
if(empty($_SESSION['admin'])){
	header("Location:adminLogin.php");
	}
if(!empty($_REQUEST['pg'])){
	$page=$_REQUEST['pg'];
	
?>	


	<?php
		include('header.php');
	?>

	<section>
		
	</section>
	

	<?php
		include('footer.php');
	?>
<?php
	}
?>
<?php
ob_end_flush();
 ?>