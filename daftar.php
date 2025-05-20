<?php include './layout/header.php';?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title mb-4 text-center">Daftar Akun</h3>
                        <form action="proses_daftar.php" method="POST">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Daftar</button>
                        </form>
                        <div class="mt-3 text-center">
                            Sudah punya akun? <a href="index.php">Login di sini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
       

<?php include './layout/footer.php';?>