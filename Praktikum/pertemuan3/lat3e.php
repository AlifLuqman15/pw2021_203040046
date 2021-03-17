<?php 
    // Alif Luqman Hakim
    // 203040046
    // https://github.com/AlifLuqman15/pw2021_203040046
    // Tugas Praktikum PW
    // Jumat 10.00-11.00
?>


<?php 
$barang = [
    [
        "nama"=>"Crewneck H&M",
        "deskripsi"=>"Cewneck yang terbuat dari bahan yang soft agar nyaman untuk di pakai sehari-hari dan berwarna abu-abu.",
        "sizeChart"=>"M L XL XXL",
        "harga"=>449000,
        "stokBarang"=>50,
        "foto"=>"brg1.jpg"
    ],
    [
        "nama"=>"Mask",
        "deskripsi"=>"Masker yang terbuat dengan bahan yang berkualitas dan di lengkapi dengan 2 layer namun tetap nyaman untuk di pakai.",
        "sizeChart"=>"All Size",
        "harga"=>48300,
        "stokBarang"=>65,
        "foto"=>"brg2.jpg"
    ],
    [
        "nama"=>"Hoodie Nasa H&M",
        "deskripsi"=>"Hoodie berwarna hitam yang terbuat dengan bahan yang lembut dan nyaman di pakai sehari-hari.",
        "sizeChart"=>"M L XL XXL",
        "harga"=>449000,
        "stokBarang"=>40,
        "foto"=>"brg3.jpg"
    ],
    [
        "nama"=>"Vans Era Comfycush",
        "deskripsi"=>"Daily sneakers dengan desain clasic kombinasi warna hitam dan putih dengan upper canvas, insole tekstile.",
        "sizeChart"=>"41 42 43 44 45",
        "harga"=>1349000,
        "stokBarang"=>70,
        "foto"=>"brg4.jpg"
    ],
    [
        "nama"=>"Vans Old School",
        "deskripsi"=>"sneakers dengan warna hitam terbuat dari material canvas dengan insole tekstil.",
        "sizeChart"=>"40 41 42 43 44",
        "harga"=>899000,
        "stokBarang"=>55,
        "foto"=>"brg5.jpg"
    ],
    [
        "nama"=>"Vans Slip On",
        "deskripsi"=>"Slip On bernuansa monokrom untuk skater look dengan warna abu-abu, upper canvas dan insole sintetis.",
        "sizeChart"=>"40 43 44 45",
        "harga"=>899000,
        "stokBarang"=>55,
        "foto"=>"brg6.jpg"
    ],
    [
        "nama"=>"Deus Ex Machina The Enthusiasm NF",
        "deskripsi"=>"Koleksi klasik dari Deus Ex Machina, Regular fit, Cotton Jersey.",
        "sizeChart"=>"S M L XL XXL",
        "harga"=>370000,
        "stokBarang"=>85,
        "foto"=>"brg7.jpg"
    ],
    [
        "nama"=>"Remix Jeans Cargo",
        "deskripsi"=>"Celana kargo bernuansa washed tone untuk military look, warna hijau, Regular fit, Resleting depan, Material katun tidak transparan.",
        "sizeChart"=>"40 43 44 45",
        "harga"=>420000,
        "stokBarang"=>70,
        "foto"=>"brg8.jpg"
    ],
    [
        "nama"=>"2nd Red Long Pants Chinos",
        "deskripsi"=>"Katun chinos melar, Warna light brown, 5 pocket standart, jahitan bagian dalam pocket rantai.",
        "sizeChart"=>"28 30 32 34",
        "harga"=>179900,
        "stokBarang"=>50,
        "foto"=>"brg9.jpg"
    ],
    [
        "nama"=>"Tolliver",
        "deskripsi"=>"Celana cargo bernuansa army tone untuk adventure look, Warna green army, Regular fit, 2 kantong depan dan belakang.",
        "sizeChart"=>"30 32 34",
        "harga"=>199000,
        "stokBarang"=>76,
        "foto"=>"brg10.jpg"
    ],
    [
        "nama"=>"2nd Red Slim Fit Jeans",
        "deskripsi"=>"Celana jeans premium quality, Bahan katun denim melar, Slim fit biru muda, 2 kantong depan dan belakang.",
        "sizeChart"=>"30 32 34",
        "harga"=>179900,
        "stokBarang"=>35,
        "foto"=>"brg11.jpg"
    ],
    [
        "nama"=>"Deus Ex Machina",
        "deskripsi"=>"Koleksi klasik dari Deus Ex Machina, Regular fit, Cotton Jersey.",
        "sizeChart"=>"M L XL",
        "harga"=>370000,
        "stokBarang"=>30,
        "foto"=>"brg12.jpg"
    ],
    [
        "nama"=>"Deus Ex Machina Land Circle Logo NF",
        "deskripsi"=>"Land Circle Logo adalah bagian dari Deus Ex Machina klasik, Regular fit.",
        "sizeChart"=>"L XL",
        "harga"=>296000,
        "stokBarang"=>20,
        "foto"=>"brg13.jpg"
    ],
    [
        "nama"=>"Remix Jeans Bermuda",
        "deskripsi"=>"Celana bermuda dengan desain yang nyaman untuk sehari-hari, Warna beige, Regular fit, Kancing dan Resleting depan, 2 kantong depan belakang",
        "sizeChart"=>"28 30 32 34 36",
        "harga"=>215400,
        "stokBarang"=>40,
        "foto"=>"brg14.jpg"
    ]
];

function rupiahIDR($angka){
    return "Rp" . number_format($angka,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Axell Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    
</head>
<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Size</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang as $dagang => $barang) : ?>
                    <tr>
                        <td><?= $dagang+1; ?></td>
                        <td><?= $barang["nama"]; ?></td>
                        <td><?= $barang["deskripsi"]; ?></td>
                        <td><?= $barang["sizeChart"]; ?></td>
                        <td><?= rupiahIDR($barang["harga"]) ?></td>
                        <td><?= $barang["stokBarang"]; ?></td>
                        <td>
                            <figure class="image is-128x128">
                                <img src="img/<?= $barang["foto"]; ?>" alt="">
                            </figure>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#cari').DataTable();
        } );
    </script>
</body>
</html>