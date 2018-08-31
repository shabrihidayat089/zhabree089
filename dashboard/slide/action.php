<?php 
		
		include_once("../../config/helper.php");
		include_once("../../config/koneksi.php");

		$slide_id= $_GET['slide_id'];

		$nama_slide= $_POST['nama_slide'];
		$slide= $_POST['slide'];
		$status= $_POST['status'];

		$gambar= $_FILES['gambar']['name'];
		move_uploaded_file($_FILES['gambar']['tmp_name'], "../../img/slide/".$gambar);

		if (!empty($gambar)) {
			
			$gambarUpdate= "gambar_slide='$gambar',";
		}

		$button= isset($_POST['button']) ? $_POST['button'] : $_GET['button'];

		if ($button == "Submit") {
			
			mysqli_query($koneksi, "INSERT INTO slide(nama_slide,slide,gambar_slide,status)
				                                VALUES('$nama_slide','$slide','$gambar','$status')");

			header("location:".URL."dashboard/dashboard.php?menu=slide&action=list");

		}elseif ($button == "delete") {
			
			mysqli_query($koneksi, "DELETE FROM slide WHERE slide_id='$slide_id'");

			header("location:".URL."dashboard/dashboard.php?menu=slide&action=list");

		}elseif ($button == "update") {
			
			mysqli_query($koneksi, "UPDATE slide SET nama_slide='$nama_slide',
				                                     slide= '$slide',
				                                     $gambarUpdate
				                                     status= '$status' WHERE slide_id='$slide_id'");

			header("location:".URL."dashboard/dashboard.php?menu=slide&action=list");

		}
?>