<?php 


 


if (isset($_POST['tambah'])) {
  if(create_barang($_POST) > 0) {
    echo "<script>alert('data barang berhasil di tambahkan.'); window.location.href = 'pembelian.php';</script>"; 
  } else {
    echo "<script>alert('data barang gagal di tambahkan.'); </script>";
  }
}
?>

<?php include  '../../layout/header-public.php';?>
<link rel="stylesheet" href="../css/pembelian.css">

<!-- card pembelian -->
<div class="container" data-aos="fade-up">
  <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-lg-6 col-md-8">
      <div class="card shadow-lg mt-4 mb-5 p-2" data-aos="zoom-in">
        <div class="card-body p-4">
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Login" class="login-illustration mb-3" data-aos="fade-down">
          <h3 class="card-title mb-4 text-center" data-aos="fade-right">Formulir Pembelian Obat</h3>
          <form action="" method="POST" autocomplete="off">
            <div class="mb-3" data-aos="fade-left">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" required placeholder="Masukkan nama">
            </div>
            <div class="mb-3" data-aos="fade-left" data-aos-delay="100">
              <label for="nama_obat" class="form-label">Nama Obat</label>
              <input type="text" class="form-control" id="nama_obat" name="nama_obat" required placeholder="Masukkan nama obat">
            </div>
            <div class="mb-3" data-aos="fade-left" data-aos-delay="200">
              <label for="jumlah" class="form-label">Jumlah</label>
              <input type="number" class="form-control" id="jumlah" name="jumlah" required min="1" placeholder="Masukkan jumlah">
            </div>
            <div class="mb-3">
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-gradient btn-lg shadow" name="tambah" data-aos="zoom-in" data-aos-delay="300">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- card  pembelian -->


<?php include  '../../layout/footer.php';?>