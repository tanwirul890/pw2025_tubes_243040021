<?php include '../config/function.php'?>
<?php $data_pasien = select("SELECT * FROM data_pelanggan"); ?>
<?php include   '../../layout/header2.php'; ?>
<link rel="stylesheet" href="../css/home.css">




<!-- data pembelian obat -->
<div class="container mt-5">
  <div class="card shadow-lg" data-aos="fade-up">
    <div class="header text-white d-flex justify-content-between align-items-center">
      <h4 class="mb-0">Data Pembeli</h4>
      <a href="tambah_pasien.php" class="btn btn-light btn-custom shadow-sm">+ Tambah Pasien</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-custom mb-0">
          <thead>
          <tr>
            <th style="width:5%;">No</th>
            <th style="width:20%;">Nama</th>
            <th style="width:15%;">Email</th>
            <th style="width:25%;">Username</th>
            <th style="width:15%;">Password</th>
            <th style="width:15%;">Tanggal</th>
            <th style="width:20%;">Aksi</th>
          </tr>
          </thead>
          <tbody>
          <?php if (count($data_pasien) > 0): ?>
            <?php $no = 1; ?>
            <?php foreach ($data_pasien as $pasien): ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $pasien['nama']; ?></td>
                <td><?= $pasien['email']; ?></td>
                <td><?= $pasien['username']; ?></td>
                <td><?= $pasien['password']; ?></td>
                <td><?= $pasien['tanggal']; ?></td>
                <td class="text-center">
                  <a href="ubah_pasien.php?id=<?= urlencode($pasien['id']); ?>"
                     class="btn btn-success btn-sm btn-custom me-1" title="Ubah Data">
                    <i class="bi bi-pencil-square"></i> Ubah
                  </a>
                  <a href="hapus_pasien.php?id=<?= urlencode($pasien['id']); ?>"
                     class="btn btn-danger btn-sm btn-custom"
                     onclick="return confirm('Yakin ingin menghapus data ini?');" title="Hapus Data">
                    <i class="bi bi-trash"></i> Hapus
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="6" class="text-center text-muted">Belum ada data pasien.</td>
            </tr>
          <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- akhir data pembelian -->

<?php include  '../../layout/footer.php'; ?>