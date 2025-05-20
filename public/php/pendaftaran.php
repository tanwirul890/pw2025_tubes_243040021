<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/header2.php';?>
<link rel="stylesheet" href="../css/pendaftaran.css">
        <!-- Pendaftaran Form -->
        <div class="container">
            <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-lg border-0 mt-4 mb-5 p-2" style="border-radius: 18px;">
                <div class="card-body p-4">
                    <h3 class="card-title mb-4 text-center fw-bold">Formulir Pendaftaran Pasien</h3>
                    <div class="form-section">
                    <form action="proses_pendaftaran.php" method="POST" autocomplete="off">
                        <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" style="border-radius: 12px;" id="nama" name="nama" required placeholder="Masukkan nama lengkap Anda">
                        </div>
                        <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" style="border-radius: 12px;" id="nik" name="nik" required maxlength="16" pattern="\d{16}" placeholder="16 digit NIK">
                        </div>
                        <div class="mb-3">
                        <label for="penyakit" class="form-label">Penyakit</label>
                        <input type="text" class="form-control" style="border-radius: 12px;" id="penyakit" name="penyakit" required placeholder="Contoh: Demam, Batuk">
                        </div>
                        <div class="mb-4">
                        <label for="catatan" class="form-label">Catatan</label>
                        <div class="form-floating">
                            <textarea class="form-control" style="border-radius: 12px; height: 90px;" id="catatan" name="catatan" placeholder="Catatan tambahan (opsional)"></textarea>
                            <label for="catatan">Catatan tambahan (opsional)</label>
                        </div>
                        </div>
                        <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-gradient btn-lg shadow" style="border-radius: 12px;">Daftar</button>
                        </div>
                        <div class="text-center mt-3">
                        <small class="text-muted">Data Anda aman bersama kami.</small>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php';?>