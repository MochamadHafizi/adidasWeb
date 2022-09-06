-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2021 pada 08.00
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adidas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_album`
--

CREATE TABLE `tb_album` (
  `id_album` int(11) NOT NULL,
  `nama_album` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_album`
--

INSERT INTO `tb_album` (`id_album`, `nama_album`) VALUES
(1, 'SEPATU'),
(2, 'PAKAIAN'),
(3, 'AKSESORIS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `ukuran` varchar(11) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `ukuran`, `harga`, `gambar`) VALUES
(1, 'JERSEY REAL MADRID HOME 21/22', 'Regular fit,100% poliester doubleknit hasil daur ulang,Crewneck,berusuk,Menyerap kelembapan,Bordir emblem Real Madrid', 'Pakaian', 'S, M, L, XL', '950000', '2.jpg'),
(2, 'JERSEY JUVENTUS HOME 21/22', 'Regular fit,\r\n100% poliester doubleknit hasil daur ulang,\r\nManset berusuk,Kerah berusuk dengan V-band,\r\nMenyerap kelembapan,\r\nEmblem Juventus dari bahan tenun', 'Pakaian', 'S, M, L, XL', '570000', '4.jpg'),
(3, 'JERSEY MANCHESTER UNITED HOME 20/21', 'Lahir dari emblem sang klub favorit. Jersey Manchester United Home memiliki desain yang merepresentasikan jahitan bergelombang di bagian samping emblem. Dibuat dari kain yang lembut, dengan kebanggaan tim yang ditenun di bagian keliman. Pakai jersey adidas ini di stadion atau di mana pun Anda beraktivitas.', 'Pakaian', 'S, M, L, XL', '570000', 'mu.jpg'),
(4, 'CREW SWEATSHIRT TREFOIL WARM-UP', 'Sweatshirt ini memberikan apresiasi pada legacy adidas sport style dengan logo Trefoil yang bold. Pullover yang nyaman ini dibuat dari bahan katun French terry premium yang sangat lembut. Koleksi Adicolor Terinspirasi adidas heritage, Adicolor memiliki desain autentik yang modern Style Trefoil yang ikonik Logo Trefoil telah dikenal sejak tahun 1972', 'Pakaian', 'S, M, L, XL', '720000', 'trefoil.jpg'),
(5, 'SEPATU ZX 2K BOOST', 'Ketika Anda memakai Sepatu adidas ZX 2K Boost yang terinspirasi teknologi ini, Anda menyatu dengan energi daerah perkotaan. Anda merasakannya dalam setiap langkah menuju kereta. Lebih merasakan eksistensi diri Anda dan orang lain. Maksimalkan setiap momen. Dengan ekstra semangat. Tidak ada hal lain yang dipikirkan.', 'Sepatu', '38', '1100000', 'zx.jpg'),
(6, 'KAOS KAKI MID CUT 3 PASANG', 'Dulunya, kaos kaki merupakan simbol dari status sosial dan kekayaan. Dengan tiga pasang kaos kaki mid-cut dari adidas ini, Anda akan merasa layaknya kaum kelas atas. Dengan tiga pasang, Anda dapat pakai, bagikan, atau punya cadangan kaos kaki.', 'Aksesoris', '', '200000', 'kaoskaki.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` int(11) NOT NULL,
  `foto_galeri` varchar(200) NOT NULL,
  `cover_album` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `nama_galeri`, `foto_galeri`, `cover_album`) VALUES
(1, 1, '1.jpg', ''),
(2, 1, '2.jpg', ''),
(3, 1, '3.jpg', ''),
(4, 2, '1.jpg', ''),
(5, 2, '2.jpg', ''),
(6, 2, '3.jpg', ''),
(7, 3, '1.jpg', ''),
(8, 3, '2.jpg', ''),
(9, 3, '3.jpg\r\n', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(11) NOT NULL,
  `deskripsi_kontak` text NOT NULL,
  `script` text NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `deskripsi_kontak`, `script`, `telepon`) VALUES
(1, 'Mal Olympic Garden, Jl. Kawi No.24, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9397.507198479949!2d112.62326883432556!3d-7.981883644811689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62826d18ef369%3A0xd2b49929c920cfc8!2sAdidas!5e0!3m2!1sen!2sid!4v1625542007627!5m2!1sen!2sid\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '+62341363392');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(11) NOT NULL,
  `foto_slider` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `foto_slider`) VALUES
(1, 'img1.jpg'),
(2, 'img2.jpg'),
(3, 'img3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tentang`
--

CREATE TABLE `tb_tentang` (
  `id_tentang` int(11) NOT NULL,
  `foto_tentang` varchar(100) NOT NULL,
  `nama_tentang` varchar(200) NOT NULL,
  `deskripsi_tentang` text NOT NULL,
  `original` text NOT NULL,
  `sport_perfomance` text NOT NULL,
  `technologies` text NOT NULL,
  `sizing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tentang`
--

INSERT INTO `tb_tentang` (`id_tentang`, `foto_tentang`, `nama_tentang`, `deskripsi_tentang`, `original`, `sport_perfomance`, `technologies`, `sizing`) VALUES
(1, 'logo.png', 'ABOUT ADIDAS PRODUCTS', 'adidas Online Store menawarkan perlengkapan terbaru dan terbaik yang ditawarkan adidas dalam setiap momen. Saat Anda berbelanja di adidas, Anda bisa yakin bahwa selama lebih dari tujuh dekade, produk adidas selalu mengutamakan keunggulan. Ciri khas kami adalah selalu mempersembahkan produk dengan standar kualitas, teknologi, dan inovasi terbaik.', 'adidas Originals: Merefleksikan warisan adidas yang tak lekang oleh waktu. Inovatif, mempertahankan ciri klasik, dan selalu autentik, produk adidas Originals ditunjukkan dengan Trefoil yang diluncurkan pada Olimpiade tahun 1972 di Munich.', 'Semua produk adidas tidak hanya memiliki tampilan yang menarik, namun juga menawarkan performa tak tertandingi. Di divisi Performance, kami terus berupaya untuk menawarkan produk olahraga paling fungsional dengan performa terbaik bagi atlet dalam semua kategori olahraga. Semangat dan motivasi kami adalah untuk membantu atlet yang menuntut performa tertinggi disamping faktor pendukung lainnya. Produk Performance didesain menggunakan terobosan teknologi terbaru.', 'Inovasi produk unggulan kami secara terus menerus berupaya untuk mendukung atlet dalam meraih level performa yang lebih baik. Pakaian dan sepatu kami menggunakan berbagai teknologi yang dideskripsikan pada setiap halaman produk Olahraga.', '\r\nKami menyediakan bagan ukuran pada Halaman Detail Produk yang akan membantu Anda untuk membandingkan ukuran yang tercantum pada halaman produk dengan ukuran yang mungkin lebih familiar bagi Anda. Jika Anda menerima produk, namun ukurannya tidak sesuai, Anda dapat mengirimkannya kembali dan melakukan pemesanan ulang dengan ukuran yang berbeda. \r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `tb_tentang`
--
ALTER TABLE `tb_tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_tentang`
--
ALTER TABLE `tb_tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
