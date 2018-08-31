<?php 
      
      $slide_id= isset($_GET['slide_id']) ? $_GET['slide_id'] : false;

      $nama_slide= "";
      $slide= "";
      $status="";
      $gambar= "";
      $button= "Submit";

      $querySlideform= mysqli_query($koneksi, "SELECT * FROM slide WHERE slide_id='$slide_id'");
      $row=mysqli_fetch_assoc($querySlideform);

      if ($slide_id) {
        
        $nama_slide= $row['nama_slide'];
        $slide= $row['slide'];
        $status= $row['status'];
        $gambar= $row['gambar_slide'];

        $gambarForm = "<img src='".URL."img/slide/$gambar' class='img-fluid'>";

        $button= "update";
      }
?>
<form action="<?php echo URL."dashboard/slide/action.php?slide_id=$slide_id"; ?>" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="exampleInputEmail1">Nama Slide</label>
    <input type="text" class="form-control" name="nama_slide" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Slide" value="<?php echo $nama_slide; ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Slide Ke:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="slide">
        
        <?php 

              if ($slide == 1) {
                    
                    echo "<option value='1' selected='true'>1</option>";
                    echo "<option value='2'>2</option>";
                    echo "<option value='3'>3</option>";

              }elseif ($slide == 2) {
                
                    echo "<option value='1'>1</option>";
                    echo "<option value='2' selected='true'>2</option>";
                    echo "<option value='3'>3</option>";

              }elseif ($slide == 3) {
                
                    echo "<option value='1'>1</option>";
                    echo "<option value='2'>2</option>";
                    echo "<option value='3' selected='true'>3</option>";

              }else{


                  echo "<option value='1'>1</option>";
                  echo "<option value='2'>2</option>";
                  echo "<option value='3'>3</option>";

              }
        ?>

    </select>
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

  <div class="form-group mt-3">
    <label for="exampleFormControlFile1">Gambar Barang</label>
    <input type="file" accept=".jpg, .jpeg, .png" name="gambar" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <div>
         <?php 

              if ($slide_id) {
                  
                  echo $gambarForm;
              }
         ?>
  </div>

  <div class="mt-5">
  <input type="submit" name="button" class="btn btn-outline-primary" value="<?php echo $button; ?>">
  </div>
</form>