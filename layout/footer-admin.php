<!-- Memuat JS Bootstrap dan AOS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    // Inisialisasi animasi AOS
    AOS.init({
      duration: 800,
      once: true
    });

    // Fungsi toggle sidebar untuk mobile
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    sidebarToggle.addEventListener('click', function() {
      sidebar.classList.toggle('show');
      sidebarOverlay.style.display = sidebar.classList.contains('show') ? 'block' : 'none';
    });
    sidebarOverlay.addEventListener('click', function() {
      sidebar.classList.remove('show');
      sidebarOverlay.style.display = 'none';
    });
  </script>
</body>
</html>
