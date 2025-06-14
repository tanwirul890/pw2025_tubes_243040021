<?php
session_start();
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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
     color: #adb5bd;
  
      margin:6px;
      font-size: 1.07rem;
      border-radius: 8px;
      transition: background 0.2s, color 0.2s;
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 10px 16px;
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
  <li class="nav-item">
    <a class="nav-link satu" href="home.php">
      <i class="bi bi-house-door-fill me-2"></i> Home
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link dua" href="menu.php">
      <i class="bi bi-list-ul me-2"></i> produk
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link tiga" href="pembelian.php">
      <i class="bi bi-cart-fill me-2"></i> Pemesanan
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../../index.php">
      <i class="bi bi-box-arrow-right me-2"></i> Logout
    </a>
  </li>
</ul>

    
    </div>
  </div>
</nav>