<?php
include '../config/function.php';
include '../../layout/header-admin.php';


// Ambil data
$data_pendaftaran = select("SELECT * FROM data_pendaftaran_akun ORDER BY tanggal DESC");
$total_pendaftaran = count($data_pendaftaran);
?>

<link rel="stylesheet" href="../css/data.css">
<style>
  .nav-link.dua{
        background: #0d6efd;
      color: #fff;
      font-weight: 500;
  }
</style>

<main class="col-lg-10 ms-lg-auto px-lg-4" style="transition: margin-left 0.3s;">
  <div class="container mt-3 mb-5">
    <div class="row mb-4 g-4">
      <!-- Ringkasan Hari Ini -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card bg-warning text-white shadow">
          <div class="card-body d-flex align-items-center">
            <i class="bi bi-calendar-day fs-1 me-3"></i>
            <div>
              <div class="fw-semibold mb-1">Pendaftaran Hari Ini</div>
              <div class="fs-3 fw-bold">
                <?php
                $today = date('Y-m-d');
                echo count(select("SELECT * FROM data_pendaftaran_akun WHERE DATE(tanggal) = '$today'"));
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Ringkasan Bulan Ini -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card bg-primary text-white shadow">
          <div class="card-body d-flex align-items-center">
            <i class="bi bi-calendar-month fs-1 me-3"></i>
            <div>
              <div class="fw-semibold mb-1">Pendaftaran Bulan Ini</div>
              <div class="fs-3 fw-bold">
                <?php
                $bulan = date('Y-m');
                echo count(select("SELECT * FROM data_pendaftaran_akun WHERE DATE_FORMAT(tanggal, '%Y-%m') = '$bulan'"));
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Ringkasan Tahun Ini -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card bg-success text-white shadow">
          <div class="card-body d-flex align-items-center">
            <i class="bi bi-calendar3 fs-1 me-3"></i>
            <div>
              <div class="fw-semibold mb-1">Pendaftaran Tahun Ini</div>
              <div class="fs-3 fw-bold">
                <?php
                $tahun = date('Y');
                echo count(select("SELECT * FROM data_pendaftaran_akun WHERE YEAR(tanggal) = '$tahun'"));
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tabel Pendaftaran -->
  <div class="container mt-3 mb-5">
    <div class="card shadow-lg" data-aos="fade-up" data-aos-delay="400">
        <div class="header text-white d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Pendaftaran Akun</h4>
        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modalTambah">+ Tambah Akun</button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-custom mb-0 align-middle" id="example">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($total_pendaftaran > 0): ?>
                <?php $no = 1; foreach ($data_pendaftaran as $akun): ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $akun['nama']; ?></td>
                  <td><?= $akun['email']; ?></td>
                  <td><?= $akun['username']; ?></td>
                  <td>......</td>
                  <td><?= $akun['tanggal']; ?></td>
                  <td>
                    <!-- Tombol Ubah Data -->
                                        <a href="ubah/ubah-akun.php?id=<?= $akun['id']; ?>"
                                           class="btn btn-success btn-sm btn-custom" title="Ubah Data">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <!-- Tombol Hapus Data -->
                                        <a href="hapus/hapus-akun.php?id=<?= $akun['id']; ?>"
                                           class="btn btn-danger btn-sm btn-custom"
                                           onclick="return confirm('Yakin ingin menghapus data ini?');" title="Hapus Data">
                                            <i class="bi bi-trash"></i>
                                        </a>
                  </td>
                </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr><td colspan="7" class="text-center text-muted">Belum ada data.</td></tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Tambah Akun -->
  <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="modalTambahLabel">Tambah Pengguna</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <form method="POST">
          <div class="modal-body">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
  <label for="role" class="form-label">Role</label>
  <select class="form-control" id="role" name="role" required>
    <option value="admin">Admin</option>
    <option value="user">User</option>
  </select>
</div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success" name="add">Tambah Pengguna</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include '../../layout/footer-admin.php'; ?>