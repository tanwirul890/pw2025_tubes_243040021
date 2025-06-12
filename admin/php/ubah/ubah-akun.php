<?php 

include '../../config/function.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$pendaftar = select("SELECT * FROM data_pendaftaran_akun WHERE id = $id");

$pendaftar = $pendaftar[0];


?>

<?php include '../../../layout/header-admin.php'; ?>
<style>
      
</style>
<link rel="stylesheet" href="../../css/ubah.css">
<!-- Main Content -->
<main class="col-lg-10 ms-auto px-0">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-lg mt-4 mb-5 p-2" data-aos="zoom-in">
                    <div class="card-body p-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Login" class="login-illustration mb-3" data-aos="fade-down">
                        <h3 class="card-title mb-4 text-center" data-aos="fade-right">Ubah Data Akun</h3>
                        <form action="" method="POST" autocomplete="off">
                            <input type="hidden" name="id" value="<?= $pendaftar['id'] ?>">
                            <div class="mb-3" data-aos="fade-left">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= htmlspecialchars($pendaftar['nama']) ?>" required placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="mb-3" data-aos="fade-left" data-aos-delay="100">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= $pendaftar['email'] ?>" required placeholder="Masukkan email">
                            </div>
                            <div class="mb-3" data-aos="fade-left" data-aos-delay="200">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?= $pendaftar['username'] ?>" required placeholder="Masukkan username">
                            </div>
                            <div class="mb-3" data-aos="fade-left" data-aos-delay="300">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru (kosongkan jika tidak diubah)">
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-gradient btn-lg shadow" name="edit" data-aos="zoom-in" data-aos-delay="500">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Main Content -->

<?php include '../../../layout/footer-admin.php'; ?>
