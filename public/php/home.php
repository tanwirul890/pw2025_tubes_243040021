<?php include '../../layout/header-public.php'; ?>
<?php
session_start();
// Data produk unggulan
$produkUnggulan = [
    [
        'img' => '../img/1.jpeg',
        'alt' => 'Produk 1',
        'icon' => 'fa-capsules',
        'title' => 'Paracetamol 500mg',
        'desc' => 'Obat pereda nyeri dan demam yang aman dikonsumsi dengan dosis yang sesuai.'
    ],
    [
        'img' => '../img/2.webp',
        'alt' => 'Produk 2',
        'icon' => 'fa-prescription-bottle-medical',
        'title' => 'Vitamin C 1000mg',
        'desc' => 'Meningkatkan daya tahan tubuh dan membantu pemulihan lebih cepat.'
    ],
    [
        'img' => '../img/3.webp',
        'alt' => 'Produk 3',
        'icon' => 'fa-pills',
        'title' => 'Amoxicillin 500mg',
        'desc' => 'Antibiotik yang digunakan untuk mengatasi infeksi bakteri.'
    ]
];

$carouselItems = [
    ['src' => '../img/s1.jpeg', 'alt' => 'Slide 1'],
    ['src' => '../img/s2.jpeg', 'alt' => 'Slide 2'],
    ['src' => '../img/s3.jpeg', 'alt' => 'Slide 3']
];
?>
<style>
    /* General Styles */
/* Carousel fade effect */
        .carousel-fade .carousel-item {
            opacity: 0;
            transition: opacity 0.8s ease-in-out;
        }
        .carousel-fade .carousel-item.active {
            opacity: 1;
            z-index: 1;
        }
        .carousel-inner {
            max-width: 1200px;
            margin: 0 auto;
            border-radius: 24px;
            overflow: hidden;
            height: 340px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.10);
        }
        .carousel-item img {
            object-fit: cover;
            width: 100%;
            height: 340px;
            transition: transform 0.5s;
            filter: brightness(0.95) contrast(1.05);
        }
        .carousel-item img:hover {
            transform: scale(1.04) rotate(-1deg);
        }
        .carousel-caption {
            background: rgba(46,125,50,0.7);
            border-radius: 12px;
            padding: 1rem 2rem;
            color: #fff;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            font-family: 'Montserrat', Arial, sans-serif;
        }
        /* Menu Card */
        .menu-card {
            border-radius: 24px;
            overflow: hidden;
            transition: transform 0.25s, box-shadow 0.25s;
            box-shadow: 0 2px 16px rgba(46,125,50,0.09);
            background: linear-gradient(120deg, #fff 80%, #e8f5e9 100%);
            position: relative;
        }
        .menu-card:hover {
            transform: translateY(-10px) scale(1.04) rotate(-1deg);
            box-shadow: 0 8px 32px rgba(46,125,50,0.18);
        }
        .menu-img {
            border-top-left-radius: 24px;
            border-top-right-radius: 24px;
            object-fit: cover;
            height: 220px;
            transition: filter 0.3s;
        }
        .menu-card:hover .menu-img {
            filter: brightness(0.93) blur(1px);
        }
        .menu-body {
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 24px;
            background: #fff;
            padding-bottom: 1.5rem;
        }
        .menu-icon {
            position: absolute;
            top: 12px;
            right: 18px;
            font-size: 2rem;
            color: #43a047;
            opacity: 0.7;
        }
        .badge-favorit {
            position: absolute;
            top: 16px;
            left: 16px;
            background: linear-gradient(90deg, #ffb300 0%, #ffd54f 100%);
            color: #fff;
            font-weight: bold;
            border-radius: 12px;
            padding: 4px 14px;
            font-size: 0.95rem;
            box-shadow: 0 2px 8px #ffd54f55;
            z-index: 2;
        }
        /* Informasi Section */
        .informasi-section {
            background: #fff url('https://www.transparenttextures.com/patterns/diagmonds-light.png');
            border-radius: 24px;
            box-shadow: 0 4px 24px rgba(46,125,50,0.09);
            padding: 48px 32px;
            margin-bottom: 48px;
            animation: fadeInUp 1.2s;
            position: relative;
            overflow: hidden;
        }
        .informasi-section::before {
            content: "";
            position: absolute;
            top: -40px; right: -40px;
            width: 180px; height: 180px;
            background: radial-gradient(circle, #e8f5e9 60%, transparent 100%);
            z-index: 0;
        }
        .informasi-title {
            color: #2e7d32;
            font-size: 1.2rem;
            letter-spacing: 1px;
            font-family: 'Pacifico', cursive;
        }
        .informasi-heading {
            color: #1b5e20;
            font-size: 2.8rem;
            font-weight: 700;
            font-family: 'Pacifico', cursive;
        }
        .informasi-desc {
            font-size: 1.15rem;
            color: #444;
        }
        .btn-gradient {
            background: linear-gradient(90deg, #43a047 0%, #81c784 100%);
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 10px 28px;
            font-weight: bold;
            transition: background 0.2s, transform 0.2s;
            box-shadow: 0 2px 8px rgba(46,125,50,0.13);
        }
        .btn-gradient:hover {
            background: linear-gradient(90deg, #388e3c 0%, #66bb6a 100%);
            transform: scale(1.05);
        }
</style>
<!-- Carousel -->
<section class="container-fluid px-0 mt-5">
    <div id="mainCarousel" class="carousel slide carousel-fade shadow-lg rounded" data-bs-ride="carousel" data-aos="fade-up">
        <div class="carousel-inner">
            <?php foreach ($carouselItems as $i => $item): ?>
                <div class="carousel-item<?= $i === 0 ? ' active' : '' ?>">
                    <img src="<?= htmlspecialchars($item['src']) ?>" class="d-block w-100 rounded shadow-sm" alt="<?= htmlspecialchars($item['alt']) ?>">
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon rounded-circle bg-dark p-3"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon rounded-circle bg-dark p-3"></span>
        </button>
    </div>
</section>

<!-- Produk Unggulan -->
<section class="container my-5" data-aos="fade-up">
    <h2 class="text-center fw-bold text-primary"><i class="fa-solid fa-star me-2"></i> Produk Unggulan</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <?php foreach ($produkUnggulan as $produk): ?>
            <div class="col" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-lg h-100 rounded hover-scale">
                    <img src="<?= htmlspecialchars($produk['img']) ?>" class="card-img-top rounded-top" alt="<?= htmlspecialchars($produk['alt']) ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-primary"><i class="fa-solid <?= htmlspecialchars($produk['icon']) ?> me-2"></i> <?= htmlspecialchars($produk['title']) ?></h5>
                        <p class="card-text text-muted"><?= htmlspecialchars($produk['desc']) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include '../../layout/footer.php'; ?>