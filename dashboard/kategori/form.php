<?php 
      
      $kategori_id= isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;

      $kategori="";
      $status="";
      $button= "Submit";

      $queryKategoriform= mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori_id='$kategori_id'");
      $row=mysqli_fetch_assoc($queryKategoriform);

      if ($kategori_id) {
        
        $kategori= $row['kategori'];
        $status= $row['status'];
        $button= "update";
      }
?>
<form action="<?php echo URL."dashboard/kategori/action.php?kategori_id=$kategori_id"; ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Category</label>
    <input type="text" class="form-control" name="kategori" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategori Barang" value="<?php echo $kategori; ?>">
  </div>

  <div>
  <label for="exampleInputEmail1">Status</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline1" name="status" class="custom-control-input" value="on" <?php if ($status == "on") {
        echo "checked='true'";
    } ?>>
    <label class="custom-control-label" for="customRadioInline1">on</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" id="customRadioInline2" name="status" class="custom-control-input" value="off" <?php if ($status == "off") {
        echo "checked='true'";
    } ?>>
    <label class="custom-control-label" for="customRadioInline2">off</label>
  </div>

  <div class="mt-3">
  <input type="submit" name="button" class="btn btn-outline-primary" value="<?php echo $button; ?>">
  </div>
</form>