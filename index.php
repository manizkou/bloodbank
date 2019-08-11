<?php
if(!empty($_SESSION['admin'])){
	
//	header("location:dashboard.php");
	}else{
			header("location:adminlogin.php");
		}
?>