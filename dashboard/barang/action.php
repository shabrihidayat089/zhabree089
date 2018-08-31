<?php 
		
		include_once("../../config/helper.php");
		include_once("../../config/koneksi.php");

		$barang_id= $_GET['barang_id'];

		$kategori_barang= $_POST['kategori_barang'];
		$nama_barang= $_POST['nama_barang'];
		$spesifikasi= $_POST['spesifikasi'];
		$harga_barang= $_POST['harga_barang'];
		$status= $_POST['status'];

		$gambar= $_FILES['gambar']['name'];
		move_uploaded_file($_FILES['gambar']['tmp_name'], "../../img/barang/".$gambar);

		if (!empty($gambar)) {
			
			$gambarUp= "gambar_barang='$gambar',";
		}

		$button= isset($_POST['button']) ? $_POST['button'] : $_GET['button'];

		if ($button == "Submit") {
			
			mysqli_query($koneksi, "INSERT INTO barang(kategori_barang,nama_barang,spesifikasi_barang,harga_barang,gambar_barang,status)

				VALUES('$kategori_barang','$nama_barang','$spesifikasi','$harga_barang','$gambar','$status')");

			header("location:".URL."dashboard/dashboard.php?menu=barang&action=list");

		}elseif ($button == "delete") {
			
			mysqli_query($koneksi, "DELETE FROM barang WHERE barang_id='$barang_id'");

			header("location:".URL."dashboard/dashboard.php?menu=barang&action=list");

		}elseif ($button == "update") {
			
			mysqli_query($koneksi, "UPDATE barang SET kategori_barang='$kategori_barang',
				                                      nama_barang='$nama_barang',
				                                      spesifikasi_barang='$spesifikasi',
				                                      harga_barang='$harga_barang',
				                                      $gambarUp
				                                      status='$status' WHERE barang_id='$barang_id'");

			header("location:".URL."dashboard/dashboard.php?menu=barang&action=list");
		}

?>