<?php 
		
		session_start();
		include_once("../config/helper.php");


		unset($_SESSION['admin_id']);
		unset($_SESSION['nama']);

		header("location:".URL."dashboard");
?>