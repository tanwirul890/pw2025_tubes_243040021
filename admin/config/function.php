

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



function create_barang($data) {
    global $db;
    $nama = $data['nama'];
    $nama_obat = $data['nama_obat'];
    $jumlah = $data['jumlah'];
    $query = "INSERT INTO data_pembelian  VALUES (null,'$nama', '$nama_obat', '$jumlah', current_timestamp())";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


?>


