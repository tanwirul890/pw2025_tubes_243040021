<?php 
include '../config/function.php'; 
include '../../layout/header-admin.php';
?>
<link rel="stylesheet" href="../css/data.css">

<!-- Konten Utama -->
<main class="col-lg-10 ms-lg-auto px-lg-4" style="transition: margin-left 0.3s;">
    <!-- Ringkasan pembelian -->
    <div class="container mt-3 mb-5">
        <div class="row mb-4 g-4">

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card card-summary text-white bg-warning shadow">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-box-seam fs-1 me-3"></i>
                        <div>
                            <div class="fw-semibold mb-1">Total Produk</div>
                            <div class="fs-3 fw-bold">
                                <?= $total_produk; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card card-summary text-white bg-primary shadow">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-cash-stack fs-1 me-3"></i>
                        <div>
                            <div class="fw-semibold mb-1">Total Stok</div>
                            <div class="fs-3 fw-bold">
                                <?php
                                $total_stok = 0;
                                foreach ($data_produk as $produk) {
                                    $total_stok += (int)$produk['stock'];
                                }
                                echo $total_stok;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card card-summary text-white bg-success shadow">
                    <div class="card-body d-flex align-items-center">
                        <i class="bi bi-currency-dollar fs-1 me-3"></i>
                        <div>
                            <div class="fw-semibold mb-1">Total Nilai Produk</div>
                            <div class="fs-3 fw-bold">
                                <?php
                                $total_nilai = 0;
                                foreach ($data_produk as $produk) {
                                    $total_nilai += ((int)$produk['harga'] * (int)$produk['stock']);
                                }
                                echo 'Rp ' . number_format($total_nilai, 0, ',', '.') . '.000';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Akhir Ringkasan  Pendaftaran -->

    <!-- Tabel Data Produk -->
    <div class="container mt-3">
        <div class="card shadow-lg" data-aos="fade-up" data-aos-delay="400">
            <div class="header text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Data Produk</h4>
                <a href="tambah-products.php" class="btn btn-light btn-custom shadow-sm">+ Tambah Produk</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover table-custom mb-0 align-middle">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($total_produk > 0): ?>
                            <?php $no = 1; ?>
                            <?php foreach ($data_produk as $produk): ?>
                                <tr data-aos="fade-up" data-aos-delay="500">
                                    <td><?= $no++; ?></td>
                                    <td><?= $produk['nama_obat']; ?></td>
                                    <td><?= $produk['harga']; ?></td>
                                    <td><?= $produk['stock']; ?></td>
                                    <td><?= $produk['waktu']; ?></td>
                                    <td class="aksi-btns">
                                        <!-- detail Data -->
                                        <a href="detail_product.php?id=<?= $produk['id']; ?>"
                                            class="btn btn-secondary btn-sm btn-custom" title="Detail Data">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <!-- Tombol Ubah Data -->
                                        <a href="ubah/ubah-produk.php?id=<?= $produk['id']; ?>"
                                            class="btn btn-success btn-sm btn-custom" title="Ubah Data">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <!-- Tombol Hapus Data -->
                                        <a href="hapus/hapus-produk.php?id=<?= $produk['id']; ?>"
                                            class="btn btn-danger btn-sm btn-custom"
                                            onclick="return confirm('Yakin ingin menghapus data ini?');" title="Hapus Data">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center text-muted">Belum ada data produk.</td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Tabel Data Produk -->
</main>
<!-- Akhir Konten Utama -->

<?php include '../../layout/footer-admin.php'; ?>

