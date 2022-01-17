<div class="container">
    <h3 class="mb-5">Ganti Password </h3>
        <form action="page/password/proses.php" method="POST">

            <div class="row mb-3">
                <div class="col-sm-5">
                    <label for="user_password" class="col-sm-6 col-form-label">Masukkan Password Lama</label>
                </div>
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="paslama" required>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-5">
                    <label for="user_password" class="col-sm-6 col-form-label">Masukkan Password Baru</label>
                </div>
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="pasbaru" required>

                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-5">
                    <label for="user_password" class="col-sm-6 col-form-label">Password</label>
                </div>
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="konfirmasi" required>

                    </div>
                </div>
            </div>


            <div class="row mb-3 mt-3">
                <button type="submit" class="btn btn-save col-sm-3" name="ubah">Ubah Password</button>
            </div>

        </form>
    </div>
</div>