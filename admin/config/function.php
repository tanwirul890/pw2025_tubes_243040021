

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
// tambah akun
function pendaftaran_akun($data) {
    global $db;

    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $role = htmlspecialchars($data['role']);

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Query tanpa kolom created_at
    $query = "INSERT INTO data_pendaftaran_akun (nama, email, username, password, role)
              VALUES ('$nama', '$email', '$username', '$password', '$role')";

    mysqli_query($db, $query) or die(mysqli_error($db));

    return mysqli_affected_rows($db);
}



// ubah akun
function ubah_akun($data) {
    global $db;

    $id = (int)$data['id'];
    $nama = htmlspecialchars($data['nama_lengkap']);
    $email = htmlspecialchars($data['email']);
    $username = htmlspecialchars($data['username']);
    $password = $data['password']; // belum di-hash
    $role = htmlspecialchars($data['role']); // jika kamu pakai role juga

    if (!empty($password)) {
        // Jika password tidak kosong, hash dan update
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "UPDATE data_pendaftaran_akun 
                  SET nama = '$nama', email = '$email', username = '$username', password = '$password', role = '$role' 
                  WHERE id = $id";
    } else {
        // Jika password kosong, jangan ubah password
        $query = "UPDATE data_pendaftaran_akun 
                  SET nama = '$nama', email = '$email', username = '$username', role = '$role' 
                  WHERE id = $id";
    }

    mysqli_query($db, $query) or die(mysqli_error($db));

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

