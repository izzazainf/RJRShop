<?php session_start();
if(!isset($_GET['page'])){
    $_GET['page']='home';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="style.css">
    <title>RJRShop</title>
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-light" >
        <div class="container container-fluid">

          <a href="?page=home" class="navbar-brand"><img src="images/logo4321.png" alt=""></a>


          <?php //  if( empty($_SESSION["user_email"] && empty($_SESSION["user_password"]) )) {
            //if($_SESSION["login"] ==! 1){
              if(!isset($_SESSION["user_email"]) && !isset($_SESSION["user_password"])){
            ?>
          <div class="login-register d-flex">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#masuk">Masuk</button>
            <a href="?page=register"><button type="button" class="btn btn-success">Daftar</button></a>
          </div>

          <?php  }  else {  ?>
              <!-- UBAH -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                <i class="fas fa-user-alt" style="color:white;"></i>
                <?php echo $_SESSION["user_nama"] ?>
                </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="?page=profil">Profil</a></li>
                <li><a class="dropdown-item" href="?page=riwayat ">Transaksi</a></li>
                <li><a class="dropdown-item" href="?page=konfirmasi ">Konfirmasi Pembayaran</a></li>
                <li><a class="dropdown-item" href="?page=password ">Ganti Password</a></li>
                <li><a class="dropdown-item" href="logout.php">Keluar</a></li>
              </ul>
            </li>
          
            <?php  } ?>



            <!-- POP-UP LOGIN -->
            <div class="modal fade" id="masuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Halaman Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                            </div>
                            <div class="modal-footer">
                                <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                <button type="submit" class="btn masuk" name="masuk">Masuk</button>
                          </form>
                    </div>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </nav>
<!-- NAVBAR END -->

<!-- CONTENT -->
<?php
 include "content.php";?>

<!-- FOOTER -->
    <!-- FOOTER -->
    <footer class="bg-dark text-center text-white mt-5">
        <div class="container p-4 pb-0">
          <h5 class="mt-3">Sosial Media Kami</h5>
          <section class="mb-4">

<!-- UBAH -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-facebook-f"></i>
            </a>     
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
              <i class="fab fa-instagram"></i>
            </a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
              <i class="fab fa-telegram-plane"></i>
            </a>
            </section>
        </div>
      
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2021 RJRShop
        </div>
      </footer>
<!-- FOOTER END -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>