
<?php include '../../layout/header-public.php'; ?>
<link rel="stylesheet" href="../css/home.css">

<!-- Carousel -->
<!-- Carousel Modern -->
<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner rounded-4 overflow-hidden shadow-lg">
    <div class="carousel-item active">
      <img src="../img/s1.jpeg" class="d-block w-100 object-fit-cover" style="height: 600px;" alt="Slide 1">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 text-start px-5" >
        <h1 class="fw-bold text-primary display-4 mb-3">Apotek Digital Terpercaya</h1>
        <p class="lead text-dark">Pesan obat & vitamin dari rumah dengan mudah dan aman</p>
        <a href="#produk" class="btn btn-gradient mt-3">Lihat Produk</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/b1.jpeg" class="d-block w-100 object-fit-cover" style="height: 600px;" alt="Slide 2">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 text-start px-5" style="background:  border-radius: 1rem;">
        <h1 class="fw-bold text-white display-4 mb-3">Cepat & Praktis</h1>
        <p class="lead text-light">Pengiriman cepat langsung ke rumah Anda</p>
        <a href="pembelian.php" class="btn btn-light mt-3">Pesan Sekarang</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/s1.jpeg" class="d-block w-100 object-fit-cover" style="height: 600px;" alt="Slide 3">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 text-start px-5" style=" border-radius: 1rem;">
        <h1 class="fw-bold text-success display-4 mb-3">Sehat Tanpa Ribet</h1>
        <p class="lead text-dark">Cukup klik, produk kesehatan Anda langsung dikirim!</p>
        <a href="#produk" class="btn btn-gradient mt-3">Mulai Belanja</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
  </button>
</div>


<!-- Produk Unggulan -->
<section id="produk" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 text-success display-5">Produk Unggulan</h2>
    <div class="row g-4">
      <!-- Produk 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card produk-card h-100 shadow-sm border-0">
          <img src="../img/3.png" class="card-img-top produk-img" alt="Paracetamol">
          <div class="card-body">
            <h5 class="card-title text-primary">Paracetamol 500mg</h5>
            <p class="card-text">Obat penurun demam & pereda nyeri, cocok untuk semua usia.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold text-success">Rp5.000</span>
              <a href="pembelian.php" class="btn btn-gradient btn-sm">Beli</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Produk 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card produk-card h-100 shadow-sm border-0">
          <img src="../img/2.png" class="card-img-top produk-img" alt="Vitamin C">
          <div class="card-body">
            <h5 class="card-title text-primary">Vitamin C 1000mg</h5>
            <p class="card-text">Membantu menjaga daya tahan tubuh dan melawan infeksi.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold text-success">Rp12.000</span>
              <a href="pembelian.php" class="btn btn-gradient btn-sm">Beli</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Produk 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card produk-card h-100 shadow-sm border-0">
          <img src="../img/4.png" class="card-img-top produk-img" alt="Obat Batuk">
          <div class="card-body">
            <h5 class="card-title text-primary">Obat Batuk Herbal</h5>
            <p class="card-text">Meredakan batuk dan melegakan tenggorokan dengan bahan alami.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold text-success">Rp15.000</span>
              <a href="pembelian.php" class="btn btn-gradient btn-sm">Beli</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Tentang Kami -->
<section class="container my-5 section-card">
  <div class="row align-items-center">
    <div class="col-md-6"><img src="../img/1.png" class="img-fluid rounded shadow-sm" alt="Tentang Kami"></div>
    <div class="col-md-6">
      <h2 class="informasi-heading mb-3">Apotek Digital Terpercaya</h2>
      <p>Kami menyediakan berbagai produk obat dan suplemen berkualitas tinggi yang telah terdaftar resmi. Dengan layanan cepat, aman, dan terpercaya, kami hadir untuk membantu Anda dan keluarga tetap sehat setiap hari.</p>
      <a href="#produk" class="btn btn-gradient">Lihat Produk</a>
    </div>
  </div>
</section>

<!-- Keunggulan -->
<section class="container my-5 section-card">
  <h2 class="text-center fw-bold text-success mb-4">Kenapa Memilih Kami?</h2>
  <div class="row text-center">
    <div class="col-md-4 mb-4">
      <i class="fa-solid fa-shield-halved fa-3x text-success mb-3"></i>
      <h5 class="fw-bold">Produk Terjamin</h5>
      <p>Semua produk kami telah tersertifikasi dan terdaftar resmi di BPOM.</p>
    </div>
    <div class="col-md-4 mb-4">
      <i class="fa-solid fa-truck-fast fa-3x text-success mb-3"></i>
      <h5 class="fw-bold">Pengiriman Cepat</h5>
      <p>Layanan pengiriman cepat dan tepat ke seluruh Indonesia.</p>
    </div>
    <div class="col-md-4 mb-4">
      <i class="fa-solid fa-headset fa-3x text-success mb-3"></i>
      <h5 class="fw-bold">Layanan Pelanggan</h5>
      <p>Tim support kami siap membantu Anda 24/7 untuk segala kebutuhan.</p>
    </div>
  </div>
</section>

<!-- Testimoni -->
<section class="container my-5 section-card">
  <h2 class="text-center fw-bold text-success mb-4"><i class="fa-solid fa-comment-dots me-2"></i> Testimoni Pelanggan</h2>
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow-sm border-0 p-3">
        <p>"Pelayanan cepat dan produk sampai dalam kondisi aman. Sangat puas!"</p>
        <h6 class="fw-bold mb-0">– Anita, Jakarta</h6>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm border-0 p-3">
        <p>"Suplemennya berkualitas, efeknya terasa! Saya langganan beli di sini."</p>
        <h6 class="fw-bold mb-0">– Budi, Bandung</h6>
      </div>
    </div>
  </div>
</section>


<?php include '../../layout/footer.php'; ?>