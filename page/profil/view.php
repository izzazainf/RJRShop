<?php
if(isset($_SESSION["user_email"])){
$user_email = $_SESSION["user_email"];
require_once "db_connect.php";
$user="SELECT * FROM user_data WHERE user_email= '$user_email' ";
$query=mysqli_query($conn, $user);
$tabel = mysqli_fetch_assoc($query);
$b_nama=$tabel["user_nama"];
$b_email=$tabel["user_email"];
$b_password=$tabel["user_password"];
$b_contact=$tabel["user_contact"];


?>
<div class="home">
        <div class="container">
                <h3 class="mb-5">Profil </h3>
                <form action="page/profil/proses.php" method="POST">
                        <div class="row mb-3">
                                <div class="col-sm-3">
                                        <label for="user_nama" class="col-sm-3 col-form-label">Nama</label>
                                </div>
                                <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                                <input type="text" class="form-control" value="<?php echo $b_nama ?>" name="nama">
                                                <button class="btn btn-outline-secondary" type="button" id="input"><i class="fas fa-edit"></i></button>
                                        </div>
                                </div>
                        </div>
                        <div class="row mb-3">
                                <div class="col-sm-3">
                                        <label for="user_email" class="col-sm-3 col-form-label">Email</label>
                                </div>
                                <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                                <input type="email" class="form-control" value="<?php echo $b_email?>" name="email" >
                                                <button class="btn btn-outline-secondary" type="button" id="input"><i class="fas fa-edit"></i></button>
                                        </div>
                                </div>
                        </div>

                        <div class="row mb-3">
                                <div class="col-sm-3">
                                        <label for="user_contact" class="col-sm-3 col-form-label">No HP</label>
                                </div>
                                <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                                <input type="text" class="form-control" value="<?php echo $b_contact?>" name="contact" >
                                                <button class="btn btn-outline-secondary" type="button" id="input"><i class="fas fa-edit"></i></button>
                                        </div>
                                </div>
                        </div>

                        <div class="row mb-3 mt-3">
                                <button type="submit" class="btn col-sm-3 btn-save" name="ubah">Disimpan</button>
                        </div>

                </form>
        </div>
        </div>
        <?php }
        else{
            header("Location:logindulu.php");
        }
        ?>
