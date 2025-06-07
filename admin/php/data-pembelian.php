<?php include '../config/function.php'; ?>

<?php
// Ambil data pembelian
$data_pembelian = select("SELECT * FROM data_pembelian");
$total_pembelian = count($data_pembelian);
?>  

<?php include '../../layout/header-admin.php'; ?>
<link rel="stylesheet" href="../css/data-pembeli.css">
<style>
      @media (max-width: 998px) {
      .sidebar {
        position: fixed;
        left: -260px;
        top: 0;
        width: 220px;
        height: 100%;
        z-index: 1030;
        transition: left 0.3s;
      }
      .sidebar.show {
        left: 0;
      }
      .sidebar-toggler {
        display: flex;
      }
      .logo-text{
        letter-spacing: 0px;
        font-size: 10px;
      }
    }
</style>

<!-- Konten Utama -->
<main class="col-lg-10 ms-lg-auto px-lg-4" style="transition: margin-left 0.3s;">
  <!-- Ringkasan pembelian -->
  <div class="container mt-3 mb-5">
    <div class="row mb-4 g-4">

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card card-summary text-white bg-warning shadow">
          <div class="card-body d-flex align-items-center">
            <i class="bi bi-calendar-day fs-1 me-3"></i>
            <div>
              <div class="fw-semibold mb-1">Pembelian Harian</div>
              <div class="fs-3 fw-bold">
                <?php
                $today = date('Y-m-d');
                $pembelian_harian = count(select("SELECT * FROM data_pembelian WHERE tanggal = '$today'"));
                echo $pembelian_harian;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card card-summary text-white bg-primary shadow">
          <div class="card-body d-flex align-items-center">
            <i class="bi bi-calendar-month fs-1 me-3"></i>
            <div>
              <div class="fw-semibold mb-1">Pembelian Bulanan</div>
              <div class="fs-3 fw-bold">
                <?php
                $bulan = date('Y-m');
                $pembelian_bulanan = count(select("SELECT * FROM data_pembelian WHERE DATE_FORMAT(tanggal, '%Y-%m') = '$bulan'"));
                echo $pembelian_bulanan;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card card-summary text-white bg-success shadow">
          <div class="card-body d-flex align-items-center">
            <i class="bi bi-calendar3 fs-1 me-3"></i>
            <div>
              <div class="fw-semibold mb-1">Pembelian Tahunan</div>
              <div class="fs-3 fw-bold">
                <?php
                $tahun = date('Y');
                $pembelian_tahunan = count(select("SELECT * FROM data_pembelian WHERE YEAR(tanggal) = '$tahun'"));
                echo $pembelian_tahunan;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Ringkasan  Pembelian -->

  <!-- Tabel Data Pembelian Obat -->
  <div class="container mt-3">
    <div class="card shadow-lg" data-aos="fade-up" data-aos-delay="400">
      <div class="header text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Pembelian</h4>
        <a href="tambah_pasien.php" class="btn btn-light btn-custom shadow-sm">+ Tambah Pembelian</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-custom mb-0 align-middle">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nama Obat</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php if ($total_pembelian > 0): ?>
              <?php $no = 1; ?>
              <?php foreach ($data_pembelian as $pembelian): ?>
                <tr data-aos="fade-up" data-aos-delay="500">
                  <td><?= $no++; ?></td>
                  <td><?= $pembelian['nama']; ?></td>
                  <td><?= $pembelian['nama_obat']; ?></td>
                  <td><?= $pembelian['jumlah']; ?></td>
                  <td><?= $pembelian['tanggal']; ?></td>
                  <td class="aksi-btns">
                    <!-- Tombol Ubah Data -->
                    <a href="ubah-pembeli.php?id=<?= $pembelian['id']; ?>"
                       class="btn btn-success btn-sm btn-custom" title="Ubah Data">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                    <!-- Tombol Hapus Data -->
                    <a href="hapus-pembeli.php?id=<?= $pembelian['id']; ?>"
                       class="btn btn-danger btn-sm btn-custom"
                       onclick="return confirm('Yakin ingin menghapus data ini?');" title="Hapus Data">
                      <i class="bi bi-trash"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="6" class="text-center text-muted">Belum ada data pembelian.</td>
              </tr>
            <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Tabel Data Pembelian -->
</main>
<!-- Akhir Konten Utama -->
</div>
</div>
<?php include '../../layout/footer-admin.php'; ?>
