<?php 
      
      session_start();
      include_once("../config/helper.php");
      include_once("../config/koneksi.php");

      $admin_id= isset($_SESSION['admin_id']) ? $_SESSION['admin_id'] : false;
      $nama= isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
      $menu= isset($_GET['menu']) ? $_GET['menu'] : false;
      $action= isset($_GET['action']) ? $_GET['action'] : false;

      if ($admin_id == false) {
        
        header("location:".URL."dashboard/login.php?notif=noadmin2");
      }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL."css/bootstrap.min.css"; ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo URL."css/shop-homepage.css"; ?>" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#"><?php if ($admin_id) {
          echo $_SESSION['nama'];
        } ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo URL; ?>">View Site
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URL."dashboard/logout.php"; ?>">Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container mt-5">

      <div class="row">

        <div class="col-lg-3">

         <div class="accordion my-3" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-outline-danger" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  CRATE
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                      <div class="list-group">
                        <a href="<?php echo URL."dashboard/dashboard.php?menu=kategori&action=list"; ?>" class="list-group-item">Zhabree's Stuff</a>
                        <a href="<?php echo URL."dashboard/dashboard.php?menu=barang&action=list"; ?>"" class="list-group-item">Stuff</a>
                        <a href="<?php echo URL."dashboard/dashboard.php?menu=slide&action=list"; ?>"" class="list-group-item">Slide</a>
                      </div>
              </div>
            </div>
          </div>
        </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9 p-4 my-3 bg-light text-dark">

         <?php 

                $datamenu= "../dashboard/$menu/$action.php";

                if (file_exists($datamenu)) {
                       
                       include_once($datamenu);
                }else{

                      echo "<b>HALAMAN YANG ANDA CARI TIDAK ADA</b>";
                }
         ?>

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-8 bg-danger" style="margin-top: 400px">
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




















