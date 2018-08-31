<?php 
      
      $barang_id= isset($_GET['barang_id']) ? $_GET['barang_id'] : false;

      $kategori_barang="";
      $nama_barang="";
      $spesifikasi="";
      $harga_barang="";
      $status= "";
      $gambar= "";
      $button= "Submit";

      $queryBarangform= mysqli_query($koneksi, "SELECT * FROM barang WHERE barang_id='$barang_id'");
      $row=mysqli_fetch_assoc($queryBarangform);

      if ($barang_id) {
        
        $kategori_barang= $row['kategori_barang'];
        $nama_barang= $row['nama_barang'];
        $spesifikasi= $row['spesifikasi_barang'];
        $harga_barang= $row['harga_barang'];
        $status= $row['status'];
        $gambar= $row['gambar_barang'];

        $gambarForm = "<img src='".URL."img/barang/$gambar' class='img-fluid'>";

        $button= "update";
      }
?>
<form action="<?php echo URL."dashboard/barang/action.php?barang_id=$barang_id"; ?>" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" id="exampleFormControlSelect1" name="kategori_barang">
            
            <?php 

                $queryKategoribarang=mysqli_query($koneksi,"SELECT * FROM kategori WHERE status='on'");
                while ($row=mysqli_fetch_assoc($queryKategoribarang)) {
                    
                    if ($kategori_barang == $row['kategori_id']) {

                       echo "<option value='$row[kategori_id]' selected='true'>$row[kategori]</option>";

                    }else{
                      
                         echo "<option value='$row[kategori_id]'>$row[kategori]</option>";

                    }
                }
            ?>

    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Item</label>
    <input type="text" class="form-control" name="nama_barang" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang" value="<?php echo $nama_barang; ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Specification</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="spesifikasi"><?php echo $spesifikasi; ?></textarea>
  </div>

  <div class="form-group">  
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" name="harga_barang" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Barang" value="<?php echo $harga_barang; ?>">
  </div>

  <div>
  <label for="exampleInputEmail1">Status</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline1" name="status" class="custom-control-input" value="tersedia" <?php if ($status == "tersedia") {
        echo "checked='true'";
    } ?>>
    <label class="custom-control-label" for="customRadioInline1">Available</label>
  </div>

  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline2" name="status" class="custom-control-input" value="habis" <?php if ($status == "habis") {
        echo "checked='true'";
    } ?>>
    <label class="custom-control-label" for="customRadioInline2">Out of Stock</label>
  </div>

  <div class="form-group mt-3">
    <label for="exampleFormControlFile1">Picture</label>
    <input type="file" accept=".jpg, .jpeg, .png" name="gambar" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <div>
        <?php 

              if ($barang_id) {
                
                echo $gambarForm;

              }
        ?>
  </div>

  <div class="mt-5">
  <input type="submit" name="button" class="btn btn-outline-primary" value="<?php echo $button; ?>">
  </div>
</form>