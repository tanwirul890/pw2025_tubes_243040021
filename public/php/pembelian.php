
<?php include $_SERVER['DOCUMENT_ROOT'] . '/admin/config/function.php';?>
<?php
if (isset($_POST['tambah'])) {
  if(create_barang($_POST) > 0) {
    echo "<script>alert('data barang berhasil di tambahkan.'); ';</script>"; 
  } else {
    echo "<script>alert('data barang gagal di tambahkan.'); </script>";
  }
}
?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/header2.php';?>
<link rel="stylesheet" href="../css/pendaftaran.css">

<!-- Pendaftaran Form -->

<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg border-0 mt-4 mb-5 p-2" style="border-radius: 18px;">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4 text-center fw-bold">Formulir Pembelian Obat</h3>
                    <div class="form-section">
                        <form action="" method="POST" autocomplete="off">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" style="border-radius: 12px;" id="nama" name="nama" required placeholder="Masukkan nama">
                            </div>
                            <div class="mb-3">
                                <label for="nama_obat" class="form-label">Nama Obat</label>
                                <input type="text" class="form-control" style="border-radius: 12px;" id="nama_obat" name="nama_obat" required placeholder="Masukkan nama obat">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" style="border-radius: 12px;" id="jumlah" name="jumlah" required min="1" placeholder="Masukkan jumlah">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-gradient btn-lg shadow" style="border-radius: 12px;" name="tambah">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php';?>