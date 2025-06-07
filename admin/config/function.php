

<?php
$db = mysqli_connect('localhost', 'root', '', 'healthynesia');

function select($query)
{
  global $db;
  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// nambah barang

function create_barang($data) {
    global $db;
    $nama = $data['nama'];
    $nama_obat = $data['nama_obat'];
    $jumlah = $data['jumlah'];
    $query = "INSERT INTO data_pembelian  VALUES (null,'$nama', '$nama_obat', '$jumlah', current_timestamp())";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// ubah barang
function ubah_barang($data) {
    global $db;
    $id = $data['id'];
    $nama = $data['nama'];
    $nama_obat = $data['nama_obat'];
    $jumlah = $data['jumlah'];
    $query = "UPDATE data_pembelian SET nama = '$nama', nama_obat = '$nama_obat', jumlah = '$jumlah' WHERE id = $id";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
// hapus barang
function hapus_barang($id) { 
    global $db;
    $query = "DELETE FROM data_pembelian WHERE id = $id";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
// pendaftaran akun
function pendaftaran_akun($data) {
    global $db;
    $nama = $data['nama'];
    $email = $data['email'];
    $username = $data['username'];
    $password = $data['password'];
    $query = "INSERT INTO data_pendaftaran_akun  VALUES (null, '$nama', '$email', '$username', '$password', current_timestamp())";

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}

// ubah akun
function ubah_akun($data) {
    global $db;
    $id = $data['id'];
    $nama_lengkap = $data['nama_lengkap'];
    $email = $data['email'];
    $username = $data['username'];
    $password = $data['password'];

    if ($password) {
        // Jika password diubah, update password
        $query = "UPDATE data_pendaftaran_akun SET nama = '$nama_lengkap', email = '$email', username = '$username', password = '$password' WHERE id = $id";
    } else {
        // Jika password tidak diubah, tetap gunakan password lama
        $query = "UPDATE data_pendaftaran_akun SET nama = '$nama_lengkap', email = '$email', username = '$username' WHERE id = $id";
    }

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}

// hapus akun
function hapus_akun($id) {
    global $db;
    $query = "DELETE FROM data_pendaftaran_akun WHERE id = $id";
    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}
// tambah produk
function tambah_produk($data) { 
    global $db;
    $nama_obat = $data['nama_obat'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $query = "INSERT INTO products VALUES (null, '$nama_obat', '$harga', '$stok', current_timestamp())";

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}

// ubah produk
function ubah_produk($data) {
    global $db;
    $id = $data['id'];
    $nama_obat = $data['nama_obat'];
    $harga = $data['harga'];
    $stok = $data['stok'];
    $query = "UPDATE products SET nama_obat = '$nama_obat', harga = '$harga', stock = '$stok' WHERE id = $id";
    
    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}


// hapus produk
function hapus_produk($id) {
    global $db;
    $query = "DELETE FROM products WHERE id = $id";
    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}