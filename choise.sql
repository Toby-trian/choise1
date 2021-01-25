-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2021 pada 08.26
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
(1, 1, 1, 1, 10, 7, 15, 7, 19, 10);

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
(4, 1, 1, 1, 4, 'P'),
(5, 1, 1, 1, 90, 'X');

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
  `nilai_cfit` int(15) NOT NULL,
  `iq` int(15) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `gambaran_kepribadian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai_cfit`
--

INSERT INTO `tb_nilai_cfit` (`id_nilai_cfit`, `id_pelamar`, `id_lowongan`, `nilai_cfit`, `iq`, `kategori`, `gambaran_kepribadian`) VALUES
(1, 29, 2, 0, 38, 'Intellectual deficient', ''),
(2, 1, 1, 0, 38, 'Intellectual deficient', '');

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
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `isi_pesan`) VALUES
(1, '<p>*Selamat* sore, silahkan kunjungi http://choise.chaakraconsulting.com/Login_pelamar</p>');

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
-- Struktur dari tabel `tb_soal_ist`
--

CREATE TABLE `tb_soal_ist` (
  `id_soal_ist` int(11) NOT NULL,
  `no_soal` int(5) NOT NULL,
  `soal_ist` varchar(255) NOT NULL,
  `opsi_a` varchar(255) NOT NULL,
  `opsi_b` varchar(255) NOT NULL,
  `opsi_c` varchar(255) NOT NULL,
  `opsi_d` varchar(255) NOT NULL,
  `opsi_e` varchar(255) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `subtes` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal_ist`
--

INSERT INTO `tb_soal_ist` (`id_soal_ist`, `no_soal`, `soal_ist`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `jawaban`, `subtes`) VALUES
(1, 1, 'Pengaruh seseorang terhadap orang lain seharusnya bergantung pada ...', 'kekuasaan', 'bujukan', 'kekayaan', 'keberanian', 'kewibawaan', 'D', '1'),
(3, 2, 'Lawannya \"hemat\" adalah ...', 'murah', 'kikir', 'boros', 'bernilai', 'kaya', 'C', '1'),
(4, 3, '.... tidak termasuk cuaca', 'angin puyuh', 'halilintar', 'salju', 'gempa bumi', 'kabut', 'D', '1'),
(5, 4, 'Lawannya \"setia\" adalah ...', 'cinta', 'benci', 'persahabatan', 'khianat', 'permusuhan', 'D', '1'),
(6, 5, 'Seekor kuda selalu memiliki ...', 'kandang', 'ladam', 'pelana', 'kuku', 'surai', 'D', '1'),
(7, 6, 'Seorang paman ..... lebih tua daripada keponakannya', 'jarang', 'biasanya', 'selalu', 'tak pernah', 'kadang-kadng', 'B', '1'),
(8, 7, 'Pada jumlah yang sama, nilai kalori yang tertinggi terdapat pada ...', 'ikan', 'daging', 'lemak', 'tahu', 'sayuran', 'C', '1'),
(9, 8, 'Pada suatu pertandingan selalu terdapat ...', 'lawan', 'wasit', 'penonton', 'sorak', 'kemenangan', 'A', '1'),
(10, 9, 'Suatu pernyataan yang belum dapat dipastikan dikatakan sebagai pernyataan yang ...', 'paradoks', 'tergesa-gesa', 'mempunyai arti rangkap', 'menyesatkan', 'hipotesis', 'E', '1'),
(11, 10, 'Pada sepatu kulit terdapat ...', 'kulit', 'sol', 'tali sepatu', 'gesper', 'lidah', 'B', '1'),
(12, 11, 'Suatu ... tidak menyangkut persoalan pencegahan kecelakaan', 'lampu lalu lintas', 'kacamata pelindung', 'kotak P3K', 'tanda peringatan', 'palang kereta api', 'C', '1'),
(13, 12, 'Mata uang dari Rp. 500 garis tengahnya adalah .... mm', '17', '29', '25', '24', '15', 'D', '1'),
(14, 13, 'Seseorang yang bersikap menyangsikan setiap kemajuan ialah seorang yang ...', 'demokratis', 'radikal', 'liberal', 'konservatif', 'anarkis', 'D', '1'),
(15, 14, 'Lawannya \"tidak pernah\" ialah ....', 'sering', 'kadang-kadang', 'jarang', 'kerapkali', 'selalu', 'E', '1'),
(16, 15, 'Jarak antara Jakarta-Surabaya ialah kira-kira ... km', '650', '1000', '800', '600', '950', 'C', '1'),
(17, 16, 'Untuk dapat membuat nada yang terendah dan mendalam, kita memerlukan banyak ....', 'kekuatan', 'peranan', 'ayunan', 'berat', 'suara', 'A', '1'),
(18, 17, 'Ayah ... lebih berpengalaman daripada anaknya ...', 'selalu', 'biasanya', 'jauh', 'jarang', 'pada dasarnya', 'B', '1'),
(19, 18, 'Di antara kota-kota berikut ini, maka kota ... letaknya paling selatan', 'Jakarta', 'Bandung', 'Cirebon', 'Semarang', 'Surabaya', 'B', '1'),
(20, 19, 'Jika kita mengetahui jumlah persentase nomor-nomor lotre yang tidak menang, maka kita dapat menghitung ....', 'jumlah nomor yang menang', 'pajak lotre', 'kemungkinan menang', 'jumlah pengikut', 'tinggi keuntungan', 'C', '1'),
(21, 20, 'Seorang anak yang berumur 10 tahun tingginya rata-rata .... cm', '150', '130', '110', '105', '115', 'A', '1'),
(22, 21, '', 'lingkaran', 'panah', 'elips', 'busur', 'lengkungan', 'B', '2'),
(23, 22, '', 'mengetuk', 'memaku', 'menjahit', 'menggergaji', 'memukul', 'B', '2'),
(24, 23, '', 'lebar', 'keliling', 'luas', 'isi', 'panjang', 'D', '2'),
(25, 24, '', 'mengikat', 'menyatukan', 'melepaskan', 'mengaitkan', 'meletakkan', 'C', '2'),
(26, 25, '', 'arah', 'timur', 'perjalanan', 'tujuan', 'selatan', 'C', '2'),
(27, 26, '', 'jarak', 'perpisahan', 'tugas', 'batas', 'perceraian', 'C', '2'),
(28, 27, '', 'saringan', 'kelambu', 'payung', 'tapisan', 'jala', 'C', '2'),
(29, 28, '', 'putih', 'pucat', 'buram', 'kasar', 'berkilauan', 'D', '2'),
(30, 29, '', 'otobis', 'pesawat terbang', 'sepeda motor', 'sepeda', 'kapal api', 'D', '2'),
(31, 30, '', 'biola', 'seruling', 'clarinet', 'terompet', 'saxophone', 'A', '2'),
(32, 31, '', 'bergelombang', 'kasar', 'berduri', 'licin', 'lurus', 'E', '2'),
(33, 32, '', 'jam', 'kompas', 'penunjuk jalan', 'bintang pari', 'arah', 'A', '2'),
(34, 33, '', 'kebijaksanaan', 'pendidikan', 'perencanaan', 'penempatan', 'pengerahan', 'A', '2'),
(35, 34, '', 'bermotor', 'berjalan', 'berlayar', 'bersepeda', 'berkuda', 'B', '2'),
(36, 35, '', 'gambar', 'lukisan', 'potret', 'patung', 'ukiran', 'C', '2'),
(37, 36, '', 'panjang', 'lonjong', 'runcing', 'bulat', 'bersudut', 'A', '2'),
(38, 37, '', 'kunci', 'palang pintu', 'grendel', 'gunting', 'obeng', 'D', '2'),
(39, 38, '', 'jembatan', 'batas', 'perkawinan', 'pagar', 'masyarakat', 'E', '2'),
(40, 39, '', 'mengetam', 'memahat', 'mengasah', 'melicinkan', 'menggosok', 'B', '2'),
(41, 40, '', 'batu', 'baja', 'bulu', 'karet', 'kayu', 'C', '2'),
(42, 41, 'menemukan : menghilangkan = meningat : ?', 'menghafal', 'mengenai', 'melupakan', 'berpikir', 'memimpikan', 'C', '3'),
(43, 42, 'bunga : jambangan   =   burung :   ?', 'sarang', 'langit', 'pagar', 'pohon', 'sangkar', 'E', '3'),
(44, 33, 'kereta api : rel   =   otobis :  ?', 'roda', 'poros', 'ban', 'jalan raya', 'kecepatan', 'D', '3'),
(45, 44, 'perak : emas   =   cincin :   ?', 'arloji', 'berlian ', 'permata', 'gelang', 'platina', 'D', '3'),
(46, 45, 'lingkaran : bola   =   bujursangkar :   ?', 'bentuk', 'gambar', 'segiempat', 'kubus', 'piramida', 'D', '3'),
(47, 46, 'saran : keputusan   =   merundingkan :   ?', 'menawarkan', 'menentukan', 'menilai', 'menimbang ', 'merenungkan', 'B', '3'),
(48, 47, 'lidah : asam   =   hidung :   ?', 'mencium', 'bernafas', 'mengecap', 'tengik', 'asin', 'D', '3'),
(49, 48, 'darah : pembuluh    =    air :   ?', 'pintu air', 'sungai', 'talang', 'hujan', 'ember', 'B', '3'),
(50, 49, 'saraf : penyalur   =   pupil :   ?', 'penyinaran', 'mata', 'melihat', 'cahaya', 'pelindung', 'E', '3'),
(51, 50, 'pengantar surat : pengantar telegram   =   pandai besi :   ?', 'palu godam', 'pedangan besi', 'api', 'tukang emas', 'besi tempa', 'D', '3'),
(52, 51, 'buta : warna   =   tuli :   ?', 'pendengaran', 'mendengar', 'nada', 'kata', 'telinga', 'C', '3'),
(53, 52, 'makanan : bumbu   =   ceramah :   ?', 'penghinaan', 'pidato', 'kelakar', 'kesan', 'ayat', 'C', '3'),
(54, 53, 'marah : emosi   =   duka cita :   ?', 'suka cita', 'sakit hati', 'suasana hati', 'sedih', 'rindu', 'C', '3'),
(55, 54, 'mantel : jubah   =   wool :   ?', 'bahan sandang', 'domba', 'sutera', 'jas', 'tekstil', 'C', '3'),
(56, 55, 'ketinggian puncak : tekanan udara   =   ketinggian nada :   ?', 'garpu penala', 'sopran', 'nyanyian', 'penjang senar', 'suara', 'E', '3'),
(57, 56, 'negara : revolusi   =   hidup :   ?', 'biologi', 'keturunan ', 'mutasi', 'seleksi', 'ilmu hewan', 'C', '3'),
(58, 57, 'kekurangan : penemuan   =   panas :   ?', 'haus', 'khatulistiwa', 'es', 'matahari', 'dingin', 'C', '3'),
(59, 58, 'kayu : diketam   =   besi :   ?', 'dipalu', 'digergaji', 'dituang', 'dikikir', 'ditempa', 'E', '3'),
(60, 59, 'olahragawan : lembing   =   cendekiawan :   ?', 'perpustakaan', 'penelitian ', 'karya', 'studi', 'mikroskop', 'E', '3'),
(61, 60, 'keledai : kuda pacuan   =    pembakaran :   ?', 'pemadam api', 'obor', 'letupan', 'korek api', 'lautan api', 'E', '3');

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
-- Struktur dari tabel `tb_soal_papi`
--

CREATE TABLE `tb_soal_papi` (
  `id_soal` int(11) NOT NULL,
  `no_soal` int(2) NOT NULL,
  `pernyataan1` varchar(150) NOT NULL,
  `pernyataan2` varchar(150) NOT NULL,
  `aspek` varchar(2) NOT NULL,
  `aspek2` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal_papi`
--

INSERT INTO `tb_soal_papi` (`id_soal`, `no_soal`, `pernyataan1`, `pernyataan2`, `aspek`, `aspek2`) VALUES
(1, 1, 'Saya seorang pekerja keras', 'Saya bukan seorang pemurung', 'G', 'E'),
(2, 2, 'Saya suka bekerja lebih baik dari yang lain', 'Saya suka menekuni pekerjaan yang saya lakukan sampai selesai', 'A', 'N'),
(3, 3, 'Saya suka memberi petunjuk kepada orang bagaimana melakukan sesuatu', 'Saya ingin berbuat semaksimal mungkin', 'P', 'A'),
(4, 4, 'Saya suka melakukan hal-hal lucu', 'Saya suka memberitahukan orang apa yang harus dikerjakannya', 'X', 'P'),
(5, 5, 'Saya suka bergabung dalam kelompok', 'Saya suka jika diperhatikan orang', 'B', 'X'),
(6, 6, 'Saya suka membuat teman pribadi yang dekat', 'Saya suka berteman dengan suatu kelompok', 'O', 'B'),
(7, 7, 'Saya cepat berubah jika saya rasa diperlukan', 'Saya berusaha membuat teman-teman menjadi dekat', 'Z', 'O'),
(8, 8, 'Saya suka membalas jika saya disakiti', 'Saya suka melakukan hal-hal yang baru dan berbeda', 'K', 'Z'),
(9, 9, 'Saya ingin agar atasan menyukai saya', 'Saya suka memberitahukan orang jika mereka salah', 'F', 'K'),
(10, 10, 'Saya suka mengikuti petunjuk-petunjuk yang diberikan kepada saya', 'Saya suka mendukung pendapat atasan saya', 'X', 'F'),
(11, 11, 'Saya berusaha sangat keras', 'Saya seorang yang teratur. Saya menaruh semua barang pada tempatnya', 'G', 'B'),
(12, 12, 'Saya dapat membuat orang melakukan apa yang saya inginkan', 'Saya tidak mudah marah', 'L', 'B'),
(13, 13, 'Saya suka memberitahukan kepada kelompok apa yang harus mereka kerjakan', 'Saya selalu menekuni suatu pekerjaan sampai selesai', 'P', 'N'),
(14, 14, 'Saya ingin tampil menarik dan mendebarkan', 'Saya ingin menjadi orang yang sangat berhasil', 'X', 'A'),
(15, 15, 'Saya ingin sesuai dan diterima dalam kelompok', 'Saya suka membantu orang dalam mengambil keputusan', 'B', 'P'),
(16, 16, 'Saya cemas bila seseorang tidak menyukai saya', 'Saya suka orang memperhatikan saya', 'O', 'X'),
(17, 17, 'Saya suka mencoba hal-hal baru', 'Saya lebih suka bekerja bersama orang lain daripada sendiri', 'Z', 'B'),
(18, 18, 'Saya kadang-kadang menyalahkan orang lain jika terjadi kesalahan', 'Saya merasa terganggu jika ada yang tidak menyukai saya', 'K', 'B'),
(19, 19, 'Saya suka mendukung pendapat atasan saya', 'Saya suka mencoba pekerjaan-pekerjaan yang baru dan berbeda', 'F', 'Z'),
(20, 20, 'Saya menyukai petunjuk-petunjuk terperinci dalam menyelesaikan pekerjaan', 'Bila saya terganggu oleh siapapun, saya akan memberitahukannya', 'X', 'K'),
(21, 21, 'Saya suka melaksanakan tugas setiap langkah dengan hati-hati', 'Saya selalu berusaha keras', 'G', 'D'),
(22, 22, 'Saya benar-benar pemimpin yang baik', 'Saya dapat mengorganisir suatu pekerjaan dengan baik', 'L', 'C'),
(23, 23, 'Saya mudah tersinggung', 'Saya lambat mengambil keputusan', 'I', 'E'),
(24, 24, 'Bila saya berada dalam satu kelompok, saya suka berdiam diri', 'Saya suka mengerjakan beberapa pekerjaan sekaligus', 'X', 'N'),
(25, 25, 'Saya sangat suka bila saya diundang', 'Saya ingin lebih baik dari yang lain dalam mengerjakan sesuatu', 'B', 'A'),
(26, 26, 'Saya suka membuat teman-teman pribadi yang dekat', 'Saya suka menasehati orang lain', 'O', 'P'),
(27, 27, 'Saya suka melakukan hal-hal yang baru dan berbeda', 'Saya suka menceritakan bagaimana saya berhasil dalam melakukan sesuatu', 'Z', 'P'),
(28, 28, 'Bila saya betul, saya suka mempertahankannya', 'Saya ingin diterima dan diakui dalam suatu kelompok', 'K', 'B'),
(29, 29, 'Saya menghindar menjadi seorang yang berbeda', 'Saya berusaha menjadi sangat dekat dengan seseorang', 'F', 'O'),
(30, 30, 'Saya senang diberitahukan bagaimana saya melakukan sesuatu pekerjaan', 'Saya mudah bosan', 'X', 'Z'),
(31, 31, 'Saya bekerja keras', 'Saya banyak berpikir dan menerima', 'G', 'R'),
(32, 32, 'Saya memimpin kelompok', 'Detail (hal-hal kecil) menarik bagi saya', 'L', 'D'),
(33, 33, 'Saya dapat mengambil keputusan secara mudah dan tepat', 'Saya menyimpan barang-barang saya secara rapi dan teratur', 'I', 'C'),
(34, 34, 'Saya cepat dalam melaksanakan suatu pekerjaan', 'Saya tidak sering marah atau sedih', 'T', 'C'),
(35, 35, 'Saya ingin menjadi bagian dari kelompok', 'Saya hanya ingin melakukan satu pekerjaan pada satu saat', 'B', 'N'),
(36, 36, 'Saya berusaha membuat teman dekat', 'Saya suka bertanggung jawab untuk kepentingan orang lain', 'O', 'A'),
(37, 37, 'Saya suka mode terbaru untuk pakaian atau mobil', 'Saya suka bertanggung jawab untuk kepentingan orang lain', 'Z', 'P'),
(38, 38, 'Saya menyukai perdebatan', 'Saya suka mendapat pekerjaan', 'K', 'X'),
(39, 39, 'Saya suka mendukung orang-orang yang menjadi atasan saya', 'Saya tertarik menjadi bagian kelompok', 'F', 'B'),
(40, 40, 'Saya suka mengikuti peraturan dengan hati-hati', 'Saya suka orang mengenal saya dengan baik', 'X', 'O'),
(41, 41, 'Saya benar-benar pekerja keras', 'Saya mempunyai sifat bersahabat', 'G', 'R'),
(42, 42, 'Orang berpendapat bahwa saya benar-benar seorang pemimpin yang baik', 'Saya berpikir panjang dan berhati-hati', 'L', 'R'),
(43, 43, 'Saya sering mengambil kesempatan', 'Saya senang mengurus hal-hal kecil', 'I', 'D'),
(44, 44, 'Orang berpendapat bahwa saya bekerja cepat', 'Orang berpendapat bahwa saya rapi dan teratur', 'T', 'C'),
(45, 45, 'Saya seanang berolah raga', 'Saya mempunyai pribadi yang menyenangkan', 'V', 'E'),
(46, 46, 'Saya senang jika orang dekat dan bersahabat dengan saya', 'Saya selalu berusaha untuk menyelesaikan sesuatu yang telah saya mulai', 'O', 'N'),
(47, 47, 'Saya senang bereksperimen dan mencoba hal-hal baru', 'Saya suka melaksanakan suatu pekerjaan sulit dengan baik', 'Z', 'A'),
(48, 48, 'Saya suka diperlakukan secara adil', 'Saya suka memberitahu orang lain bagaimana melaksanakan sesuatu', 'K', 'P'),
(49, 49, 'Saya suka melakukan apa yang diharapkan dari saya', 'Saya suka memperoleh perhatian', 'F', 'X'),
(50, 50, 'Saya suka petunjuk-petunjuk terperinci dalam melaksanakan suatu pekerjaan', 'Saya suka berada diantara orang-orang banyak', 'X', 'B'),
(51, 51, 'Saya selalu berusaha menyelesaikan pekerjaan secara sempurna', 'Orang mengatakan bahwa saya tidak mengenal lelah', 'G', 'V'),
(52, 52, 'Saya tipe pemimpin', 'Saya mudah berteman', 'L', 'S'),
(53, 53, 'Saya selalu berspekulasi', 'Saya banyak sekali berpikr', 'I', 'R'),
(54, 54, 'Saya bekerja dengan kecepatan teratur', 'Saya senang bekerja dengan hal-hal kecil/terperinci', 'T', 'D'),
(55, 55, 'Saya mempunyai banyak tenaga untuk berolah raga', 'Saya menyimpan barang-barang saya secara rapi dan teratur', 'V', 'C'),
(56, 56, 'Saya dapat bergaul dengan baik terhadap semua orang', 'Saya seorang mempunyai pembawaan yang tenang (even tempered)', 'S', 'E'),
(57, 57, 'Saya ingin bertemu dengan orang-orang baru dan melakukan hal yang baru', 'Saya selalu ingin menyelesaikan pekerjaan yang telah saya mulai', 'Z', 'N'),
(58, 58, 'Saya  biasanya mempertahankan pendapat yang saya yakini', 'Saya biasanya suka bekerja keras', 'K', 'A'),
(59, 59, 'Saya suka saran-saran dari orang-orang yang saya kagumi', 'Saya suka melayani orang-orang berwenang terhadap saya', 'R', 'P'),
(60, 60, 'Saya berusaha bekerja keras', 'Saya suka mendapat perhatian', 'X', 'X'),
(61, 61, 'Saya berusaha bekerja keras', 'Saya mengerjakan sesuatu dengan cepat', 'G', 'T'),
(62, 62, 'Apabila saya bicara, kelompok mendengarkan', 'Saya terampil dengan perkakas (alat-alat)', 'L', 'V'),
(63, 63, 'Saya lambat dalam mendapatkan teman', 'Saya lambat dalam mengambil keputus', 'I', 'S'),
(64, 64, 'Saya biasanya makan secara cepat', 'Saya suka membaca', 'T', 'R'),
(65, 65, 'Saya suka pekerjaan dimana saya bergerak', 'Saya suka pekerjaan yang harus dilaksanakan secara hati-hati', 'V', 'D'),
(66, 66, 'Saya membuat sebanyak mungkin teman', 'Apa yang telah saya simpan, akan mudah saya temukan kembali', 'S', 'C'),
(67, 67, 'Saya merencakan jauh-jauh sebelumnya', 'Saya selalu menyenangkan', 'R', 'E'),
(68, 68, 'Saya mempertahankan dengan bangga nama baik saya', 'Saya terus menekuni suatu masalah sampai selesai', 'K', 'N'),
(69, 69, 'Saya suka mendukung orang-orang yang saya kagumi', 'Saya ingin sukses', 'F', 'A'),
(70, 70, 'Saya suka orang lain yang membuat keputusan-keputusan untuk kelompok', 'Saya suka membuat keputusan-keputusan untuk kelompok', 'X', 'P'),
(71, 71, 'Saya selalu berusaha keras', 'Saya membuat keputusan dengan cepat dan tepat', 'G', 'I'),
(72, 72, 'Kelompok biasanya melakukan apa yang saya inginkan', 'Saya biasa terburu-buru', 'L', 'T'),
(73, 73, 'Saya sering merasa lelah', 'Sya lamban mengambil keputusan', 'I', 'V'),
(74, 74, 'Saya bekerja cepat', 'Saya mudah berteman', 'T', 'S'),
(75, 75, 'Saya biasanya punya gairah dan tenaga', 'Saya banyak menghabiskan waktu dengan berpikir', 'V', 'R'),
(76, 76, 'Saya sangat ramah terhadap orang', 'Saya suka dengan pekerjaan yang memerlukan ketelitian', 'S', 'D'),
(77, 77, 'Saya banyak berpikir dan berencana', 'Saya menyimpan segala sesuatu pada tempatnya', 'R', 'C'),
(78, 78, 'Saya suka pekerjaan yang menuntut hal-hal yang terperinci', 'Saya tidak mudah marah', 'D', 'E'),
(79, 79, 'Saya suka mengikuti orang yang saya kagumi', 'Saya selalu menyelesaikan pekerjaan yang telah saya mulai', 'R', 'N'),
(80, 80, 'Saya suka petunjuk yang jelas', 'Saya suka bekerja keras', 'X', 'A'),
(81, 81, 'Saya mengejar apa yang saya inginkan', 'Saya seorang pemimpin tang baik', 'G', 'L'),
(82, 82, 'Saya membuat orang lain bekerja sesuai dengan yang saya inginkan', 'Saya seorang yang bertipe santai tapi beruntung', 'L', 'I'),
(83, 83, 'Saya mengambil keputusan secara cepat', 'Saya bicara dengan cepat', 'I', 'T'),
(84, 84, 'Saya biasa bekerja cepat', 'Saya berolah raga secara teratur', 'T', 'V'),
(85, 85, 'Saya tidak suka bertemy orang', 'Saya cepat merasa lelah', 'V', 'S'),
(86, 86, 'Saya membuat banyak sekali teman', 'Saya banyak menghabiskan waktu dengan berpikir', 'S', 'R'),
(87, 87, 'Saya suka bekerja dengan teori', 'Saya suka bekerja dengan hal-hal terperinci', 'R', 'D'),
(88, 88, 'Saya dapat menikmati hal-hal/pekerjaan yang terperinci', 'Saya suka mengorganisir pekerjaan saya', 'D', 'C'),
(89, 89, 'Saya menaruh barang pada tempatnya', 'Saya selalu menyenangkan ', 'C', 'E'),
(90, 90, 'Saya suka diberitahu tentang apa yang saya perlu lakukan', 'Saya harus menyelesaikan apa yang saya mulai', 'X', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal_tpa`
--

CREATE TABLE `tb_soal_tpa` (
  `id_soal_tpa` int(3) NOT NULL,
  `soal` varchar(50) NOT NULL,
  `opsi_a` varchar(50) NOT NULL,
  `opsi_b` varchar(50) NOT NULL,
  `opsi_c` varchar(50) NOT NULL,
  `opsi_d` varchar(50) NOT NULL,
  `opsi_e` varchar(50) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `seksi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_soal_tpa`
--

INSERT INTO `tb_soal_tpa` (`id_soal_tpa`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `jawaban`, `seksi`) VALUES
(1, 'Epidemi = ...', 'Penyakit', 'Wabah', 'Menular', 'Berbahaya', 'Stabil', 'Penyakit', 1),
(2, 'Gegabah ><', 'Hati-hati', 'Berani', 'Kuat', 'Tangguh', 'Nekat', 'Hati-hati', 2),
(3, 'Gegap ><', 'Gemetar', 'Gugup', 'Gempita', 'Lancar', 'Ramai', 'Lancar', 2),
(4, 'Fusi = ...', 'Peleburan', 'Penghancuran', 'Pemersatu', 'Persatuan', 'Pemisahan', 'Peleburan', 1),
(5, 'Imla = ...', 'Atur', 'Rapi', 'Dikte', 'Baca', 'Keras', 'Dikte', 1),
(6, 'Ingsut = ...', 'Pecah', 'Jatuh', 'Pelan', 'Bergeser', 'Hilang', 'Bergeser', 1),
(7, 'Kasual = ...', 'Mewah', 'Biasa', 'Sederhana', 'Santai', 'Rapi', 'Sederhana', 1),
(8, 'Komperehensif = ...', 'Sempit', 'Lebar', 'Rasuk', 'Lengkap', 'Masuk', 'Lengkap', 1),
(9, 'Leksinon = ...', 'Kosa Kata', 'Indeks', 'Bahasa', 'Kiasan', 'Peribahasa', 'Kosa Kata', 1),
(10, 'Majasi = ...', 'Umpama', 'Hiasan', 'Kalimat Mutiara', 'Inden', 'Kiasan', 'Kiasan', 1),
(11, 'Mala = ...', 'Tanda', 'Bencana', 'Bahaya', 'Ancaman', 'Percobaan', 'Bencana', 1),
(12, 'Motorium = ...', 'Mufakat', 'Penundaan', 'Permalukan', 'Perizinan', 'Persetujuan', 'Penundaan', 1),
(13, 'Nidera = ...', 'Tidur', 'Surga', 'Sehat', 'Terlelap', 'Bangun', 'Tidur', 1),
(14, 'Oblak = ...', 'Sempit', 'Pancing', 'Lebar', 'Kail', 'Pantai', 'Lebar', 1),
(15, 'Ogel = ...', 'Kibas', 'Lonjong', 'Bulat', 'Melengkung', 'Lurus', 'Kibas', 1),
(16, 'Okulis = ...', 'Mikroskop', 'Dokter Mata', 'Penyakit', 'Buta', 'Kaca Mata', 'Dokter Mata', 1),
(17, 'Okupasi = ...', 'Pekerjaan', 'Penjualan', 'Pelelangan', 'Penyembahan', 'Pendudukan', 'Pendudukan', 1),
(18, 'Oposisi = ...', 'Penentangan', 'Musuh', 'Penyesuaian', 'Perdebatan', 'Diskusi', 'Penentangan', 1),
(19, 'Pacak = ...', 'Pantas', 'Sesuai', 'Tepat', 'Berbakat', 'Cakap', 'Cakap', 1),
(20, 'Pedar = ...', 'Pisah', 'Encer', 'Getir', 'Tajam', 'Temu', 'Getir', 1),
(21, 'Ranah = ...', 'Asal', 'Lembah', 'Kampung', 'Keluarga', 'Gunung', 'Lembah', 1),
(22, 'Skeptis = ...', 'Stabil', 'Ragu', 'Kasar', 'Tegas', 'Marah', 'Ragu', 1);

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
(1, 'lk', '2020-11-24 00:00:00', '2020-11-25 04:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ujian_holland`
--

CREATE TABLE `tb_ujian_holland` (
  `id_ujian_holland` int(11) NOT NULL,
  `nama_ujian` varchar(100) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ujian_papi`
--

CREATE TABLE `tb_ujian_papi` (
  `id_ujian_papi` int(5) NOT NULL,
  `nama_ujian` varchar(100) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ujian_papi`
--

INSERT INTO `tb_ujian_papi` (`id_ujian_papi`, `nama_ujian`, `waktu_mulai`, `waktu_akhir`, `status`) VALUES
(1, 'Papi Tes', '2020-12-22 08:00:00', '2020-12-23 15:00:00', 'tersedia');

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
-- Indeks untuk tabel `tb_data_jawaban_papi`
--
ALTER TABLE `tb_data_jawaban_papi`
  ADD PRIMARY KEY (`id_jawaban_papi`);

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
-- Indeks untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

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
-- Indeks untuk tabel `tb_soal_ist`
--
ALTER TABLE `tb_soal_ist`
  ADD PRIMARY KEY (`id_soal_ist`);

--
-- Indeks untuk tabel `tb_soal_motlet`
--
ALTER TABLE `tb_soal_motlet`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `tb_soal_papi`
--
ALTER TABLE `tb_soal_papi`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `tb_soal_tpa`
--
ALTER TABLE `tb_soal_tpa`
  ADD PRIMARY KEY (`id_soal_tpa`);

--
-- Indeks untuk tabel `tb_ujian`
--
ALTER TABLE `tb_ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- Indeks untuk tabel `tb_ujian_holland`
--
ALTER TABLE `tb_ujian_holland`
  ADD PRIMARY KEY (`id_ujian_holland`);

--
-- Indeks untuk tabel `tb_ujian_papi`
--
ALTER TABLE `tb_ujian_papi`
  ADD PRIMARY KEY (`id_ujian_papi`);

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
  MODIFY `id_jawaban_cfit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_data_jawaban_holland`
--
ALTER TABLE `tb_data_jawaban_holland`
  MODIFY `id_jawaban_holland` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_data_jawaban_papi`
--
ALTER TABLE `tb_data_jawaban_papi`
  MODIFY `id_jawaban_papi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_nilai_cfit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT untuk tabel `tb_soal_ist`
--
ALTER TABLE `tb_soal_ist`
  MODIFY `id_soal_ist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `tb_soal_motlet`
--
ALTER TABLE `tb_soal_motlet`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_soal_papi`
--
ALTER TABLE `tb_soal_papi`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `tb_soal_tpa`
--
ALTER TABLE `tb_soal_tpa`
  MODIFY `id_soal_tpa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_ujian`
--
ALTER TABLE `tb_ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_ujian_holland`
--
ALTER TABLE `tb_ujian_holland`
  MODIFY `id_ujian_holland` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_ujian_papi`
--
ALTER TABLE `tb_ujian_papi`
  MODIFY `id_ujian_papi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
