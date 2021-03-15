-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2021 pada 08.42
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
-- Database: `ci_pos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_menu`
--

CREATE TABLE `t_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_menu`
--

INSERT INTO `t_menu` (`id_menu`, `nama_menu`, `keterangan`, `kategori`, `harga`, `stok`, `img`) VALUES
(1, 'Beef Teriyaki don buri', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'ramen', 30000, 5, 'img1.jpg'),
(2, 'Chicken Teriyaki ramen', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'ramen', 31000, 5, 'img2.jpg'),
(3, 'Spicy ramen', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'ramen', 32000, 5, 'img3.jpg'),
(4, 'Chicken katsu dry ramen', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', 'katsu', 35000, 5, 'img4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pesanan`
--

CREATE TABLE `t_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pesanan`
--

INSERT INTO `t_pesanan` (`id_pesanan`, `id_transaksi`, `id_menu`, `nama_menu`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 3, 1, 'Beef Teriyaki don buri', 1, 30000, ''),
(2, 3, 3, 'Spicy ramen', 1, 32000, ''),
(3, 3, 4, 'Chicken katsu dry ramen', 1, 35000, ''),
(4, 3, 2, 'Chicken Teriyaki ramen', 2, 31000, ''),
(5, 4, 1, 'Beef Teriyaki don buri', 1, 30000, ''),
(6, 4, 3, 'Spicy ramen', 1, 32000, ''),
(7, 4, 4, 'Chicken katsu dry ramen', 1, 35000, ''),
(8, 4, 2, 'Chicken Teriyaki ramen', 2, 31000, ''),
(9, 5, 1, 'Beef Teriyaki don buri', 1, 30000, ''),
(10, 5, 3, 'Spicy ramen', 1, 32000, ''),
(11, 5, 4, 'Chicken katsu dry ramen', 1, 35000, ''),
(12, 5, 2, 'Chicken Teriyaki ramen', 1, 31000, ''),
(13, 6, 2, 'Chicken Teriyaki ramen', 2, 31000, ''),
(14, 6, 3, 'Spicy ramen', 1, 32000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_transaksi`
--

CREATE TABLE `t_transaksi` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_transaksi`
--

INSERT INTO `t_transaksi` (`id_invoice`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'aada', 'asdad', '2021-03-13 12:19:03', '2021-03-14 12:19:03'),
(2, 'aada', 'asdad', '2021-03-13 12:20:07', '2021-03-14 12:20:07'),
(3, 'dADANG', 'adas', '2021-03-13 12:25:43', '2021-03-14 12:25:43'),
(4, '', '', '2021-03-13 12:27:30', '2021-03-14 12:27:30'),
(5, 'Danu', 'arat', '2021-03-13 12:27:41', '2021-03-14 12:27:41'),
(6, 'Lolca', 'asdas', '2021-03-15 14:11:45', '2021-03-16 14:11:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_menu`
--
ALTER TABLE `t_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `t_pesanan`
--
ALTER TABLE `t_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD PRIMARY KEY (`id_invoice`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_menu`
--
ALTER TABLE `t_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `t_pesanan`
--
ALTER TABLE `t_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `t_transaksi`
--
ALTER TABLE `t_transaksi`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
