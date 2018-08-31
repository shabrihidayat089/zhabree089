<?php 
		
		include_once("../../config/helper.php");
		include_once("../../config/koneksi.php");

		$kategori_id= $_GET['kategori_id'];

		$kategori= $_POST['kategori'];
		$status= $_POST['status'];
		$button= isset($_POST['button']) ? $_POST['button'] : $_GET['button'];

		if ($button == "Submit") {
			
			mysqli_query($koneksi,"INSERT INTO kategori(kategori,status)
				                          VALUES('$kategori','$status')");

			header("location:".URL."dashboard/dashboard.php?menu=kategori&action=list");

		}elseif ($button == "delete") {
			
			mysqli_query($koneksi, "DELETE FROM kategori WHERE kategori_id='$kategori_id'");

			header("location:".URL."dashboard/dashboard.php?menu=kategori&action=list");

		}elseif ($button == "update") {
			
			mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori',
				                                        status='$status' WHERE kategori_id='$kategori_id'");

			header("location:".URL."dashboard/dashboard.php?menu=kategori&action=list");

		}
?>