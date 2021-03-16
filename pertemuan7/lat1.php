<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Pertemuan 7 - 16 Maret 2021
    // Pertemuan kali ini membahas $_GET
?>

<?php
// $_GET

$mahasiswa = [
	[	
		"nrp" => "203040046",
		"nama" => " Alif Luqman Hakim",
		"email" => "gggg@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "say.png"
	],
	[
		"nama" => "Budi", 
		"nrp" => "203040076",
		"email" => "aaaaa@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "itu.png"
	]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
	<?php foreach( $mahasiswa as $mhs ) : ?>
		<li>
		<a href="lat2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
		</li>
	<?php endforeach; ?>
	</ul>
</body>
</html>