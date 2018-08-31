<?php 
	
	session_start();
	include_once("../config/helper.php");
	include_once("../config/koneksi.php");	

	 $email= $_POST['email'];
	 $pw= md5($_POST['password']);

	 $queryAdmin= mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email' AND password='$pw'");
	 $row= mysqli_fetch_assoc($queryAdmin);

	 if (mysqli_num_rows($queryAdmin) == 0) {
	 	
	 	 header("location:".URL."dashboard/login.php?notif=noadmin");

	 }else{

	 	$_SESSION['admin_id']= $row['admin_id'];
	 	$_SESSION['nama']= $row['nama'];
	 	header("location:".URL."dashboard/dashboard.php?menu=barang&action=list");
	 }
?>