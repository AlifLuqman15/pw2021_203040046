-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2021 pada 09.07
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
(1, 'Crewneck H&M', 'Crewneck yang terbuat dari bahan yang soft agar nyaman untuk di pakai sehari-hari dan berwarna abu-abu.', 'M L XL', 'Rp.449.000.00', '125', 'brg1.jpg'),
(2, 'Mask', 'Masker yang terbuat dengan bahan yang berkualitas dan di lengkapi dengan 2 layer namun tetap nyaman untuk dipakai.', 'All Size', 'Rp.48.300.00', '100', 'brg2.jpg'),
(3, 'Hoodie Nasa H&M', 'Hoodie berwarna hitam yang terbuat dengan bahan yang lembut dan nyaman di pakai sehari-hari.', 'M L XL XXL', 'Rp.449.000.00', '65', 'brg3.jpg'),
(4, 'Vans Era Comfycush', 'Daily sneakers dengan desain clasic kombinasi warna hitam dan putih dengan upper canvas, insole tekstile.', '40 41 43 44 45', 'Rp1.349.000.00', '185', 'brg4.jpg'),
(5, 'Vans Old School', 'Sneakers dengan warna hitam terbuat dari material canvas dengan insole tekstil.', '40 41 42 43 44', 'Rp899.000.00', '58', 'brg5.jpg'),
(6, 'Vans Slip On', 'Slip On bernuansa monokrom untuk skater look dengan warna abu-abu, upper canvas dan insole sintetis.', '40 43 44 45', 'Rp899.000.00', '70', 'brg6.jpg'),
(7, 'Deus Ex Machina The Enthusiasm NF', 'Koleksi klasik dari Deus Ex Machina, Regular fit, Cotton Jersey.', 'M L XL', 'Rp370.000.00', '49', 'brg7.jpg'),
(8, 'Remix Jeans Cargo', 'Celana kargo bernuansa washed tone untuk military look, warna hijau, Regular fit, Resleting depan, Material katun tidak transparan.', '40 43 44 45', 'Rp420.000.00', '67', 'brg8.jpg'),
(9, '2nd Red Long Pants Chinos', 'Katun chinos melar, Warna light brown, 5 pocket standart, jahitan bagian dalam pocket rantai.', '28 30 32 34', 'Rp179.900.00', '46', 'brg9.jpg'),
(10, 'Tolliver', 'Celana cargo bernuansa army tone untuk adventure look, Warna green army, Regular fit, 2 kantong depan dan belakang.', '30 32 34', 'Rp199.000.00	', '54', 'brg10.jpg'),
(11, '2nd Red Slim Fit Jeans', 'Celana jeans premium quality, Bahan katun denim melar, Slim fit biru muda, 2 kantong depan dan belakang.', '30 32 34', 'Rp179.900.00', '47', 'brg11.jpg'),
(12, 'Deus Ex Machina', 'Koleksi klasik dari Deus Ex Machina, Regular fit, Cotton Jersey.', 'M L XL', 'Rp370.000.00', '30', 'brg12.jpg'),
(13, 'Deus Ex Machina Land Circle Logo NF', 'Land Circle Logo adalah bagian dari Deus Ex Machina klasik, Regular fit.', 'L XL', 'Rp296.000.00', '45', 'brg13.jpg'),
(14, 'Remix Jeans Bermuda', 'Celana bermuda dengan desain yang nyaman untuk sehari-hari, Warna beige, Regular fit, Kancing dan Resleting depan, 2 kantong depan belakang.', '28 30 32 34 36', 'Rp215.400.00', '76', 'brg14.jpg'),
(15, 'Vans Old School HI', 'Good quality product', '42 43 44', 'Rp.899.000.00', '50', 'brg15.jpg'),
(16, 'Converse HI Black White', 'Terbuat dari bahan canvas, dengan kualitas yang sangat baik', '42 43', 'Rp.899.000.00', '100', 'brg16.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
