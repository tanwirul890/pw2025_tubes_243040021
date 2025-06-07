<?php

include '../../config/function.php';

$id = (int)$_GET['id'];

if (hapus_barang($id) > 0) {
    echo "<script>alert('Data pembelian berhasil dihapus.');location.href='../data-pembelian.php';</script>";
} else {
    echo "<script>alert('Data pembelian gagal dihapus.');</script>";
}