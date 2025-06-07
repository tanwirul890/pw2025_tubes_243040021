<?php

include '../../config/function.php';

$id = (int)$_GET['id'];

if (hapus_produk($id) > 0) {
    echo "<script>alert('Data produk berhasil dihapus.');location.href='../data-product.php';</script>";
} else {
    echo "<script>alert('Data produk gagal dihapus.');</script>";
}