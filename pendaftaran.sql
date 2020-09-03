-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Agu 2020 pada 09.16
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_kegiatan`
--

CREATE TABLE `daftar_kegiatan` (
  `id_daftar` int(11) NOT NULL,
  `id_pendaftar` varchar(50) NOT NULL,
  `id_event` int(5) NOT NULL,
  `status_pembayaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_kegiatan`
--

INSERT INTO `daftar_kegiatan` (`id_daftar`, `id_pendaftar`, `id_event`, `status_pembayaran`) VALUES
(1, '2008270002', 1, 'Belum Bayar'),
(2, '2008270002', 2, 'Belum Bayar'),
(3, '2008270002', 3, 'Belum Bayar'),
(4, '2008270002', 2, 'Belum Bayar'),
(5, '2008280003', 2, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(5) NOT NULL,
  `nama_event` varchar(500) NOT NULL,
  `tanggal_event` date NOT NULL,
  `harga_event` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tanggal_event`, `harga_event`) VALUES
(1, 'Excel', '2020-08-05', '15000'),
(2, 'Google Sheet', '2020-09-05', '150000'),
(3, 'Word', '2020-08-28', '100000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_pendaftar` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `instansi` varchar(500) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `domisili` varchar(500) NOT NULL,
  `sosmed` varchar(500) NOT NULL,
  `level` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_pendaftar`, `username`, `password`, `nama`, `email`, `no_hp`, `instansi`, `jenis_kelamin`, `domisili`, `sosmed`, `level`) VALUES
('2008270001', 'admin', 'adminchaakra123', 'Admin', 'email@gmail.com', '', '', 'L', '', '', 'admin'),
('2008270002', 'test', 'test123', 'Test', 'test@gmail.com', '086877198989', 'Swasta', 'L', 'Surabaya', 'tidak punya', 'pendaftar'),
('2008280003', 'haha', 'haha123', 'Haha', 'haha@gmail.com', '0912819281281', 'swasta', 'P', 'pasuruan', 'tidak punya', 'pendaftar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_kegiatan`
--
ALTER TABLE `daftar_kegiatan`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_kegiatan`
--
ALTER TABLE `daftar_kegiatan`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
