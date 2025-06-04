<?php
// Array data untuk carousel
$carouselItems = [
    [
        'class' => 'satu',
    ],
    [
        'class' => 'dua',
    ],
    [
        'class' => 'tiga',
    ],
];
?>
<?php
// array informasi kesehatan
$info = [
    'title' => 'Tentang Healthynesia',
    'subtitle' => 'Healthynesia adalah platform digital yang menghadirkan informasi kesehatan terpercaya, edukatif, dan mudah diakses untuk seluruh masyarakat Indonesia.',
    'features' => [
        [
            'icon' => 'bi-journal-medical',
            'color' => 'text-success',
            'title' => 'Artikel & Tips Kesehatan',
            'desc' => 'Dapatkan artikel, tips, dan panduan kesehatan terkini dari sumber yang kredibel dan mudah dipahami.'
        ],
        [
            'icon' => 'bi-people-fill',
            'color' => 'text-primary',
            'title' => 'Komunitas & Edukasi',
            'desc' => 'Bergabung dengan komunitas sehat, diskusi, dan edukasi seputar gaya hidup sehat dan kesehatan mental.'
        ]
    ],
    'footer' => 'Kami berkomitmen untuk selalu memperbarui konten agar Anda mendapatkan informasi yang relevan dan bermanfaat setiap saat.'
];
?>
<?php include '../../layout/header2.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="../css/public.css">
<!-- - Banner utama -->
<style>
/* benner */
.carousel .satu,.dua,.tiga {
    height: 400px;
    background-size: cover;
    color: white;
    border-radius: 20px;
    background-position: center;
}
.carousel .satu {
    background-image: url('../img/s1.jpeg');
}
.carousel .dua {
    background-image: url('../img/s2.jpeg');
}
.carousel .tiga {
    background-image: url('../img/s3.jpeg');
}
/* akhir benner */
</style>
<div id="bannerCarousel" class="carousel slide banner-utama" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ($carouselItems as $index => $item): ?>
            <div class="<?php echo $item['class']; ?> carousel-item<?php if ($index === 0) echo ' active'; ?> text-center py-5">
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Berikutnya</span>
    </button>
</div>
<!-- akhir banner utama-->

<!-- informasi kesehatan -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <h2 class="fw-bold mb-4" style="color: #2d8f7c;">
                <i class="bi bi-heart-pulse-fill me-2"></i><?php echo $info['title']; ?>
            </h2>
            <p class="lead mb-4">
                <?php echo $info['subtitle']; ?>
            </p>
        </div>
    </div>
    <div class="row justify-content-center align-items-stretch g-4 mt-2">
        <?php foreach ($info['features'] as $feature): ?>
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="p-4 rounded shadow-sm bg-white flex-fill d-flex flex-column align-items-center text-center h-100">
                    <div class="mb-3">
                        <i class="bi <?php echo $feature['icon']; ?> fs-1 <?php echo $feature['color']; ?>"></i>
                    </div>
                    <h5 class="fw-semibold mb-2"><?php echo $feature['title']; ?></h5>
                    <p class="mb-0"><?php echo $feature['desc']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row mt-4">
        <div class="col-lg-10 mx-auto text-center">
            <p class="mt-3 text-muted">
                <?php echo $info['footer']; ?>
            </p>
        </div>
    </div>
</div>
<!-- akhir informasi kesehatan -->


<?php include '../../layout/footer.php'; ?>