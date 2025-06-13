<?php
include '../../admin/config/function.php';
$menu = select("SELECT * FROM products");
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Menu Produk - HealthyNesia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #e3f2fd, #f1f8e9);
      color: #333;
    }

    .navbar {
      background-color: #fff;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      border-radius: 0 0 16px 16px;
    }

    .navbar-brand span {
      color: #1976d2;
      font-weight: bold;
      font-size: 1.5rem;
    }

    .section-title {
      text-align: center;
      font-weight: bold;
      font-size: 2.5rem;
      color: #1565c0;
      margin-bottom: 10px;
    }

    .section-subtitle {
      text-align: center;
      color: #555;
      margin-bottom: 40px;
      font-size: 1.1rem;
    }

    .search-container {
      max-width: 500px;
      margin: 20px auto 40px;
      position: relative;
    }

    .search-container input {
      padding: 14px 20px;
      width: 100%;
      border-radius: 30px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }

    .produk-card {
      border: 0;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background-color: #ffffff;
      position: relative;
      max-width: 280px;
      margin: auto;
    }

    .produk-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.15);
    }

    .produk-card img {
      height: 180px;
      width: 100%;
      object-fit: cover;
    }

    .produk-card .card-body {
      padding: 1rem;
      text-align: center;
    }

    .produk-card .card-title {
      font-size: 1rem;
      font-weight: bold;
      color: #1565c0;
      margin-bottom: 0.5rem;
    }

    .produk-card .card-body p {
      font-size: 0.9rem;
      color: #444;
      margin-bottom: 0.5rem;
    }

    .produk-card .btn-pesan {
      background-color: #43a047;
      color: white;
      padding: 6px 16px;
      font-size: 0.875rem;
      border: none;
      border-radius: 20px;
      transition: background-color 0.3s ease;
    }

    .produk-card .btn-pesan:hover {
      background-color: #388e3c;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="../../css/IMG/logo.png" width="48" height="42" alt="logo">
      <span class="ms-2">Healthy<span style="color:#43a047;">Nesia</span></span>
    </a>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="menu.php" class="nav-link active">Produk</a></li>
        <li class="nav-item"><a href="pembelian.php" class="nav-link">Pemesanan</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<div class="container mt-5">
  <h2 class="section-title">Produk Unggulan</h2>
  <p class="section-subtitle">Jelajahi produk kesehatan pilihan terbaik kami untuk Anda dan keluarga.</p>

  <!-- Search -->
  <div class="search-container">
    <input type="text" class="form-control" placeholder="Cari nama obat..." id="searchInput">
  </div>

  <!-- Produk -->
  <div class="row row-cols-2 row-cols-md-3 g-4 mt-4 mb-5" id="produkList">
    <?php if (!empty($menu)) : ?>
      <?php foreach ($menu as $item): ?>
        <div class="col produk-item">
          <div class="card border-0 shadow position-relative produk-card">
            <img src="<?= '../../admin/img/' . htmlspecialchars($item['foto_produk']) ?>" class="card-img-top" alt="<?= htmlspecialchars($item['nama_obat']) ?>">
            <div class="card-body text-center">
              <h5 class="card-title"><?= htmlspecialchars($item['nama_obat']) ?></h5>
              <p><?= htmlspecialchars($item['deskripsi']) ?></p>
              <p class="text-primary fw-bold">Rp<?= number_format($item['harga'], 0, ',', '.') ?></p>
              <p class="text-muted small">Stok: <?= htmlspecialchars($item['stock']) ?></p>
              <a href="pembelian.php?id=<?= $item['id'] ?>" class="btn btn-pesan">Pesan</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="text-center text-muted">Tidak ada produk tersedia saat ini.</p>
    <?php endif; ?>
  </div>
</div>

<script>
  document.getElementById("searchInput").addEventListener("input", function () {
    const term = this.value.toLowerCase();
    const items = document.querySelectorAll(".produk-item");

    items.forEach(item => {
      const title = item.querySelector(".card-title").innerText.toLowerCase();
      item.style.display = title.includes(term) ? "block" : "none";
    });
  });
</script>

<?php include '../../layout/footer.php'; ?>
