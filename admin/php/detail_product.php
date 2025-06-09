<?php
include '../config/function.php';
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$produk = select("SELECT * FROM products WHERE id = $id");
$produk = $produk[0];
?>

<?php include '../../layout/header-admin.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

<style>
  

    .product-card {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        padding: 2rem;
        transition: all 0.3s ease;
    }

    .product-img {
        width: 100%;
        max-height: 300px;
        object-fit: cover;
        border-radius: 16px;
        transition: transform 0.3s ease;
    }

    .product-img:hover {
        transform: scale(1.02);
    }

    .product-info h5 {
        color: #2c3e50;
        font-weight: 600;
    }

    .product-info p {
        font-size: 16px;
        color: #555;
    }

    .badge-price {
        background-color: #e3fcef;
        color: #28a745;
        padding: 6px 12px;
        border-radius: 8px;
        font-weight: 600;
    }

    .badge-stock {
        background-color: #fff3cd;
        color: #856404;
        padding: 6px 12px;
        border-radius: 8px;
        font-weight: 600;
    }

    .action-buttons .btn {
        border-radius: 30px;
        padding: 8px 18px;
        font-size: 15px;
    }

    .btn-edit {
        background-color: #0d6efd;
        color: white;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
    }

    .btn-edit:hover, .btn-delete:hover {
        opacity: 0.9;
    }

    @media (max-width: 768px) {
        .product-img {
            max-height: 200px;
        }
    }
</style>

<main class="col-lg-10 ms-auto px-0 mt-5">
    <div class="container detail-wrapper" data-aos="fade-up">
        <div class="product-card">
            <div class="row g-4 align-items-start">
                <!-- Gambar Produk -->
                <div class="col-md-5 text-center">
                     <img src="../img/<?= $produk['foto_produk']; ?>"
                         alt="<?= $produk['nama_obat']; ?>"
                         class="product-img shadow">
                </div>

                <!-- Info Produk -->
                <div class="col-md-7 product-info">
                    <h5 class="mb-2">Nama Produk</h5>
                    <p class="fw-semibold fs-5"><?= $produk['nama_obat']; ?></p>

                    <h5 class="mt-4 mb-2">Harga</h5>
                    <p><span class="badge-price">Rp <?= number_format($produk['harga'], 0, ',', '.'); ?></span></p>

                    <h5 class="mt-4 mb-2">Stok</h5>
                    <p><span class="badge-stock"><?= $produk['stock']; ?> pcs</span></p>

                    <h5 class="mt-4 mb-2">Deskripsi</h5>
                    <p class="text-muted"><?= $produk['deskripsi']; ?></p>

                    <!-- Tombol Aksi -->
                     <div class="text-center mt-4">
                      <a href="dashboard-admin.php" class="btn btn-danger btn-lg rounded-pill shadow-sm">
                          <i class="bi bi-arrow-left-circle"></i> Keluar
                       </a>
                      </div>

                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../../layout/footer-admin.php'; ?>
