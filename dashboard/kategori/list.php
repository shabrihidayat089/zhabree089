 <center><b>CATEGORY</b></center>
   <div class="mb-2 mt-3">
	<a class="btn btn-outline-danger" href="<?php echo URL."dashboard/dashboard.php?menu=kategori&action=form" ?>">+</a>
	</div>
<?php 
		
		$queryKategori= mysqli_query($koneksi,"SELECT * FROM kategori");

		if (mysqli_num_rows($queryKategori) == 0) {
			
			echo "<b>MAAF DATA BELUM ADA</b>";
		}else{

			echo "<div class='table-responsive'>";
			echo "<table class='table table-bordered'>";

		    echo "<tr class='table-danger'>
		    			<th class='text-center'>No</th>
		    			<th class='text-left'>Kategori</th>
		    			<th class='text-center'>Status</th> 
		    			<th class='text-center'>Action</th>
		          </tr>";

		          $no=1;
		          while ($row=mysqli_fetch_assoc($queryKategori)) {
		          	
		          	echo "<tr>
		          				<td class='text-center'>$no</td>
		          				<td class='text-left'>$row[kategori]</td>
		          				<td class='text-center'>$row[status]</td>
		          				<td class='text-center'>
	      					       <p class='d-inline-flex mr-1'>
	                                 <a class='btn btn-outline-danger btn-sm' href='".URL."dashboard/dashboard.php?menu=kategori&action=form&kategori_id=$row[kategori_id]' role='button'><img src='".URL."img/edit.png' class='rounded' style='width:20px;height:20px;'></a>
	                                </p>

	                                <p class='d-inline-flex'>
	                                 <a class='btn btn-outline-danger btn-sm' href='".URL."dashboard/kategori/action.php?button=delete&kategori_id=$row[kategori_id]' role='button'><img src='".URL."img/delete.jpg' class='rounded' style='width:20px;height:20px;'></a>
	                                </p>

		          				</td>
		          	      </tr>";

		          	 $no++;
		          }

			echo "</table>";
			echo "</div>";
		}

?>