<?php


 if (isset($_POST["login"])) {
     if ($_POST["username"] == "wirul" && $_POST["password"] == "unpas24") {
         header("Location: ../admin/php/data-pembelian.php ");
         exit;
     } else {
         $error = true;
     }
 }

 if (isset($_POST["login"])) {
     if ($_POST["username"] == "" && $_POST["password"] == ".") {
         header("Location: ../public/php/public.php ");
         exit;
     } else {
         $error = true;
     }
 }
 ?>
 <?php include './layout/header.php';?>
<link rel="stylesheet" href="../css/login.css">

<!-- halaman login -->  
<div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;" data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-in-out">
  <div class="card shadow-lg p-4" style="width: 100%; max-width: 410px; border-radius: 20px;" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
    <div class="card-body">
      <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Login" class="login-illustration mb-3" data-aos="flip-left" data-aos-delay="400" data-aos-duration="1200">
      <h4 class="card-title text-center mb-4" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">Login</h4>
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
      <small>Belum punya akun? <a href="/daftar.php">Daftar</a></small>
    </div>
  </div>
</div>
<!-- akhir halaman login -->

<!-- AOS JS & CSS -->

<?php include './layout/footer.php';?>
