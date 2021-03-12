<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Pertemuan 6 - 12 Maret 2021
    // Pertemuan kali ini membahas Associative array di PHP
?>

<?php 
// $mahasiswa = [
// ["Alif Luqman", "203040046", "gggg@gmail.com", "Teknik Informatika"],
// ["203040076", "Budi", "aaaaa@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[	
		"nrp" => "203040046",
		"nama" => " Alif Luqman",
		"email" => "gggg@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "itu.png"
	],
	[
		"nama" => "Budi", 
		"nrp" => "203040076",
		"email" => "aaaaa@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "say.png"
	]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>