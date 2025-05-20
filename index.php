<?php
 if (isset($_POST["login"])) {
     if ($_POST["username"] == "wirul" && $_POST["password"] == "unpas24") {
         header("Location: ../admin/php/home.php ");
         exit;
     } else {
         $error = true;
     }
 }

 if (isset($_POST["login"])) {
     if ($_POST["username"] == "root" && $_POST["password"] == ".") {
         header("Location: ../public/php/public.php ");
         exit;
     } else {
         $error = true;
     }
 }
 ?>
 
<?php include './layout/header.php';?>


 
         <?php if (isset($error)) : ?>
             <p class="error">username / password salah!</p>
         <?php endif; ?>

         <!-- halaman login -->

    <div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
      <div class="card shadow p-4" data-aos="zoom-in" style="width: 100%; max-width: 410px;">
        <div class="card-body">
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Login" class="login-illustration">
          <h4 class="card-title text-center">Login</h4>
          <form method="post" action="">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" required autofocus>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-2 " name="login">Login</button>
          </form>
        </div>
        <div class="card-footer-custom">
          <small>Belum punya akun? <a href="/daftar.php">Daftar</a></small>
        </div>
      </div>
    </div>

    <!-- akhir halamanlogin -->

    <?php include './layout/footer.php';?>
