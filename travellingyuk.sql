-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2020 pada 15.32
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travellingyuk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password_admin`, `nama_admin`) VALUES
('admin', 'admin', 'Gravilian Megarifera Liset'),
('Dita', 'abcdefghi', 'Dita Rossiyana'),
('restika', 'rahasia', 'Dinda Putri Restika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `id_jasa` varchar(11) NOT NULL,
  `nama_jasa` varchar(100) NOT NULL,
  `harga_jasa` int(11) NOT NULL,
  `foto_jasa` varchar(100) NOT NULL,
  `fasilitas_jasa` text NOT NULL,
  `id_status` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`id_jasa`, `nama_jasa`, `harga_jasa`, `foto_jasa`, `fasilitas_jasa`, `id_status`) VALUES
('BIY1', 'Camping and Hiking with Special People in Dieng', 5000000, '5d5ccedb6f21e.jpg', 'dome kapasitas 4 orang, guide, fotographer, tiket masuk, peralatan pendakian', 'rd'),
('BSK1', 'Climbing Package in Mount Bromo', 1000000, 'mount bromo tour package 2 days from surabaya.jpg', 'Tiket masuk pendakian, peralatan pendakian, sunrise moment, transportasi menuju basecamp', 'rd'),
('GTY1', 'Double Trip with Your Partner in Labuan Bajo', 8500000, 'padar-island-labuan.jpg', 'trasnportasi dari bandara, guide, penginapan 2 hari 1 malam, fotographer, dinner', 'rd'),
('NMU1', 'Snorkling with Family in Karimunjawa', 5000000, 'Paket Snorkeling Karimunjawa.jpg', 'Mak. 5 orang, perahu, guide, penginapan 1 malam, snorkling guide, fotographer', 'rd'),
('PKW1', 'Paket Explore Yogya with BestFriend', 500000, 'Yogyakarta-1.jpg', 'Fasilitas : Mobil, 4 Orang, Destinasi (Prambanan Malioboro, Taman Sari), 1 hari', 'rd'),
('YOU1', 'Learn History at Borobudur Temple', 450000, 'borobudur-temple.jpg', 'Tiket masuk, Guide dalam perjalanan, Snack, Payung, Alat Tulis, Fotographer,', 'rd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `listpemesanan`
--

CREATE TABLE `listpemesanan` (
  `id_listpesanan` int(11) NOT NULL,
  `id_pemesanan` int(11) DEFAULT NULL,
  `id_jasa` varchar(11) DEFAULT NULL,
  `status_pemesanan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`) VALUES
('gravilianmegarifera@gmail.com', 'usercangtip', 'Gravilian Megarifera Liset', '081902573820'),
('pelanggan@gmail.com', 'pelanggancangtip', 'Gravilian Megarifera Liset', '081902573820');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pemesanan` int(11) DEFAULT NULL,
  `metode_pembayaran` varchar(100) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `total_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) DEFAULT NULL,
  `id_jasa` varchar(11) DEFAULT NULL,
  `tgl_pemesanan` date NOT NULL,
  `tgl_travelling` date NOT NULL,
  `metode_pembayaran` varchar(100) NOT NULL,
  `total_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `email_pelanggan`, `id_jasa`, `tgl_pemesanan`, `tgl_travelling`, `metode_pembayaran`, `total_pemesanan`) VALUES
(5, 'pelanggan@gmail.com', 'YOU1', '2020-12-23', '2021-01-01', 'm-banking', 900000),
(6, 'pelanggan@gmail.com', 'BIY1', '2020-12-23', '2020-12-31', 'm-banking', 10000000),
(8, 'gravilianmegarifera@gmail.com', 'PKW1', '2020-12-23', '2021-01-01', 'cash', 5000000),
(9, 'pelanggan@gmail.com', 'YOU1', '2020-12-23', '2021-01-09', 'cash', 2900000),
(10, 'pelanggan@gmail.com', 'BSK1', '2020-12-23', '2021-01-09', 'cash', 2900000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statusjasa`
--

CREATE TABLE `statusjasa` (
  `id_status` varchar(5) NOT NULL,
  `keterangan_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `statusjasa`
--

INSERT INTO `statusjasa` (`id_status`, `keterangan_status`) VALUES
('nrd', 'Not Ready'),
('rd', 'Ready');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id_jasa`),
  ADD KEY `keyidstatus` (`id_status`);

--
-- Indeks untuk tabel `listpemesanan`
--
ALTER TABLE `listpemesanan`
  ADD PRIMARY KEY (`id_listpesanan`),
  ADD KEY `keyidpemesanan` (`id_pemesanan`),
  ADD KEY `keyidjasa` (`id_jasa`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`email_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `keyidpemesanan` (`id_pemesanan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `keyidjasa` (`id_jasa`),
  ADD KEY `keyidpelanggan` (`email_pelanggan`);

--
-- Indeks untuk tabel `statusjasa`
--
ALTER TABLE `statusjasa`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `listpemesanan`
--
ALTER TABLE `listpemesanan`
  MODIFY `id_listpesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD CONSTRAINT `jasa_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `statusjasa` (`id_status`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `listpemesanan`
--
ALTER TABLE `listpemesanan`
  ADD CONSTRAINT `listpemesanan_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `listpemesanan_ibfk_2` FOREIGN KEY (`id_jasa`) REFERENCES `jasa` (`id_jasa`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_jasa`) REFERENCES `jasa` (`id_jasa`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`email_pelanggan`) REFERENCES `pelanggan` (`email_pelanggan`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
