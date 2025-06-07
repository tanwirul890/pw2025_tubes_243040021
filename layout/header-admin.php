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
  
  <!--  sidebar  -->
  <button class="sidebar-toggler d-lg-none" id="sidebarToggle" aria-label="Toggle Sidebar">
    <i class="bi bi-list"></i>
  </button>
  <div class="container-fluid">
    <div class="row">
 
      <nav class="col-lg-2 sidebar d-lg-block" id="sidebar" data-aos="fade-right">
        <div class="d-flex align-items-center mb-4 px-3">
          <img src="/css/IMG/logo.png" alt="HelathyNesia" width="38" height="32" class="me-2">
          <span class="logo-text">Helthy<span>Nesia</span></span>
        </div>
        <ul class="nav flex-column px-2">
         
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="bi bi-speedometer2"></i> Dashboard
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="data-pendaftaran-akun.php">
              <i class="bi bi-people"></i> Pelanggan
            </a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="data-pembelian.php">
              <i class="bi bi-cart"></i> Pembelian
            </a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="data-product.php">
              <i class="bi bi-box"></i> Produk
            </a>
          </li>
        </ul>
      </nav>
      <div class="sidebar-overlay" id="sidebarOverlay"></div>
      <!-- Akhir Sidebar -->
