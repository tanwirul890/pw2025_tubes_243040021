<?php 

include '../../config/function.php';


$id = (int)$_GET['id'];
$pembelian = select("SELECT * FROM data_pembelian WHERE id = $id");

$pembelian = $pembelian[0];

if (isset($_POST['ubah'])) {
  if (ubah_barang($_POST) > 0) {
    echo "<script>alert('Data pembelian berhasil diubah.');location.href='../data-pembelian.php';</script>";
  } else {
    echo "<script>alert('Data pembelian gagal diubah.');</script>";
  }
}
?>

<?php include '../../../layout/header-admin.php'; ?>
<link rel="stylesheet" href="../../css/ubah-pembeli.css">
<!-- Main Content -->
<main class="col-lg-10 ms-auto px-0">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-lg mt-4 mb-5 p-2" data-aos="zoom-in">
                    <div class="card-body p-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Login" class="login-illustration mb-3" data-aos="fade-down">
                        <h3 class="card-title mb-4 text-center" data-aos="fade-right">Formulir Pembelian Obat</h3>
                        <form action="" method="POST" autocomplete="off">
                            <input type="hidden" name="id" value="<?= $pembelian['id'] ?>">
                            <div class="mb-3" data-aos="fade-left">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $pembelian['nama'] ?>" required placeholder="Masukkan nama">
                            </div>
                            <div class="mb-3" data-aos="fade-left" data-aos-delay="100">
                                <label for="nama_obat" class="form-label">Nama Obat</label>
                                <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?= $pembelian['nama_obat'] ?>" required placeholder="Masukkan nama obat">
                            </div>
                            <div class="mb-3" data-aos="fade-left" data-aos-delay="200">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $pembelian['jumlah'] ?>" required min="1" placeholder="Masukkan jumlah">
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-gradient btn-lg shadow" name="ubah" data-aos="zoom-in" data-aos-delay="300">Simpan</button>
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
</div>
</div>


<?php include '../../../layout/footer-admin.php'; ?>
