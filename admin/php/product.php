<?php include '../config/function.php'; ?>
<?php $data_produk = select("SELECT * FROM products"); ?>
<?php include '../../layout/header2.php'; ?>
<link rel="stylesheet" href="../css/home.css">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="header text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Data Produk</h4>
            <a href="tambah_produk.php" class="btn btn-light btn-custom shadow-sm">+ Tambah Produk</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-custom mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Harga</th>
                            <th>Stock</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($data_produk) > 0): ?>
                            <?php $no = 1; ?>
                            <?php foreach ($data_produk as $produk): ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $produk['nama_obat']; ?></td>
                                    <td><?= $produk['harga']; ?></td>
                                    <td><?= $produk['stock']; ?></td>
                                    <td><?= $produk['waktu']; ?></td>
                                    <td class="text-center">
                                        <a href="ubah_produk.php?id=<?= urlencode($produk['id']); ?>" class="btn btn-success btn-sm btn-custom me-1">Ubah</a>
                                        <a href="hapus_produk.php?id=<?= urlencode($produk['id']); ?>" class="btn btn-danger btn-sm btn-custom" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center text-muted">Belum ada data produk.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include '../../layout/footer.php'; ?>
