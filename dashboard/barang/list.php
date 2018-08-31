 <center><b>ITEM</b></center>
   <div class="mb-2 mt-3">

 <!-- Sidebar Widgets Column -->
        <lift>
          <div class="col-md-4">

 <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Barang...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
        </div>
        </lift>



	<a class="btn btn-outline-danger" href="<?php echo URL."dashboard/dashboard.php?menu=barang&action=form" ?>">+</a>
	</div>
<?php 
		
		$queryBarang= mysqli_query($koneksi,"SELECT barang.*,kategori.kategori FROM barang JOIN kategori ON barang.kategori_barang=kategori.kategori_id");

		if (mysqli_num_rows($queryBarang) == 0) {
			
			echo "<b>MAAF DATA BELUM ADA</b>";
		}else{

			echo "<div class='table-responsive'>";
			echo "<table class='table table-bordered'>";

		    echo "<tr class='table-danger'>
		    			<th class='text-center'>No</th>
		    			<th class='text-center'>Gambar</th>
		    			<th class='text-left'>Nama Barang</th>
		    			<th class='text-left'>Kategori</th>
		    			<th class='text-center'>Harga</th>
		    			<th class='text-center'>Status</th> 
		    			<th class='text-center'>Action</th>
		          </tr>";

		          $no=1;
		          while ($row=mysqli_fetch_assoc($queryBarang)) {
		          	
		          	echo "<tr>
		          				<td class='text-center'>$no</td>
		          				<td class='text-center'>

		          				<!-- Button trigger modal -->
<a href='' class='text-danger' data-toggle='modal' data-target='#$row[barang_id]'>
  Lihat Gambar
</a>

<!-- Modal -->
<div class='modal fade' id='$row[barang_id]' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalCenterTitle'>$row[nama_barang]</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
       <img src='".URL."img/barang/$row[gambar_barang]' class='img-fluid'>
      </div>
    </div>
  </div>
</div>

		          				</td>
		          				<td class='text-left'>$row[nama_barang]</td>
		          				<td class='text-left'>$row[kategori]</td>
		          				<td class='text-center'>".rupiah($row['harga_barang'])."</td>
		          				<td class='text-center'>$row[status]</td>
		          				<td class='text-center'>
	      					       <p class='d-inline-flex mr-1'>
	                                 <a class='btn btn-outline-danger btn-sm' href='".URL."dashboard/dashboard.php?menu=barang&action=form&barang_id=$row[barang_id]' role='button'><img src='".URL."img/edit.png' class='rounded' style='width:20px;height:20px;'></a>
	                                </p>

	                                <p class='d-inline-flex'>
	                                 <a class='btn btn-outline-danger btn-sm' href='".URL."dashboard/barang/action.php?button=delete&barang_id=$row[barang_id]' role='button'><img src='".URL."img/delete.jpg' class='rounded' style='width:20px;height:20px;'></a>
	                                </p>

		          				</td>
		          	      </tr>";

		          	 $no++;
		          }

			echo "</table>";
			echo "</div>";
		}

?>