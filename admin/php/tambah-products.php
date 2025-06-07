<?php 

include '../config/function.php';




if (isset($_POST['tambah'])) {
  if (tambah_produk($_POST) > 0) {
    echo "<script>alert('Data produk berhasil ditambahkan.');location.href='tambah-products.php';</script>";
  } else {
    echo "<script>alert('Data produk gagal ditambahkan.');</script>";
  }
}
?>

<?php include '../../layout/header-admin.php'; ?>
<link rel="stylesheet" href="../css/ubah-pembeli.css">
<!-- table tambah produk -->
<main class="col-lg-10 ms-auto px-0">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-lg mt-4 mb-5 p-2" data-aos="zoom-in">
                    <div class="card-body p-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Produk" class="login-illustration mb-3" data-aos="fade-down">
                        <h3 class="card-title mb-4 text-center" data-aos="fade-right">Formulir Produk</h3>
                        <form action="" method="POST" autocomplete="off">
                            <div class="mb-3" data-aos="fade-left">
                                <label for="nama_obat" class="form-label">Nama produk</label>
                                <input type="text" class="form-control" id="nama_obat" name="nama_obat" required placeholder="Masukkan nama obat">
                            </div>
                            <div class="mb-3" data-aos="fade-left" data-aos-delay="100">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga" required min="0" placeholder="Masukkan harga">
                            </div>
                            <div class="mb-3" data-aos="fade-left" data-aos-delay="200">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" id="stok" name="stok" required min="0" placeholder="Masukkan jumlah stok">
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-gradient btn-lg shadow" data-aos="zoom-in" data-aos-delay="300" name="tambah">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- akhir tambah produk -->
</div>
</div>


<?php include '../../layout/footer-admin.php'; ?>


