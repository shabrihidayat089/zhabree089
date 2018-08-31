<?php       
      
      include_once("config/helper.php");
      include_once("config/koneksi.php");

      $kategori_id= isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ZHABREE</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL."css/bootstrap.min.css"; ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo URL."css/shop-homepage.css"; ?>" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">WE ARE ZHABREE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo URL; ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL."about.php"?>">WHO AM I ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL."dashboard/dashboard.php?menu=barang&action=list"; ?>">CRATE</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3 mt-4">

          <div class="accordion my-3" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-outline-danger" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Zhabree's Stuff
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="list-group">

            <?php 

                  $querySlide= mysqli_query($koneksi, "SELECT * FROM kategori WHERE status='on'");
                  while ($rowSlide=mysqli_fetch_assoc($querySlide)) {
                        
                      echo "<a href='".URL."index.php?kategori_id=$rowSlide[kategori_id]' class='list-group-item'>$rowSlide[kategori]</a>";
                  }
            ?>

        </div>
      </div>
    </div>
  </div>
</div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9 my-3">
          <?php 

            $querySlide1= mysqli_query($koneksi, "SELECT * FROM slide WHERE status='on' AND slide='1'");
            $rowSlide1=mysqli_fetch_assoc($querySlide1);

            $querySlide2= mysqli_query($koneksi, "SELECT * FROM slide WHERE status='on' AND slide='2'");
            $rowSlide2=mysqli_fetch_assoc($querySlide2);

            $querySlide3= mysqli_query($koneksi, "SELECT * FROM slide WHERE status='on' AND slide='3'");
            $rowSlide3=mysqli_fetch_assoc($querySlide3);
          ?>
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="<?php echo URL."img/slide/$rowSlide1[gambar_slide]"; ?>" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo URL."img/slide/$rowSlide2[gambar_slide]"; ?>" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo URL."img/slide/$rowSlide3[gambar_slide]"; ?>" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


          <div class="row">
            <?php

                  $queryBarang= mysqli_query($koneksi, "SELECT * FROM barang WHERE status='tersedia' ORDER BY rand()");

                  if ($kategori_id) {
                    
                    $queryBarang= mysqli_query($koneksi, "SELECT * FROM barang WHERE status='tersedia' AND kategori_barang='$kategori_id'");
                  }

                  while ($rowBarang=mysqli_fetch_assoc($queryBarang)) {
                    
                        echo "<div class='col-lg-4 col-md-6 mb-4'>
                        <div class='card h-100'>
                <a href='#'><img class='card-img-top' src='".URL."img/barang/$rowBarang[gambar_barang]' alt=''></a>
                <div class='card-body'>
                  <h4 class='card-title'>
                    <a href='link.php'>$rowBarang[nama_barang]</a>
                  </h4>
                  <h5>".rupiah($rowBarang['harga_barang'])."</h5>
                  <p class='card-text'>$rowBarang[spesifikasi_barang]</p>
                </div>
                <div class='card-footer'>
                  <small class='text-muted'>&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
              </div>";
                  }
             ?>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  
    
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
  
</nav>
    <!-- Footer -->
    <footer class="py-8 bg-danger">
      <div class="container">
        <p class="m-0 text-right text-white">Copyright &copy; Zhabree 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo URL."js/jquery.min.js"; ?>"></script>
    <script src="<?php echo URL."js/bootstrap/bootstrap.bundle.min.js"; ?>"></script>

  </body>

</html>
