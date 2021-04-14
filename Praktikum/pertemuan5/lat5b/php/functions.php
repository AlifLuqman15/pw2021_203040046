<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Tugas Praktikum PW
    // Jumat 10.00-11.00
?>

<?php
// fungsi untuk melakukan koneksi database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040046");

    return $conn;
}

// function untuk melakukan query dan memasukkannya ke dalam array
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $Nama = htmlspecialchars($data['Nama']);
    $Deskripsi = htmlspecialchars($data['Deskripsi']);
    $Size = htmlspecialchars($data['Size']);
    $Harga = htmlspecialchars($data['Harga']);
    $Stok = htmlspecialchars($data['Stok']);
    $Gambar = htmlspecialchars($data['Gambar']);

    $query = "INSERT INTO barang
                            VALUES
                            ('', '$Nama', '$Deskripsi', '$Size', '$Harga', '$Stok', '$Gambar')";
                            mysqli_query($conn, $query);
                            return mysqli_affected_rows($conn);
}