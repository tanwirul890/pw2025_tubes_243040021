<?php
// Ambil data pembelian
$data_pembelian = select("SELECT * FROM data_pembelian");
$total_pembelian = count($data_pembelian);
// Ambil data pendaftaran akun
$data_pendaftaran = select("SELECT * FROM data_pendaftaran_akun");
$total_pendaftaran = count($data_pendaftaran);
// Ambil data produk
$data_produk = select("SELECT * FROM products");
$total_produk = count($data_produk);
// tamah product
if (isset($_POST['tambah'])) {
  if (tambah_produk($_POST) > 0) {
    echo "<script>alert('Data produk berhasil ditambahkan.');location.href='../php/data-product.php';</script>";
  } else {
    echo "<script>alert('Data produk gagal ditambahkan.');</script>";
  }
}

//tambah pembeli
if (isset($_POST['Hinzufügen'])) {
  if(create_barang($_POST) > 0) {
    echo "<script>alert('data barang berhasil di tambahkan.');</script>"; 
  } else {
    echo "<script>alert('data barang gagal di tambahkan.'); </script>";
  }
}

// tambah akun

if (isset($_POST['add'])) {
  if (pendaftaran_akun($_POST) > 0) {
    echo "<script>alert('Data pendaftaran akun berhasil ditambahkan.');</script>";
  } else {
    echo "<script>alert('Data pendaftaran akun gagal ditambahkan.');</script>";
  }
}

// ubah pembelian
if (isset($_POST['ubah'])) {
  if (ubah_barang($_POST) > 0) {
    echo "<script>alert('Data pembelian berhasil diubah.');location.href='../data-pembelian.php';</script>";
  } else {
    echo "<script>alert('Data pembelian gagal diubah.');</script>";
  }
}
// ubah produk
if (isset($_POST['ganti'])) {
    if (ubah_produk($_POST) > 0) {
        echo "<script>alert('Data produk berhasil diubah.');location.href='../data-product.php';</script>";
    } else {
        echo "<script>alert('Data produk gagal diubah. Silakan coba lagi.');</script>";
    }
}
// ubah akun
if (isset($_POST['edit'])) {
  if (ubah_akun($_POST) > 0) {
    echo "<script>alert('Data akun berhasil diubah.');location.href='../data-pendaftaran-akun.php';</script>";
  } else {
    echo "<script>alert('Data akun gagal diubah.');</script>";
  }
}
?>

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
 <!-- plugin table -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">
</head>
<style>
  
      body {
     background: linear-gradient(120deg, #e3f2fd 0%, #bbdefb 50%, #c8e6c9 100%);
      min-height: 100vh;
      font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
    }
    .sidebar {
      min-height: 100vh;
      padding-top: 24px;
      z-index: 1030;
      background: rgba(255,255,255,0.95);
      box-shadow: 0 2px 12px rgba(25, 118, 210, 0.10);
    }
    .sidebar .logo-text {
      color: #1976d2;
      font-weight: bold;   
      font-size: 1.3rem;
      letter-spacing: 1px;
    }

   .logo-text span {
      color: #43a047;
    }

      .sidebar img {
      filter: drop-shadow(0 2px 6px #1976d2aa);
    }


  
    .sidebar .nav-link {
      color: #adb5bd;
      margin-bottom: 6px;
      font-size: 1.07rem;
      border-radius: 8px;
      transition: background 0.2s, color 0.2s;
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 16px;
    }
    .sidebar .nav-link.active, .sidebar .nav-link:hover {
      background: #0d6efd;
      color: #fff;
      font-weight: 500;
    }
    .sidebar .nav-link i {
      font-size: 1.2rem;
    }
    .sidebar-toggler {
      display: none;
      position: absolute;
      top: 18px;
      right: 18px;
      background: #0d6efd;
      color: #fff;
      border: none;
      border-radius: 50%;
      width: 38px;
      height: 38px;
      align-items: center;
      justify-content: center;
      z-index: 1040;
    }

    .sidebar-overlay {
      display: none;
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0,0,0,0.2);
      z-index: 1029;
    }
    .sidebar.show ~ .sidebar-overlay {
      display: block;
    }

      /* Sidebar responsive */
    @media (max-width: 998px) {
      .sidebar {
        position: fixed;
        left: -260px;
        top: 0;
        width: 220px;
        height: 100%;
        z-index: 1030;
        transition: left 0.3s;
      }
      .sidebar.show {
        left: 0;
      }
      .sidebar-toggler {
        display: flex;
      }
      .logo-text{
        letter-spacing: 0px;
        font-size: 10px;
      }
    }
    @media (max-width: 767px) {
      .sidebar {
        width: 180px;
      }
    }
    
      @media (max-width: 998px) {
      .sidebar {
        position: fixed;
        left: -260px;
        top: 0;
        width: 220px;
        height: 100%;
        z-index: 1030;
        transition: left 0.3s;
      }
      .sidebar.show {
        left: 0;
      }
      .sidebar-toggler {
        display: flex;
      }
      .logo-text{
        letter-spacing: 0px;
        font-size: 10px;
      }
    }
</style>
<body>
  
  <!--  sidebar  -->
  <button class="sidebar-toggler d-lg-none" id="sidebarToggle" aria-label="Toggle Sidebar">
    <i class="bi bi-list"></i>
  </button>
  <div class="container-fluid">
    <div class="row">
 
      <nav class="col-lg-2 sidebar d-lg-block" id="sidebar" data-aos="fade-right">
        <div class="d-flex align-items-center mb-4 px-3">
          <img src="../../../css/IMG/logo.png" alt="HelathyNesia" width="38" height="32" class="me-2">
          <span class="logo-text">Helthy<span>Nesia</span></span>
        </div>
        <ul class="nav flex-column px-2">
         
          <li class="nav-item">
            <a class="nav-link" href="dashbort.php">
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
