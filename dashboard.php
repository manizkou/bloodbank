<?php
ob_start();
include('classes/application_top.php');
if(empty($_SESSION['admin'])){
	header("Location:adminlogin.php");
}
if(!empty($_REQUEST['pg'])){
	$page=$_REQUEST['pg'];

}

?>


	<?php
	include('header.php');
	?>

	<body>
		<div class="well well-lg">
			<?php if(!empty($page)){
				include($page);
			}else{ ?>
				<center><h2>Welcome <small> To Butwal Blood Bank</small></h2>
				<img src="img/bg.jpg"></center>
			</div>

			<?php
		}
		?>
		<?php
		include('footer.php');
		?>
		<?php
		ob_end_flush();
		?>