<?php include '../../layout/header-public.php'; ?>
<link rel="stylesheet" href="../../css/menu.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> <!-- AOS CSS -->

<style>

  .banner {
    background-color:white;
    padding: 60px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  .banner h1 {
    font-family: 'Pacifico', cursive;
    color: #1565c0;
    font-size: 3rem;
  }

  .banner p {
    font-size: 1.2rem;
    color: #444;
  }

  .search-container {
    position: relative;
    max-width: 400px;
    margin: auto;
    padding: 10px;
    border-radius: 12px;
    background: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
  }

  .search-input {
    width: 100%;
    padding: 12px;
    border: none;
    font-size: 1rem;
    border-radius: 8px;
    outline: none;
  }

  .search-container i {
    padding: 0 15px;
    color: #1565c0;
  }

  .card {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    border-radius: 12px;
    overflow: hidden;
    background: white;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
  }

  .card-img-top {
    height: 230px;
    object-fit: cover;
  }

  .btn-buy {
    display: block;
    width: 100%;
    padding: 12px;
    background: #1565c0;
    color: white;
    border-radius: 8px;
    font-weight: bold;
    text-transform: uppercase;
    transition: all 0.3s;
  }

  .btn-buy:hover {
    background: #004ba0;
    transform: scale(1.07);
  }
</style>

<!-- Banner -->
<section class="container mb-5">
  <div class="banner" data-aos="fade-up">
    <h1>Healthy Nesia</h1>
    <p>Temukan berbagai **obat dan produk kesehatan terbaik** untuk mendukung kesejahteraan Anda. 
    Semua produk kami **terjamin aman, berkualitas, dan direkomendasikan oleh tenaga medis terpercaya**!</p>
  </div>
</section>

<!-- Search -->
<div class="container mt-5">
  <div class="search-container">
    <i class="fa fa-search"></i>
    <input type="text" id="searchBox" class="search-input" placeholder="Cari Obat...">
  </div>

  <!-- Katalog Produk -->
  <section class="mb-5 mt-5" id="daftar-menu">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      <?php if (!empty($menu)): ?>
        <?php foreach ($menu as $item): ?>
          <div class="col" data-aos="fade-up" data-aos-duration="800">
            <div class="card h-100 shadow-sm border-0">
              <img src="<?= htmlspecialchars('../../admin/img/' . $item['foto_produk'], ENT_QUOTES, 'UTF-8') ?>" 
                   class="card-img-top" 
                   alt="<?= htmlspecialchars($item['nama_obat'], ENT_QUOTES, 'UTF-8') ?>" 
                   loading="lazy" data-aos="zoom-in" data-aos-duration="1000"/>
              <div class="card-body d-flex flex-column text-center">
                <h5 class="card-title">
                  <i class="fa-solid fa-pills me-2"></i> <?= htmlspecialchars($item['nama_obat'], ENT_QUOTES, 'UTF-8') ?>
                </h5>
                <p class="card-text price">
                  <i class="fa fa-tag me-2"></i> Rp<?= number_format($item['harga'], 0, ',', '.') ?>
                </p>
                <p class="card-text">
                  <i class="fa fa-info-circle me-2"></i> <?= htmlspecialchars($item['deskripsi'], ENT_QUOTES, 'UTF-8') ?>
                </p>
                <p class="card-text">
                  <i class="fa fa-box me-2"></i> Stok: <?= htmlspecialchars($item['stock'], ENT_QUOTES, 'UTF-8') ?>
                </p>
              </div>
              <div class="card-footer bg-transparent border-top-0 text-center">
                <a href="#" class="btn-buy" data-aos="fade-up" data-aos-delay="300">
                  <i class="fa fa-shopping-cart me-2"></i> Beli Sekarang
                </a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-center text-muted" data-aos="fade-up">Produk tidak tersedia.</p>
      <?php endif; ?>
    </div>
  </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
    delay: 200
  });

   document.getElementById("searchBox").addEventListener("input", function() {
    let searchTerm = this.value.toLowerCase();
    let cards = document.querySelectorAll(".col");

    cards.forEach(card => {
      let namaObat = card.querySelector(".card-title").innerText.toLowerCase();
      card.style.display = namaObat.includes(searchTerm) ? "block" : "none";
    });
  });

</script>

<?php include '../../layout/footer.php'; ?>