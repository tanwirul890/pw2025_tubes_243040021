<?php
session_start();
include './admin/config/function.php';

$error = ""; // Inisialisasi variabel error

// Cek apakah tombol login ditekan
if (isset($_POST['login'])) {
    global $db;

    // Pastikan koneksi database tersedia
    if (!$db) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Ambil input username dan password dengan sanitasi
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Cek username di database
    $result = mysqli_query($db, "SELECT * FROM data_pendaftaran_akun WHERE username = '$username'");

    if (!$result) {
        die("Query gagal: " . mysqli_error($db));
    }

    // Jika username ditemukan
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);

        // Verifikasi password
        if (password_verify($password, $data['password'])) {
            // Set session (tanpa menyimpan password)
            $_SESSION['id'] = $data['id'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['role'] = $data['role'];

            // Redirect sesuai role
            if ($row["role"] === 'admin') {
                header("Location: ./admin/php/dashbort.php");
            } else {
                header("Location: ./public/php/home.php");
            }
           
            exit(); // Menghentikan eksekusi kode setelah redirect
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>

<?php include './layout/header.php'; ?>
<link rel="stylesheet" href="./css/login.css">

<!-- Halaman login -->
<div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;" data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-in-out">
  <div class="card shadow-lg p-4" style="width: 100%; max-width: 410px; border-radius: 20px;" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
    <div class="card-body">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Login" class="login-illustration mb-3" data-aos="flip-left" data-aos-delay="400" data-aos-duration="1200">
      <h4 class="card-title text-center mb-4" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">Login</h4>
      
      <?php if (!empty($error)): ?>
        <div class="alert alert-danger" data-aos="fade-left" data-aos-delay="800" data-aos-duration="900"><?php echo $error; ?></div>
      <?php endif; ?>

      <form method="post" action="">
        <div class="mb-3" data-aos="fade-left" data-aos-delay="800" data-aos-duration="900">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" required autofocus>
        </div>
        <div class="mb-3" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="900">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-2" name="login" data-aos="fade-up" data-aos-delay="1200" data-aos-duration="900">Login</button>
      </form>
    </div>
    <div class="card-footer-custom text-center" data-aos="fade-up" data-aos-delay="1400" data-aos-duration="900">
      <small>Belum punya akun? <a href="daftar.php">Daftar</a></small>
    </div>
  </div>
</div>
<!-- Akhir halaman login -->

<?php include './layout/footer.php'; ?>