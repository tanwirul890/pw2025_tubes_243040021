<?php

include '../../config/function.php';

$id = (int)$_GET['id'];

if (hapus_akun($id) > 0) {
    echo "<script>alert('Data pendaftaran akun berhasil dihapus.');location.href='../data-pendaftaran-akun.php';</script>";
} else {
    echo "<script>alert('Data pendaftaran akun gagal dihapus.');</script>";
}