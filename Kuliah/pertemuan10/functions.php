<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Pertemuan 10 - 23 April 2021
    // Pertemuan kali ini membahas Koneksi & Insert Data
?>


<?php 

function koneksi() {
  return mysqli_connect('Localhost', 'root', '', 'pw_203040046');
}

function query($query) {
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if( mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

    return $rows;
}

// function tambah
function tambah($data)
{
  $conn = koneksi();


  $nama = htmlspecialchars($data['nama']);
  $nrp = htmlspecialchars($data['nrp']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
                mahasiswa
            VALUES
            (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar');
          ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

?>