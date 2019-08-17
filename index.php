<?php
		include('header.php');
	?>

<!-- 	<section>
		
	</section> -->
	

	<?php
		include('footer.php');
	?>
<?php
if(!empty($_SESSION['admin'])){
	
//	header("location:dashboard.php");
	}else{
			header("location:adminlogin.php");
		}
?>

