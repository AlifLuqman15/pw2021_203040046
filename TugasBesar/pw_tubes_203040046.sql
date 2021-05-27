-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 06.48
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040046`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Deskripsi` text DEFAULT NULL,
  `Size` varchar(20) NOT NULL,
  `Harga` varchar(20) NOT NULL,
  `Stok` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`Id`, `Nama`, `Deskripsi`, `Size`, `Harga`, `Stok`, `Gambar`) VALUES
(1, 'Crewneck H&amp;M', 'Crewneck yang terbuat dari bahan yang soft agar nyaman untuk di pakai sehari-hari dan berwarna abu-abu.', 'L XL', 'Rp.449.000.00', '125', 'brg1.jpg'),
(2, 'Mask', 'Masker yang terbuat dengan bahan yang berkualitas dan di lengkapi dengan 2 layer namun tetap nyaman untuk dipakai.', 'All Size', 'Rp.48.300.00', '100', 'brg2.jpg'),
(3, 'Hoodie Nasa H&M', 'Hoodie berwarna hitam yang terbuat dengan bahan yang lembut dan nyaman di pakai sehari-hari.', 'M L XL XXL', 'Rp.449.000.00', '65', 'brg3.jpg'),
(5, 'Vans Old School', 'Sneakers dengan warna hitam terbuat dari material canvas dengan insole tekstil.', '40 41 42 43 44', 'Rp899.000.00', '58', 'brg5.jpg'),
(10, 'Tolliver', 'Celana cargo bernuansa army tone untuk adventure look, Warna green army, Regular fit, 2 kantong depan dan belakang.', '30 32 34', 'Rp199.000.00	', '54', 'brg10.jpg'),
(11, '2nd Red Slim Fit Jeans', 'Celana jeans premium quality, Bahan katun denim melar, Slim fit biru muda, 2 kantong depan dan belakang.', '30 32 34', 'Rp179.900.00', '47', 'brg11.jpg'),
(12, 'Deus Ex Machina', 'Koleksi klasik dari Deus Ex Machina, Regular fit, Cotton Jersey.', 'M L XL', 'Rp370.000.00', '30', 'brg12.jpg'),
(14, 'Remix Jeans Bermuda', 'Celana bermuda dengan desain yang nyaman untuk sehari-hari, Warna beige, Regular fit, Kancing dan Resleting depan, 2 kantong depan belakang.', '28 30 32 34 36', 'Rp215.400.00', '76', 'brg14.jpg'),
(15, 'Vans Old School HI', 'Good quality product', '42 43 44', 'Rp.899.000.00', '50', 'brg15.jpg'),
(34, 'Vans X Tudor Sk8-Low Reissue SF', 'Kolaborasi Vans dengan Joel Tudor. Sepatu ini menyertakan pelapis kaus kaki drop-in UltraCush Lite untuk bantalan yang ditinggikan, terbuat dari suede.', '42 43', 'Rp.1.199.000.00', '35', 'brg17.jpg'),
(35, 'Vans X Chris Cosentino', 'Sepatu kolaborasi Vans dengan Chris Cosentino. Sol luar anti selip, terbuat dari vulkanisir. Pelapis kaos kaki Drop-in UltraCush.', '41 43', 'Rp.1.399.000.00', '25', 'brg18.jpg'),
(48, 'Skate Sk-8 HI', 'Lapisan bawah yang diperkuat DURACAP dan dikombinasikan dengan selotip rubah dua bagian baru membuat Skate Sk-8-Hi baru cukup tahan lama. Popcush Cushioning bantalan perlindungan benturan membantu melindungi kaki anda.', '43 44', 'Rp.1.199.000.00', '55', '60ad0acc3416f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'alif', '$2y$10$QQ97FNcTCZ7vtOd9tBrVSu65N6MsiSYOvpv7J1JLzme9Y/O9f9A3u'),
(3, 'luqman', '$2y$10$If6wdCg5eROPH9LvL7bc1u6REgTxtm1hd1FQJUWdklIch/utJ3uAu'),
(4, 'ase', '$2y$10$d.wIT3InzP1podNlnxnnIucrP0fuX2Ryek.Cvu2RCGygD9UFFqoyC'),
(5, 'yohana', '$2y$10$LoBd9iT2odiV1u3T6eUNLeBE1BTAFf/yQeI3eGzpQ.zeiOdG853v6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
