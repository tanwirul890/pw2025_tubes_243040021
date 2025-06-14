<?php 

include  './admin/config/function.php';

if (isset($_POST['tambah'])) {
  if(pendaftaran_akun($_POST) > 0) {
    echo "<script>alert('berhasil mendaftar akun.'); window.location.href = 'daftar.php';</script>"; 
  } else {
    echo "<script>alert('gagal mendaftar akun.'); </script>";
  }
}
?>

<?php include './layout/header.php';?>
<link rel="stylesheet" href="css/daftar.css">
<!-- card pendaftaran -->
<div class="container mb-5" data-aos="fade-up" data-aos-duration="1000">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="800">
                <div class="card-body">
                    <h3 class="card-title mb-4 text-center" data-aos="fade-down" data-aos-delay="500" data-aos-duration="700">Daftar Akun</h3>
                    <form action="" method="POST">
                        <div class="mb-3" data-aos="fade-right" data-aos-delay="600">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3" data-aos="fade-left" data-aos-delay="700">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3" data-aos="fade-right" data-aos-delay="800">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3" data-aos="fade-left" data-aos-delay="900">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="mb-3" data-aos="fade-right" data-aos-delay="1000">
                            <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" required>
                        </div>
                        <div class="mb-3" data-aos="fade-right" data-aos-delay="1000">
    <label for="role" class="form-label">Role</label>
    <select class="form-control" id="role" name="role" readonly disabled>
        <option value="user" selected>User</option>
    </select>
    <input type="hidden" name="role" value="user"> <!-- Agar tetap dikirim ke server -->
</div>

                        <button type="submit" name="tambah" class="btn btn-primary w-100" data-aos="flip-up" data-aos-delay="1100">Daftar</button>
                    </form>
                    <div class="mt-3 text-center" data-aos="fade-up" data-aos-delay="1200">
                        Sudah punya akun? <a href="index.php">Login di sini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- akhir card pendaftaran -->

<?php include './layout/footer.php';?>