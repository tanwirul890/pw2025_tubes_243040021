<?php
 include 'database.php';

function select($query)
{
  global $db;
  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

$data_pasien = select("SELECT * FROM pasien");
?>

<!-- header -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/header2.php';?>
 <link rel="stylesheet" href="../css/homea.css">
 <!--akhir header  -->

    <!-- card data mahasiswa -->
    <div class="container mt-5">
      <div class="card shadow-lg">
        <div class="header text-white">
          <h4 >Data Pasien</h4>
        </div>
        <div class="card-body">
          <!-- tambah data -->
            <div class="mb-3">
            <a href="tambah_pasien.php" class="btn btn-primary">Tambah Pasien</a>
            </div>
            <!-- data padsien -->
            <table class="table table-bordered table-hover table-custom">
            <thead>
              <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Nik</th>
              <th>Penyakit</th>
              <th>Tanggal</th>
              <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($data_pasien as $pasien): ?>
              <tr>
              <td><?= $no++; ?></td>
              <td><?= $pasien['Nama']; ?></td>
              <td><?= $pasien['Nik']; ?></td>
              <td><?= $pasien['Penyakit']; ?></td>
              <td><?= $pasien['Tanggal']; ?></td>
              <td class="text-center">
                <button type="button" class="btn btn-success btn-sm">Ubah</button>
                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
              </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
            </table>
        </div>
      </div>
    </div>
    <!-- akhir card data mahasiwa -->
  
<!-- footer -->
<?php include $_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php';?> 