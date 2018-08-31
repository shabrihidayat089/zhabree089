 <center><b>DATA SLIDE</b></center>
   <div class="mb-2 mt-3">
	<a class="btn btn-outline-danger" href="<?php echo URL."dashboard/dashboard.php?menu=slide&action=form" ?>">+</a>
	</div>
<?php 
		
		$querySlide= mysqli_query($koneksi,"SELECT * FROM slide");

		if (mysqli_num_rows($querySlide) == 0) {
			
			echo "<b>MAAF DATA BELUM ADA</b>";
		}else{

			echo "<div class='table-responsive'>";
			echo "<table class='table table-bordered'>";

		    echo "<tr class='table-danger'>
		    			<th class='text-center'>No</th>
		    			<th class='text-center'>Gambar</th>
		    			<th class='text-left'>Nama Slide</th>
		    			<th class='text-center'>Slide</th>
		    			<th class='text-center'>Status</th>
		    			<th class='text-left'>Action</th>
		          </tr>";

		          $no=1;
		          while ($row=mysqli_fetch_assoc($querySlide)) {
		          	
		          	echo "<tr>
		          				<td class='text-center'>$no</td>
		          				<td class='text-center'>

		          				<!-- Button trigger modal -->
<a href='' class='text-danger' data-toggle='modal' data-target='#$row[slide_id]'>
  Lihat Gambar
</a>

<!-- Modal -->
<div class='modal fade' id='$row[slide_id]' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalCenterTitle'>$row[nama_slide]</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
       <img src='".URL."img/slide/$row[gambar_slide]' class='img-fluid'>
      </div>
    </div>
  </div>
</div>

		          				</td>
		          				<td class='text-left'>$row[nama_slide]</td>
		          				<td class='text-center'>$row[slide]</td>
		          				<td class='text-center'>$row[status]</td>
		          				<td class='text-center'>
	      					       <p class='d-inline-flex mr-1'>
	                                 <a class='btn btn-outline-danger btn-sm' href='".URL."dashboard/dashboard.php?menu=slide&action=form&slide_id=$row[slide_id]' role='button'><img src='".URL."img/edit.png' class='rounded' style='width:20px;height:20px;'></a>
	                                </p>

	                                <p class='d-inline-flex'>
	                                 <a class='btn btn-outline-danger btn-sm' href='".URL."dashboard/slide/action.php?button=delete&slide_id=$row[slide_id]' role='button'><img src='".URL."img/delete.jpg' class='rounded' style='width:20px;height:20px;'></a>
	                                </p>

		          				</td>
		          	      </tr>";

		          	 $no++;
		          }

			echo "</table>";
			echo "</div>";
		}

?>