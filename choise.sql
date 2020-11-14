-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2020 pada 04.22
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
(2, 2, 'Dian', 'dian', '750f48161355ac52ad11c48ef5be70b6');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_apply`
--

CREATE TABLE `tb_apply` (
  `id_apply` int(5) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `status_lamaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_apply`
--

INSERT INTO `tb_apply` (`id_apply`, `id_pelamar`, `id_lowongan`, `id_perusahaan`, `status_lamaran`) VALUES
(7, 1, 1, 2, 'Diterima'),
(8, 16, 1, 2, 'Tidak lolos'),
(9, 29, 2, 1, 'Diterima'),
(10, 31, 2, 1, 'Diterima'),
(11, 30, 2, 1, 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `id_berkas` int(5) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berkas`
--

INSERT INTO `tb_berkas` (`id_berkas`, `id_pelamar`, `berkas`) VALUES
(1, 1, 'berkas_Salmon.pdf'),
(2, 16, 'berkas_Dhiki_Sekti_Wibawa1.pdf'),
(3, 29, 'berkas_Vivid_Amalia_Khusna.pdf'),
(4, 30, ''),
(5, 31, 'berkas_Firda_Elfinda_Nurhidayah.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_diri`
--

CREATE TABLE `tb_data_diri` (
  `nik` varchar(20) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `nama_pelamar` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `alamat_ktp` text NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `dari_x_sdr` varchar(10) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_diri`
--

INSERT INTO `tb_data_diri` (`nik`, `id_pelamar`, `nama_pelamar`, `alamat`, `alamat_ktp`, `status_perkawinan`, `agama`, `anak_ke`, `dari_x_sdr`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `no_hp`, `facebook`, `instagram`, `twitter`) VALUES
('0', 30, 'R', 'O', 'E', 'Belum Menikah', 'Islam', '2', '5', '-', '2002-11-05', 'P', '8', 'A', 'E', 'I'),
('1212132442131', 3, 'Fulanah', 'Gempol', '', '', '', '', '', 'Malang', '2020-07-05', 'P', '323212121', '-', '-', '-'),
('123456789101112', 1, 'Salmon', 'hehe', 'hehehe', 'Sudah Menikah', 'Kong Hu Cu', '2', '4', 'test', '1998-05-11', 'P', '085707236937', 'hahas', '-', '-'),
('1298192819', 4, 'Test 123', 'hahah', '', '', '', '', '', 'Pasuruan', '2020-08-30', 'P', '-', 'skajsj', 'jkasjk', 'jkj'),
('351', 16, 'Dhiki Sekti Wibawa', 'Sidoarjo', 'Sidoarjo', 'Belum Menikah', 'Islam', '1', '3', 'Sidoarjo', '1998-02-18', 'L', '0895384959837', '-', 'dhikiwibawa', '-'),
('3516086503980002', 29, 'Vivid Amalia Khusna', 'Jl. Karangmenjangan VI No. 8D', 'Dsn. Lontar RT. 23 RW. 06 Ds. Kebondalem Kec. Mojosari Kab. Mojokerto', 'Belum Menikah', 'Islam', '3', '3', 'Mojokerto', '1998-03-25', 'P', '085790927663', '-', 'vmaliaa', '-'),
('3523114106990004', 31, 'Firda Elfinda Nurhidayah', 'Sumurcinde Rt.004 Rw.004, Soko,Tuban', 'Sumurcinde Rt.004 Rw.004, Soko,Tuban', 'Belum Menikah', 'Islam', '1', '1', 'Tuban', '1999-06-01', 'P', '085606714331', 'Firda Elfinda Nurhidayah', '@firdaelfinda_n', '@_firdaelfinda'),
('78675654536879', 2, 'Fulan', 'Tak diketahui', '', '', '', '', '', 'Malang', '2019-06-10', 'L', '0887867656', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_jawaban_cfit`
--

CREATE TABLE `tb_data_jawaban_cfit` (
  `id_jawaban_cfit` int(11) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `nomor_soal` int(5) NOT NULL,
  `id_ujian` int(5) NOT NULL,
  `subtes` varchar(5) NOT NULL,
  `jawaban` varchar(5) NOT NULL,
  `jawaban2` varchar(5) NOT NULL,
  `jawaban_kunci` varchar(3) NOT NULL,
  `jawaban_kunci2` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_jawaban_cfit`
--

INSERT INTO `tb_data_jawaban_cfit` (`id_jawaban_cfit`, `id_pelamar`, `id_lowongan`, `nomor_soal`, `id_ujian`, `subtes`, `jawaban`, `jawaban2`, `jawaban_kunci`, `jawaban_kunci2`) VALUES
(81, 30, 2, 2, 2, '1', 'C', '', 'C', ''),
(82, 30, 2, 3, 2, '1', 'E', '', 'B', ''),
(83, 30, 2, 4, 2, '1', 'A', '', 'D', ''),
(84, 30, 2, 5, 2, '1', 'E', '', 'E', ''),
(85, 30, 2, 6, 2, '1', 'B', '', 'B', ''),
(86, 30, 2, 7, 2, '1', 'D', '', 'D', ''),
(87, 30, 2, 8, 2, '1', 'D', '', 'B', ''),
(88, 30, 2, 9, 2, '1', 'D', '', 'F', ''),
(89, 30, 2, 10, 2, '1', 'D', '', 'C', ''),
(90, 30, 2, 11, 2, '1', 'D', '', 'B', ''),
(91, 30, 2, 12, 2, '1', 'D', '', 'B', ''),
(92, 30, 2, 13, 2, '1', 'D', '', 'E', ''),
(93, 1, 1, 1, 2, '1', 'D', '', 'B', ''),
(94, 1, 1, 2, 2, '1', 'E', '', 'C', ''),
(95, 31, 2, 1, 2, '1', 'D', '', 'B', ''),
(96, 31, 2, 2, 2, '1', 'F', '', 'C', ''),
(97, 1, 1, 13, 2, '1', 'E', '', 'E', ''),
(98, 31, 2, 1, 2, '2', 'B', 'C', 'B', 'E'),
(99, 1, 1, 2, 2, '2', 'C', 'E', 'A', 'E'),
(100, 1, 1, 8, 2, '2', 'C', 'D', 'B', 'E'),
(101, 31, 2, 2, 2, '2', 'C', 'E', 'A', 'E'),
(102, 1, 1, 2, 2, '3', 'D', '', 'E', ''),
(103, 1, 1, 1, 2, '3', 'D', '', 'E', ''),
(104, 1, 1, 3, 2, '3', 'F', '', 'E', ''),
(105, 31, 2, 1, 2, '3', 'B', '', 'E', ''),
(106, 31, 2, 2, 2, '3', 'D', '', 'E', ''),
(107, 31, 2, 3, 2, '3', 'E', '', 'E', ''),
(108, 31, 2, 13, 2, '3', 'D', '', '', ''),
(109, 31, 2, 2, 2, '4', 'C', '', 'A', ''),
(110, 31, 2, 3, 2, '4', 'E', '', 'D', ''),
(111, 1, 1, 2, 2, '4', 'C', '', 'A', ''),
(112, 1, 1, 1, 2, '4', 'D', '', 'B', ''),
(113, 1, 1, 3, 2, '4', 'E', '', 'D', ''),
(114, 1, 1, 10, 2, '4', 'E', '', '', '');

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
-- Dumping data untuk tabel `tb_data_jawaban_holland`
--

INSERT INTO `tb_data_jawaban_holland` (`id_jawaban_holland`, `id_pelamar`, `id_lowongan`, `id_ujian`, `nilai_r`, `nilai_i`, `nilai_a`, `nilai_s`, `nilai_e`, `nilai_k`) VALUES
(1, 1, 0, 0, 3, 3, 2, 2, 3, 3);

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
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `nama_pasangan` varchar(50) NOT NULL,
  `pekerjaan_pasangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_keluarga`
--

INSERT INTO `tb_data_keluarga` (`id_keluarga`, `id_pelamar`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `nama_pasangan`, `pekerjaan_pasangan`) VALUES
(1, 1, 'Joko', 'Swasta', 'Siadah', 'Ibu rumah tangga', 'kang oleh', 'penjual odading'),
(2, 2, 'Daniel', 'PNS', 'Nur', 'Guru', '', ''),
(3, 4, 'hehe', 'swasta', 'huhu', 'dagang', '', ''),
(4, 16, 'LP', 'W', 'DNW', 'B', '', ''),
(5, 29, 'asdsd', 'aa', 'asd', 'ss', '-', 'dd'),
(6, 30, 'A', 'C', 'B', 'D', '', ''),
(7, 31, 'Kastum Wibowo', 'Wiraswasta', 'Susanti', 'Ibu Rumah Tangga', '', '');

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
(1, 1, 'SMA/SMK', 'SMKN 10 Magelang', 'Akuntansi', '2017', '2020', '70'),
(2, 2, 'S1', 'Univ Sendiri', 'Hukum', '2014', '2018', '4'),
(3, 3, 'SMP', 'SMP Maju Putra', '-', '2009', '2012', '90'),
(4, 16, 'D4/S1', 'UB', 'SI', '2016', '2020', '3.64'),
(6, 29, 'D4/S1', 'Universitas Airlangga', 'Ekonomi Pembangunan', '2016', '2020', '3'),
(7, 30, 'S3', 'WAGENINGEN UNIVERSITY, EDINBURGH', 'Ekonomi Pembangunan', '1998', '2020', '5'),
(8, 31, 'SMA/SMK', 'SMKN 1 BOJONEGORO', 'Administrasi Perkantoran', '2014', '2017', '6975');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_pendidikan_nonformal`
--

CREATE TABLE `tb_data_pendidikan_nonformal` (
  `id_pendidikan_nonformal` int(5) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `nama_pendidikan_nonformal` varchar(100) NOT NULL,
  `tujuan_pendidikan_nonformal` varchar(300) NOT NULL,
  `tahun_pendidikan_nonformal` varchar(4) NOT NULL,
  `nomor_sertifikat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_pendidikan_nonformal`
--

INSERT INTO `tb_data_pendidikan_nonformal` (`id_pendidikan_nonformal`, `id_pelamar`, `nama_pendidikan_nonformal`, `tujuan_pendidikan_nonformal`, `tahun_pendidikan_nonformal`, `nomor_sertifikat`) VALUES
(2, 29, 'aa', 'sd', '2020', 'fs'),
(3, 30, 'CALISTUNG', 'MEMBACA, MENULIS, BERHITUNG', '2003', '000');

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

--
-- Dumping data untuk tabel `tb_data_pengalaman_kerja`
--

INSERT INTO `tb_data_pengalaman_kerja` (`id_pengalaman`, `id_pelamar`, `nama_perusahaan`, `periode`, `jabatan_akhir`, `alasan_keluar`, `nama_referensi`, `no_hp_referensi`) VALUES
(1, 1, 'CV Palugada', '2016', 'Marketing', 'Kontrak Berakhir', '-', '-'),
(2, 2, 'PT Mencari Berkah', '2018', 'Staff programmer', 'pekerjaan tidak sesuai dengan jobdesk', '-', '-'),
(5, 30, 'BAKSO NARIZ', '7', 'ASISTEN', 'KELELAHAN', '-', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `tes_tulis` date NOT NULL,
  `tes_wawancara` date NOT NULL,
  `test_fgd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_motlet`
--

CREATE TABLE `tb_jenis_motlet` (
  `id_jenis_motlet` int(5) NOT NULL,
  `jenis_motlet` enum('Lowongan Kerja','Kenaikan Jabatan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_motlet`
--

INSERT INTO `tb_jenis_motlet` (`id_jenis_motlet`, `jenis_motlet`) VALUES
(1, 'Lowongan Kerja'),
(2, 'Kenaikan Jabatan');

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
  `id_jenis_motlet` int(5) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `jadwal_seleksi` date NOT NULL,
  `kota_penempatan` varchar(100) NOT NULL,
  `persyaratan` text NOT NULL,
  `gaji` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lowongan`
--

INSERT INTO `tb_lowongan` (`id_lowongan`, `id_perusahaan`, `id_jenis_motlet`, `nama_jabatan`, `jadwal_seleksi`, `kota_penempatan`, `persyaratan`, `gaji`) VALUES
(1, 2, 1, 'Kepala Bagian (Kabag) HRD & GA', '2020-10-23', 'Sidoarjo - Jawa Timur', '<p>&nbsp;</p><ul><li>Berusia&nbsp; 27-35 tahun</li><li>Pendidikan Min. S1 Manajemen SDM / Psikologi Industri &amp; Organisasi / Teknik Industri / Ilmu Hukum</li><li>Menguasai UU Ketenagakerjaan dan Hubungan Internasional</li><li>Memiliki Jiwa Kepemimpinan</li><li>Mampu Berkomunikasi Secara Efektif</li></ul>', '-'),
(2, 1, 1, 'Freelance Surveyor', '2020-11-17', 'Surabaya', '<p>-</p>', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_motivation_letter`
--

CREATE TABLE `tb_motivation_letter` (
  `id_motivasi` int(5) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_soal` int(5) NOT NULL,
  `jawaban_soal` text NOT NULL,
  `jawaban_soal2` text NOT NULL,
  `jawaban_soal3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_motivation_letter`
--

INSERT INTO `tb_motivation_letter` (`id_motivasi`, `id_pelamar`, `id_soal`, `jawaban_soal`, `jawaban_soal2`, `jawaban_soal3`) VALUES
(3, 2, 1, 'aqwertyujnfdsazxc', '', ''),
(4, 2, 5, 'az nm,nhgfdxcg', '', ''),
(5, 3, 1, 'zd vhijolkjfc', '', ''),
(6, 3, 5, 'mnbvfyukmnhdgh', '', ''),
(18, 1, 0, 'test124', '1223433q3', ''),
(21, 1, 0, 'test124', '1223433q3', ''),
(22, 16, 0, 'Mencoba', 'Mencoba', ''),
(23, 29, 0, '-', '-', ''),
(24, 31, 0, 'fddfd', 'gfgfgf\r\n', ''),
(25, 30, 0, 'impian saya, saya ingin liburan, 1 hari tidur sepuasnya', 'menurut saya tidur adalah impian semua orang', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(5) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `nilai_iq` int(10) NOT NULL,
  `gambaran_kepribadian` text NOT NULL,
  `nilai_pwb` int(10) NOT NULL,
  `nilai_holand_r` int(10) NOT NULL,
  `nilai_holand_i` int(10) NOT NULL,
  `nilai_holand_a` int(10) NOT NULL,
  `nilai_holand_s` int(10) NOT NULL,
  `nilai_holand_e` int(10) NOT NULL,
  `nilai_holand_c` int(10) NOT NULL,
  `nilai_papiskotik` int(10) NOT NULL,
  `nilai_msdt` int(10) NOT NULL,
  `nilai_cfit` int(10) NOT NULL,
  `nilai_kemampuan_bidang` int(10) NOT NULL,
  `nilai_studi_kasus` int(10) NOT NULL,
  `nilai_perhitungan` int(10) NOT NULL,
  `nilai_wawancara` int(10) NOT NULL,
  `nilai_fgd` int(10) NOT NULL,
  `kesimpulan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_pelamar`, `id_lowongan`, `id_perusahaan`, `nilai_iq`, `gambaran_kepribadian`, `nilai_pwb`, `nilai_holand_r`, `nilai_holand_i`, `nilai_holand_a`, `nilai_holand_s`, `nilai_holand_e`, `nilai_holand_c`, `nilai_papiskotik`, `nilai_msdt`, `nilai_cfit`, `nilai_kemampuan_bidang`, `nilai_studi_kasus`, `nilai_perhitungan`, `nilai_wawancara`, `nilai_fgd`, `kesimpulan`) VALUES
(2, 2, 3, 1, 130, 'Mantap dong Cuy!!', 120, 130, 124, 121, 100, 120, 140, 140, 150, 80, 90, 150, 200, 110, 90, 'LOLOSKAN'),
(3, 1, 3, 1, 190, 'Joos Gandos kotos kotos', 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 100, 100, 'Mantap'),
(4, 3, 1, 2, 118, 'Hahaha', 29829, 9898, 9898, 9898, 898, 9, 17, 9, 787, 80, 8989, 12, 90, 120, 1230, 'Hihi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_cfit`
--

CREATE TABLE `tb_nilai_cfit` (
  `id_nilai_cfit` int(5) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `nilai_cfit` int(15) NOT NULL,
  `gambaran_kepribadian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai_pwb`
--

CREATE TABLE `tb_nilai_pwb` (
  `id_nilai_pwb` int(5) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `nilai_pwb` int(10) NOT NULL
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
  `confirm_password` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `encrypt_email` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelamar`
--

INSERT INTO `tb_pelamar` (`id_pelamar`, `id_level`, `username`, `email`, `password`, `confirm_password`, `foto`, `encrypt_email`, `status`) VALUES
(1, 5, 'pelamar1', 'abdulhhabibie44@gmail.com', '86117feed185c63bed6d19f272e34e12', 'pelamar1', 'pelamar_c4ca4238a0b923820dcc509a6f75849b4.jpg', '', 1),
(2, 5, 'hahaha', 'candaanaja@gmail.com', '064d8682f9420f2286f2fe5d3889ffb2', 'pelamar2', '', '', 1),
(3, 5, 'guyonbae', 'guyonbae@gmail.com', 'f33fe70bcf7f48e8f107c5d18cdef5e4', 'pelamar3', '', '', 1),
(4, 5, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test', '', '', 1),
(7, 5, 'testing123', 'testing123@gmail.com', '7f2ababa423061c509f4923dd04b6cf1', 'testing123', '', '', 1),
(13, 5, 'edwin', 'hunter_freaks@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '', '1987817f7b8bd5208dac87465928a751', 1),
(15, 5, 'Dik-Dik', 'Arkep0701@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', '', 'a3d6f6523e4f912dc18f5477e6f5b7e2', 1),
(16, 5, 'dhiki', 'dhikiwibawa@gmail.com', '47e9d84838ef62310de676ab919c59b1', 'dhiki', 'pelamar_c74d97b01eae257e44aa9d5bade97baf.jpg', 'a1cf9ad536d537788810069896268ff8', 1),
(18, 5, 'Dik-Dik', 'Arkep0701@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', '1234567', '', 'a3d6f6523e4f912dc18f5477e6f5b7e2', 1),
(29, 5, 'Vivid Amalia', 'vividamalia@gmail.com', 'd40730d2823108fab9f861de39413ffb', 'vivid25', '', '8c867cb162897d45bba77051fad39710', 1),
(30, 5, 'rizqatus', 'rizqatuss@gmail.com', '8afb51706f980c5795df957faf9375d1', '123456789OK', '', '997276b9ae1e4084c8f01ea5cffd19c4', 1),
(31, 5, 'Firda Elfinda Nurhidayah', 'firdaelfinda@gmail.com', '5ed291923179b73cbc6ef968b35361ff', 'firda', '', '91f4faf8110624159f87829faf02171a', 1);

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
(1, 3, 'Chaakraconsulting', 'Konsultan Bisnis', 'Virto Office lt 3', 'adm@chaakraconsulting.com', 'Logo200921_1.png', 'chaakra', 'e572a8f3b6c1d24036ff76ac16eb08b0', 'chaakraconsulting.com', '', '', '', '0872676289002'),
(2, 3, 'PT Eka Ormed Indonesia', 'Bidang Kesehatan', 'Komplek Industri & Pergudangan Meiko Abadi I, Blk. B No.2, Wedi, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254', '-', 'Logo201008_.png', 'ekaormedindonesia', 'bd9dd885dfb6f61145824294180d7df0', '-', '-', '-', '-', '-');

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
(1, '4', 'Psikolog Chaakra', '08291213223', 'psikolog', 'c015e9ad489a46fc9f16d449682eb454');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal_cfit`
--

CREATE TABLE `tb_soal_cfit` (
  `id_soal` int(11) NOT NULL,
  `nomor_soal` int(5) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `opsi_a` varchar(255) NOT NULL,
  `opsi_b` varchar(255) NOT NULL,
  `opsi_c` varchar(255) NOT NULL,
  `opsi_d` varchar(255) NOT NULL,
  `opsi_e` varchar(255) NOT NULL,
  `opsi_f` varchar(255) NOT NULL,
  `jawaban` varchar(5) NOT NULL,
  `jawaban2` varchar(5) NOT NULL,
  `type_soal` enum('Contoh','Ujian') NOT NULL,
  `subtes` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal_cfit`
--

INSERT INTO `tb_soal_cfit` (`id_soal`, `nomor_soal`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `opsi_f`, `jawaban`, `jawaban2`, `type_soal`, `subtes`) VALUES
(1, 1, 'soal1.jpg', '1a.jpg', '1b.jpg', '1c.jpg', '1d.jpg', '1e.jpg', '1f.jpg', 'B', '', 'Ujian', '1'),
(2, 2, 'soal2.jpg', '2a.jpg', '2b.jpg', '2c.jpg', '2d.jpg', '2e.jpg', '2f.jpg', 'C', '', 'Ujian', '1'),
(3, 3, 'soal3.jpg', '3a.jpg', '3b.jpg', '3c.jpg', '3d.jpg', '3e.jpg', '3f.jpg', 'B', '', 'Ujian', '1'),
(4, 4, 'soal4.jpg', '4a.jpg', '4b.jpg', '4c.jpg', '4d.jpg', '4e.jpg', '4f.jpg', 'D', '', 'Ujian', '1'),
(5, 5, 'soal5.jpg', '5a.jpg', '5b.jpg', '5c.jpg', '5d.jpg', '5e.jpg', '5f.jpg', 'E', '', 'Ujian', '1'),
(6, 6, 'soal6.jpg', '6a.jpg', '6b.jpg', '6c.jpg', '6d.jpg', '6e.jpg', '6f.jpg', 'B', '', 'Ujian', '1'),
(7, 7, 'soal7.jpg', '7a.jpg', '7b.jpg', '7c.jpg', '7d.jpg', '7e.jpg', '7f.jpg', 'D', '', 'Ujian', '1'),
(8, 8, 'soal8.jpg', '8a.jpg', '8b.jpg', '8c.jpg', '8d.jpg', '8e.jpg', '8f.jpg', 'B', '', 'Ujian', '1'),
(9, 9, 'soal9.jpg', '9a.jpg', '9b.jpg', '9c.jpg', '9d.jpg', '9e.jpg', '9f.jpg', 'F', '', 'Ujian', '1'),
(10, 10, 'soal10.jpg', '10a.jpg', '10b.jpg', '10c.jpg', '10d.jpg', '10e.jpg', '10f.jpg', 'C', '', 'Ujian', '1'),
(11, 11, 'soal11.jpg', '11a.jpg', '11b.jpg', '11c.jpg', '11d.jpg', '11e.jpg', '11f.jpg', 'B', '', 'Ujian', '1'),
(12, 12, 'soal12.jpg', '12a.jpg', '12b.jpg', '12c.jpg', '12d.jpg', '12e.jpg', '12f.jpg', 'B', '', 'Ujian', '1'),
(13, 13, 'soal13.jpg', '13a.jpg', '13b.jpg', '13c.jpg', '13d.jpg', '13e.jpg', '13f.jpg', 'E', '', 'Ujian', '1'),
(14, 14, 'contoh1.jpg', '1a1.jpg', '1b1.jpg', '1c1.jpg', '1d1.jpg', '1e1.jpg', '1f1.jpg', 'C', '', 'Contoh', '1'),
(15, 15, 'contoh2.jpg', '2a1.jpg', '2b1.jpg', '2c1.jpg', '2d1.jpg', '2e1.jpg', '2f1.jpg', 'E', '', 'Contoh', '1'),
(16, 16, 'contoh3.jpg', '3a1.jpg', '3b1.jpg', '3c1.jpg', '3d1.jpg', '3e1.jpg', '3f1.jpg', 'E', '', 'Contoh', '1'),
(17, 17, '', 'contoh_2a.jpg', 'contoh_2b.jpg', 'contoh_2c.jpg', 'contoh_2d.jpg', 'contoh_2e.jpg', '', 'B', 'D', 'Contoh', '2'),
(18, 18, '', 'contoh_22a.jpg', 'contoh_22b.jpg', 'contoh_22c.jpg', 'contoh_22d.jpg', 'contoh_22e.jpg', '', 'C', 'E', 'Contoh', '2'),
(19, 1, '', '2_1a.png', '2_1b.png', '2_1c.png', '2_1d.png', '2_1e.png', '', 'B', 'E', 'Ujian', '2'),
(20, 2, '', '2_2a.png', '2_2b.png', '2_2c.png', '2_2d.png', '2_2e.png', '', 'A', 'E', 'Ujian', '2'),
(21, 3, '', '2_3a.png', '2_3b.png', '2_3c.png', '2_3d.png', '2_3e.png', '', 'A', 'D', 'Ujian', '2'),
(22, 4, '', '2_4a.png', '2_4b.png', '2_4c.png', '2_4d.png', '2_4e.png', '', 'C', 'E', 'Ujian', '2'),
(23, 5, '', '2_5a.png', '2_5b.png', '2_5c.png', '2_5d.png', '2_5e.png', '', 'B', 'E', 'Ujian', '2'),
(24, 6, '', '2_6a.png', '2_6b.png', '2_6c.png', '2_6d.png', '2_6e.png', '', 'A', 'D', 'Ujian', '2'),
(25, 7, '', '2_7a.png', '2_7b.png', '2_7c.png', '2_7d.png', '2_7e.png', '', 'B', 'E', 'Ujian', '2'),
(26, 8, '', '2_8a.png', '2_8b.png', '2_8c.png', '2_8d.png', '2_8e.png', '', 'B', 'E', 'Ujian', '2'),
(27, 9, '', '2_9a.png', '2_9b.png', '2_9c.png', '2_9d.png', '2_9e.png', '', 'A', 'D', 'Ujian', '2'),
(28, 10, '', '2_10a.png', '2_10b.png', '2_10c.png', '2_10d.png', '2_10e.png', '', 'B', 'D', 'Ujian', '2'),
(29, 11, '', '2_11a.png', '2_11b.png', '2_11c.png', '2_11d.png', '2_11e.png', '', 'A', 'E', 'Ujian', '2'),
(30, 12, '', '2_12a.png', '2_12b.png', '2_12c.png', '2_12d.png', '2_12e.png', '', 'C', 'D', 'Ujian', '2'),
(31, 13, '', '2_13a.png', '2_13b.png', '2_13c.png', '2_13d.png', '2_13e.png', '', 'B', 'C', 'Ujian', '2'),
(32, 14, '', '2_14a.png', '2_14b.png', '2_14c.png', '2_14d.png', '2_14e.png', '', 'A', 'B', 'Ujian', '2'),
(33, 1, 'soal14.jpg', '1a2.jpg', '1b2.jpg', '1c2.jpg', '1d2.jpg', '1e2.jpg', '1f2.jpg', 'E', '', 'Ujian', '3'),
(34, 2, 'soal.jpg', '2a2.jpg', '2b2.jpg', '2c2.jpg', '2d2.jpg', '2e2.jpg', '2f2.jpg', 'E', '', 'Ujian', '3'),
(35, 3, 'soal15.jpg', '3a2.jpg', '3b2.jpg', '3c2.jpg', '3d2.jpg', '3e2.jpg', '3f2.jpg', 'E', '', 'Ujian', '3'),
(36, 4, 'soal16.jpg', '4a1.jpg', '4b1.jpg', '4c1.jpg', '4d1.jpg', '4e1.jpg', '4f1.jpg', 'B', '', 'Ujian', '3'),
(37, 5, 'soal17.jpg', '5a1.jpg', '5b1.jpg', '5c1.jpg', '5d1.jpg', '5e1.jpg', '5f1.jpg', 'C', '', 'Ujian', '3'),
(38, 6, 'soal18.jpg', '6a1.jpg', '6b1.jpg', '6c1.jpg', '6d1.jpg', '6e1.jpg', '6f1.jpg', 'D', '', 'Ujian', '3'),
(39, 7, 'soal19.jpg', '7a1.jpg', '7b1.jpg', '7c1.jpg', '7d1.jpg', '7e1.jpg', '7f1.jpg', 'E', '', 'Ujian', '3'),
(40, 8, 'soal20.jpg', '8a1.jpg', '8b1.jpg', '8c1.jpg', '8d1.jpg', '8e1.jpg', '8f1.jpg', 'E', '', 'Ujian', '3'),
(41, 9, 'soal21.jpg', '9a1.jpg', '9b1.jpg', '9c1.jpg', '9d1.jpg', '9e1.jpg', '9f1.jpg', 'A', '', 'Ujian', '3'),
(42, 10, 'soal22.jpg', '10a1.jpg', '10b1.jpg', '10c1.jpg', '10d1.jpg', '10e1.jpg', '10f1.jpg', 'A', '', 'Ujian', '3'),
(44, 11, 'soal23.jpg', '11a1.jpg', '11b1.jpg', '11c1.jpg', '11d1.jpg', '11e1.jpg', '11f1.jpg', 'F', '', 'Ujian', '3'),
(45, 12, 'soal24.jpg', '12a1.jpg', '12b1.jpg', '12c1.jpg', '12d1.jpg', '12e2.jpg', '12f1.jpg', 'C', '', 'Ujian', '3'),
(46, 13, 'soal25.jpg', '13a1.jpg', '13b1.jpg', '13c1.jpg', '13d1.jpg', '13e1.jpg', '13f1.jpg', 'C', '', 'Ujian', '3'),
(47, 46, 'contoh11.jpg', '1a3.jpg', '1b3.jpg', '1c3.jpg', '1d3.jpg', '1e3.jpg', '1f3.jpg', 'B', '', 'Contoh', '3'),
(48, 47, 'contoh21.jpg', '2a3.jpg', '2b3.jpg', '2c3.jpg', '2d3.jpg', '2e3.jpg', '2f3.jpg', 'C', '', 'Contoh', '3'),
(49, 48, 'contoh31.jpg', '3a3.jpg', '3b3.jpg', '3c3.jpg', '3d3.jpg', '3e3.jpg', '3f3.jpg', 'F', '', 'Contoh', '3'),
(50, 49, 'contoh12.jpg', '1a4.jpg', '1b4.jpg', '1c4.jpg', '1d4.jpg', '1e4.jpg', '', 'C', '', 'Contoh', '4'),
(51, 50, 'contoh22.jpg', '2a4.jpg', '2b4.jpg', '2c4.jpg', '2d4.jpg', '2e4.jpg', '', 'D', '', 'Contoh', '4'),
(52, 51, 'contoh32.jpg', '3a4.jpg', '3b4.jpg', '3c4.jpg', '3d4.jpg', '3e4.jpg', '', 'B', '', 'Contoh', '4'),
(53, 1, '4_1.jpg', '4_1a.jpg', '4_1b.jpg', '4_1c.jpg', '4_1d.jpg', '4_1e.jpg', '', 'B', '', 'Ujian', '4'),
(54, 2, '4_2.jpg', '4_2a.jpg', '4_2b.jpg', '4_2c.jpg', '4_2d.jpg', '4_2e.jpg', '', 'A', '', 'Ujian', '4'),
(55, 3, '4_3.jpg', '4_3a.jpg', '4_3b.jpg', '4_3c.jpg', '4_3d.jpg', '4_3e.jpg', '', 'D', '', 'Ujian', '4'),
(56, 5, '4_5.jpg', '4_5a.jpg', '4_5b.jpg', '4_5c.jpg', '4_5d.jpg', '4_5e.jpg', '', 'A', '', 'Ujian', '4'),
(57, 6, '4_6.jpg', '4_6a.jpg', '4_6b.jpg', '4_6c.jpg', '4_6d.jpg', '4_6e.jpg', '', 'B', '', 'Ujian', '4'),
(58, 7, '4_7.jpg', '4_7a.jpg', '4_7b.jpg', '4_7c.jpg', '4_7d.jpg', '4_7e.jpg', '', 'C', '', 'Ujian', '4'),
(59, 8, '4_8.jpg', '4_8a.jpg', '4_8b.jpg', '4_8c.jpg', '4_8d.jpg', '4_8e.jpg', '', 'D', '', 'Ujian', '4'),
(60, 9, '4_9.jpg', '4_9a.jpg', '4_9b.jpg', '4_9c.jpg', '4_9d.jpg', '4_9e.jpg', '', 'A', '', 'Ujian', '4'),
(61, 10, '4_10.jpg', '4_10a.jpg', '4_10b.jpg', '4_10c.jpg', '4_10d.jpg', '4_10e.jpg', '', 'D', '', 'Ujian', '4'),
(62, 4, '4_4.jpg', '4_4a.jpg', '4_4b.jpg', '4_4c.jpg', '4_4d.jpg', '4_4e.jpg', '', 'D', '', 'Ujian', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal_motlet`
--

CREATE TABLE `tb_soal_motlet` (
  `id_soal` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `id_jenis_motlet` int(5) NOT NULL,
  `soal_motlet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal_motlet`
--

INSERT INTO `tb_soal_motlet` (`id_soal`, `id_perusahaan`, `id_jenis_motlet`, `soal_motlet`) VALUES
(1, 2, 1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(3, 1, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(5, 2, 1, '<p>tes12324</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ujian`
--

CREATE TABLE `tb_ujian` (
  `id_ujian` int(11) NOT NULL,
  `nama_ujian` varchar(100) NOT NULL,
  `waktu_dimulai` datetime NOT NULL,
  `waktu_berakhir` datetime NOT NULL,
  `start_lat_sub1` datetime NOT NULL,
  `end_lat_sub1` datetime NOT NULL,
  `start_uji_sub1` datetime NOT NULL,
  `end_uji_sub1` datetime NOT NULL,
  `start_lat_sub2` datetime NOT NULL,
  `end_lat_sub2` datetime NOT NULL,
  `start_uji_sub2` datetime NOT NULL,
  `end_uji_sub2` datetime NOT NULL,
  `start_lat_sub3` datetime NOT NULL,
  `end_lat_sub3` datetime NOT NULL,
  `start_uji_sub3` datetime NOT NULL,
  `end_uji_sub3` datetime NOT NULL,
  `start_lat_sub4` datetime NOT NULL,
  `end_lat_sub4` datetime NOT NULL,
  `start_uji_sub4` datetime NOT NULL,
  `end_uji_sub4` datetime NOT NULL,
  `durasi` int(100) NOT NULL,
  `nama_pembuat` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ujian`
--

INSERT INTO `tb_ujian` (`id_ujian`, `nama_ujian`, `waktu_dimulai`, `waktu_berakhir`, `start_lat_sub1`, `end_lat_sub1`, `start_uji_sub1`, `end_uji_sub1`, `start_lat_sub2`, `end_lat_sub2`, `start_uji_sub2`, `end_uji_sub2`, `start_lat_sub3`, `end_lat_sub3`, `start_uji_sub3`, `end_uji_sub3`, `start_lat_sub4`, `end_lat_sub4`, `start_uji_sub4`, `end_uji_sub4`, `durasi`, `nama_pembuat`, `status`) VALUES
(1, 'Testing', '2020-11-09 13:32:00', '2020-11-09 15:00:00', '2020-11-09 13:35:00', '2020-11-09 13:33:00', '2020-11-09 13:48:00', '2020-11-09 13:52:00', '2020-11-09 13:39:00', '2020-11-09 13:54:00', '2020-11-09 13:40:00', '2020-11-09 13:59:00', '2020-11-09 13:44:00', '2020-11-09 14:02:00', '2020-11-09 13:45:00', '2020-11-09 14:05:00', '2020-11-09 13:49:00', '2020-11-09 14:50:00', '2020-11-09 13:50:00', '2020-11-09 13:53:00', 1950, 'Administrator', 'tersedia'),
(2, 'uhuy', '2020-11-12 08:10:00', '2020-11-12 10:00:00', '2020-11-04 15:10:00', '2020-11-12 08:45:00', '2020-11-11 15:11:00', '2020-11-12 08:43:00', '2020-11-11 15:15:00', '2020-11-12 08:44:00', '2020-11-11 15:17:00', '2020-11-12 08:47:00', '2020-11-11 15:20:00', '2020-11-12 08:48:00', '2020-11-11 15:21:00', '2020-11-12 08:51:00', '2020-11-11 15:25:00', '2020-11-12 08:52:00', '2020-11-11 15:26:00', '2020-11-12 08:56:00', 1950, 'Administrator', 'tersedia');

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
-- Indeks untuk tabel `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indeks untuk tabel `tb_data_diri`
--
ALTER TABLE `tb_data_diri`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tb_data_jawaban_cfit`
--
ALTER TABLE `tb_data_jawaban_cfit`
  ADD PRIMARY KEY (`id_jawaban_cfit`);

--
-- Indeks untuk tabel `tb_data_jawaban_holland`
--
ALTER TABLE `tb_data_jawaban_holland`
  ADD PRIMARY KEY (`id_jawaban_holland`);

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
-- Indeks untuk tabel `tb_data_pendidikan_nonformal`
--
ALTER TABLE `tb_data_pendidikan_nonformal`
  ADD PRIMARY KEY (`id_pendidikan_nonformal`);

--
-- Indeks untuk tabel `tb_data_pengalaman_kerja`
--
ALTER TABLE `tb_data_pengalaman_kerja`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `tb_jenis_motlet`
--
ALTER TABLE `tb_jenis_motlet`
  ADD PRIMARY KEY (`id_jenis_motlet`);

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
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `tb_nilai_cfit`
--
ALTER TABLE `tb_nilai_cfit`
  ADD PRIMARY KEY (`id_nilai_cfit`);

--
-- Indeks untuk tabel `tb_nilai_pwb`
--
ALTER TABLE `tb_nilai_pwb`
  ADD PRIMARY KEY (`id_nilai_pwb`);

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
-- Indeks untuk tabel `tb_soal_cfit`
--
ALTER TABLE `tb_soal_cfit`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `tb_soal_motlet`
--
ALTER TABLE `tb_soal_motlet`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `tb_ujian`
--
ALTER TABLE `tb_ujian`
  ADD PRIMARY KEY (`id_ujian`);

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
  MODIFY `id_apply` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `id_berkas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_data_jawaban_cfit`
--
ALTER TABLE `tb_data_jawaban_cfit`
  MODIFY `id_jawaban_cfit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT untuk tabel `tb_data_jawaban_holland`
--
ALTER TABLE `tb_data_jawaban_holland`
  MODIFY `id_jawaban_holland` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_data_keluarga`
--
ALTER TABLE `tb_data_keluarga`
  MODIFY `id_keluarga` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_data_pendidikan`
--
ALTER TABLE `tb_data_pendidikan`
  MODIFY `id_pendidikan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_data_pendidikan_nonformal`
--
ALTER TABLE `tb_data_pendidikan_nonformal`
  MODIFY `id_pendidikan_nonformal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_data_pengalaman_kerja`
--
ALTER TABLE `tb_data_pengalaman_kerja`
  MODIFY `id_pengalaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_motlet`
--
ALTER TABLE `tb_jenis_motlet`
  MODIFY `id_jenis_motlet` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  MODIFY `id_lowongan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_motivation_letter`
--
ALTER TABLE `tb_motivation_letter`
  MODIFY `id_motivasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai_cfit`
--
ALTER TABLE `tb_nilai_cfit`
  MODIFY `id_nilai_cfit` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai_pwb`
--
ALTER TABLE `tb_nilai_pwb`
  MODIFY `id_nilai_pwb` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_psikolog`
--
ALTER TABLE `tb_psikolog`
  MODIFY `id_psikolog` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_soal_cfit`
--
ALTER TABLE `tb_soal_cfit`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `tb_soal_motlet`
--
ALTER TABLE `tb_soal_motlet`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_ujian`
--
ALTER TABLE `tb_ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
