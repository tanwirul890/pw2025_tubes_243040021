<?php
include '../../admin/config/function.php';
$menu = select("SELECT * FROM products");
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HealthyNesia - Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Pacifico&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(120deg, #e3f2fd 0%, #bbdefb 50%, #c8e6c9 100%);
      min-height: 100vh;
      font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
    }

    .navbar {
      background: rgba(255, 255, 255, 0.95);
      box-shadow: 0 4px 24px rgba(25, 118, 210, 0.13);
      border-radius: 0 0 22px 22px;
    }

    .navbar-brand {
      font-weight: bold;
      color: #1976d2;
      font-size: 2rem;
    }

    .navbar-brand img {
      margin-right: 10px;
    }

    .logo-text {
      color: #1976d2;
      font-weight: bold;
      font-size: 1.4rem;
    }

    .logo-text span {
      color: #43a047;
    }

    .nav-link {
      color: #1976d2;
      font-weight: 500;
      padding: 10px 20px;
      border-radius: 10px;
    }

    .nav-link:hover, .nav-link.active {
      background-color: rgba(255, 255, 255, 0.5);
      color: #1565c0;
    }

   .carousel-caption {
  max-width: 600px;
  transition: all 0.5s ease;
}

.carousel-item img {
  object-fit: cover;
  height: 100%;
  filter: brightness(85%);
}

.carousel-indicators [data-bs-target] {
  width: 12px;
  height: 12px;
  background-color: #43a047;
  border-radius: 50%;
}

.btn-gradient {
  background: linear-gradient(90deg, #43a047, #81c784);
  color: #fff;
  border: none;
  border-radius: 20px;
  padding: 10px 28px;
  font-weight: bold;
  box-shadow: 0 4px 14px rgba(0,0,0,0.2);
}

.btn-gradient:hover {
  background: linear-gradient(90deg, #388e3c, #66bb6a);
}
.produk-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border-radius: 1rem;
  overflow: hidden;
  background-color: #fff;
}

.produk-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 24px rgba(0, 128, 0, 0.15);
}

.produk-img {
  height: 250px;
  object-fit: cover;
  border-bottom: 1px solid #eee;
}

.btn-gradient {
  background: linear-gradient(90deg, #43a047, #81c784);
  color: #fff;
  border: none;
  border-radius: 20px;
  padding: 6px 20px;
  font-weight: 600;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  transition: background 0.3s ease;
}

.btn-gradient:hover {
  background: linear-gradient(90deg, #388e3c, #66bb6a);
  color: #fff;
}



    .btn-gradient {
      background: linear-gradient(90deg, #43a047, #81c784);
      color: #fff;
      border: none;
      border-radius: 20px;
      padding: 10px 28px;
      font-weight: bold;
    }

    .btn-gradient:hover {
      background: linear-gradient(90deg, #388e3c, #66bb6a);
    }

    .section-card {
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .badge-favorit {
      position: absolute;
      top: 16px;
      left: 16px;
      background: linear-gradient(90deg, #ffca28, #fff59d);
      color: #4e342e;
      font-weight: bold;
      border-radius: 12px;
      padding: 4px 14px;
      font-size: 0.95rem;
    }

    footer {
      background: linear-gradient(90deg, #66bb6a, #a5d6a7);
      color: #fff;
      padding: 2rem 0;
      text-align: center;
    }

    .informasi-heading {
      font-family: 'Pacifico', cursive;
      color: #1b5e20;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light mb-4 shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="../../css/IMG/logo.png" alt="HealthyNesia" width="48" height="42">
      <span class="logo-text ms-1">Healthy<span>Nesia</span></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="menu.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="pembelian.php">Pemesanan</a></li>
      </ul>
    </div>
  </div>
</nav>

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
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 text-start px-5" style="background: rgba(255, 255, 255, 0.35); backdrop-filter: blur(8px); border-radius: 1rem;">
        <h1 class="fw-bold text-primary display-4 mb-3">Apotek Digital Terpercaya</h1>
        <p class="lead text-dark">Pesan obat & vitamin dari rumah dengan mudah dan aman</p>
        <a href="#produk" class="btn btn-gradient mt-3">Lihat Produk</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/s2.jpeg" class="d-block w-100 object-fit-cover" style="height: 600px;" alt="Slide 2">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 text-start px-5" style="background: rgba(0, 0, 0, 0.35); backdrop-filter: blur(5px); border-radius: 1rem;">
        <h1 class="fw-bold text-white display-4 mb-3">Cepat & Praktis</h1>
        <p class="lead text-light">Pengiriman cepat langsung ke rumah Anda</p>
        <a href="pembelian.php" class="btn btn-light mt-3">Pesan Sekarang</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/s3.jpeg" class="d-block w-100 object-fit-cover" style="height: 600px;" alt="Slide 3">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 text-start px-5" style="background: rgba(255, 255, 255, 0.3); backdrop-filter: blur(6px); border-radius: 1rem;">
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
          <img src="../img/p1.jpg" class="card-img-top produk-img" alt="Paracetamol">
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
          <img src="../img/p2.jpg" class="card-img-top produk-img" alt="Vitamin C">
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
          <img src="../img/p3.jpg" class="card-img-top produk-img" alt="Obat Batuk">
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
    <div class="col-md-6"><img src="../img/about.svg" class="img-fluid rounded shadow-sm" alt="Tentang Kami"></div>
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