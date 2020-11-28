-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2020 pada 02.37
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
-- Struktur dari tabel `tb_data_jawaban_holland`
--

CREATE TABLE `tb_data_jawaban_holland` (
  `id_jawaban_holland` int(11) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `id_ujian` int(11) NOT NULL,
  `nilai_r` int(11) NOT NULL,
  `nilai_i` int(11) NOT NULL,
  `nilai_a` int(11) NOT NULL,
  `nilai_s` int(11) NOT NULL,
  `nilai_e` int(11) NOT NULL,
  `nilai_k` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_data_jawaban_holland`
--
ALTER TABLE `tb_data_jawaban_holland`
  ADD PRIMARY KEY (`id_jawaban_holland`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_data_jawaban_holland`
--
ALTER TABLE `tb_data_jawaban_holland`
  MODIFY `id_jawaban_holland` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
