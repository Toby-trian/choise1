-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2020 pada 05.27
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
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(5) NOT NULL,
  `id_level` int(5) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `id_level`, `nama_admin`, `username`, `password`) VALUES
(1, 1, 'Administrator', 'test', 'cc03e747a6afbbcbf8be7668acfebee5'),
(2, 2, 'Dian', 'dian', '558d63dd9feb215d19b8e08a0ae503c7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_apply`
--

CREATE TABLE `tb_apply` (
  `id_apply` int(5) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `status_lamaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_apply`
--

INSERT INTO `tb_apply` (`id_apply`, `id_pelamar`, `id_lowongan`, `status_lamaran`) VALUES
(1, 1, 3, 'Diterima'),
(2, 2, 1, 'Belum ada tindakan'),
(3, 3, 3, 'Belum ada tindakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_diri`
--

CREATE TABLE `tb_data_diri` (
  `nik` varchar(20) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `nama_pelamar` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_diri`
--

INSERT INTO `tb_data_diri` (`nik`, `id_pelamar`, `nama_pelamar`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `facebook`, `instagram`, `twitter`, `foto`) VALUES
('1212132442131', 3, 'Fulanah', 'Gempol', 'Malang', '2020-07-05', 'P', '323212121', '-', '-', '-', '-'),
('123456789101112', 1, 'Dhicky', 'Sidoarjo', 'Sidoarjo', '2020-07-07', 'L', '12345678', '-', '-', '-', '-'),
('78675654536879', 2, 'Fulan', 'Tak diketahui', 'Malang', '2019-06-10', 'L', '0887867656', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_keluarga`
--

CREATE TABLE `tb_data_keluarga` (
  `id_keluarga` int(5) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_keluarga`
--

INSERT INTO `tb_data_keluarga` (`id_keluarga`, `id_pelamar`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`) VALUES
(1, 1, 'Joko', 'Swasta', 'Siadah', 'Ibu rumah tangga'),
(2, 2, 'Daniel', 'PNS', 'Nur', 'Guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_pendidikan`
--

CREATE TABLE `tb_data_pendidikan` (
  `id_pendidikan` int(5) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `jenjang_pendidikan` varchar(10) NOT NULL,
  `nama_institusi` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `tahun_masuk` varchar(4) NOT NULL,
  `tahun_keluar` varchar(4) NOT NULL,
  `nilai_akhir` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_pendidikan`
--

INSERT INTO `tb_data_pendidikan` (`id_pendidikan`, `id_pelamar`, `jenjang_pendidikan`, `nama_institusi`, `jurusan`, `tahun_masuk`, `tahun_keluar`, `nilai_akhir`) VALUES
(1, 1, 'SMK', 'SMKN 10 Magelang', 'Akuntansi', '2015', '2018', '70'),
(2, 2, 'S1', 'Univ Sendiri', 'Hukum', '2014', '2018', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_pengalaman_kerja`
--

CREATE TABLE `tb_data_pengalaman_kerja` (
  `id_pengalaman` int(5) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `periode` varchar(10) NOT NULL,
  `jabatan_akhir` varchar(100) NOT NULL,
  `alasan_keluar` varchar(100) NOT NULL,
  `nama_referensi` varchar(300) NOT NULL,
  `no_hp_referensi` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(5) NOT NULL,
  `nama_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`) VALUES
(1, 'Administrator'),
(2, 'Admin Sdm'),
(3, 'Perusahaan'),
(4, 'Psikolog'),
(5, 'Pelamar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lowongan`
--

CREATE TABLE `tb_lowongan` (
  `id_lowongan` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `jadwal_seleksi` date NOT NULL,
  `kota_penempatan` varchar(100) NOT NULL,
  `persyaratan` text NOT NULL,
  `gaji` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lowongan`
--

INSERT INTO `tb_lowongan` (`id_lowongan`, `id_perusahaan`, `nama_jabatan`, `jadwal_seleksi`, `kota_penempatan`, `persyaratan`, `gaji`) VALUES
(1, 2, 'Full Stack Developer', '2020-09-13', 'Ponorogo', '1. salskal\r\n2. ajskaslak', '3500000'),
(3, 1, 'Testing', '2020-09-06', 'Pasuruan', '<p><strong>Bersedia ditempatkan di Pasuruan</strong></p><ol><li>S1 Komputer</li><li>Domisili Pasuruan</li><li>Terbiasa dengan CodeIgniter</li><li>Paham Javascript</li></ol>', '3200000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_motivation_letter`
--

CREATE TABLE `tb_motivation_letter` (
  `id_motivasi` int(5) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_soal` int(5) NOT NULL,
  `jawaban_soal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelamar`
--

CREATE TABLE `tb_pelamar` (
  `id_pelamar` int(11) NOT NULL,
  `id_level` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(130) NOT NULL,
  `password` varchar(500) NOT NULL,
  `confirm_password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelamar`
--

INSERT INTO `tb_pelamar` (`id_pelamar`, `id_level`, `username`, `email`, `password`, `confirm_password`) VALUES
(1, 5, 'pelamar1', 'pelamar1@test.com', '86117feed185c63bed6d19f272e34e12', 'pelamar1'),
(2, 5, 'hahaha', 'candaanaja@gmail.com', '064d8682f9420f2286f2fe5d3889ffb2', 'pelamar2'),
(3, 5, 'guyonbae', 'guyonbae@gmail.com', 'f33fe70bcf7f48e8f107c5d18cdef5e4', 'pelamar3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(5) NOT NULL,
  `id_level` int(5) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `jenis_usaha` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(130) NOT NULL,
  `logo_perusahaan` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `website` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `id_level`, `nama_perusahaan`, `jenis_usaha`, `alamat`, `email`, `logo_perusahaan`, `username`, `password`, `website`, `facebook`, `instagram`, `twitter`, `no_hp`) VALUES
(1, 3, 'Chaakraconsulting', 'Konsultan', 'Virto Office lt 3', 'adm@chaakraconsulting.com', '', 'chaakra123', '558d63dd9feb215d19b8e08a0ae503c7', 'chaakraconsulting.com', '', '', '', '0872676289002'),
(2, 3, 'Artareja', 'Website Development', 'Ponorogo', 'artareja@artareja.com', 'Logo200902_2.png', 'arta123', '576aa3126c499b5f392bfc7a22601128', 'artarejamedia.com', '-', '-', '-', '08217179');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_psikolog`
--

CREATE TABLE `tb_psikolog` (
  `id_psikolog` int(5) NOT NULL,
  `id_level` varchar(5) NOT NULL,
  `nama_psikolog` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_psikolog`
--

INSERT INTO `tb_psikolog` (`id_psikolog`, `id_level`, `nama_psikolog`, `no_hp`, `username`, `password`) VALUES
(1, '4', '0190191121', 'Anggi', 'test', 'cc03e747a6afbbcbf8be7668acfebee5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal_motlet`
--

CREATE TABLE `tb_soal_motlet` (
  `id_soal` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `jenis_motlet` varchar(50) NOT NULL,
  `soal_motlet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal_motlet`
--

INSERT INTO `tb_soal_motlet` (`id_soal`, `id_perusahaan`, `jenis_motlet`, `soal_motlet`) VALUES
(1, 2, 'Lowongan Kerja', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(3, 1, 'Promosi Jabatan', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(5, 2, 'Promosi Jabatan', '<p>tes12324</p>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_apply`
--
ALTER TABLE `tb_apply`
  ADD PRIMARY KEY (`id_apply`);

--
-- Indeks untuk tabel `tb_data_diri`
--
ALTER TABLE `tb_data_diri`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tb_data_keluarga`
--
ALTER TABLE `tb_data_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indeks untuk tabel `tb_data_pendidikan`
--
ALTER TABLE `tb_data_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `tb_data_pengalaman_kerja`
--
ALTER TABLE `tb_data_pengalaman_kerja`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indeks untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indeks untuk tabel `tb_motivation_letter`
--
ALTER TABLE `tb_motivation_letter`
  ADD PRIMARY KEY (`id_motivasi`);

--
-- Indeks untuk tabel `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indeks untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indeks untuk tabel `tb_psikolog`
--
ALTER TABLE `tb_psikolog`
  ADD PRIMARY KEY (`id_psikolog`);

--
-- Indeks untuk tabel `tb_soal_motlet`
--
ALTER TABLE `tb_soal_motlet`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_apply`
--
ALTER TABLE `tb_apply`
  MODIFY `id_apply` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_data_keluarga`
--
ALTER TABLE `tb_data_keluarga`
  MODIFY `id_keluarga` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_data_pendidikan`
--
ALTER TABLE `tb_data_pendidikan`
  MODIFY `id_pendidikan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_data_pengalaman_kerja`
--
ALTER TABLE `tb_data_pengalaman_kerja`
  MODIFY `id_pengalaman` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  MODIFY `id_lowongan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_motivation_letter`
--
ALTER TABLE `tb_motivation_letter`
  MODIFY `id_motivasi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_psikolog`
--
ALTER TABLE `tb_psikolog`
  MODIFY `id_psikolog` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_soal_motlet`
--
ALTER TABLE `tb_soal_motlet`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
