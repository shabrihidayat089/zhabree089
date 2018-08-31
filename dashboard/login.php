<?php 
      
      session_start();
      include_once("../config/helper.php");

      $notif= isset($_GET['notif']) ? $_GET['notif'] : false;
      $admin_id= isset($_SESSION['admin_id']) ? $_SESSION['admin_id'] : false;

      if ($admin_id) {
        
            header("location:".URL."dashboard/dashboard.php?menu=barang&action=list");
      }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Administrator</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL."css/bootstrap.min.css"; ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo URL."css/signin.css"; ?>" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="<?php echo URL."dashboard/proses_login.php"; ?>" method="post">
    <?php

         if ($notif=="noadmin") {
              
          echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>WARNING!!!</strong> email dan password tidak tersedia.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";

         }elseif ($notif=="noadmin2") {
           
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>WARNING!!!</strong> silahkan login terlebih dahulu.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
         }
     ?>
      <img class="mb-4" src="<?php echo URL."img/images.png"; ?>" alt="" width="100%" height="200">
      <h1 class="h3 mb-3 font-weight-normal">ADMIN SIGN IN</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" id="inputEmail" class="form-control mb-2" placeholder="Email address" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
      <div class="checkbox mb-3">
      
      </div>
      <button class="btn btn-lg btn-danger btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; </p>
    </form>
  </body>

  <script src="<?php echo URL."js/jquery.min.js"; ?>"></script>
  <script src="<?php echo URL."js/bootstrap/bootstrap.bundle.min.js"; ?>"></script>

</html>
