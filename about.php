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

     <main role="main">

      <div class="container marketing mt-5">

        <div class="media mb-3">
         <div class="col-md-5 order-md-1">
          <img class="featurette-image img-fluid mx-auto" src="img/ZHABREE2.png" alt="Generic placeholder image">
         </div>
          <div class="col-md-7 order-md-2">
            <h3 class="mt-0"><b>WHO AM I ?</b></h3>

            <div class="table-responsive">
              <table class="table">
                <tr>
                    <td>Store</td><td>:</td><td>Zhabree's Tech</td>
                </tr>

                <tr>
                    <td>Location</td><td>:</td><td>Ruko Sunter Niaga Mas Blok F1-30</td>
                </tr>

                <tr>
                    <td>Selling</td><td>:</td><td>ASUS ROG & ACER PREDATOR</td>
                </tr>

                <tr>
                    <td>Contact</td><td>:</td><td>shabrih089@gmail.com</td>
                </tr>

                <tr>
                    <td>Operation Time</td><td>:</td><td>Open : 10.00 AM - 09.00 PM</td>
                </tr>
                
              </table>
            </div>

          </div>
        </div>

      
       
         
        <hr class="featurette-divider">
      </div><!-- /.container -->
    </main>

    <!-- Modal -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">ZHABREE</a>
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
              <a class="nav-link" href="#">WHO AM I ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL."dashboard/dashboard.php?menu=barang&action=list"; ?>">Dashboard</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <center>
      <button
      type="button" class="btn btn-outline-light">ERROR</button>
    </center>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  
    
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
  
</nav>



    <!-- Page Content -->
    <hr class="divider" />
 
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-8 bg-white">
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
