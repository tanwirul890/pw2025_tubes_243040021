

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

//  enkripsi password
 $password = password_hash($password, PASSWORD_DEFAULT);


    $query = "INSERT INTO data_pendaftaran_akun  VALUES (null, '$nama', '$email', '$username', '$password',  current_timestamp())";

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

    //  enkripsi password
 $password = password_hash($password, PASSWORD_DEFAULT);

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
    $deskripsi = $data['deskripsi'];
    $foto_Produk = upload_file();
    $query = "INSERT INTO products VALUES (null, '$nama_obat', '$harga', '$stok', '$deskripsi', '$foto_Produk', current_timestamp())";

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
    $deskripsi = $data['deskripsi'];
    $foto_Produk = uploade_file();

    // if ($_FILES['foto_produk']['error'] === 4) {

    //     $foto_Produk = $foto_lama;
    // } else {

    //     $foto_Produk = uploade_file();
    // }

    $query = "UPDATE products SET nama_obat = '$nama_obat', harga = '$harga', stock = '$stok', deskripsi = '$deskripsi', foto_produk = '$foto_Produk' WHERE id = $id";

    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}

// fungsi untuk mengupload file
function upload_file() {
    $namaFile = $_FILES['foto_produk']['name'];
    $ukuranFile = $_FILES['foto_produk']['size'];
    $error = $_FILES['foto_produk']['error'];
    $tmpName = $_FILES['foto_produk']['tmp_name'];

    // cek apakah ada gambar yang diupload
    if ($error === 4) {
        return 'default.jpg'; // jika tidak ada gambar, gunakan gambar default
    }

    // cek apakah yang diupload adalah gambar
   $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
   $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
   $ekstensiGambar = strtolower($ekstensiGambar);


    
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang anda upload bukan gambar!');</script>";
        return false;
    }

    // cek jika ukuran file terlalu besar
    if ($ukuranFile > 2000000) {
        echo "<script>alert('Ukuran gambar terlalu besar!');</script>";
        return false;
    }

    // generate nama file baru
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    // lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, '../img/' . $namaFileBaru);

    return $namaFileBaru;
}
// fungsi untuk mengubah file
function uploade_file() {
    $namaFile = $_FILES['foto_produk']['name'];
    $ukuranFile = $_FILES['foto_produk']['size'];
    $error = $_FILES['foto_produk']['error'];
    $tmpName = $_FILES['foto_produk']['tmp_name'];

    // cek apakah ada gambar yang diupload
    if ($error === 4) {
        return 'default.jpg'; // jika tidak ada gambar, gunakan gambar default
    }

    // cek apakah yang diupload adalah gambar
   $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
   $ekstensiGambar = pathinfo($namaFile, PATHINFO_EXTENSION);
   $ekstensiGambar = strtolower($ekstensiGambar);


    
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang anda upload bukan gambar!');</script>";
        return false;
    }

    // cek jika ukuran file terlalu besar
    if ($ukuranFile > 2000000) {
        echo "<script>alert('Ukuran gambar terlalu besar!');</script>";
        return false;
    }

    // generate nama file baru
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    // lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, '../../img/' . $namaFileBaru);

    return $namaFileBaru;
}


// hapus produk
function hapus_produk($id) {
    global $db;
    $foto_produk= select("SELECT foto_produk FROM products WHERE id = $id")[0];
    unlink('../../img/' . $foto_produk['foto_produk']); // hapus file gambar dari server
    $query = "DELETE FROM products WHERE id = $id";
    mysqli_query($db, $query);
    
    return mysqli_affected_rows($db);
}

