<?php
include '../../admin/config/function.php';
$menu = select("SELECT * FROM products"); 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HelathyNesia - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style3.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<style>
     body {
            background: linear-gradient(120deg, #e3f2fd 0%, #bbdefb 50%, #c8e6c9 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
        }
        .navbar {
            background: rgba(255,255,255,0.97);
            box-shadow: 0 4px 24px rgba(25, 118, 210, 0.13);
            border-radius: 0 0 22px 22px;
            padding: 0.7rem 0;
        }
        .navbar-brand {
            font-weight: bold;
            color: #1976d2;
            letter-spacing: 1.5px;
            font-size: 2rem;
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            filter: drop-shadow(0 2px 8px #1976d2aa);
            margin-right: 10px;
        }
        .logo-text {
            color: #1976d2;
            font-weight: bold;
            font-size: 1.4rem;
            letter-spacing: 1.5px;
        }
        .logo-text span {
            color: #43a047;
        }
        .navbar-nav .nav-link {
            color: #1976d2;
            margin-right: 12px;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 1.08rem;
            font-weight: 500;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
        }
        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link:focus,
        .navbar-nav .nav-link:hover {
            background:  #e3f2fd ;
            color: #1565c0;
            box-shadow: 0 2px 8px #1976d220;
        }
        .navbar-toggler {
            border: none;
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }
        @media (max-width: 991.98px) {
            .navbar-nav .nav-link {
                margin-right: 0;
                margin-bottom: 8px;
            }
        }
</style>
<body>
    <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light mb-4 shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="../../css/IMG/logo.png" alt="HealthyNesia" width="48" height="42">
            <span class="logo-text ms-1">Healthy<span>Nesia</span></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pemesanan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <!-- end navbar -->
