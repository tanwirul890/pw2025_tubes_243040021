<?php include '../config/function.php'; ?>
<?php

// Ambil data pembelian
$data_pembelian = select("SELECT * FROM data_pembelian");
$total_pembelian = count($data_pembelian);

// Ambil data pelanggan
$data_pelanggan = select("SELECT * FROM data_pendaftaran_akun");
$total_pelanggan = count($data_pelanggan);

// Ambil data produk
$data_produk = select("SELECT * FROM products");
$total_produk = count($data_produk);

?>  
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HelathyNesia - Dashboard Admin</title>
  <!-- Memuat CSS Bootstrap dan ikon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
  <link rel="stylesheet" href="/css/style2.css">
</head>
<body>
  
  <!-- Tombol toggle sidebar untuk mobile -->
  <button class="sidebar-toggler d-lg-none" id="sidebarToggle" aria-label="Toggle Sidebar">
    <i class="bi bi-list"></i>
  </button>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar Navigasi -->
      <nav class="col-lg-2 sidebar d-lg-block" id="sidebar" data-aos="fade-right">
        <div class="d-flex align-items-center mb-4 px-3">
          <img src="/css/IMG/logo.png" alt="HelathyNesia" width="38" height="32" class="me-2">
          <span class="logo-text">Helthy<span>Nesia</span></span>
        </div>
        <ul class="nav flex-column px-2">
          <!-- Menu Dashboard -->
          <li class="nav-item">
            <a class="nav-link<?= basename($_SERVER['PHP_SELF']) == 'data-pembelian.php' ? ' active' : '' ?>" href="data-pembelian.php">
              <i class="bi bi-speedometer2"></i> Dashboard
            </a>
          </li>
          <!-- Menu Pelanggan -->
          <li class="nav-item">
            <a class="nav-link<?= basename($_SERVER['PHP_SELF']) == 'pelangan.php' ? ' active' : '' ?>" href="pelangan.php">
              <i class="bi bi-people"></i> Pelanggan
            </a>
          </li>
          <!-- Menu Pembelian -->
          <li class="nav-item">
            <a class="nav-link<?= basename($_SERVER['PHP_SELF']) == 'pembelian.php' ? ' active' : '' ?>" href="pembelian.php">
              <i class="bi bi-cart"></i> Pembelian
            </a>
          </li>
          <!-- Menu Produk -->
          <li class="nav-item">
            <a class="nav-link<?= basename($_SERVER['PHP_SELF']) == 'product.php' ? ' active' : '' ?>" href="product.php">
              <i class="bi bi-box"></i> Produk
            </a>
          </li>
        </ul>
      </nav>
      <div class="sidebar-overlay" id="sidebarOverlay"></div>
      <!-- Akhir Sidebar -->
<link rel="stylesheet" href="../css/data-pembeli.css">
      <!-- Konten Utama -->
      <main class="col-lg-10 ms-lg-auto px-lg-4" style="transition: margin-left 0.3s;">
        <!-- Ringkasan Dashboard -->
        <div class="container mt-4">
          <div class="row mb-4 g-4">
            <!-- Kartu Total Pembelian -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <div class="card card-summary text-white bg-primary shadow">
                <div class="card-body d-flex align-items-center">
                  <i class="bi bi-cart-check-fill fs-1 me-3"></i>
                  <div>
                    <div class="fw-semibold mb-1">Total Pembelian</div>
                    <div class="fs-3 fw-bold"><?= $total_pembelian; ?></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Kartu Total Pelanggan -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <div class="card card-summary text-white bg-success shadow">
                <div class="card-body d-flex align-items-center">
                  <i class="bi bi-people-fill fs-1 me-3"></i>
                  <div>
                    <div class="fw-semibold mb-1">Total Pelanggan</div>
                    <div class="fs-3 fw-bold"><?= $total_pelanggan; ?></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Kartu Total Produk -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="card card-summary text-white bg-info shadow">
                <div class="card-body d-flex align-items-center">
                  <i class="bi bi-box-seam fs-1 me-3"></i>
                  <div>
                    <div class="fw-semibold mb-1">Total Produk</div>
                    <div class="fs-3 fw-bold"><?= $total_produk; ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Akhir Ringkasan Dashboard -->

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
                        <td><?= htmlspecialchars($pembelian['nama']); ?></td>
                        <td><?= htmlspecialchars($pembelian['nama_obat']); ?></td>
                        <td><?= htmlspecialchars($pembelian['jumlah']); ?></td>
                        <td><?= htmlspecialchars($pembelian['tanggal']); ?></td>
                        <td class="aksi-btns">
                          <!-- Tombol Ubah Data -->
                          <a href="ubah_pasien.php?id=<?= urlencode($pembelian['id']); ?>"
                             class="btn btn-success btn-sm btn-custom" title="Ubah Data">
                            <i class="bi bi-pencil-square"></i>
                          </a>
                          <!-- Tombol Hapus Data -->
                          <a href="hapus_pasien.php?id=<?= urlencode($pembelian['id']); ?>"
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

        <?php include '../../layout/footer.php'; ?>
      </main>
      <!-- Akhir Konten Utama -->
    </div>
  </div>
  <!-- Memuat JS Bootstrap dan AOS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    // Inisialisasi animasi AOS
    AOS.init({
      duration: 800,
      once: true
    });

    // Fungsi toggle sidebar untuk mobile
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    sidebarToggle.addEventListener('click', function() {
      sidebar.classList.toggle('show');
      sidebarOverlay.style.display = sidebar.classList.contains('show') ? 'block' : 'none';
    });
    sidebarOverlay.addEventListener('click', function() {
      sidebar.classList.remove('show');
      sidebarOverlay.style.display = 'none';
    });
  </script>
</body>
</html>
