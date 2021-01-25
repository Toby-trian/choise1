-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2020 pada 02.59
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
-- Database: `choise`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_jawaban_papi`
--

CREATE TABLE `tb_data_jawaban_papi` (
  `id_jawaban_papi` int(11) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `id_ujian` int(5) NOT NULL,
  `no_soal` int(5) NOT NULL,
  `jawaban` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_jawaban_papi`
--

INSERT INTO `tb_data_jawaban_papi` (`id_jawaban_papi`, `id_pelamar`, `id_lowongan`, `id_ujian`, `no_soal`, `jawaban`) VALUES
(1, 1, 1, 1, 1, 'G'),
(2, 1, 1, 1, 2, 'N'),
(3, 1, 1, 1, 3, 'P'),
(4, 1, 1, 1, 4, 'P');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_data_jawaban_papi`
--
ALTER TABLE `tb_data_jawaban_papi`
  ADD PRIMARY KEY (`id_jawaban_papi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_data_jawaban_papi`
--
ALTER TABLE `tb_data_jawaban_papi`
  MODIFY `id_jawaban_papi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
