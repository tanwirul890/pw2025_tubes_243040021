<?php include '../../layout/header2.php'; ?>
<link rel="stylesheet" href="../css/ubah-data.css">
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

            <!-- card ubah pembelian -->
            <div class="col-lg-10">
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
            </div>
            <!-- card ubah pembelian -->
        </div>
    </div>
    <?php include '../../layout/footer.php'; ?>
    
