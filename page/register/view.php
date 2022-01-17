<?php
if(isset($_SESSION["user_email"])){
  header("Location:index.php?session=andasudahmasuk " );
}
?>
<div class="container register">
        <h4 class="mt-4 mb-5">PENDAFTARAN AKUN RJRShop</h4>

        <?php if(isset($_GET['alert']) && $_GET['alert']=='password')
        {
          ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          Password Anda tidak sama silahkan daftar lagi
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
        }
        if(isset($_GET['alert']) && $_GET['alert']=='email')
        { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              Email sudah terdaftar silahkan masuk untuk melanjutkan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php
        }
        if(isset($_GET['alert']) && $_GET['alert']=='sukses')
        { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              Pendaftaran Sukses Silahkan Login untuk melanjutkan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      <?php
        } ?>

        <form action="page/register/proses.php" method="POST">
            <div class="row mb-3">
                <label for="user_nama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-6">
                  <input type="name" class="form-control" id="user_nama" name="nama" required>
                </div>
              </div>
            <div class="row mb-3">
              <label for="user_email" class="col-sm-3 col-form-label ">Email</label>
              <div class="col-sm-6">
                <input type="email" class="form-control" id="user_email" name="email" required>
              </div>
            </div>
            <div class="row mb-3">
              <label for="user_password" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-6">
                <input type="password" class="form-control" id="user_password" name="password" required>
              </div>
            </div>
            <div class="row mb-3">
                <label for="user_password2" class="col-sm-3 col-form-label">Masukkan ulang password</label>
                <div class="col-sm-6">
                  <input type="password" class="form-control" id="user_password2" name="password2" required>
                </div>
              </div>

            <div class="row mb-3 mt-3">
                <button type="submit" class="btn btn-primary col-sm-3" name="daftar">Daftar</button>
            </div>
            
          </form>


    <script>
      alert
    </script>
          
    </div>