<?php include '../../layout/header-public.php'; ?>



<div class="container mt-5">
  <div class="search-container">
    <input type="text" id="searchBox" class="search-input" placeholder="Cari Obat...">
  </div>

  <section class="mb-5" id="daftar-menu">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      <?php foreach ($menu as $item): ?>
        <div class="col" data-aos="fade-up">
          <div class="card h-100 shadow-sm border-0">
            <img
              src="../../admin/img/<?= htmlspecialchars($item['foto_produk'], ENT_QUOTES, 'UTF-8') ?>"
              class="card-img-top"
              alt="<?= htmlspecialchars($item['nama_obat'], ENT_QUOTES, 'UTF-8') ?>"
              loading="lazy"
            />
            <div class="card-body d-flex flex-column text-center">
              <h5 class="card-title">
                <i class="fa-solid fa-pills me-2"></i>
                <?= htmlspecialchars($item['nama_obat'], ENT_QUOTES, 'UTF-8') ?>
              </h5>
              <p class="card-text price fw-bold">
                Rp<?= number_format($item['harga'], 0, ',', '.') ?>
              </p>
              <p class="card-text flex-grow-1">
                <?= htmlspecialchars($item['deskripsi'], ENT_QUOTES, 'UTF-8') ?>
              </p>
            </div>
            <div class="card-footer bg-transparent border-top-0 text-center">
              <a href="#" class="btn-buy">
                <i class="fa fa-shopping-cart me-2"></i> Beli Sekarang
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  AOS.init();

  document.getElementById("searchBox").addEventListener("keyup", function() {
    let searchTerm = this.value.toLowerCase();
    let cards = document.querySelectorAll(".card");

    cards.forEach(card => {
      let namaObat = card.querySelector(".card-title").innerText.toLowerCase();
      card.parentElement.style.display = namaObat.includes(searchTerm) ? "block" : "none";
    });
  });
</script>

<?php include '../../layout/footer.php'; ?>
