<?php 
include '../config/function.php'; 
include '../../layout/header-admin.php'; 
?>

<style>
  .card-summary {
    transition: transform 0.25s ease-in-out, box-shadow 0.25s;
    border-radius: 1.2rem;
    border: none;
    box-shadow: 0 4px 20px rgba(56,142,60,0.08);
    overflow: hidden;
    position: relative;
  }
  .card-summary:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 8px 28px rgba(56,142,60,0.15);
  }
  .icon-bg {
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 4.5rem;
    opacity: 0.1;
    pointer-events: none;
  }
  .chart-container {
    background: #f9fbe7;
    padding: 24px;
    border-radius: 1rem;
    box-shadow: 0 2px 14px rgba(76,175,80,0.07);
    margin-bottom: 2rem;
  }
  .chart-container canvas {
    background: #ffffff;
    border-radius: 0.8rem;
    padding: 10px;
    box-shadow: inset 0 0 0 1px #e8f5e9;
    max-height: 300px;
    width: 100%;
  }
</style>

<main class="col-lg-10 ms-lg-auto px-lg-4">
  <div class="container mt-3 mb-5">
    <div class="row mb-4 g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card card-summary" style="background: linear-gradient(135deg, #FFEB3B 60%, #FFC107 100%); color: white;">
          <span class="icon-bg"><i class="bi bi-cart-check"></i></span>
          <div class="card-body d-flex align-items-center">
            <i class="bi bi-cart-check fs-1 me-3"></i>
            <div>
              <div class="fw-semibold mb-1">Total Pembelian</div>
              <div class="fs-3 fw-bold"><?php echo $total_pembelian; ?></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card card-summary" style="background: linear-gradient(135deg, #64B5F6 60%, #2196F3 100%); color: white;">
          <span class="icon-bg"><i class="bi bi-person-check"></i></span>
          <div class="card-body d-flex align-items-center">
            <i class="bi bi-person-check fs-1 me-3"></i>
            <div>
              <div class="fw-semibold mb-1">Total Pendaftaran</div>
              <div class="fs-3 fw-bold"><?php echo $total_pendaftaran; ?></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card card-summary" style="background: linear-gradient(135deg, #81C784 60%, #388E3C 100%); color: white;">
          <span class="icon-bg"><i class="bi bi-box-seam"></i></span>
          <div class="card-body d-flex align-items-center">
            <i class="bi bi-box-seam fs-1 me-3"></i>
            <div>
              <div class="fw-semibold mb-1">Total Produk</div>
              <div class="fs-3 fw-bold"><?php echo $total_produk; ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Grafik -->
    <div class="row">
      <div class="col-lg-6 chart-container" data-aos="fade-right" data-aos-delay="100">
        <h5 class="text-center"><i class="fa-solid fa-chart-pie me-2"></i>Distribusi Data (Pie Chart)</h5>
        <canvas id="pieChart"></canvas>
      </div>
      <div class="col-lg-6 chart-container" data-aos="fade-left" data-aos-delay="200">
        <h5 class="text-center"><i class="fa-solid fa-chart-column me-2"></i>Distribusi Data (Bar Chart)</h5>
        <canvas id="barChart"></canvas>
      </div>
    </div>
  </div>
</main>

<?php include '../../layout/footer-admin.php'; ?>

<!-- Load Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const pieCtx = document.getElementById("pieChart").getContext("2d");
  const barCtx = document.getElementById("barChart").getContext("2d");

  const chartData = {
    labels: ["Total Pembelian", "Total Pendaftaran", "Total Produk"],
    datasets: [{
      label: "Statistik Dashboard",
      data: [<?php echo $total_pembelian; ?>, <?php echo $total_pendaftaran; ?>, <?php echo $total_produk; ?>],
      backgroundColor: ["#FFCA28", "#42A5F5", "#66BB6A"],
      borderColor: ["#FBC02D", "#1E88E5", "#388E3C"],
      borderWidth: 2
    }]
  };

  new Chart(pieCtx, {
    type: "pie",
    data: chartData,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: "bottom",
          labels: { font: { size: 14 }, color: "#2e7d32" }
        }
      },
      animation: { duration: 1000, easing: "easeOutCirc" }
    }
  });

  new Chart(barCtx, {
    type: "bar",
    data: chartData,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        x: {
          grid: { display: false },
          ticks: {
            color: "#33691e",
            font: { size: 14, weight: "500" }
          }
        },
        y: {
          beginAtZero: true,
          grid: { color: "#f1f8e9" },
          ticks: {
            color: "#33691e",
            font: { size: 13 }
          }
        }
      },
      plugins: { legend: { display: false } },
      animation: { duration: 1000, easing: "easeInOutQuart" }
    }
  });
</script>