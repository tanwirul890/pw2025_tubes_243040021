
<?php include '../../layout/header-public.php'; ?>
<link rel="stylesheet" href="../css/menu.css">

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
      <div class="col produk-item" data-aos="fade-up" data-aos-delay="200">
        <div class="card border-0 shadow position-relative produk-card" data-aos="zoom-in" data-aos-delay="300">
          <img src="<?= '../../admin/img/' . htmlspecialchars($item['foto_produk']) ?>" class="card-img-top" alt="<?= htmlspecialchars($item['nama_obat']) ?>">
          <div class="card-body text-center">
            <h5 class="card-title" data-aos="fade-down"><?= htmlspecialchars($item['nama_obat']) ?></h5>
            <p data-aos="fade-up" data-aos-delay="400"><?= htmlspecialchars($item['deskripsi']) ?></p>
            <p class="text-primary fw-bold" data-aos="flip-up" data-aos-delay="500">Rp<?= number_format($item['harga'], 0, ',', '.'),'.000' ?></p>
            <p class="text-muted small" data-aos="fade-in" data-aos-delay="600">Stok: <?= htmlspecialchars($item['stock']) ?></p>
            <a href="pembelian.php?id=<?= $item['id'] ?>" class="btn btn-pesan" data-aos="flip-up" data-aos-delay="700">Pesan</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p class="text-center text-muted" data-aos="fade-in" data-aos-delay="800">Tidak ada produk tersedia saat ini.</p>
  <?php endif; ?>
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
