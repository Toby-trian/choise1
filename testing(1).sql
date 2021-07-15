-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2021 at 06:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(5) NOT NULL,
  `id_level` int(5) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `id_level`, `nama_admin`, `username`, `password`) VALUES
(1, 1, 'Administrator', 'test', 'cc03e747a6afbbcbf8be7668acfebee5'),
(2, 2, 'Dian', 'dian', '750f48161355ac52ad11c48ef5be70b6');

-- --------------------------------------------------------

--
-- Table structure for table `tb_apply`
--

CREATE TABLE `tb_apply` (
  `id_apply` int(5) NOT NULL,
  `id_pelamar` int(11) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `status_lamaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_apply`
--

INSERT INTO `tb_apply` (`id_apply`, `id_pelamar`, `id_lowongan`, `id_perusahaan`, `status_lamaran`) VALUES
(7, 1, 1, 2, 'Diterima'),
(8, 16, 1, 2, 'Tidak lolos'),
(9, 29, 2, 1, 'Diterima'),
(10, 31, 2, 1, 'Diterima'),
(11, 30, 2, 1, 'Diterima'),
(12, 1, 2, 1, 'Tidak lolos'),
(13, 1, 3, 2, 'Diterima'),
(14, 2, 3, 2, 'Diterima'),
(15, 1, 4, 1, 'Diterima'),
(16, 1, 6, 1, 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `id_berkas` int(5) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`id_berkas`, `id_pelamar`, `berkas`) VALUES
(1, 1, 'berkas_Salmon.pdf'),
(2, 16, 'berkas_Dhiki_Sekti_Wibawa1.pdf'),
(3, 29, 'berkas_Vivid_Amalia_Khusna.pdf'),
(4, 30, ''),
(5, 31, 'berkas_Firda_Elfinda_Nurhidayah.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_diri`
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
-- Dumping data for table `tb_data_diri`
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
-- Table structure for table `tb_data_jawaban_cfit`
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
-- Dumping data for table `tb_data_jawaban_cfit`
--

INSERT INTO `tb_data_jawaban_cfit` (`id_jawaban_cfit`, `id_pelamar`, `id_lowongan`, `nomor_soal`, `id_ujian`, `subtes`, `jawaban`, `jawaban2`, `jawaban_kunci`, `jawaban_kunci2`) VALUES
(1, 1, 1, 1, 1, '1', 'B', '', 'B', ''),
(2, 1, 1, 2, 1, '1', 'C', '', 'C', ''),
(3, 1, 1, 3, 1, '1', 'D', '', 'B', ''),
(4, 1, 1, 4, 1, '1', 'E', '', 'D', ''),
(5, 1, 1, 5, 1, '1', 'F', '', 'E', ''),
(6, 1, 1, 6, 1, '1', 'C', '', 'B', ''),
(7, 1, 1, 7, 1, '1', 'D', '', 'D', ''),
(8, 1, 1, 8, 1, '1', 'E', '', 'B', ''),
(9, 1, 1, 9, 1, '1', 'B', '', 'F', ''),
(10, 1, 1, 10, 1, '1', 'A', '', 'C', ''),
(11, 1, 1, 11, 1, '1', 'E', '', 'B', ''),
(12, 1, 1, 12, 1, '1', 'C', '', 'B', ''),
(13, 1, 1, 13, 1, '1', 'E', '', 'E', ''),
(14, 1, 1, 4, 4, '2', 'C', 'D', 'C', 'E'),
(15, 1, 1, 5, 4, '2', 'C', 'D', 'B', 'E'),
(16, 1, 1, 6, 4, '2', 'C', 'D', 'A', 'D'),
(17, 1, 1, 5, 5, '2', 'C', '', 'B', 'E'),
(18, 1, 1, 4, 5, '2', 'C', 'C', 'C', 'E'),
(19, 1, 1, 6, 5, '2', 'B', 'C', 'A', 'D'),
(20, 1, 1, 7, 5, '2', 'C', 'D', 'B', 'E'),
(21, 1, 1, 6, 6, '2', 'C', 'D', 'A', 'D'),
(22, 1, 1, 7, 6, '2', 'D', '', 'B', 'E'),
(23, 1, 1, 8, 6, '2', 'D', '', 'B', 'E'),
(24, 1, 1, 9, 6, '2', 'B', 'B', 'A', 'D'),
(25, 1, 1, 7, 7, '1', 'D', '', 'D', ''),
(26, 1, 1, 8, 7, '1', 'E', '', 'B', ''),
(27, 1, 1, 1, 7, '1', 'D', '', 'B', ''),
(28, 1, 1, 2, 7, '1', 'E', '', 'C', ''),
(29, 1, 1, 3, 7, '1', 'F', '', 'B', ''),
(30, 1, 1, 4, 7, '1', 'C', '', 'D', ''),
(31, 1, 1, 5, 7, '1', 'E', '', 'E', ''),
(32, 1, 1, 6, 7, '1', 'C', '', 'B', ''),
(33, 1, 1, 9, 7, '1', 'D', '', 'F', ''),
(34, 1, 1, 10, 7, '1', 'E', '', 'C', ''),
(35, 1, 1, 11, 7, '1', 'B', '', 'B', ''),
(36, 1, 1, 12, 7, '1', 'E', '', 'B', ''),
(37, 1, 1, 13, 7, '1', 'D', '', 'E', ''),
(38, 1, 1, 7, 7, '2', 'D', 'E', 'B', 'E'),
(39, 1, 1, 1, 7, '2', 'C', 'D', 'B', 'E'),
(40, 1, 1, 2, 7, '2', 'B', 'C', 'A', 'E'),
(41, 1, 1, 3, 7, '2', 'B', 'C', 'A', 'D'),
(42, 1, 1, 4, 7, '2', 'A', 'C', 'C', 'E'),
(43, 1, 1, 5, 7, '2', 'C', 'D', 'B', 'E'),
(44, 1, 1, 6, 7, '2', 'B', 'D', 'A', 'D'),
(45, 1, 1, 8, 7, '2', 'D', 'E', 'B', 'E'),
(46, 1, 1, 9, 7, '2', 'B', 'C', 'A', 'D'),
(47, 1, 1, 10, 7, '2', 'B', 'C', 'B', 'D'),
(48, 1, 1, 11, 7, '2', 'C', 'D', 'A', 'E'),
(49, 1, 1, 12, 7, '2', 'C', 'D', 'C', 'D'),
(50, 1, 1, 13, 7, '2', 'B', 'C', 'B', 'C'),
(51, 1, 1, 14, 7, '2', 'C', 'D', 'A', 'B'),
(52, 1, 1, 7, 7, '3', 'B', '', 'E', ''),
(53, 1, 1, 1, 7, '3', 'B', '', 'E', ''),
(54, 1, 1, 2, 7, '3', 'D', '', 'E', ''),
(55, 1, 1, 3, 7, '3', 'C', '', 'E', ''),
(56, 1, 1, 4, 7, '3', 'E', '', 'B', ''),
(57, 1, 1, 5, 7, '3', 'C', '', 'C', ''),
(58, 1, 1, 6, 7, '3', 'D', '', 'D', ''),
(59, 1, 1, 8, 7, '3', 'D', '', 'E', ''),
(60, 1, 1, 9, 7, '3', 'E', '', 'A', ''),
(61, 1, 1, 10, 7, '3', 'C', '', 'A', ''),
(62, 1, 1, 11, 7, '3', 'C', '', 'F', ''),
(63, 1, 1, 12, 7, '3', 'E', '', 'C', ''),
(64, 1, 1, 13, 7, '3', 'D', '', 'C', ''),
(65, 1, 1, 7, 7, '4', 'C', '', 'C', ''),
(66, 1, 1, 1, 7, '4', 'B', '', 'B', ''),
(67, 1, 1, 2, 7, '4', 'C', '', 'A', ''),
(68, 1, 1, 3, 7, '4', 'D', '', 'D', ''),
(69, 1, 1, 4, 7, '4', 'E', '', 'D', ''),
(70, 1, 1, 5, 7, '4', 'C', '', 'A', ''),
(71, 1, 1, 6, 7, '4', 'D', '', 'B', ''),
(72, 1, 1, 8, 7, '4', 'D', '', 'D', ''),
(73, 1, 1, 9, 7, '4', 'C', '', 'A', ''),
(74, 1, 1, 10, 7, '4', 'B', '', 'D', ''),
(75, 1, 3, 8, 8, '4', 'C', '', 'D', ''),
(76, 1, 3, 9, 8, '4', 'B', '', 'A', ''),
(77, 1, 3, 10, 8, '4', 'E', '', '', ''),
(78, 1, 3, 1, 8, '4', 'C', '', 'B', ''),
(79, 1, 3, 2, 8, '4', 'A', '', 'A', ''),
(80, 1, 3, 3, 8, '4', 'C', '', 'D', ''),
(81, 1, 3, 4, 8, '4', 'D', '', 'D', ''),
(82, 1, 3, 5, 8, '4', 'C', '', 'A', ''),
(83, 1, 3, 6, 8, '4', 'D', '', 'B', ''),
(84, 1, 3, 7, 8, '4', 'D', '', 'C', ''),
(85, 1, 3, 9, 9, '1', 'F', '', 'F', ''),
(86, 1, 3, 13, 9, '1', 'F', '', 'E', ''),
(87, 1, 3, 9, 9, '2', 'D', 'E', 'A', 'D'),
(88, 1, 3, 14, 9, '2', 'D', 'E', 'A', 'B'),
(89, 1, 3, 9, 9, '3', 'D', '', 'A', ''),
(90, 1, 3, 10, 9, '3', 'E', '', 'A', ''),
(91, 1, 3, 11, 9, '3', 'E', '', 'F', ''),
(92, 1, 3, 12, 9, '3', 'C', '', 'C', ''),
(93, 1, 3, 13, 9, '3', 'F', '', 'C', ''),
(94, 1, 3, 9, 9, '4', 'E', '', 'A', ''),
(95, 1, 3, 2, 9, '4', 'C', '', 'A', ''),
(96, 1, 3, 3, 9, '4', 'E', '', 'D', ''),
(97, 1, 3, 7, 9, '4', 'D', '', 'C', ''),
(98, 1, 3, 4, 9, '4', 'E', '', 'D', ''),
(99, 1, 3, 1, 9, '4', 'D', '', 'B', ''),
(100, 1, 3, 5, 9, '4', 'D', '', 'A', ''),
(101, 1, 3, 6, 9, '4', 'E', '', 'B', ''),
(102, 1, 3, 8, 9, '4', 'C', '', 'D', ''),
(103, 1, 3, 10, 10, '1', 'C', '', 'C', ''),
(104, 1, 3, 1, 10, '1', 'B', '', 'B', ''),
(105, 1, 3, 2, 10, '1', 'C', '', 'C', ''),
(106, 1, 3, 3, 10, '1', 'E', '', 'B', ''),
(107, 1, 3, 4, 10, '1', 'E', '', 'D', ''),
(108, 1, 3, 5, 10, '1', 'E', '', 'E', ''),
(109, 1, 3, 6, 10, '1', 'D', '', 'B', ''),
(110, 1, 3, 7, 10, '1', 'C', '', 'D', ''),
(111, 1, 3, 8, 10, '1', 'D', '', 'B', ''),
(112, 1, 3, 9, 10, '1', 'F', '', 'F', ''),
(113, 1, 3, 10, 10, '2', 'A', 'D', 'B', 'D'),
(114, 1, 3, 11, 10, '2', 'B', 'D', 'A', 'E'),
(115, 1, 3, 12, 10, '2', 'D', 'E', 'C', 'D'),
(116, 1, 3, 13, 10, '2', 'A', 'E', 'B', 'C'),
(117, 1, 3, 1, 10, '2', 'B', 'E', 'B', 'E'),
(118, 1, 3, 2, 10, '2', 'A', 'E', 'A', 'E'),
(119, 1, 3, 3, 10, '2', 'A', 'C', 'A', 'D'),
(120, 1, 3, 4, 10, '2', 'B', 'D', 'C', 'E'),
(121, 1, 3, 5, 10, '2', 'B', 'E', 'B', 'E'),
(122, 1, 3, 6, 10, '2', 'A', 'E', 'A', 'D'),
(123, 1, 3, 7, 10, '2', 'A', 'B', 'B', 'E'),
(124, 1, 3, 8, 10, '2', 'A', 'E', 'B', 'E'),
(125, 1, 3, 9, 10, '2', 'A', 'E', 'A', 'D'),
(126, 1, 3, 14, 10, '2', 'B', 'D', 'A', 'B'),
(127, 1, 3, 10, 10, '3', 'B', '', 'A', ''),
(128, 1, 3, 1, 10, '3', 'A', '', 'E', ''),
(129, 1, 3, 2, 10, '3', 'E', '', 'E', ''),
(130, 1, 3, 3, 10, '3', 'E', '', 'E', ''),
(131, 1, 3, 4, 10, '3', 'E', '', 'B', ''),
(132, 1, 3, 5, 10, '3', 'B', '', 'C', ''),
(133, 1, 3, 6, 10, '3', 'D', '', 'D', ''),
(134, 1, 3, 7, 10, '3', 'E', '', 'E', ''),
(135, 1, 3, 8, 10, '3', 'D', '', 'E', ''),
(136, 1, 3, 9, 10, '3', 'D', '', 'A', ''),
(137, 1, 3, 11, 10, '3', 'E', '', 'F', ''),
(138, 1, 3, 13, 10, '3', 'D', '', 'C', ''),
(139, 1, 3, 1, 10, '4', 'A', '', 'B', ''),
(140, 1, 3, 2, 10, '4', 'A', '', 'A', ''),
(141, 1, 3, 3, 10, '4', 'D', '', 'D', ''),
(142, 1, 3, 4, 10, '4', 'B', '', 'D', ''),
(143, 1, 3, 5, 10, '4', 'A', '', 'A', ''),
(144, 1, 3, 6, 10, '4', 'C', '', 'B', ''),
(145, 1, 3, 7, 10, '4', 'B', '', 'C', ''),
(146, 1, 3, 8, 10, '4', 'D', '', 'D', ''),
(147, 1, 3, 9, 10, '4', 'B', '', 'A', ''),
(148, 1, 3, 10, 10, '4', 'E', '', 'D', ''),
(149, 1, 3, 13, 1, '2', 'D', 'E', 'B', 'C'),
(150, 1, 3, 13, 1, '3', 'E', '', 'C', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_jawaban_holland`
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
-- Dumping data for table `tb_data_jawaban_holland`
--

INSERT INTO `tb_data_jawaban_holland` (`id_jawaban_holland`, `id_pelamar`, `id_lowongan`, `id_ujian`, `nilai_r`, `nilai_i`, `nilai_a`, `nilai_s`, `nilai_e`, `nilai_k`) VALUES
(4, 1, 0, 1, 1, 3, 1, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_jawaban_ist`
--

CREATE TABLE `tb_data_jawaban_ist` (
  `id_jawaban_ist` int(11) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `nomor_soal` int(5) NOT NULL,
  `id_ujian` int(5) NOT NULL,
  `subtes` varchar(5) CHARACTER SET latin1 NOT NULL,
  `jawaban` varchar(25) CHARACTER SET latin1 NOT NULL,
  `jawaban2` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `jawaban3` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `jawaban_kunci` varchar(25) CHARACTER SET latin1 NOT NULL,
  `jawaban_kunci2` varchar(3) CHARACTER SET latin1 NOT NULL,
  `jawaban_kunci3` varchar(3) CHARACTER SET latin1 DEFAULT NULL,
  `nilai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_jawaban_ist`
--

INSERT INTO `tb_data_jawaban_ist` (`id_jawaban_ist`, `id_pelamar`, `id_lowongan`, `nomor_soal`, `id_ujian`, `subtes`, `jawaban`, `jawaban2`, `jawaban3`, `jawaban_kunci`, `jawaban_kunci2`, `jawaban_kunci3`, `nilai`) VALUES
(247, 1, 6, 1, 89, '1', 'E', NULL, NULL, 'D', '', NULL, 0),
(248, 1, 6, 2, 89, '1', 'C', NULL, NULL, 'C', '', NULL, 1),
(249, 1, 6, 3, 89, '1', 'D', NULL, NULL, 'D', '', NULL, 1),
(250, 1, 6, 4, 89, '1', 'D', NULL, NULL, 'D', '', NULL, 1),
(251, 1, 6, 5, 89, '1', 'C', NULL, NULL, 'D', '', NULL, 0),
(252, 1, 6, 6, 89, '1', 'B', NULL, NULL, 'B', '', NULL, 1),
(253, 1, 6, 7, 89, '1', 'C', NULL, NULL, 'C', '', NULL, 1),
(254, 1, 6, 8, 89, '1', 'A', NULL, NULL, 'A', '', NULL, 1),
(255, 1, 6, 9, 89, '1', 'E', NULL, NULL, 'E', '', NULL, 1),
(256, 1, 6, 10, 89, '1', 'A', NULL, NULL, 'B', '', NULL, 0),
(257, 1, 6, 11, 89, '1', 'C', NULL, NULL, 'C', '', NULL, 1),
(258, 1, 6, 12, 89, '1', 'E', NULL, NULL, 'D', '', NULL, 0),
(259, 1, 6, 13, 89, '1', 'A', NULL, NULL, 'D', '', NULL, 0),
(260, 1, 6, 14, 89, '1', 'E', NULL, NULL, 'E', '', NULL, 1),
(261, 1, 6, 15, 89, '1', 'A', NULL, NULL, 'C', '', NULL, 0),
(262, 1, 6, 16, 89, '1', 'A', NULL, NULL, 'A', '', NULL, 1),
(263, 1, 6, 17, 89, '1', 'A', NULL, NULL, 'B', '', NULL, 0),
(264, 1, 6, 18, 89, '1', 'D', NULL, NULL, 'B', '', NULL, 0),
(265, 1, 6, 19, 89, '1', 'A', NULL, NULL, 'C', '', NULL, 0),
(266, 1, 6, 20, 89, '1', 'C', NULL, NULL, 'A', '', NULL, 0),
(267, 1, 6, 21, 89, '2', 'B', NULL, NULL, 'B', '', NULL, 1),
(268, 1, 6, 22, 89, '2', 'E', NULL, NULL, 'B', '', NULL, 0),
(269, 1, 6, 23, 89, '2', 'D', NULL, NULL, 'D', '', NULL, 1),
(270, 1, 6, 24, 89, '2', 'E', NULL, NULL, 'C', '', NULL, 0),
(271, 1, 6, 25, 89, '2', 'C', NULL, NULL, 'C', '', NULL, 1),
(272, 1, 6, 26, 89, '2', 'C', NULL, NULL, 'C', '', NULL, 1),
(273, 1, 6, 27, 89, '2', 'C', NULL, NULL, 'C', '', NULL, 1),
(274, 1, 6, 28, 89, '2', 'D', NULL, NULL, 'D', '', NULL, 1),
(275, 1, 6, 29, 89, '2', 'D', NULL, NULL, 'D', '', NULL, 1),
(276, 1, 6, 30, 89, '2', 'A', NULL, NULL, 'A', '', NULL, 1),
(277, 1, 6, 31, 89, '2', 'E', NULL, NULL, 'E', '', NULL, 1),
(278, 1, 6, 32, 89, '2', 'A', NULL, NULL, 'A', '', NULL, 1),
(279, 1, 6, 33, 89, '2', 'A', NULL, NULL, 'A', '', NULL, 1),
(280, 1, 6, 34, 89, '2', 'B', NULL, NULL, 'B', '', NULL, 1),
(281, 1, 6, 35, 89, '2', 'D', NULL, NULL, 'C', '', NULL, 0),
(282, 1, 6, 36, 89, '2', 'E', NULL, NULL, 'A', '', NULL, 0),
(283, 1, 6, 37, 89, '2', 'B', NULL, NULL, 'D', '', NULL, 0),
(284, 1, 6, 38, 89, '2', 'E', NULL, NULL, 'E', '', NULL, 1),
(285, 1, 6, 39, 89, '2', 'A', NULL, NULL, 'B', '', NULL, 0),
(286, 1, 6, 40, 89, '2', 'C', NULL, NULL, 'C', '', NULL, 1),
(287, 1, 6, 41, 89, '3', 'C', NULL, NULL, 'C', '', NULL, 1),
(288, 1, 6, 42, 89, '3', 'A', NULL, NULL, 'E', '', NULL, 0),
(289, 1, 6, 43, 89, '3', 'A', NULL, NULL, 'D', '', NULL, 0),
(290, 1, 6, 44, 89, '3', 'D', NULL, NULL, 'D', '', NULL, 1),
(291, 1, 6, 45, 89, '3', 'C', NULL, NULL, 'D', '', NULL, 0),
(292, 1, 6, 46, 89, '3', 'B', NULL, NULL, 'B', '', NULL, 1),
(293, 1, 6, 47, 89, '3', 'D', NULL, NULL, 'D', '', NULL, 1),
(294, 1, 6, 48, 89, '3', 'B', NULL, NULL, 'B', '', NULL, 1),
(295, 1, 6, 49, 89, '3', 'E', NULL, NULL, 'E', '', NULL, 1),
(296, 1, 6, 50, 89, '3', 'E', NULL, NULL, 'D', '', NULL, 0),
(297, 1, 6, 51, 89, '3', 'A', NULL, NULL, 'C', '', NULL, 0),
(298, 1, 6, 52, 89, '3', 'E', NULL, NULL, 'C', '', NULL, 0),
(299, 1, 6, 53, 89, '3', 'D', NULL, NULL, 'C', '', NULL, 0),
(300, 1, 6, 54, 89, '3', 'D', NULL, NULL, 'C', '', NULL, 0),
(301, 1, 6, 55, 89, '3', 'C', NULL, NULL, 'E', '', NULL, 0),
(302, 1, 6, 56, 89, '3', 'C', NULL, NULL, 'C', '', NULL, 1),
(303, 1, 6, 57, 89, '3', 'C', NULL, NULL, 'C', '', NULL, 1),
(304, 1, 6, 58, 89, '3', 'E', NULL, NULL, 'E', '', NULL, 1),
(305, 1, 6, 59, 89, '3', 'C', NULL, NULL, 'E', '', NULL, 0),
(306, 1, 6, 60, 89, '3', 'B', NULL, NULL, 'E', '', NULL, 0),
(307, 1, 6, 61, 89, '4', 'bunga', NULL, NULL, 'bunga', '', NULL, 1),
(308, 1, 6, 62, 89, '4', 'indera', NULL, NULL, 'indera', '', NULL, 1),
(309, 1, 6, 63, 89, '4', 'kristal', NULL, NULL, 'kristal', '', NULL, 1),
(310, 1, 6, 64, 89, '4', 'cuaca', NULL, NULL, 'cuaca', '', NULL, 1),
(311, 1, 6, 65, 89, '4', 'pembawa berita', NULL, NULL, 'pembawa berita', '', NULL, 1),
(312, 1, 6, 66, 89, '4', 'alat optik', NULL, NULL, 'alat optik', '', NULL, 1),
(313, 1, 6, 67, 89, '4', 'alat pencernaan', NULL, NULL, 'alat pencernaan', '', NULL, 1),
(314, 1, 6, 68, 89, '4', 'jumlah', NULL, NULL, 'jumlah', '', NULL, 1),
(315, 1, 6, 69, 89, '4', 'bibit', NULL, NULL, 'bibit', '', NULL, 1),
(316, 1, 6, 70, 89, '4', 'lambang', NULL, NULL, 'simbol', '', NULL, 0),
(317, 1, 6, 71, 89, '4', 'jenis', NULL, NULL, 'makhluk hidup', '', NULL, 0),
(318, 1, 6, 72, 89, '4', 'wadah', NULL, NULL, 'wadah', '', NULL, 1),
(319, 1, 6, 73, 89, '4', 'waktu', NULL, NULL, 'batas', '', NULL, 0),
(320, 1, 6, 74, 89, '4', 'watak', NULL, NULL, 'watak', '', NULL, 1),
(321, 1, 6, 75, 89, '4', 'promosi', NULL, NULL, 'pengertian ekonomi', '', NULL, 0),
(322, 1, 6, 76, 89, '4', 'ruang', NULL, NULL, 'pengertian ruang', '', NULL, 0),
(323, 1, 6, 77, 89, '5', '3', '5', NULL, '3', '5', '', 1),
(324, 1, 6, 78, 89, '5', '2', '8', '0', '2', '8', '0', 1),
(325, 1, 6, 79, 89, '5', '2', '5', '9', '2', '5', '0', 1),
(326, 1, 6, 80, 89, '5', '2', '6', NULL, '2', '6', '', 1),
(327, 1, 6, 81, 89, '5', '2', '8', NULL, '3', '0', '', 0),
(328, 1, 6, 82, 89, '5', '3', '0', NULL, '7', '0', '', 0),
(329, 1, 6, 83, 89, '5', '4', '5', NULL, '4', '5', '', 1),
(330, 1, 6, 84, 89, '5', '4', '0', NULL, '5', '0', '', 0),
(331, 1, 6, 85, 89, '5', '5', '8', NULL, '4', '8', '', 0),
(332, 1, 6, 86, 89, '5', '7', '8', NULL, '7', '8', '', 1),
(333, 1, 6, 87, 89, '5', '1', '9', NULL, '1', '9', '', 1),
(334, 1, 6, 88, 89, '5', '6', NULL, NULL, '6', '', '', 1),
(335, 1, 6, 89, 89, '5', '5', '7', NULL, '5', '7', '', 1),
(336, 1, 6, 90, 89, '5', '7', '9', NULL, '9', '0', '', 0),
(337, 1, 6, 91, 89, '5', '1', '2', '0', '1', '2', '0', 1),
(338, 1, 6, 92, 89, '5', '3', '8', NULL, '1', '7', '', 0),
(339, 1, 6, 93, 89, '5', '4', '5', '0', '2', '4', '', 0),
(340, 1, 6, 94, 89, '5', '3', '4', NULL, '5', '', '', 0),
(341, 1, 6, 95, 89, '5', '4', '5', '0', '4', '8', '', 0),
(342, 1, 6, 96, 89, '5', '2', '3', '9', '3', '', '', 0),
(353, 1, 6, 107, 89, '6', '8', '', '', '8', '', '', 1),
(354, 1, 6, 108, 89, '6', '1', '4', '', '1', '4', '', 1),
(355, 1, 6, 109, 89, '6', '3', '4', '8', '4', '5', '', 0),
(356, 1, 6, 110, 89, '6', '1', '4', '5', '3', '6', '', 0),
(357, 1, 6, 111, 89, '6', '3', '4', '9', '1', '2', '', 0),
(358, 1, 6, 112, 89, '6', '4', '5', '0', '8', '0', '', 0),
(359, 1, 6, 113, 89, '6', '2', '3', '9', '1', '4', '', 0),
(360, 1, 6, 114, 89, '6', '4', '5', '0', '1', '2', '', 0),
(361, 1, 6, 115, 89, '6', '2', '8', '9', '3', '6', '', 0),
(362, 1, 6, 116, 89, '6', '5', '0', NULL, '1', '0', '', 0),
(363, 1, 6, 117, 89, '7', 'A', NULL, NULL, 'A', '', NULL, 1),
(364, 1, 6, 118, 89, '7', 'C', NULL, NULL, 'C', '', NULL, 1),
(365, 1, 6, 119, 89, '7', 'D', NULL, NULL, 'B', '', NULL, 0),
(366, 1, 6, 120, 89, '7', 'B', NULL, NULL, 'A', '', NULL, 0),
(367, 1, 6, 121, 89, '7', 'D', NULL, NULL, 'D', '', NULL, 1),
(368, 1, 6, 122, 89, '7', 'B', NULL, NULL, 'B', '', NULL, 1),
(369, 1, 6, 123, 89, '7', 'C', NULL, NULL, 'C', '', NULL, 1),
(370, 1, 6, 124, 89, '7', 'E', NULL, NULL, 'E', '', NULL, 1),
(371, 1, 6, 125, 89, '7', 'E', NULL, NULL, 'E', '', NULL, 1),
(372, 1, 6, 126, 89, '7', 'E', NULL, NULL, 'D', '', NULL, 0),
(373, 1, 6, 127, 89, '7', 'E', NULL, NULL, 'E', '', NULL, 1),
(374, 1, 6, 128, 89, '7', 'B', NULL, NULL, 'B', '', NULL, 1),
(375, 1, 6, 129, 89, '7', 'D', NULL, NULL, 'D', '', NULL, 1),
(376, 1, 6, 130, 89, '7', 'C', NULL, NULL, 'C', '', NULL, 1),
(377, 1, 6, 131, 89, '7', 'B', NULL, NULL, 'B', '', NULL, 1),
(378, 1, 6, 132, 89, '7', 'A', NULL, NULL, 'A', '', NULL, 1),
(379, 1, 6, 133, 89, '7', 'B', NULL, NULL, 'B', '', NULL, 1),
(380, 1, 6, 134, 89, '7', 'D', NULL, NULL, 'D', '', NULL, 1),
(381, 1, 6, 135, 89, '7', 'C', NULL, NULL, 'C', '', NULL, 1),
(382, 1, 6, 136, 89, '7', 'B', NULL, NULL, 'C', '', NULL, 0),
(383, 1, 6, 137, 89, '8', 'A', NULL, NULL, 'A', '', NULL, 1),
(384, 1, 6, 138, 89, '8', 'A', NULL, NULL, 'C', '', NULL, 0),
(385, 1, 6, 139, 89, '8', 'D', NULL, NULL, 'D', '', NULL, 1),
(386, 1, 6, 140, 89, '8', 'E', NULL, NULL, 'E', '', NULL, 1),
(387, 1, 6, 141, 89, '8', 'A', NULL, NULL, 'A', '', NULL, 1),
(388, 1, 6, 142, 89, '8', 'C', NULL, NULL, 'C', '', NULL, 1),
(389, 1, 6, 143, 89, '8', 'D', NULL, NULL, 'D', '', NULL, 1),
(390, 1, 6, 144, 89, '8', 'C', NULL, NULL, 'C', '', NULL, 1),
(391, 1, 6, 145, 89, '8', 'E', NULL, NULL, 'E', '', NULL, 1),
(392, 1, 6, 146, 89, '8', 'A', NULL, NULL, 'A', '', NULL, 1),
(393, 1, 6, 147, 89, '8', 'B', NULL, NULL, 'B', '', NULL, 1),
(394, 1, 6, 148, 89, '8', 'D', NULL, NULL, 'D', '', NULL, 1),
(395, 1, 6, 149, 89, '8', 'E', NULL, NULL, 'E', '', NULL, 1),
(396, 1, 6, 150, 89, '8', 'B', NULL, NULL, 'B', '', NULL, 1),
(397, 1, 6, 151, 89, '8', 'D', NULL, NULL, 'D', '', NULL, 1),
(398, 1, 6, 152, 89, '8', 'C', NULL, NULL, 'B', '', NULL, 0),
(399, 1, 6, 153, 89, '8', 'B', NULL, NULL, 'A', '', NULL, 0),
(400, 1, 6, 154, 89, '8', 'D', NULL, NULL, 'E', '', NULL, 0),
(401, 1, 6, 155, 89, '8', 'B', NULL, NULL, 'B', '', NULL, 1),
(402, 1, 6, 156, 89, '8', 'C', NULL, NULL, 'C', '', NULL, 1),
(403, 1, 6, 157, 89, '9', 'B', NULL, NULL, 'D', '', NULL, 0),
(404, 1, 6, 158, 89, '9', 'E', NULL, NULL, 'E', '', NULL, 1),
(405, 1, 6, 159, 89, '9', 'B', NULL, NULL, 'B', '', NULL, 1),
(406, 1, 6, 160, 89, '9', 'A', NULL, NULL, 'A', '', NULL, 1),
(407, 1, 6, 161, 89, '9', 'C', NULL, NULL, 'C', '', NULL, 1),
(408, 1, 6, 162, 89, '9', 'A', NULL, NULL, 'A', '', NULL, 1),
(409, 1, 6, 163, 89, '9', 'D', NULL, NULL, 'D', '', NULL, 1),
(410, 1, 6, 164, 89, '9', 'E', NULL, NULL, 'E', '', NULL, 1),
(411, 1, 6, 165, 89, '9', 'C', NULL, NULL, 'C', '', NULL, 1),
(412, 1, 6, 166, 89, '9', 'B', NULL, NULL, 'B', '', NULL, 1),
(413, 1, 6, 167, 89, '9', 'B', NULL, NULL, 'B', '', NULL, 1),
(414, 1, 6, 168, 89, '9', 'A', NULL, NULL, 'A', '', NULL, 1),
(415, 1, 6, 169, 89, '9', 'E', NULL, NULL, 'E', '', NULL, 1),
(416, 1, 6, 170, 89, '9', 'C', NULL, NULL, 'C', '', NULL, 1),
(417, 1, 6, 171, 89, '9', 'B', NULL, NULL, 'D', '', NULL, 0),
(418, 1, 6, 172, 89, '9', 'D', NULL, NULL, 'B', '', NULL, 0),
(419, 1, 6, 173, 89, '9', 'B', NULL, NULL, 'E', '', NULL, 0),
(420, 1, 6, 174, 89, '9', 'E', NULL, NULL, 'A', '', NULL, 0),
(421, 1, 6, 175, 89, '9', 'A', NULL, NULL, 'C', '', NULL, 0),
(422, 1, 6, 176, 89, '9', 'C', NULL, NULL, 'D', '', NULL, 0),
(423, 1, 1, 77, 90, '5', '3', NULL, NULL, '3', '5', '', 0),
(424, 1, 1, 78, 90, '5', '3', '4', NULL, '2', '8', '0', 0),
(425, 1, 1, 79, 90, '5', '3', '4', '5', '2', '5', '0', 0),
(426, 1, 1, 97, 90, '6', '2', NULL, NULL, '2', '7', '', 0),
(427, 1, 1, 98, 90, '6', '3', '4', NULL, '2', '5', '', 0),
(428, 1, 1, 99, 90, '6', '3', '4', '5', '2', '7', '', 0),
(429, 1, 1, 100, 90, '6', '3', NULL, NULL, '1', '5', '', 0),
(430, 1, 1, 101, 90, '6', '3', '4', NULL, '4', '6', '', 0),
(431, 1, 1, 102, 90, '6', '4', NULL, NULL, '1', '0', '', 0),
(432, 1, 1, 103, 90, '6', '4', '5', '6', '2', '4', '', 0),
(433, 1, 1, 104, 90, '6', '9', '0', NULL, '7', '', '', 0),
(434, 1, 1, 105, 90, '6', '4', NULL, NULL, '5', '', '', 0),
(435, 1, 1, 106, 90, '6', '3', '9', NULL, '1', '4', '', 0),
(436, 1, 1, 107, 90, '6', '4', '9', '0', '8', '', '', 0),
(437, 1, 1, 108, 90, '6', '6', NULL, NULL, '1', '4', '', 0),
(438, 1, 1, 109, 90, '6', '4', '5', '0', '4', '5', '', 1),
(439, 1, 1, 110, 90, '6', '3', '9', NULL, '3', '6', '', 0),
(440, 1, 4, 77, 91, '5', '3', '5', NULL, '3', '5', '', 1),
(441, 1, 4, 78, 91, '5', '2', '3', NULL, '2', '8', '0', 0),
(442, 1, 4, 79, 91, '5', '3', '4', '5', '2', '5', '0', 0),
(443, 1, 4, 80, 91, '5', '4', NULL, NULL, '2', '6', '', 0),
(444, 1, 4, 81, 91, '5', '3', '4', NULL, '3', '0', '', 0),
(445, 1, 4, 82, 91, '5', '3', NULL, NULL, '7', '0', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_jawaban_leadership`
--

CREATE TABLE `tb_data_jawaban_leadership` (
  `id_jawaban_leadership` int(11) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `id_ujian` int(5) NOT NULL,
  `subtes` varchar(5) CHARACTER SET latin1 NOT NULL,
  `nomor_soal` int(5) NOT NULL,
  `jawaban` varchar(25) CHARACTER SET latin1 NOT NULL,
  `jawaban_kunci` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_jawaban_msdt`
--

CREATE TABLE `tb_data_jawaban_msdt` (
  `id_jawaban_msdt` int(11) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `id_ujian` int(5) NOT NULL,
  `no_soal` int(5) NOT NULL,
  `jawaban` varchar(150) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_jawaban_msdt`
--

INSERT INTO `tb_data_jawaban_msdt` (`id_jawaban_msdt`, `id_pelamar`, `id_lowongan`, `id_ujian`, `no_soal`, `jawaban`) VALUES
(9, 1, 3, 1, 1, 'A'),
(10, 1, 3, 1, 2, 'A'),
(11, 1, 3, 1, 3, 'A'),
(12, 1, 3, 1, 4, 'A'),
(13, 1, 3, 1, 5, 'A'),
(14, 1, 3, 1, 6, 'A'),
(15, 1, 3, 1, 7, 'A'),
(16, 1, 3, 1, 8, 'B'),
(17, 1, 3, 1, 9, 'B'),
(18, 1, 3, 1, 10, 'B'),
(19, 1, 4, 1, 11, 'B'),
(20, 1, 4, 1, 12, 'A'),
(21, 1, 4, 1, 13, 'B'),
(22, 1, 4, 1, 14, 'B'),
(23, 1, 4, 1, 15, 'A'),
(24, 1, 4, 1, 16, 'B'),
(25, 1, 4, 1, 17, 'A'),
(26, 1, 4, 1, 18, 'B'),
(27, 1, 4, 1, 19, 'B'),
(28, 1, 4, 1, 20, 'A'),
(29, 1, 4, 1, 21, 'B'),
(30, 1, 4, 1, 22, 'A'),
(31, 1, 4, 1, 23, 'A'),
(32, 1, 4, 1, 24, 'B'),
(33, 1, 4, 1, 25, 'B'),
(34, 1, 4, 1, 26, 'A'),
(35, 1, 4, 1, 27, 'B'),
(36, 1, 4, 1, 28, 'B'),
(37, 1, 4, 1, 29, 'A'),
(38, 1, 4, 1, 30, 'B'),
(39, 1, 4, 1, 31, 'A'),
(40, 1, 4, 1, 32, 'B'),
(41, 1, 4, 1, 33, 'A'),
(42, 1, 4, 1, 34, 'B'),
(43, 1, 4, 1, 35, 'A'),
(44, 1, 4, 1, 36, 'A'),
(45, 1, 4, 1, 37, 'B'),
(46, 1, 4, 1, 38, 'A'),
(47, 1, 4, 1, 39, 'B'),
(48, 1, 4, 1, 40, 'A'),
(49, 1, 4, 1, 41, 'B'),
(50, 1, 4, 1, 42, 'B'),
(51, 1, 4, 1, 43, 'A'),
(52, 1, 4, 1, 44, 'B'),
(53, 1, 4, 1, 45, 'A'),
(54, 1, 4, 1, 46, 'B'),
(55, 1, 4, 1, 47, 'A'),
(56, 1, 4, 1, 48, 'B'),
(57, 1, 4, 1, 49, 'A'),
(58, 1, 4, 1, 50, 'A'),
(59, 1, 4, 1, 51, 'B'),
(60, 1, 4, 1, 52, 'A'),
(61, 1, 4, 1, 53, 'B'),
(62, 1, 4, 1, 54, 'A'),
(63, 1, 4, 1, 55, 'B'),
(64, 1, 4, 1, 56, 'A'),
(65, 1, 4, 1, 57, 'A'),
(66, 1, 4, 1, 58, 'B'),
(67, 1, 4, 1, 59, 'A'),
(68, 1, 4, 1, 60, 'B'),
(69, 1, 4, 1, 61, 'B'),
(70, 1, 4, 1, 62, 'A'),
(71, 1, 4, 1, 63, 'B'),
(72, 1, 4, 1, 64, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_jawaban_papi`
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
-- Dumping data for table `tb_data_jawaban_papi`
--

INSERT INTO `tb_data_jawaban_papi` (`id_jawaban_papi`, `id_pelamar`, `id_lowongan`, `id_ujian`, `no_soal`, `jawaban`) VALUES
(12, 1, 1, 1, 1, 'G'),
(13, 1, 1, 1, 12, 'L'),
(14, 1, 1, 1, 2, 'A'),
(15, 1, 1, 1, 3, 'A'),
(16, 1, 1, 1, 4, 'X'),
(17, 1, 1, 1, 5, 'X'),
(18, 1, 1, 1, 6, 'O'),
(19, 1, 1, 1, 7, 'O'),
(20, 1, 1, 1, 8, 'K'),
(21, 1, 1, 1, 9, 'K'),
(22, 1, 1, 1, 10, 'X'),
(23, 1, 1, 1, 11, 'B'),
(24, 1, 1, 1, 13, 'N'),
(25, 1, 1, 1, 14, 'X'),
(26, 1, 1, 1, 15, 'P'),
(27, 1, 1, 1, 16, 'X'),
(28, 1, 1, 1, 17, 'Z'),
(29, 1, 1, 1, 18, 'B'),
(30, 1, 1, 1, 19, 'F'),
(31, 1, 1, 1, 20, 'X'),
(32, 1, 1, 1, 21, 'D'),
(33, 1, 1, 1, 22, 'L'),
(34, 1, 1, 1, 23, 'E'),
(35, 1, 1, 1, 24, 'X'),
(36, 1, 1, 1, 25, 'A'),
(37, 1, 1, 1, 26, 'O'),
(38, 1, 1, 1, 27, 'P'),
(39, 1, 1, 1, 28, 'K'),
(40, 1, 1, 1, 29, 'O'),
(41, 1, 1, 1, 30, 'X'),
(42, 1, 1, 1, 31, 'R'),
(43, 1, 1, 1, 32, 'L'),
(44, 1, 1, 1, 33, 'C'),
(45, 1, 1, 1, 34, 'T'),
(46, 1, 1, 1, 35, 'N'),
(47, 1, 1, 1, 36, 'O'),
(48, 1, 1, 1, 37, 'P'),
(49, 1, 1, 1, 38, 'K'),
(50, 1, 1, 1, 39, 'B'),
(51, 1, 1, 1, 40, 'X'),
(52, 1, 1, 1, 41, 'R'),
(53, 1, 1, 1, 42, 'L'),
(54, 1, 1, 1, 43, 'I'),
(55, 1, 1, 1, 44, 'C'),
(56, 1, 1, 1, 45, 'V'),
(57, 1, 1, 1, 46, 'N'),
(58, 1, 1, 1, 47, 'Z'),
(59, 1, 1, 1, 48, 'P'),
(60, 1, 1, 1, 49, 'X'),
(61, 1, 1, 1, 50, 'X'),
(62, 1, 1, 1, 51, 'V'),
(63, 1, 1, 1, 52, 'S'),
(64, 1, 1, 1, 53, 'I'),
(65, 1, 1, 1, 54, 'T'),
(66, 1, 1, 1, 55, 'C'),
(67, 1, 1, 1, 56, 'S'),
(68, 1, 1, 1, 57, 'N'),
(69, 1, 1, 1, 58, 'K'),
(70, 1, 1, 1, 59, 'P'),
(71, 1, 1, 1, 60, 'X'),
(72, 1, 1, 1, 61, 'T'),
(73, 1, 1, 1, 62, 'L'),
(74, 1, 1, 1, 63, 'I'),
(75, 1, 1, 1, 64, 'R'),
(76, 1, 1, 1, 65, 'V'),
(77, 1, 1, 1, 66, 'C'),
(78, 1, 1, 1, 67, 'R'),
(79, 1, 1, 1, 68, 'N'),
(80, 1, 1, 1, 69, 'F'),
(81, 1, 1, 1, 70, 'P'),
(82, 1, 1, 1, 71, 'G'),
(83, 1, 1, 1, 72, 'L'),
(84, 1, 1, 1, 73, 'V'),
(85, 1, 1, 1, 74, 'S'),
(86, 1, 1, 1, 75, 'V'),
(87, 1, 1, 1, 76, 'D'),
(88, 1, 1, 1, 77, 'R'),
(89, 1, 1, 1, 78, 'E'),
(90, 1, 1, 1, 79, 'N'),
(91, 1, 1, 1, 80, 'A'),
(92, 1, 1, 1, 81, 'G'),
(93, 1, 1, 1, 82, 'L'),
(94, 1, 1, 1, 83, 'T'),
(95, 1, 1, 1, 84, 'V'),
(96, 1, 1, 1, 85, 'V'),
(97, 1, 1, 1, 86, 'R'),
(98, 1, 1, 1, 87, 'R'),
(99, 1, 1, 1, 88, 'C'),
(100, 1, 1, 1, 89, 'C'),
(101, 1, 1, 1, 90, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_keluarga`
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
-- Dumping data for table `tb_data_keluarga`
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
-- Table structure for table `tb_data_pendidikan`
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
-- Dumping data for table `tb_data_pendidikan`
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
-- Table structure for table `tb_data_pendidikan_nonformal`
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
-- Dumping data for table `tb_data_pendidikan_nonformal`
--

INSERT INTO `tb_data_pendidikan_nonformal` (`id_pendidikan_nonformal`, `id_pelamar`, `nama_pendidikan_nonformal`, `tujuan_pendidikan_nonformal`, `tahun_pendidikan_nonformal`, `nomor_sertifikat`) VALUES
(2, 29, 'aa', 'sd', '2020', 'fs'),
(3, 30, 'CALISTUNG', 'MEMBACA, MENULIS, BERHITUNG', '2003', '000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_pengalaman_kerja`
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
-- Dumping data for table `tb_data_pengalaman_kerja`
--

INSERT INTO `tb_data_pengalaman_kerja` (`id_pengalaman`, `id_pelamar`, `nama_perusahaan`, `periode`, `jabatan_akhir`, `alasan_keluar`, `nama_referensi`, `no_hp_referensi`) VALUES
(1, 1, 'CV Palugada', '2016', 'Marketing', 'Kontrak Berakhir', '-', '-'),
(2, 2, 'PT Mencari Berkah', '2018', 'Staff programmer', 'pekerjaan tidak sesuai dengan jobdesk', '-', '-'),
(5, 30, 'BAKSO NARIZ', '7', 'ASISTEN', 'KELELAHAN', '-', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
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
-- Table structure for table `tb_jawaban_essay`
--

CREATE TABLE `tb_jawaban_essay` (
  `id_jawaban` int(5) NOT NULL,
  `id_ujian_essay` int(5) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `jawaban1` text NOT NULL,
  `jawaban2` text NOT NULL,
  `jawaban3` text NOT NULL,
  `jawaban4` text NOT NULL,
  `jawaban5` text NOT NULL,
  `jawaban5b` text NOT NULL,
  `jawaban5c` text NOT NULL,
  `jawaban6` text NOT NULL,
  `jawaban7` text NOT NULL,
  `jawaban8` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jawaban_essay`
--

INSERT INTO `tb_jawaban_essay` (`id_jawaban`, `id_ujian_essay`, `id_lowongan`, `id_pelamar`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban5b`, `jawaban5c`, `jawaban6`, `jawaban7`, `jawaban8`) VALUES
(4, 1, 6, 383, 'HahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahahHahah', 'heheheheheehehehehehehehehehehheheheheheehehehehehehehehehehheheheheheehehehehehehehehehehheheheheheehehehehehehehehehehheheheheheeheheheheheheheheheh', 'huhuhuhuhhuhuhuhuhhuhuhuhuhhuhuhuhuhhuhuhuhuhhuhuhuhuhhuhuhuhuhhuhuhuhuhhuhuhuhuh', 'hhihihihihihihhihihihihihihhihihihihihihhihihihihihihhihihihihihihhihihihihihi', 'huuhuhuhhuuhuhuhhuuhuhuhhuuhuhuhhuuhuhuhhuuhuhuhhuuhuhuhhuuhuhuhhuuhuhuhhuuhuhuh', '', '', 'haihaihaihaihaihaihaihaihai', '', ''),
(12, 1, 7, 1368, 'Apotik yang jual aneka obat-obatan', 'Melayani customer dgn baik', 'Karena ingin menjadi yg lebih baik lagi', 'Sebaiknya memohon maaf terlebih dahulu agar konsumen mengurangi rasa marahnya', 'Iya sanggup saya akan mengatur waktu untuk istirahat dan waktu untuk bekerja', '', '', 'Kita harus berupaya agar bisa tetap untuk tidak ada konflik antar teman', '', ''),
(13, 1, 7, 997, 'jl.raden patah 7 sidoarjo', 'melayani pembeli dan resep dari castamer', 'untuk memajukan perusahaan yang bapak/ibu pimpin', 'tidak pernah, karena selama saya bekerja di tempat yang lama tidak ada castamer yang komplain', 'sanggup, dan mentaati peraturan protokol kesehatan dan peraturabn pemerintah serta peraturan apotek', '', '', 'pernah, mampu mengerjakan bersama tim yang di sudah di bentuk dan bisa bermusyawarah secara mufakat.', '', ''),
(14, 1, 7, 1368, 'Toko yg melayani obat obatan', 'Melayani konsumen untuk menjual barang yg dijual', 'Ingin mencari yg lebih baik lagi', 'Harus memohon maaf terlebih dahulu', 'Iya saya bersedia saya akan mengatur untuk istirahat dan bekerja', '', '', 'Kita harus saling menjaga komunikasi antar sesama teman', '', ''),
(15, 1, 7, 1789, 'Apotek 7 merupakan apotek lengkap di sidoarjo yg sudah mempunyai 2 cabang', 'Melayani pembeli dengan sabar dan ramah ', 'Ingin menjadi seorang pelayan obat yg sabar dan ramah, dan ingin menjadi salah satu karyawan di apotek 7', 'Pernah, saya tanya terlebih dahulu permasalahan nya, lalu saya diskusikan dengan konsumen solusi dan jalan keluarnya', 'Sanggup, saya akan tetap menyelesaikan tugas² dengan teoat waktu, dan tetap menjaga kesehatan dengan minum vitamin daya tahan tubuh', '', '', 'Pernah, saya pernah bekerja  dalam sebuah tim untuk menjual sebuah produk, dalam menghadapi konflik saya tetap bersikap tenang, lalu membicarakan kepada rekan² saya untuk menemukan solusi konflik tersebut', '', ''),
(16, 1, 7, 662, 'Apotek terlengkap dan cukup terkenal  diisidoarho', 'Melayani customer dengan senang hati', 'Menambah ilmu dan turut berkontribusi untuk toko', 'Memberikan solusi terbaik untuk pelanggan maupun toko', 'Mematuhi kewajiban sebagai mana mestinya karyawan', '', '', 'Bermusyawarah mencari solusi', '', ''),
(17, 1, 7, 1876, 'apotik adalah sebuah perusaahaan yang berkembang dibidang barang atau jasa', 'memberi pelayanan yang terbaik untuk customer,', 'mengembangkan perusahaan lebih maju', 'belum, tindakan yang saya lakukan adalah mencari titik permasalahanya, kemudian bias diselesaikan dengan baik', 'siap saya sanggup, dengan cara  mengikuti protocol kesehatan yang sudah diterapkan', '', '', 'pernah, bekerja disebuah tim adalah suatu motifasi baru, ', '', ''),
(18, 1, 7, 975, 'Apotek kecil yang berkembang dengan pesat dan menjadi apotek yang besar dan terdapat dimana mana', 'bertanggung jawab dengan kebersihan Apotek\r\nbertanggung jawab dengan stok obat dan peralatan apapun yang di apotek\r\nmelayani pembeli dengan ramah dan sopan', 'orang lain bisa melakukan artinya saya juga bisa melakukannya lebih baik lagi', 'pernah, mendengarkan konsumen berbicara, menanggapi dengan tenang dan sopan,memberi solusi kepada konsumen', 'sanggup, apabila tugas saya ada yang belum selesai dan harus selesai hari itu juga saya akan menyelesaikannya meskipun itu di luar jam kerja , dan apabila tugas itu bisa di bagi dengan tim maka saya hanya perlu berpesan kepada teman lawan shift', '', '', 'pernah, bekerja dengan tim banyak sekali masukan dan kita harus memutuskannya berdasarkan pemikiran satu tim\r\nkonflik bisa di selesaikan dengan cara berkomunikasi dengan baik', '', ''),
(19, 1, 7, 1605, 'apotek 7 merupakan apotik jenis besar di kota Sidoarjo, apotik 7 sudah memiliki 3 cabang dan akan terus membuka cabang usahanya di berbagai wilayah lagi.', 'melayani customer yang membeli produk barang yang kami jual, dan menangani kesulitan atau pertanyaan dari pihak customer sebagai simbol service excelent.', 'menambah pengalaman kerja serta menambah pengetahuan dan belajar hal baru,dan akan terus meningkatakan kualitas diri.', 'belum pernah, akan tetapi jika sudah terjadi komplain maka kita harus mendengarkan terlebih dulu keluhan dan segera membuat saran serta meminta maaf.', 'iya sanggup. menjaga sistim imun tubuh dengan pola hidup sehat. tentunya juga selalu bertanggung jawab terhadap pekerjaa atau wewenang yang sudah diberikan dalam bekerja.', '', '', 'pernah psg, dalam sebuah konflik tidak diperbolehkan mengambil langkah dengan kondisi marah, selalu konfirmasi dan didiskusikan terlebih dahulu saat mengambil tindakan atau sebuah keputusan. ', '', ''),
(20, 1, 7, 992, 'apotek 7 adalah salah satu perusahaan ternama di kota sidoarjo yang bergerak di bidang farmasi. apotek 7 memiliki 3 cabang dan akan terus berkembang kedepannya.', 'dapat memahami konsumen, bersikap ramah, mengerti tentang obat-obatan.', 'motivasi saya untuk melamar ini adalah agar bisa meringankan beban orang tua, agar dapat lebih mandiri, dan membentuk individu yang matang.', 'saya belum pernah menerima komplain.', 'saya kurang setuju untuk sistem shift karena saya masih harus belajar, tetapi jika apotek 7 sistem kerja shift maka saya akan lebih menata waktu saya untuk belajar.', '', '', 'pengalaman bekerja dala tim sangat menyenangkan dapat bertukar pendapat, menemukan ide-ide baru, mempunyai pengethuan luas dan masih banyak lagi. cara saya untuk menyelesaikan masalah dalam tim yaitu dengan mencari tahu penyebab masalahnya seperti apa kemudian mencari solusi, dan bermusyawarah bersama denga teman-teman yang lainya.', '', ''),
(21, 1, 7, 662, 'Apotek terlengkap dan cukup terkenal  diisidoarho', 'Melayani customer dengan senang hati', 'Menambah ilmu dan turut berkontribusi untuk toko', 'Memberikan solusi terbaik untuk pelanggan maupun toko', 'Mematuhi kewajiban sebagai mana mestinya karyawan', '', '', 'Bermusyawarah mencari solusi', '', ''),
(22, 1, 7, 1055, 'apotek 7 adalah tempat dimana melayani dan menyediakan segala kebutuhan medis dan rekomendasi dari dokter atau rumah sakit\r\nlebih mudah mendapatkan kebutuhan medis', 'melayani permintaan pasien atau konsumen sesuai yang di butuhkan dan tersedia', 'untuk bekerja semaksimal dalam memberikan pelayanan di bidang medis', 'pernah, tetap memberikan pelayanan yang terbaik dan memberikan solusi ke konsumen agar konsumen merasa puas dan tetap menanamkan rasa kepercayaannya', 'sanggup, saya mengutamakan pekerjaan saya dan kesehatan saya di masa pandemik ini dengan makan2 nan yang sehat dan konsumsi vitamin dan protokol kesehatan', '', '', 'tetap kita musyawarahkan bersama sama dengan anggota tim untuk mencari solusi dan kesepakatan bersama apabila diperlukan meminta pertimbangan atasan atau pimpinan', '', ''),
(23, 1, 7, 744, 'apotek 7 adalah sebuah perusahaan yang menjual beberapa obat. dan memiliki beberpa cabang.', 'melayani customer yang membeli obat atau bertanya tanya mengenai  obat yang akan dikonsumsi', 'karena sesuai dengan passion saya dan saya ingin mengembangkan minat bakat saya', 'tidak sampai saat ini belum pernah, namun jika saya menghadapi situasi tersebut saya akan mendengarkan keluh kesah customer dan akan menghadapinya dengan tenang.', 'iya saya sanggup, saya akan melakukannya dengan baik dan tidak menunda nunda agar tugas yang diberikan tidak menumpuk , dan saya menjaga kesehatan dengan cara menjaga pola tidur dan pola makan saya.', '', '', 'iya pernah, terkadang yang saya alami didalam berkelompok sering kali terjadi beda pendapat. dan  saya akan mendengarkan pendapat teman teman saya dan mempertimbangkannya. dan memusyawarahkan hasil yang terbaik bersama sama', '', ''),
(24, 1, 7, 1572, 'apotik 7 ada cabang didaerah gedangan, sidoarjo\r\nmenjual berbagai macam obat obat', 'melayani pasien yang sedang membutuhkan obat\r\nmelayani resep\r\nmenginformasikan kepasien tentang kegunaan obat tersebut', 'mencari pengalaman baru dan menambah wawasan baru', 'saya tanya baik baik\r\ndan apabila pasien masih kurang mengerti tentang kegunaan obat saya memberi arahan yang sesuai', 'mengkonsumsi vitamin\r\ntidur yang cukup\r\nolahraga teratur', '', '', 'dimusyawarahkan secara baik baik dan mendengarkan keluhan lalu mencari solusi yang terbaik tanpa menyudutkan pihak manapun', '', ''),
(25, 1, 7, 591, 'apotek 7 adalah apotek terkemuka di disidoarjo yang menurut ulasan memiliki kinerja yang bagus tetapi harga obat terjangkau', 'melayani pelanggan dengan baik dan menjelaskan kegunaan dan aturan pakai obat yang akan digunakan pelanggan \r\nmenjelaskan obat apa yang pas untuk penyakit yang diidap pelanggan sesuai resep ataupun obat yang atau anjuran dokter \r\nmenjelaskan harga dan melayani pembayaran dengan baik ', 'saya ingin bekerja didunia kesehatan \r\nkarena sejak kecil itu adalah cita-cita saya dan karena ayah saya juga dulu ada seorang sales obat yang membuat saya tertarik dengan dunia kesehatan \r\n\r\nselain itu saya ingin bekerja sambil belajar berbagai macam obat dan kegunaannya karena jika saya memahami itu saya dapat membantu saudara atau teman yang menanyakan referenshi ke saya ', 'pernah karena pelayanan yang agak lama atau tidak cekatan \r\n\r\nsaya selalu memohon maaf jika pelayanan saya kurang cepat \r\n\r\npada saat itu saya kerja di apotik sendiri dan kebetulan banyak konsumen sehingga saya harus mengatur pembelian sesuai antrian', 'saya sanggup  tentunya saya selalu menerapkan protokol kesehatan saat bekerja selama pandemi \r\n\r\nselain itu saya adalah orang yang rajin menjaga kesehatan tubuh dengan meminum vitamin yang baik bagi tubuh dan mampu mengatur istirahat yang cukup untuk tubuh saya \r\n', '', '', 'pernah, dalam pekerjaan saya sebelumnya selalu berhubungan dengan tim dan kelompok \r\njika ada konflik saya selalu menyelesaikan dengan diskusi baik secara pribadi dengan individu yang bersangkutan dan keseluruhan kelompok atau tim \r\n\r\ndiskusi tidak hanya menjelaskan atau menyelesaikan masalah tetapi juga menemukan jalan keluar yang baik dan inovasi-inovasi yang baru dan lebih baik ', '', ''),
(26, 1, 7, 1422, 'Apotek 7 adalah salah satu perusahaan yang bergerak di bidang farmasi. Terletak di Kabupaten Sidoarjo dan memiliki 3 cabang.', 'Melayani setiap pembeli yang datang untuk membeli obat. Mengecek ketersediaan stok obat.', 'Karena ingin mencari pekerjaan (karena di masa pandemi ini sulit untuk mencari pekerjaan), menambah pengalaman kerja, serta membantu perekonomian keluarga.', 'Pernah. Ketika sedang melayani pelanggan terjadi kurangnya komunikasi sehingga terjadi kesalahpahaman. Maka dari itu saya meminta maaf atas apa yang terjadi dan meningkatkan kualitas serta memberi pelayan yang lebih baik.', 'Sanggup. Karena jika sudah diterima di perusahaan, hal tersebut sudah menjadi ketentuan. Sehingga saya akan menaati ketentuan yang ada dan akan melakukan yang terbaik untuk perusahaan.\r\nDikarenakan adanya pandemi ini tentunya untuk menjaga kesehatan yaitu dengan minum vitamin, makan makanan yang bergizi, serta berolahraga.', '', '', 'Pernah. Saat itu saya bekerja di sebuah toko. Ketika terjadi suatu masalah tentunya saya dan teman saya berdiskusi dalam menyelesaikan suatu masalah. Selain itu kami juga saling membantu jika ada kesulitan dalam hal bekerja. Saya dan teman saya tak lupa selalu melaporkan apa yang terjadi saat jam kerja.', '', ''),
(27, 1, 7, 1572, 'apotek 7 memiliki cabang didaerah gedangan, sidoarjo\r\nmenjual berbagai macam obat lengkap', 'melayani pasien yang sedang membutuhkan obat\r\nmelakukan swamedikasi kepasien\r\nmelayani resep atas petunjuk apoteker', 'menambah pengalaman dan wawasan', 'saya tanya baik baik dan menanyakan apa yang dikeluhkan\r\nmemberi swamedikasi yang benar ', 'mengkonsumsi vitamin\r\nistirahat cukup\r\nolahraga teratur', '', '', 'dimusyawarahkan bersama, dibicarakan baik baik, mencari solusi tanpa menyudutkan pihak manapun', '', ''),
(28, 1, 7, 949, 'Sebuah perusahaan yang menjual obat secara lengkap dan harganya lebih murah', 'Harus memahami setiap jenis obat dan manfaatnya', 'Saya ingin memulai pengalaman baru karna sebelumnya saya belum pernah bekerja menjadi pramuniaga apotek dan saya ingin belajar ', 'Tidak pernah karna sebelum open toko barang harus dicek apakah ada yg exp atau tidak', 'Iyaa saya sanggup. Karna saya sering bekerja fulltime dimall yang terpenting tidak telat makan dan selalu mencuci tangan setiap habis bertransaksi', '', '', 'Pernah. Sebenarnya konflik disebabkan oleh salah satu individu yang tidak jujur jadi jika kita saling terbuka konflik tersebut tidak akan terjadi', '', ''),
(29, 1, 7, 558, 'Salah satu Apotek yang berada di Daerah Sidoarjo, menyediakan berbagai jenis obat guna pelayanan terhadap masyarakat. Selain itu, mempromosikan pentingnya kesehatan dengan melakukan penjualan berbagai produk tidak hanya secara offline, namun juga melalui sosial media. ', 'Melayani pembeli yang datang dengan membawa resep dari dokter maupun keluhan, bahkan permintaan obat dengan penyakit tertentu. ', 'Guna menambah wawasan di bidang obat-obatan serta membantu orang tua dalam bidang finansial.', 'Tidak pernah. Sebab saya sangat minim melakukan kesalahan. Bahkan, hampir tidak pernah. ', 'Sanggup. Guna menjaga kesehatan pastinya saya akan melakukan anjuran pemerintah dan mengkonsumsi vitamin, sekaligus menerapkan pola hidup sehat. Sehingga, saya mampu melakukan tugas sebagai pramuniaga sekaligus tetap sehat.', '', '', 'Pernah. Ketika saya berada di bangku sekolah menjadi salah satu anggota OSIS. Ketika ada konflik terjadi dalam organisasi, langkah pertama yang dilakukan adalah \"mengkomunikasikan\" hal yang menjadi masalah. Sebab, konflik terjadi karena sebuah kesalahpahaman informasi dalam komunikasi. ', '', ''),
(30, 1, 7, 1838, 'apotek 7 merupakan usaha dalam pelayanan kesehatan yang terletak di sidoarjo. Siap membantu melayani customer yang membutuhkan obat, baik obat umum, maupun resep dokter.', 'pramuniaga bertugas melayani pembeli yang datang. Jika terdapat customer datang dengan resep, maka pramuniaga bertugas untuk memberikan resep tersebut kepada apoteker atau asisten apoteker dan menyerahkan obat yang telah dipersiapkan oleh apoteker kepada pembeli.  untuk customer yang hanya menyampaikan keluhannya maka pramuniaga akan mendiskusikan dengan apoteker mengenai obat yang akan diberikan. ', 'Selain untuk memenuhi kebutuhan finansial saya, saya juga berkeinginan mencari pekerjaan di bidang yang baru seperti menjadi pramuniaga apotek. Ada pula keinginan saya untuk mengasah karir sebagai pramuniaga yang baik dan bertanggung jawab terhadap pelayanan kepada customer', 'Belum pernah mendapat pengalaman bekerja. Jika saya mendapat komplain. tentu saya akan bertanya dengan sopan, mengapa konsumen tersebut komplain, dan jika benar murni saya yang salah, maka saya akan bertanggung jawab dengan langsung menanyai apa yang konsumen butuhkan.', 'iya, saya sanggup. Karena apa yang sudah saya mulai harus saya selesaikan.\r\nlangkah saya untuk menyelesaikan tugas tentu dengan langsung mengerjakannya dengan fokus dan terliti, tidak lupa jika saya merasa kesuitan, saya akan bertanya kepada senior maupun rekan kerja saya.\r\nsaya terbiasa hidup sehat, mulai dengan sarapan pagi dengan oatmilk, dan meminum vitamin sebelum tidur, sehingga daya tahan tubuh saya kuat dan tidak mudah sakit. tidak lupa dengan selalu menjaga kebersihan.', '', '', 'jika berkerja, saya belum pernah.\r\nnamun saya memiliki backrounf aktif di organisasi\r\nsaya aktif di organisasi sejak SMP dan SMA\r\ndan saat ini saya aktif pada organisasi UKM di kampus saya.\r\nsaya juga mengikuti berbagai komunitas yang ada di luar kampus dan komunitas yang ada di surabaya.\r\nketika kami memiliki masalah seperti berbeda pendapat. \r\nyang pertama saya lakukan adalah menengahi pembicaraan\r\nkemudian saya akan menanyai satu persatu anggota tim. mendengarkan opini mereka. lalu saya akan mengadakan voting dan menanyai alasan mengapa para anggota memilih jawaban tersebut.\r\nsehingga kesalahpahaman dan keberhasilan menggapai mufakat , dapat dengan mudah terselesaikan.', '', ''),
(31, 1, 7, 589, 'Apotek 7 adalah sebuah toko yang menjual obat-obatan dan sedang berkembang dan membesar namanya.', 'Tugas utama pramuniaga adalah melayani pembeli yang datang. customer biasanya membawa resep dari dokter maupun dengan keluhan permintaan customer.', 'Motivasi saya melamar untuk bekerja menafkahi kehidupan sehari-hari.', 'Pernah, saya menyelesaikan dengan sikap tenang , mencari titik masalah dan menyelesaikannya.', 'iya sanggup, selalu taati protokol kesehatan,minum vitamin dan makan makanan yang bergizi.', '', '', 'pernah, bekerja dengan team sangatlah tidak mudah tergantung bagaimana kita menghadapinya dan menyikapinya terutama adalah nekerja sama karena dengan kebersamaan akan tercipta suatu kekompakan. untuk menghadapi konflik dalam sebuah tim salah satunya adalah memecahkan konflik tersebut dengan kepala dingin ,duduk bersama,berdiskusi dan kooperatif.', '', ''),
(36, 1, 11, 1, 'coba1', 'coba2', 'coba3', 'coba4', 'coba5', 'coba6', 'coba7', 'coba8', 'coba9', 'coba10'),
(37, 1, 11, 2147, 'izzah1', 'izzah2', 'izzah3', 'izzah4', 'izzah5', 'izzah6', 'izzah7', 'izzah8', 'izzah9', 'izzah10'),
(38, 1, 11, 1, 'salmon1', 'salmon2', 'salmon3', 'salmon4', 'salmon5', 'salmon6', 'salmon7', 'salmon8', 'salmon9', 'salmon10'),
(39, 1, 11, 2691, 'surveyor adalah seseorang yang betugas atau membantu mengumpulkan data melalui beberapa metode yaitu wawancara ', 'ditolak oleh responden, ditolak dengan solusi siap membawa surat tugas dan menjelaskan bahwa dari lembaga/dinas jika masih diragukan harus melaporkan kepada spv sehingga bisa membantu menjelaskan. atau menghubungi penanggung jawab misalnya dari desa/RT', 'fleksibel dengan waktu karena pekerjaan tidak membutuhkan waktu yang lama', 'jujur, sabar dan bisa berbicara dengan tutur kata baik', 'bertindak secara konsisten/jujur', 'bekerja sesuai profesional dan kejujuran', 'bekerja dengan jujur, baik dan sesuai arahan', 'ya, harus membangun karakter yang baik sehingga bekerja sesuai tim', 'bekerja dengan target dan melaporkan setiap ada kendala yang dihadapi.', 'belum pernah memimpin dalam tim, tetapi ketika saya amati bahwa seorang pemimpin harus bisa menjalin komunikasi dengan sesama anggota dan berkoordinasi maupun ada kendala dilapangan siap untuk membantu dalam segala hal dan waktu'),
(40, 1, 11, 2936, 'Freelance surveyor ialah seseorang yang dapat melakukan pemeriksaan atau mengawasi dan mengamati dalam suatu pekerjaan..', 'Masalah seperti susah untuk mencapai target dengan tepat waktu. Tidak mudah untuk menghubungi client dengan cepat.  Solusi menurut saya ialah dengan ditambahnya team work dalam melakukan target baru yang akan dilaksanakan.', 'Dapat bekerja dengan tim dan banyak bertemu dengan orang baru, karena dapat juga mendapatkan wawasan baru dari pengalaman atau kejadian yang terjadi di lapangan.', 'Dapat berkomunikasi dengan baik', 'Integritas adalah suatu tindakan secara konsisten antara apa yang dikatakan dengan tingkah lakunya apakah sesuai dengan nilai-nilai yang dipelajari selama hidupnya (misalnya attitude nya).', 'Bersikap ramah, mau mendengarkan saran dari orang lain, menghargai pendapat orang lain, tidak menghakimi suatu kesalahan.', 'Selalu mengingatkan bahwa tidak semua keinginannya harus terpenuhi dan terwujud, selalu bersikap rendah hati, berwibawa, sabar.', '-', 'Saya akan terus belajar dari atasan saya guna untuk memperbaiki pekerjaan atau target yang akan dikerjakan. Selalu bekerja dalam team work agar lebih mudah dan cepat untuk mencapai target yang diberikan.', 'Belum pernah, karena saya tidak mudah untuk mengambil keputusan yang cepat dan benar.'),
(41, 1, 11, 3122, 'mencari data dengan terjun langsung ke lapangan, setelah selesai memperolehnya data tersebut akan diolah menjadi sebuah laporan', 'bertemu dengan orang-orang baru merupakan tantangan tersendiri, misalnya kita harus siap secara mental ketika bertemu dengan masyarakat yang tidak mau/menolak untuk diajak bekerjasama (dijadikan informan), jadi kita harus sabar dan pandai-pandai untuk mempersuasif mereka.', 'saya suka bekerja dilapangan karena saya dapat menemukan hal-hal baru yang belum pernah saya temui sebelumnya, dan itu dapat menambah pengetahuan saya tentang realitas yang ada dilapangan itu seperti apa.', 'saya adalah seseorang yang pekerja keras, dan sanggup mengerjakan suatu hal dengan tekun sesuai dengan arahan, dan saya cenderung begitu teliti jika itu menyangkut sebuah hal yang konkret', 'konsisten terhadap apa yang dikatakan dengan apa yang dia kerjakan', 'tetap berpegang teguh pada aturan yang ada dan yang telah disepakati', 'saling memberitahukan atau mengingatkan kepada sesama rekan kerja serta saling memahami dan terbuka agar tercipta kondisi kerja yang nyaman dan kondusif', 'pernah, saya tetap melakukan pekerjaan saya dikala yang lainnya sedang dalam waktu senggangnya, karena saya cenderung suka menyelesaikan pekerjaan saya terlebih dahulu sebelum beristirahat', 'membuat rincian tugas apa saja yang perlu dikerjakan dan diselesaikan agar mendapat waktu yang efisien dan tepat', 'tidak pernah.'),
(42, 1, 12, 2933, 'Sesuai bidang administrasi pada umumnya. Mengerjakan laporan, arsip file', 'Biasanya miss komunikasi sering terjadi dalam pekerjaan. Maka dari itu bagi saya komunikasi itu penting. Dan harus teliti juga', 'Saya suka bekerja dibalik layar. Mengerjakan laporan, arsip file/dokumen, dll. Karena passion saya di admin', 'Admin bagi saya memegang peranan penting di dalam perusahaan. Saya mahir menggunakan ms.office, saya mampu bekerja sesuai dengan deadline dan saya mau belajar hal baru', 'Konsisten antara omongan dan perilaku', 'Komunikasi', 'Dengan komunikasi, bertukar pikiran', 'Pernah. Saya menjadi panitia dalam suatu event lomba musik dan ujian musik tingkat nasional. Saya biasanya berperan mengurus segala sesuatu dari awal sampai akhir acara', 'Saya akan bekerja sebaik mungkin. Saya mau belajar apabila ada hal baru', 'Tidak'),
(43, 1, 12, 2508, 'Posisi yang saya lamar adalah staff administrasi dimana saya harus mengelola data di computer serta menerima panggilan telepon dari customer.', 'Biasanya terjadi perselisihan antar pegawai , seperti saat pegawai si A sudah mendapat telepon dari customer tetapi saat customer ingin menghubungi si pegawai A tidak mendapat respon jadi si customer menelepon dengan nomor pegawai yang lain. Hal ini dapat menjadikan perselisihan antar pegawai. Solusi yang harus dilakukan adalah si pegawai B tidak harus mengambil alih customer si A , yang harus dilakukan si B adalah membantu untuk menyampaikan kepada si A dan memberi tahu kepada customer kalau dia harus tetap berkomunikasi dengan si A.', 'Melakukan pengelolaan data. Karena disini saya dapat mengeksplor lebih jauh tentang penggunaan computer dan dapat menambah skill saya dalam mengoperasikan computer.', 'Saya suka berjumpa dengan orang baru baik secara online maupun offline. Saya juga paham dalam mengoperasikan dasar dari Ms.Office.', 'Dimana sebuah ucapan yang kita katakan harus sepadan dengan tingkah laku kita.', 'Mengikuti peraturan yang sudah ditetapkan oleh perusahaan.', 'Mengingatkan dengan bahasa yang baik dan santai supaya rekan kerja saya tidak merasa tersinggung.', 'Saya oernah terlibat dalam sebuah kelompok , peran yang saya lakukan adalah mengerjakan apa yang sudah diperintahkan oleh ketua dan jika saya merasa keberatan saya meminta bantuan dari rekan tim saya.', 'Berusaha dengan semaksimal mungkin dengan mencari ide ide baru yang bisa menarik perhatian perusahaan lain agar mau bekerja sama dengan perusahaan kita supaya bisa memenuhi target.', 'Saya belum pernah memimpin sebuat tim kerja ataupun kelompok.'),
(44, 1, 12, 2651, 'staff administrasi merupakan bagian penting dalam perusahaan yang bertugas menjalankan bagian administrasi dalam perusahaan seperti mengurusi masalah pemberkasan atau pendaftaran serta pembukuan sederhana', 'kesalahan pemberkasan. soalusi untuk mengatasinya yaitu dengan melakukan pengecekan ulang secara cermat dan teliti', 'pemberkasan dan pembukuan, karena saya merasa kemampuan dan baground pendidikan sesuai dengan hal tersebut', 'saya memahami akuntansi dan pembukuan serta saya merupakan seorang yang teliti', 'suatu keadaan yang utuh yang dapat memancarkan aura kewibawaan, kejujuran dan kompleksitas seseorang', 'bekerja secara teratur dan mengedepankan nilai, norma dan etika, kejujuran serta sesuai dengan kebijakan atau peraturan yang ada', 'melakukan evaluasi disetiap akhir pekerjaan, mengajak berdiskusi', 'tidak', 'disiplin, taat, kerja keras, lebih teliti dan cermat', 'tidak'),
(45, 1, 12, 2626, 'staff administrasi bertugas membuat surat menyurat, melengkapi dokumen-dokumen yang dibutuhkan oleh manajer atau divisi yang lain, mengerjakan laporan yang biasanya menggunakan ms excell ', 'permasalahan internal biasanya sering terjadi kesalahan typo dalam penulisan tanggal maupun nomor surat. solusinya biar tidak salah, sebaiknya diteliti lagi sebelum di printout atau dikirimkan ke pihak yang dituju', 'membuat surat menyurat, karena sangat efisien sudah ada formatnya tinggal mengganti tanggal,nomor surat dan isi kepentingan surat.', 'kompetensi: menguasai ms office (word,excell,power point) \r\nkarakter: rajin,teliti,kerja sama team. ', 'komitmen, kejujuran dan konsistensi dalam diri seseorang', 'dengan melakukan pekerjaan dengan ikhlas dan berupaya mengerjakannya dengan baik dan benar. ', 'kita sebaiknya melakukannya terlebih dahulu baru memberikan contoh ataupun solusi terhadap rekan kerja kita. ', 'pernah, saya pernah bekerja di perusahaan kontraktor. jadi kerjasama tim sangat penting dalam mewujudkan kerja yang selaras. kita setiap pagi melakukan safety talk dan pengarahan jobdesk kepada mandor dan sipil agar pekerjaan menjadi terarah dan tidak simpang siur. ', 'dengan melakukan pekerjaan secara rajin,teratur dan tepat waktu. ', 'pernah, saya sebagai sekretaris kkn harus mengatur setiap divisi kkn untuk mengumpulkan proposal setiap program kerja. dan harus mengarahkan setiap divisi untuk pengerjaan proposal harus sesuai dengan ketentuan DPL. '),
(46, 1, 1, 1, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawaban_studi`
--

CREATE TABLE `tb_jawaban_studi` (
  `id_jawaban` int(5) NOT NULL,
  `id_ujian_studi` int(5) NOT NULL,
  `id_lowongan` int(5) NOT NULL,
  `id_pelamar` int(5) NOT NULL,
  `jawaban1` text CHARACTER SET latin1 NOT NULL,
  `jawaban2` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jawaban_studi`
--

INSERT INTO `tb_jawaban_studi` (`id_jawaban`, `id_ujian_studi`, `id_lowongan`, `id_pelamar`, `jawaban1`, `jawaban2`) VALUES
(1, 1, 0, 1, 'Testing', ''),
(2, 1, 4, 1, 'testing', ''),
(3, 1, 4, 1, 'ayeyy', ''),
(4, 1, 3, 2, 'asoy geboy broo', ''),
(5, 1, 3, 2, 'sayangi ususmu minum baygon tiap hari mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm\r\n', ''),
(6, 1, 1, 1, 'hahaha iya se bener', ''),
(8, 1, 1, 1, 'embo opo yo', ''),
(9, 1, 1, 1, 'ahahahah mboh gangerti yaopo karepe cok', ''),
(10, 1, 1, 1, 'testing1', ''),
(11, 1, 1, 1, 'hahaha', 'halolo'),
(12, 1, 1, 1, 'hoaaaammmmmmm', 'hooooooooooooiiiiiiiiiimmmmmmmmmm');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_motlet`
--

CREATE TABLE `tb_jenis_motlet` (
  `id_jenis_motlet` int(5) NOT NULL,
  `jenis_motlet` enum('Lowongan Kerja','Kenaikan Jabatan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_motlet`
--

INSERT INTO `tb_jenis_motlet` (`id_jenis_motlet`, `jenis_motlet`) VALUES
(1, 'Lowongan Kerja'),
(2, 'Kenaikan Jabatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(5) NOT NULL,
  `nama_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `nama_level`) VALUES
(1, 'Administrator'),
(2, 'Admin Sdm'),
(3, 'Perusahaan'),
(4, 'Psikolog'),
(5, 'Pelamar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lowongan`
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
-- Dumping data for table `tb_lowongan`
--

INSERT INTO `tb_lowongan` (`id_lowongan`, `id_perusahaan`, `id_jenis_motlet`, `nama_jabatan`, `jadwal_seleksi`, `kota_penempatan`, `persyaratan`, `gaji`) VALUES
(1, 2, 1, 'Kepala Bagian (Kabag) HRD & GA', '2020-02-23', 'Sidoarjo - Jawa Timur', '<p>&nbsp;</p><ul><li>Berusia&nbsp; 27-35 tahun</li><li>Pendidikan Min. S1 Manajemen SDM / Psikologi Industri &amp; Organisasi / Teknik Industri / Ilmu Hukum</li><li>Menguasai UU Ketenagakerjaan dan Hubungan Internasional</li><li>Memiliki Jiwa Kepemimpinan</li><li>Mampu Berkomunikasi Secara Efektif</li></ul>', '-'),
(2, 1, 1, 'Freelance Surveyor', '2021-02-03', 'Surabaya', '<p>-</p>', '-'),
(3, 2, 1, 'tetew', '2021-04-15', 'surabaya', '<p>tetew</p>', '12000'),
(4, 1, 2, 'Kenaikan Jabatan', '2021-04-20', 'Surabaya', '<p>Waras</p>', 'Rp 10.000.'),
(5, 2, 1, 'test', '2021-05-25', 'tgregreg', '<p>rgeg</p>', '123'),
(6, 1, 1, 'COBA', '2021-06-01', 'Surabaya', '<p>ehem</p>', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_motivation_letter`
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
-- Dumping data for table `tb_motivation_letter`
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
(25, 30, 0, 'impian saya, saya ingin liburan, 1 hari tidur sepuasnya', 'menurut saya tidur adalah impian semua orang', ''),
(26, 1, 0, 'test124', '1223433q3', ''),
(27, 1, 0, 'test124', '1223433q3', ''),
(28, 2, 0, 'az nm,nhgfdxcg', 'qdqdwqdqwd', ''),
(29, 1, 0, 'test124', '1223433q3', ''),
(30, 1, 0, 'test124', '1223433q3', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
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
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_pelamar`, `id_lowongan`, `id_perusahaan`, `nilai_iq`, `gambaran_kepribadian`, `nilai_pwb`, `nilai_holand_r`, `nilai_holand_i`, `nilai_holand_a`, `nilai_holand_s`, `nilai_holand_e`, `nilai_holand_c`, `nilai_papiskotik`, `nilai_msdt`, `nilai_cfit`, `nilai_kemampuan_bidang`, `nilai_studi_kasus`, `nilai_perhitungan`, `nilai_wawancara`, `nilai_fgd`, `kesimpulan`) VALUES
(2, 2, 3, 1, 130, 'Mantap dong Cuy!!', 120, 130, 124, 121, 100, 120, 140, 140, 150, 80, 90, 150, 200, 110, 90, 'LOLOSKAN'),
(3, 1, 3, 1, 190, 'Joos Gandos kotos kotos', 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 100, 100, 'Mantap'),
(4, 3, 1, 2, 118, 'Hahaha', 29829, 9898, 9898, 9898, 898, 9, 17, 9, 787, 80, 8989, 12, 90, 120, 1230, 'Hihi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_cfit`
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
-- Dumping data for table `tb_nilai_cfit`
--

INSERT INTO `tb_nilai_cfit` (`id_nilai_cfit`, `id_pelamar`, `id_lowongan`, `nilai_cfit`, `iq`, `kategori`, `gambaran_kepribadian`) VALUES
(1, 29, 2, 0, 38, 'Intellectual deficient', ''),
(2, 1, 1, 0, 38, 'Intellectual deficient', ''),
(3, 1, 3, 1, 40, 'Intellectual deficient', ''),
(4, 1, 4, 0, 38, 'Intellectual deficient', ''),
(5, 2, 3, 0, 38, 'Intellectual deficient', ''),
(6, 30, 2, 0, 38, 'Intellectual deficient', ''),
(7, 1, 6, 0, 38, 'Intellectual deficient', ''),
(8, 31, 2, 0, 38, 'Intellectual deficient', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_ist`
--

CREATE TABLE `tb_nilai_ist` (
  `id_nilai_ist` int(5) NOT NULL,
  `id_pelamar` int(5) NOT NULL DEFAULT 0,
  `id_lowongan` int(5) NOT NULL DEFAULT 0,
  `nilai_ist` int(5) NOT NULL DEFAULT 0,
  `iq` int(5) NOT NULL DEFAULT 0,
  `se` int(5) NOT NULL DEFAULT 0,
  `wa` int(5) NOT NULL DEFAULT 0,
  `an` int(5) NOT NULL DEFAULT 0,
  `ge` int(5) NOT NULL DEFAULT 0,
  `ra` int(5) NOT NULL DEFAULT 0,
  `zr` int(5) NOT NULL DEFAULT 0,
  `fa` int(5) NOT NULL DEFAULT 0,
  `wu` int(5) NOT NULL DEFAULT 0,
  `me` int(5) NOT NULL DEFAULT 0,
  `kategori` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_pwb`
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
-- Table structure for table `tb_pelamar`
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
-- Dumping data for table `tb_pelamar`
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
(31, 5, 'Firda Elfinda Nurhidayah', 'firdaelfinda@gmail.com', '5ed291923179b73cbc6ef968b35361ff', 'firda', '', '91f4faf8110624159f87829faf02171a', 1),
(32, 5, 'cihuy', 'cihuy@gmail.com', '9e56c9dd07ad431ba42bba6555c31667', 'cihuy123', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
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
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `id_level`, `nama_perusahaan`, `jenis_usaha`, `alamat`, `email`, `logo_perusahaan`, `username`, `password`, `website`, `facebook`, `instagram`, `twitter`, `no_hp`) VALUES
(1, 3, 'Chaakraconsulting', 'Konsultan Bisnis', 'Virto Office lt 3', 'adm@chaakraconsulting.com', 'Logo200921_1.png', 'chaakra', '558d63dd9feb215d19b8e08a0ae503c7', 'chaakraconsulting.com', '', '', '', '0872676289002'),
(2, 3, 'PT Eka Ormed Indonesia', 'Bidang Kesehatan', 'Komplek Industri & Pergudangan Meiko Abadi I, Blk. B No.2, Wedi, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254', '-', 'Logo201008_.png', 'ekaormedindonesia', 'e48ec16d066a59dffbe1e352ad0710d7', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` int(11) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `isi_pesan`) VALUES
(1, '<p>*Selamat* sore, silahkan kunjungi http://choise.chaakraconsulting.com/Login_pelamar</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_psikolog`
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
-- Dumping data for table `tb_psikolog`
--

INSERT INTO `tb_psikolog` (`id_psikolog`, `id_level`, `nama_psikolog`, `no_hp`, `username`, `password`) VALUES
(1, '4', 'Psikolog Chaakra', '08291213223', 'psikolog', 'c015e9ad489a46fc9f16d449682eb454');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal_cfit`
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
-- Dumping data for table `tb_soal_cfit`
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
-- Table structure for table `tb_soal_ist`
--

CREATE TABLE `tb_soal_ist` (
  `id_soal` int(11) NOT NULL,
  `nomor_soal` int(5) NOT NULL,
  `soal` varchar(355) NOT NULL,
  `opsi_a` varchar(255) NOT NULL,
  `opsi_b` varchar(255) NOT NULL,
  `opsi_c` varchar(255) NOT NULL,
  `opsi_d` varchar(255) NOT NULL,
  `opsi_e` varchar(255) NOT NULL,
  `opsi_f` varchar(255) NOT NULL,
  `opsi_g` varchar(255) NOT NULL,
  `opsi_h` varchar(255) NOT NULL,
  `opsi_i` varchar(255) NOT NULL,
  `opsi_j` varchar(255) NOT NULL,
  `jawaban` varchar(20) NOT NULL,
  `jawaban2` varchar(20) NOT NULL,
  `jawaban3` varchar(20) NOT NULL,
  `subtes` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_soal_ist`
--

INSERT INTO `tb_soal_ist` (`id_soal`, `nomor_soal`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `opsi_f`, `opsi_g`, `opsi_h`, `opsi_i`, `opsi_j`, `jawaban`, `jawaban2`, `jawaban3`, `subtes`) VALUES
(1, 1, 'Pengaruh seseorang terhadap orang lain seharusnya bergantung pada ...', 'kekuasaan', 'bujukan', 'kekayaan', 'keberanian', 'kewibawaan', '', '', '', '', '', 'D', '', '', '1'),
(2, 2, 'Lawannya \"hemat\" adalah ...', 'murah', 'kikir', 'boros', 'bernilai', 'kaya', '', '', '', '', '', 'C', '', '', '1'),
(3, 3, '.... tidak termasuk cuaca', 'angin puyuh', 'halilintar', 'salju', 'gempa bumi', 'kabut', '', '', '', '', '', 'D', '', '', '1'),
(4, 4, 'Lawannya \"setia\" adalah ...', 'cinta', 'benci', 'persahabatan', 'khianat', 'permusuhan', '', '', '', '', '', 'D', '', '', '1'),
(5, 5, 'Seekor kuda selalu memiliki ...', 'kandang', 'ladam', 'pelana', 'kuku', 'surai', '', '', '', '', '', 'D', '', '', '1'),
(6, 6, 'Seorang paman ..... lebih tua daripada keponakannya', 'jarang', 'biasanya', 'selalu', 'tak pernah', 'kadang-kadang', '', '', '', '', '', 'B', '', '', '1'),
(7, 7, 'Pada jumlah yang sama, nilai kalori yang tertinggi terdapat pada ...', 'ikan', 'daging', 'lemak', 'tahu', 'sayuran', '', '', '', '', '', 'C', '', '', '1'),
(8, 8, 'Pada suatu pertandingan selalu terdapat ...', 'lawan', 'wasit', 'penonton', 'sorak', 'kemenangan', '', '', '', '', '', 'A', '', '', '1'),
(9, 9, 'Suatu pernyataan yang belum dapat dipastikan dikatakan sebagai pernyataan yang ...', 'paradoks', 'tergesa-gesa', 'mempunyai arti rangkap', 'menyesatkan', 'hipotesis', '', '', '', '', '', 'E', '', '', '1'),
(10, 10, 'Pada sepatu kulit terdapat ...', 'kulit', 'sol', 'tali sepatu', 'gesper', 'lidah', '', '', '', '', '', 'B', '', '', '1'),
(11, 11, 'Suatu ... tidak menyangkut persoalan pencegahan kecelakaan', 'lampu lalu lintas', 'kacamata pelindung', 'kotak P3K', 'tanda peringatan', 'palang kereta api', '', '', '', '', '', 'C', '', '', '1'),
(12, 12, 'Mata uang dari Rp. 500 garis tengahnya adalah .... mm', '17', '29', '25', '24', '15', '', '', '', '', '', 'D', '', '', '1'),
(13, 13, 'Seseorang yang bersikap menyangsikan setiap kemajuan ialah seorang yang ...', 'demokratis', 'radikal', 'liberal', 'konservatif', 'anarkis', '', '', '', '', '', 'D', '', '', '1'),
(14, 14, 'Lawannya \"tidak pernah\" ialah ....', 'sering', 'kadang-kadang', 'jarang', 'kerapkali', 'selalu', '', '', '', '', '', 'E', '', '', '1'),
(15, 15, 'Jarak antara Jakarta-Surabaya ialah kira-kira ... km', '650', '1000', '800', '600', '950', '', '', '', '', '', 'C', '', '', '1'),
(16, 16, 'Untuk dapat membuat nada yang terendah dan mendalam, kita memerlukan banyak ....', 'kekuatan', 'peranan', 'ayunan', 'berat', 'suara', '', '', '', '', '', 'A', '', '', '1'),
(17, 17, 'Ayah ... lebih berpengalaman daripada anaknya ...', 'selalu', 'biasanya', 'jauh', 'jarang', 'pada dasarnya', '', '', '', '', '', 'B', '', '', '1'),
(18, 18, 'Di antara kota-kota berikut ini, maka kota ... letaknya paling selatan', 'Jakarta', 'Bandung', 'Cirebon', 'Semarang', 'Surabaya', '', '', '', '', '', 'B', '', '', '1'),
(19, 19, 'Jika kita mengetahui jumlah persentase nomor-nomor lotre yang tidak menang, maka kita dapat menghitung ....', 'jumlah nomor yang menang', 'pajak lotre', 'kemungkinan menang', 'jumlah pengikut', 'tinggi keuntungan', '', '', '', '', '', 'C', '', '', '1'),
(20, 20, 'Seorang anak yang berumur 10 tahun tingginya rata-rata .... cm', '150', '130', '110', '105', '115', '', '', '', '', '', 'A', '', '', '1'),
(21, 21, '', 'lingkaran', 'panah', 'elips', 'busur', 'lengkungan', '', '', '', '', '', 'B', '', '', '2'),
(22, 22, '', 'mengetuk', 'memaku', 'menjahit', 'menggergaji', 'memukul', '', '', '', '', '', 'B', '', '', '2'),
(23, 23, '', 'lebar', 'keliling', 'luas', 'isi', 'panjang', '', '', '', '', '', 'D', '', '', '2'),
(24, 24, '', 'mengikat', 'menyatukan', 'melepaskan', 'mengaitkan', 'meletakkan', '', '', '', '', '', 'C', '', '', '2'),
(25, 25, '', 'arah', 'timur', 'perjalanan', 'tujuan', 'selatan', '', '', '', '', '', 'C', '', '', '2'),
(26, 26, '', 'jarak', 'perpisahan', 'tugas', 'batas', 'perceraian', '', '', '', '', '', 'C', '', '', '2'),
(27, 27, '', 'saringan', 'kelambu', 'payung', 'tapisan', 'jala', '', '', '', '', '', 'C', '', '', '2'),
(28, 28, '', 'putih', 'pucat', 'buram', 'kasar', 'berkilauan', '', '', '', '', '', 'D', '', '', '2'),
(29, 29, '', 'otobis', 'pesawat terbang', 'sepeda motor', 'sepeda', 'kapal api', '', '', '', '', '', 'D', '', '', '2'),
(30, 30, '', 'biola', 'seruling', 'clarinet', 'terompet', 'saxophone', '', '', '', '', '', 'A', '', '', '2'),
(31, 31, '', 'bergelombang', 'kasar', 'berduri', 'licin', 'lurus', '', '', '', '', '', 'E', '', '', '2'),
(32, 32, '', 'jam', 'kompas', 'penunjuk jalan', 'bintang pari', 'arah', '', '', '', '', '', 'A', '', '', '2'),
(33, 33, '', 'kebijaksanaan', 'pendidikan', 'perencanaan', 'penempatan', 'pengerahan', '', '', '', '', '', 'A', '', '', '2'),
(34, 34, '', 'bermotor', 'berjalan', 'berlayar', 'bersepeda', 'berkuda', '', '', '', '', '', 'B', '', '', '2'),
(35, 35, '', 'gambar', 'lukisan', 'potret', 'patung', 'ukiran', '', '', '', '', '', 'C', '', '', '2'),
(36, 36, '', 'panjang', 'lonjong', 'runcing', 'bulat', 'bersudut', '', '', '', '', '', 'A', '', '', '2'),
(37, 37, '', 'kunci', 'palang pintu', 'grendel', 'gunting', 'obeng', '', '', '', '', '', 'D', '', '', '2'),
(38, 38, '', 'jembatan', 'batas', 'perkawinan', 'pagar', 'masyarakat', '', '', '', '', '', 'E', '', '', '2'),
(39, 39, '', 'mengetam', 'memahat', 'mengasah', 'melicinkan', 'menggosok', '', '', '', '', '', 'B', '', '', '2'),
(40, 40, '', 'batu', 'baja', 'bulu', 'karet', 'kayu', '', '', '', '', '', 'C', '', '', '2'),
(41, 41, 'menemukan : menghilangkan = mengingat : ?', 'menghafal', 'mengenai', 'melupakan', 'berpikir', 'memimpikan', '', '', '', '', '', 'C', '', '', '3'),
(42, 42, 'bunga : jambangan   =   burung :   ?', 'sarang', 'langit', 'pagar', 'pohon', 'sangkar', '', '', '', '', '', 'E', '', '', '3'),
(43, 43, 'kereta api : rel   =   otobis :  ?', 'roda', 'poros', 'ban', 'jalan raya', 'kecepatan', '', '', '', '', '', 'D', '', '', '3'),
(44, 44, 'perak : emas   =   cincin :   ?', 'arloji', 'berlian ', 'permata', 'gelang', 'platina', '', '', '', '', '', 'D', '', '', '3'),
(45, 45, 'lingkaran : bola   =   bujursangkar :   ?', 'bentuk', 'gambar', 'segiempat', 'kubus', 'piramida', '', '', '', '', '', 'D', '', '', '3'),
(46, 46, 'saran : keputusan   =   merundingkan :   ?', 'menawarkan', 'menentukan', 'menilai', 'menimbang ', 'merenungkan', '', '', '', '', '', 'B', '', '', '3'),
(47, 47, 'lidah : asam   =   hidung :   ?', 'mencium', 'bernafas', 'mengecap', 'tengik', 'asin', '', '', '', '', '', 'D', '', '', '3'),
(48, 48, 'darah : pembuluh    =    air :   ?', 'pintu air', 'sungai', 'talang', 'hujan', 'ember', '', '', '', '', '', 'B', '', '', '3'),
(49, 49, 'saraf : penyalur   =   pupil :   ?', 'penyinaran', 'mata', 'melihat', 'cahaya', 'pelindung', '', '', '', '', '', 'E', '', '', '3'),
(50, 50, 'pengantar surat : pengantar telegram   =   pandai besi :   ?', 'palu godam', 'pedangan besi', 'api', 'tukang emas', 'besi tempa', '', '', '', '', '', 'D', '', '', '3'),
(51, 51, 'buta : warna   =   tuli :   ?', 'pendengaran', 'mendengar', 'nada', 'kata', 'telinga', '', '', '', '', '', 'C', '', '', '3'),
(52, 52, 'makanan : bumbu   =   ceramah :   ?', 'penghinaan', 'pidato', 'kelakar', 'kesan', 'ayat', '', '', '', '', '', 'C', '', '', '3'),
(53, 53, 'marah : emosi   =   duka cita :   ?', 'suka cita', 'sakit hati', 'suasana hati', 'sedih', 'rindu', '', '', '', '', '', 'C', '', '', '3'),
(54, 54, 'mantel : jubah   =   wool :   ?', 'bahan sandang', 'domba', 'sutera', 'jas', 'tekstil', '', '', '', '', '', 'C', '', '', '3'),
(55, 55, 'ketinggian puncak : tekanan udara   =   ketinggian nada :   ?', 'garpu penala', 'sopran', 'nyanyian', 'penjang senar', 'suara', '', '', '', '', '', 'E', '', '', '3'),
(56, 56, 'negara : revolusi   =   hidup :   ?', 'biologi', 'keturunan ', 'mutasi', 'seleksi', 'ilmu hewan', '', '', '', '', '', 'C', '', '', '3'),
(57, 57, 'kekurangan : penemuan   =   panas :   ?', 'haus', 'khatulistiwa', 'es', 'matahari', 'dingin', '', '', '', '', '', 'C', '', '', '3'),
(58, 58, 'kayu : diketam   =   besi :   ?', 'dipalu', 'digergaji', 'dituang', 'dikikir', 'ditempa', '', '', '', '', '', 'E', '', '', '3'),
(59, 59, 'olahragawan : lembing   =   cendekiawan :   ?', 'perpustakaan', 'penelitian ', 'karya', 'studi', 'mikroskop', '', '', '', '', '', 'E', '', '', '3'),
(60, 60, 'keledai : kuda pacuan   =    pembakaran :   ?', 'pemadam api', 'obor', 'letupan', 'korek api', 'lautan api', '', '', '', '', '', 'E', '', '', '3'),
(61, 61, 'mawar - melati', '', '', '', '', '', '', '', '', '', '', 'bunga', '', '', '4'),
(62, 62, 'mata - telinga', '', '', '', '', '', '', '', '', '', '', 'indera', '', '', '4'),
(63, 63, 'gula - intan', '', '', '', '', '', '', '', '', '', '', 'kristal', '', '', '4'),
(64, 64, 'hujan - salju', '', '', '', '', '', '', '', '', '', '', 'cuaca', '', '', '4'),
(65, 65, 'pengantar surat - telepon', '', '', '', '', '', '', '', '', '', '', 'pembawa berita', '', '', '4'),
(66, 66, 'kamera - kacamata', '', '', '', '', '', '', '', '', '', '', 'alat optik', '', '', '4'),
(67, 67, 'lambung - usus', '', '', '', '', '', '', '', '', '', '', 'alat pencernaan', '', '', '4'),
(68, 68, 'banyak - sedikit', '', '', '', '', '', '', '', '', '', '', 'jumlah', '', '', '4'),
(69, 69, 'telur - benih', '', '', '', '', '', '', '', '', '', '', 'bibit', '', '', '4'),
(70, 70, 'bendera - lencana', '', '', '', '', '', '', '', '', '', '', 'simbol', '', '', '4'),
(71, 71, 'rumput - gajah', '', '', '', '', '', '', '', '', '', '', 'makhluk hidup', '', '', '4'),
(72, 72, 'ember - kantong', '', '', '', '', '', '', '', '', '', '', 'wadah', '', '', '4'),
(73, 73, 'awal - akhir', '', '', '', '', '', '', '', '', '', '', 'batas', '', '', '4'),
(74, 74, 'kikir - boros', '', '', '', '', '', '', '', '', '', '', 'watak', '', '', '4'),
(75, 75, 'penawaran - permintaan', '', '', '', '', '', '', '', '', '', '', 'pengertian ekonomi', '', '', '4'),
(76, 76, 'atas - bawah', '', '', '', '', '', '', '', '', '', '', 'pengertian ruang', '', '', '4'),
(77, 77, 'Jika seorang anak memiliki Rp. 50,- dan memberikan Rp 15,- . Berapa rupiahkah yang masih tinggal padanya ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '3', '5', '', '5'),
(78, 78, 'Berapa km yang dapat ditempuh oleh kereta api dalam waktu 7 jam. Jika kecepatan 40 km/jam?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '2', '8', '0', '5'),
(79, 79, '15 peti buah-buahan beratnya 250 kg dan setiap peti kosong beratnya 3kg. Berapakah berat buah buahan itu?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '2', '5', '0', '5'),
(80, 80, 'Seseorang mempunyai persediaan rumput yang cukup untuk 7 ekor kuda selama 78 hari. Berapa harikah persediaan itu cukup untuk 21 ekor kuda?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '2', '6', '', '5'),
(81, 81, '3 Batang coklat harganya Rp 5,-. Berapa batangkah yang dapat kita beli dengan Rp 50,- ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '3', '0', '', '5'),
(82, 82, 'Seseorang dapat berjalan 1,75 m dalam waktu 1/4 detik. Berapa meterkah yang dapat ia tempuh dalam waktu 10 detik ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '7', '0', '', '5'),
(83, 83, 'Jika sebuah batu terletak 15m di sebelah selatan dari sebatang pohon dan pohon itu berada 30m di sebelah selatan dari sebuah rumah. Berapa meterkah jarak antara batu dan rumah itu ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '4', '5', '', '5'),
(84, 84, 'jika 4½ m bahan sandang harganya Rp 90,-. Berapa rupiahkah harga 2½ m ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '5', '0', '', '5'),
(85, 85, '7 orang dapat menyelesaikan suatu pekerjaan dalam 6 hari. Berapa orangkah yang diperlukan untuk menyelesaikan pekerjaan itu dalam setengah jam ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '4', '8', '', '5'),
(86, 86, 'Karena dipanaskan sebatang kawat yang panjangnya 48cm akan mengembang menjadi 52cm setelah pemanasan. Berapakah panjangnya kawat yang berukuran 72cm?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '7', '8', '', '5'),
(87, 87, 'Suatu pabrik dapat menghasilkan 304 batang pensil dalam waktu 8 jam. Berapa batangkah dihasilkan dalam waktu setengah jam ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '9', '', '5'),
(88, 88, 'Untuk suatu campuran diperlukan 2 bagian perak dan 3 bagian timah. Berapa gram perak yang diperlukan untuk mendapatkan campuran itu yang beratnya 15 gram ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '6', '', '', '5'),
(89, 89, 'Untuk setiap Rp. 3,- yang dimiliki Sidin, Hamid memiliki Rp. 5,-. Jika mereka bersama mempunyai Rp. 120,-. Berapa rupiahkah yang dimiliki Hamid ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '5', '7', '', '5'),
(90, 90, 'Mesin A menenun 60m kain, sedangkan mesin B menenun 40m. Berapa meterkah yang di tenun mesin A jika mesin B menenun 60m ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '9', '0', '', '5'),
(91, 91, 'Seseorang membelikan 1/10 dari uangnya untuk perangko dan 4 kali jumlah itu untuk alat tulis. Sisa uangnya masih Rp. 60,-. Berapa rupiahkah uangnya semula ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '2', '0', '5'),
(92, 92, 'Di dalam 2 peti terdapat 43 buah piring. Di dalam peti yang satu terdapat 9 buah piring lebih banyak daripada di dalam peti yang lain. Berapa buah piring terdapat di dalam peti yang lebih kecil?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '7', '', '5'),
(93, 93, 'Suatu kembaran kain yang panjangnya 60 cm harus dibagi sedemikian rupa sehingga panjangnya satu bagian ialah 2/3 dari bagian yang lain. Berapakah panjangnya bagian terpendek ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '2', '4', '', '5'),
(94, 94, 'Suatu perusahaan mengekspor ¾ dari hasil produksinya dan menjual 4/5 dari sisa itu ke dalam negeri. Berapa % kah hasil produksi yang masih tinggal ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '5', '', '', '5'),
(95, 95, 'Jika suatu botol berisi hanya 7/8 bagian dan harganya ialah Rp. 84,-. Berapakah harga anggur itu jika botol itu hanya terisi ½ penuh ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '4', '8', '', '5'),
(96, 96, 'Di dalam suatu keluarga setiap anak perempuan mempunyai jumlah saudara laki-laki yang sama dengan jumlah saudara perempuan, dan setiap anak laki-laki memiliki dua kali lebih banyak saudara perempuan daripada saudara laki-laki. Berapa anak laki-lakikah yang terdapat di dalam keluarga itu ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '3', '', '', '5'),
(97, 97, '6,  9,  12,  15,  18,  21,  24,  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '2', '7', '', '6'),
(98, 98, '15,  16,  18,  19,  21,  22,  24,  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '2', '5', '', '6'),
(99, 99, '19,  18,  22,  21,  25,  24,  28,  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '2', '7', '', '6'),
(100, 100, '16,  12,  17,  13,  18,  14,  19,  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '5', '', '6'),
(101, 101, '2,  4,  8,  10,  20,  22,  44  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '4', '6', '', '6'),
(102, 102, '15,  13,  16,  12,  17,  11,  18  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '0', '', '6'),
(103, 103, '25,  22,  11,  33,  30,  15,  45  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '2', '4', '', '6'),
(104, 104, '49,  51,  54,  27,  9,  11,  14  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '7', '', '', '6'),
(105, 105, '2,  3,  1,  3,  4,  2,  4  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '5', '', '', '6'),
(106, 106, '19,  17,  20,  16,  21,  15,  22  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '4', '', '6'),
(107, 107, '94,  92,  46,  44,  22,  20,  10  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '8', '', '', '6'),
(108, 108, '5,  8,  9,  8,  11,  12,  11 ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '4', '', '6'),
(109, 109, '12,  15,  19,  23,  28,  33,  39  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '4', '5', '', '6'),
(110, 110, '7,  5,  10,  7,  21,  17,  68  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '3', '6', '', '6'),
(111, 111, '11,  15,  18,  9,  13,  16,  8  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '2', '', '6'),
(112, 112, '3,  8,  15,  24,  35,  48,  63  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '8', '0', '', '6'),
(113, 113, '4,  5,  7,  4,  8,  13,  7  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '4', '', '6'),
(114, 114, '8,  5,  15,  18,  6,  3,  9  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '2', '', '6'),
(115, 115, '15,  6,  18,  10,  30,  23,  69  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '3', '6', '', '6'),
(116, 116, '5,  35,  28,  4,  11,  77,  70  ?', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '1', '0', '', '6'),
(117, 117, '117.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'A', '', '', '7'),
(118, 118, '118.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'C', '', '', '7'),
(119, 119, '119.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'B', '', '', '7'),
(120, 120, '120.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'A', '', '', '7'),
(121, 121, '121.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'D', '', '', '7'),
(122, 122, '122.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'B', '', '', '7'),
(123, 123, '123.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'C', '', '', '7'),
(124, 124, '124.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'E', '', '', '7'),
(125, 125, '125.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'E', '', '', '7'),
(126, 126, '126.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'D', '', '', '7'),
(127, 127, '127.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'E', '', '', '7'),
(128, 128, '128.jpg', 'opsi_a1.jpg', 'opsi_b1.jpg', 'opsi_c1.jpg', 'opsi_d1.jpg', 'opsi_e1.jpg', '', '', '', '', '', 'B', '', '', '7'),
(129, 129, '129.jpg', 'opsi_a2.jpg', 'opsi_b2.jpg', 'opsi_c2.jpg', 'opsi_d2.jpg', 'opsi_e2.jpg', '', '', '', '', '', 'D', '', '', '7'),
(130, 130, '130.jpg', 'opsi_a2.jpg', 'opsi_b2.jpg', 'opsi_c2.jpg', 'opsi_d2.jpg', 'opsi_e2.jpg', '', '', '', '', '', 'C', '', '', '7'),
(131, 131, '131.jpg', 'opsi_a2.jpg', 'opsi_b2.jpg', 'opsi_c2.jpg', 'opsi_d2.jpg', 'opsi_e2.jpg', '', '', '', '', '', 'B', '', '', '7'),
(132, 132, '132.jpg', 'opsi_a2.jpg', 'opsi_b2.jpg', 'opsi_c2.jpg', 'opsi_d2.jpg', 'opsi_e2.jpg', '', '', '', '', '', 'A', '', '', '7'),
(133, 133, '133.jpg', 'opsi_a2.jpg', 'opsi_b2.jpg', 'opsi_c2.jpg', 'opsi_d2.jpg', 'opsi_e2.jpg', '', '', '', '', '', 'B', '', '', '7'),
(134, 134, '134.jpg', 'opsi_a2.jpg', 'opsi_b2.jpg', 'opsi_c2.jpg', 'opsi_d2.jpg', 'opsi_e2.jpg', '', '', '', '', '', 'D', '', '', '7'),
(135, 135, '135.jpg', 'opsi_a2.jpg', 'opsi_b2.jpg', 'opsi_c2.jpg', 'opsi_d2.jpg', 'opsi_e2.jpg', '', '', '', '', '', 'C', '', '', '7'),
(136, 136, '136.jpg', 'opsi_a2.jpg', 'opsi_b2.jpg', 'opsi_c2.jpg', 'opsi_d2.jpg', 'opsi_e2.jpg', '', '', '', '', '', 'C', '', '', '7'),
(137, 137, '137.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'A', '', '', '8'),
(138, 138, '138.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'C', '', '', '8'),
(139, 139, '139.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'D', '', '', '8'),
(140, 140, '140.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'E', '', '', '8'),
(141, 141, '141.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'A', '', '', '8'),
(142, 142, '142.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'C', '', '', '8'),
(143, 143, '143.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'D', '', '', '8'),
(144, 144, '144.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'C', '', '', '8'),
(145, 145, '145.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'E', '', '', '8'),
(146, 146, '146.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'A', '', '', '8'),
(147, 147, '147.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'B', '', '', '8'),
(148, 148, '148.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'D', '', '', '8'),
(149, 149, '149.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'E', '', '', '8'),
(150, 150, '150.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'B', '', '', '8'),
(151, 151, '151.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'D', '', '', '8'),
(152, 152, '152.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'B', '', '', '8'),
(153, 153, '153.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'A', '', '', '8'),
(154, 154, '154.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'E', '', '', '8'),
(155, 155, '155.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'B', '', '', '8'),
(156, 156, '156.jpg', 'opsi_a3.jpg', 'opsi_b3.jpg', 'opsi_c3.jpg', 'opsi_d3.jpg', 'opsi_e3.jpg', '', '', '', '', '', 'C', '', '', '8'),
(157, 157, 'Kata yang mempunyai huruf permulaan -A- adalah suatu ....', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'D', '', '', '9'),
(158, 158, 'Kata yang mempunyai huruf permulaan -B- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'E', '', '', '9'),
(159, 159, 'Kata yang mempunyai huruf permulaan -C- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'B', '', '', '9'),
(160, 160, 'Kata yang mempunyai huruf permulaan -D- adalah suatu ....', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'A', '', '', '9'),
(161, 161, 'Kata yang mempunyai huruf permulaan -E- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'C', '', '', '9'),
(162, 162, 'Kata yang mempunyai huruf permulaan -F- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'A', '', '', '9'),
(163, 163, 'Kata yang mempunyai huruf permulaan -G- adalah suatu ....', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'D', '', '', '9'),
(164, 164, 'Kata yang mempunyai huruf permulaan -H- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'E', '', '', '9'),
(165, 165, 'Kata yang mempunyai huruf permulaan -I- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'C', '', '', '9'),
(166, 166, 'Kata yang mempunyai huruf permulaan -J- adalah suatu ....', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'B', '', '', '9'),
(167, 167, 'Kata yang mempunyai huruf permulaan -K- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'B', '', '', '9'),
(168, 168, 'Kata yang mempunyai huruf permulaan -L- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'A', '', '', '9'),
(169, 169, 'Kata yang mempunyai huruf permulaan -M- adalah suatu ....', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'E', '', '', '9'),
(170, 170, 'Kata yang mempunyai huruf permulaan -N- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'C', '', '', '9'),
(171, 171, 'Kata yang mempunyai huruf permulaan -O- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'D', '', '', '9'),
(172, 172, 'Kata yang mempunyai huruf permulaan -P- adalah suatu ....', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'B', '', '', '9'),
(173, 173, 'Kata yang mempunyai huruf permulaan -R- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'E', '', '', '9'),
(174, 174, 'Kata yang mempunyai huruf permulaan -S- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'A', '', '', '9'),
(175, 175, 'Kata yang mempunyai huruf permulaan -T- adalah suatu ....', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'C', '', '', '9'),
(176, 176, 'Kata yang mempunyai huruf permulaan -U- adalah suatu ...', 'Bunga', 'Perkakas', 'Burung', 'Kesenian', 'Binatang', '', '', '', '', '', 'D', '', '', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal_ist2`
--

CREATE TABLE `tb_soal_ist2` (
  `id_soal` int(11) NOT NULL,
  `nomor_soal` int(5) NOT NULL,
  `soal` varchar(255) CHARACTER SET latin1 NOT NULL,
  `opsi_1` varchar(11) CHARACTER SET latin1 NOT NULL,
  `opsi_2` varchar(11) CHARACTER SET latin1 NOT NULL,
  `opsi_3` varchar(11) CHARACTER SET latin1 NOT NULL,
  `opsi_4` varchar(11) CHARACTER SET latin1 NOT NULL,
  `opsi_5` varchar(11) CHARACTER SET latin1 NOT NULL,
  `opsi_6` varchar(11) CHARACTER SET latin1 NOT NULL,
  `opsi_7` varchar(11) CHARACTER SET latin1 NOT NULL,
  `opsi_8` varchar(11) CHARACTER SET latin1 NOT NULL,
  `opsi_9` varchar(11) CHARACTER SET latin1 NOT NULL,
  `opsi_10` varchar(11) CHARACTER SET latin1 NOT NULL,
  `jawaban` varchar(100) CHARACTER SET latin1 NOT NULL,
  `subtes` varchar(5) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal_leadership`
--

CREATE TABLE `tb_soal_leadership` (
  `id_soal` int(11) NOT NULL,
  `nomor_soal` int(5) NOT NULL,
  `soal` varchar(355) CHARACTER SET latin1 NOT NULL,
  `opsi_a` varchar(255) CHARACTER SET latin1 NOT NULL,
  `opsi_b` varchar(255) CHARACTER SET latin1 NOT NULL,
  `jawaban` varchar(20) CHARACTER SET latin1 NOT NULL,
  `subtes` varchar(5) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_soal_leadership`
--

INSERT INTO `tb_soal_leadership` (`id_soal`, `nomor_soal`, `soal`, `opsi_a`, `opsi_b`, `jawaban`, `subtes`) VALUES
(1, 1, 'Saya menyadari disekitar saya banyak terdapat sosok pemimpin.', 'Ya', 'Tidak', 'Ya', '1'),
(2, 2, 'Saya sudah terlibat secara langsung menjadi anggota dalam organisasi.', 'Ya', 'Tidak', 'Ya', '1'),
(3, 3, 'Saya mengetahui model kepemimpinan partisipatif dan berusaha menerapkannya.', 'Ya', 'Tidak', 'Ya', '1'),
(4, 4, 'Saya dapat menyelesaikan tugas-tugas organisasi yang saya mulai hingga tuntas.', 'Ya', 'Tidak', 'Ya', '1'),
(5, 5, 'Saya berusaha mengembangkan kepemimpinan pada anggota organisasi.', 'Ya', 'Tidak', 'Ya', '1'),
(6, 6, 'Saya merasa sudah menjadi pemimpin yang ideal.', 'Ya', 'Tidak', 'Ya', '1'),
(7, 7, 'Saya mendukung proses belajar anggota di dalam organisasi.', 'Ya', 'Tidak', 'Ya', '1'),
(8, 8, 'Saya bertindak sebagai fasilitator untuk orang lain dalam mencapai tujuan organisasi.', 'Ya', 'Tidak', 'Ya', '1'),
(9, 9, 'Saya berusaha menjaga hubungan yang baik dengan anggota organisasi.', 'Ya', 'Tidak', 'Ya', '1'),
(10, 10, 'Saya belum tertarik untuk terlibat menjadi anggota dalam organisasi.', 'Ya', 'Tidak', 'Ya', '1'),
(11, 11, 'Saya berusaha untuk  terlibat dalam setiap kegiatan dalam organisasi yang saya menjadi anggota di dalamnya.', 'Ya', 'Tidak', 'Ya', '1'),
(12, 12, 'Saya mengetahui keahlian yang dibutuhkan untuk menjadi pemimpin yang berhasil.', 'Ya', 'Tidak', 'Ya', '1'),
(13, 13, 'Saya mendukung ide-ide yang dikemukakan oleh anggota organisasi.', 'Ya', 'Tidak', 'Ya', '1'),
(14, 14, 'Saya merasa bahwa kepemimpinan merupakan bagian dari hidup saya.', 'Ya', 'Tidak', 'Ya', '1'),
(15, 15, 'Saya mempercayai anggota yang terlibat aktif dalam kegiatan organisasi.', 'Ya', 'Tidak', 'Ya', '1'),
(16, 16, 'Saya mengembangkan kepemimpinan terus-menerus  dalam diri saya.', 'Ya', 'Tidak', 'Ya', '1'),
(17, 17, 'Kepercayaan diri saya muncul ketika saya sudah terlibat dalam kegiatan organisasi.', 'Ya', 'Tidak', 'Ya', '1'),
(18, 18, 'Saya mulai mencoba peran sebagai pemimpin dan mengambil tanggung jawab di organisasi yang saya menjadi anggotanya.', 'Ya', 'Tidak', 'Ya', '1'),
(19, 19, 'Saya bertindak sebagai fasilitator dalam membentuk kepemimpinan pada anggota baru dalam organisasi.', 'Ya', 'Tidak', 'Ya', '1'),
(20, 20, 'Saya dapat menjadi seorang pemimpin yang berhasil dimanapun saya berada.', 'Ya', 'Tidak', 'Ya', '1'),
(21, 21, 'Saya dapat membedakan tugas serta peran pada pemimpin dan juga anggota dalam organisasi.', 'Ya', 'Tidak', 'Ya', '1'),
(22, 22, 'Saya mengetahui kekuatan dan kelemahan diri setelah saya menjadi anggota organisasi.', 'Ya', 'Tidak', 'Ya', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal_motlet`
--

CREATE TABLE `tb_soal_motlet` (
  `id_soal` int(5) NOT NULL,
  `id_perusahaan` int(5) NOT NULL,
  `id_jenis_motlet` int(5) NOT NULL,
  `soal_motlet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_soal_motlet`
--

INSERT INTO `tb_soal_motlet` (`id_soal`, `id_perusahaan`, `id_jenis_motlet`, `soal_motlet`) VALUES
(1, 2, 1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(3, 1, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(5, 2, 1, '<p>tes12324</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal_msdt`
--

CREATE TABLE `tb_soal_msdt` (
  `id_soal` int(11) NOT NULL,
  `no_soal` int(5) NOT NULL,
  `pernyataan1` varchar(450) CHARACTER SET latin1 NOT NULL,
  `pernyataan2` varchar(450) CHARACTER SET latin1 NOT NULL,
  `aspek1` varchar(5) CHARACTER SET latin1 NOT NULL,
  `aspek2` varchar(5) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_soal_msdt`
--

INSERT INTO `tb_soal_msdt` (`id_soal`, `no_soal`, `pernyataan1`, `pernyataan2`, `aspek1`, `aspek2`) VALUES
(1, 1, 'Saya tidak akan menegur pelanggar - pelanggar peraturan bila saya merasa pasti bahwa tidak ada satu orangpun yang mengetahui tentang pelanggar - pelanggar tersebut.', 'Bila saya mengumumkan suatu keputusan yang kurang menyenangkan, saya akan menjelaskan kepada bawahan saya bahwa keputusan ini dibuat oleh direktur.', 'A', 'B'),
(2, 2, 'Bila ada seorang karyawan yang hasil kerjanya selalu tidak memuaskan saya, saya akan menunggu suatu kesempatan untuk memindahkannya dan bukan untuk memecatnya.', 'Bila ada bawahan saya yang dikucilkan dari kelompok kerjanya, saya akan mencari jalan agar orang lain dapat berteman dengannya.', 'A', 'B'),
(3, 3, 'Bila direktur memberikan perintah yang kurang menyenangkan, saya pikir adalah cukup bijaksana bila saya menyebutkan namanya dan bukan nama saya.', 'Saya biasanya membuat keputusan-keputusan sendiri dan menyampaikannya kepada bawahan saya.', 'A', 'B'),
(4, 4, 'Bila saya ditegur oleh atasan saya, saya akan memanggil semua bawahan saya dan mengatakan semua teguran tersebut kepada mereka.', 'Saya selalu memberikan tugas - tugas yang sangat sulit kepada karyawan - karyawan yang paling berpengalaman.', 'A', 'B'),
(5, 5, 'Saya selalu melakukan diskusi - diskusi untuk mencapai kata sepakat.', 'Saya selalu menganjurkan kepada bawahan saya untuk memberikan usul - usul, tetapi kadang - kadang saya langsung mengambil tindakan tertentu.', 'A', 'B'),
(6, 6, 'Seringkali saya lebih mementingkan tugas daripada diri saya sendiri.', 'Saya mengijinkan bawahan - bawahan saya untuk ikut serta dalam mengambil keputusan.', 'A', 'B'),
(7, 7, 'Bila jumlah dan mutu hasil kerja bagian saya tidak memuaskan, saya mengatakan kepada bawahan - bawahan saya bahwa direktur merasa kecewa. Oleh karena itu mereka harus memperbaiki kerja mereka.', 'Saya membuat keputusan - keputusan sendiri dan kemudian saya mencoba untuk \" menjual \" keputusan - keputusan itu kepada bawahan saya.', 'A', 'B'),
(8, 8, 'Bila saya mengumumkan suatu keputusan yang kurang menyenangkan, saya akan menjelaskan kepada bawahan saya bahwa keputusan ini dibuat oleh direktur.', 'Saya mengijinkan bawahan - bawahan saya untuk ikut serta di dalam pengambilan keputusan, tetapi sayapun menyediakan sesuatu yang jitu sebagai keputusan terakhir.', 'A', 'B'),
(9, 9, 'Saya akan memberikan tugas - tugas yang sulit kepada bawahan saya yang belum berpengalaman, tetapi bila mereka memperoleh kesukaran, saya akan mengambil alih tanggung jawab mereka.', 'Bila jumlah dan mutu hasil kerja bagian saya tidak memuaskan, saya menjelaskan kepada bawahan - bawahan saya bahwa direktur merasa kecewa. Oleh karena itu mereka harus memperbaiki mutu kerja mereka itu.', 'A', 'B'),
(10, 10, 'Saya merasa bahwa dengan bekerja keras untuk bawahan saya, mereka akan menyukai saya.', 'Saya membiarkan orang lain menangani tugas mereka masing - masing, walaupun mereka membuat banyak kesalahan.', 'A', 'B'),
(11, 11, 'Saya menunjukan minat saya terhadap kehidupan pribadi bawahan - bawahan saya, karena sayapun mengharapkan mereka berbuat seperti itu kepada saya.', 'Saya merasa bahwa bawahan - bawahan saya tidak perlu mengerti mengapa mereka mengerjakan sesuatu hal, sejauh mereka mengerjakan hal terebut.', 'A', 'B'),
(12, 12, 'Saya percaya bahwa bawahan - bawahan yang tidak disiplin tidak akan memperbaiki jumlah atau mutu kerja mereka dalam jangka waktu yang panjang.', 'Bila menghadapi masalah yang sulit, saya berusaha untuk mencapai pemecahan yang dapat diterima oleh sebagian besar orang.', 'A', 'B'),
(13, 13, 'Bila beberapa bawahan saya merasa tidak berbahagia, saya akan mencoba melakukan sesuatu untuk mengatasi hal tersebut.', 'Saya berusaha bekerja sebaik mungkin dan memberikan ide - ide pengembangan pada pimpinan.', 'A', 'B'),
(14, 14, 'Saya menyetujui kenaikan tunjangan - tunjangan untuk staf dan karyawan.', 'Saya mendukung bawahan saya yang ingin meningkatkan pengetahuan tentang pekerjaan dan perusahaan, walaupun hal itu sebenarnya belum diperlukan untuk kedudukan mereka sekarang.', 'A', 'B'),
(15, 15, 'Saya membiarkan orang lain menangani tugas mereka masing - masing, walaupun mereka banyak membuat kesalahan.', 'Saya membuat keputusan - keputusan sendiri, tetapi saya akan mempertimbangkan usul - usul dari bawahan - bawahan saya.', 'A', 'B'),
(16, 16, 'Bila ada bawahan saya yang dikucilkan dari kelompok kerjanya, saya akan mencari cara agar orang lain dapat berteman dengannya.', 'Bila seorang karyawan tidak sanggup menyelesaikan tugasnya, saya akan membantu dia untuk menyelesaikan tugas tersebut.', 'A', 'B'),
(17, 17, 'Saya percaya bahwa penerapan disiplin merupakan contoh untuk karyawan - karyawan lain.', 'Saya merasa saya lebih mementingkan tugas daripada diri saya sendiri.', 'A', 'B'),
(18, 18, 'Saya mencela pembicaraan - pembicaraan yang tidak perlu di antara bawahan - bawahan saya, selama mereka bekerja.', 'Saya menyetujui kenaikan tunjangan - tunjangan untuk staf dan karyawan.', 'A', 'B'),
(19, 19, 'Saya selalu memperhatikan keterlambatan dan kemangkiran bawahan saya.', 'Saya percaya bahwa serikat - serikat buruh akan mencoba meruntuhkan kewibawaan pimpinan perusahaan.', 'A', 'B'),
(20, 20, 'Kadang - kadang saya merasa bahwa apa yang dikeluhkan oleh serikat buruh bukanlah masalah yang mendasar.', 'Saya merasa bahwa keluhan - keluhan tidak dapat dicegah dan saya akan berusaha untuk menghilangkan keluhan tersebut.', 'A', 'B'),
(21, 21, 'Adalah penting bagi saya untuk memperoleh penghargaan atas ide - ide saya yang baik.', 'Saya mengemukakan pendapat - pendapat saya dimuka umum hanya bila saya merasa bahwa orang lain akan setuju dengan saya.', 'A', 'B'),
(22, 22, 'Saya percaya bahwa serikat - serikat buruh akan mencoba meruntuhkan kewibawaan pimpinan perusahaan.', 'Saya percaya bahwa pertemuan - pertemuan yang sering dengan karyawan secara pribadi akan membantu pengembangan diri mereka.', 'A', 'B'),
(23, 23, 'Saya merasa bawahan - bawahan saya tidak perlu mengerti mengapa mereka mengerjakan sesuatu hal sejauh mereka mengerjakan hal tersebut.', 'Saya merasa bahwa jam pencatat waktu datang dan pulangnya para pegawai akan mengurangi keterlambatan.', 'A', 'B'),
(24, 24, 'Saya biasanya membuat keputusan - keputusan sendiri dan menyampaikannya kepada bawahan saya.', 'Saya merasa bahwa serikat - serikat buruh dan pimpinan perusahaan dapat bekerjasama untuk mencapai tujuan - tujuan bersama.', 'A', 'B'),
(25, 25, 'Saya menyukai penggunaan skala penggajian karyawan.', 'Saya selalu melakukan diskusi - diskusi untuk mencapai kata sepakat.', 'A', 'B'),
(26, 26, 'Saya tidak akan memberikan tugas yang tidak saya senangi kepada orang lain.', 'Bila beberapa bawahan saya merasa tidak berbahagia, saya akan mencoba melakukan sesuatu untuk mengatasi hal tersebut.', 'A', 'B'),
(27, 27, 'Bila ada tugas yang mendesak, walaupun semua peralatannya sudah disediakan, saya akan membiarkannya saja dan meminta salah seorang bawahan saya untuk mengerjakan tugas tersebut.', 'Adalah penting bagi saya untuk memperoleh penghargaan atas ide - ide saya yang baik.', 'A', 'B'),
(28, 28, 'Tujuan saya adalah berusaha mengerjakan tugas sebaik mungkin tanpa mengeluh.', 'Saya memberikan tugas kepada bawahan saya tanpa banyak mempertimbangkan pengalaman atau kemampuan saya lebih menuntut pencapaian hasilnya saja', 'A', 'B'),
(29, 29, 'Saya memberikan tugas kepada bawahan saya tanpa banyak mempertimbangkan pengalaman atau kemampuan. Saya lebih menuntut pada pencapaian hasilnya saja.', 'Saya dengan sabar mendengarkan keluhan - keluhan dan ketidakpuasan - ketidakpuasan bawahan saya, tetapi seringkali saya meralat apa yang mereka katakan.', 'A', 'B'),
(30, 30, 'Saya merasa bahwa keluhan - keluhan tidak dapat dicegah dan saya berusaha untuk menghilangkan keluhan tersebut.', 'Saya percaya bahwa bawahan - bawahan saya akan merasakan kepuasan kerja tanpa merasa tertekan oleh saya.', 'A', 'B'),
(31, 31, 'Bila menghadapi masalah yang sulit, saya berusaha untuk mencapai pemecahan yang dapat diterima oleh sebagian besar orang.', 'Saya percaya bahwa pengalaman bekerja lebih bermanfaat daripada pendidikan teoritis.', 'A', 'B'),
(32, 32, 'Saya selalu memberikan tugas - tugas yang sangat sulit kepada karyawan - karyawan yang paling berpengalaman.', 'Saya percaya bahwa kenaikan jabatan adalah semata - mata berdasarkan kemampuan yang ada.', 'A', 'B'),
(33, 33, 'Saya merasa bahwa masalah - masalah yang timbul di antara para karyawan biasanya akan dapat diselesaikan di antara mereka sendiri, tanpa campur tangan dari saya.', 'Bila saya ditegur oleh atasan saya, saya akan memanggil semua bawahan saya dan mengatakan semua teguran tersebut kepada mereka.', 'A', 'B'),
(34, 34, 'Saya tidak peduli dengan apa yang dikerjakan oleh karyawan saya di luar jam kerja kantornya.', 'Saya percaya bahwa bawahan - bawahan yang tidak disiplin tidak akan memperbaiki jumlah atau mutu kerja mereka dalam jangka waktu yang panjang.', 'A', 'B'),
(35, 35, 'Saya memberikan informasi kepada pimpinan perusahaan tidak lebih dari apa yang mereka tanyakan.', 'Kadang - kadang saya merasa bahwa apa yang dikeluhkan oleh serikat buruh bukanlah masalah yang mendasar.', 'A', 'B'),
(36, 36, 'Saya kadang ragu - ragu untuk membuat suatu keputusan yang akan tidak disukai oleh bawahan - bawahan saya.', 'Tujuan saya adalah berusaha mengerjakan tugas sebaik mungkin tanpa mengeluh.', 'A', 'B'),
(37, 37, 'Saya dengan sabar mendengarkan keluhan - keluhan dan ketidakpuasan - ketidakpuasan dari bawahan saya, tetapi seringkali saya meralat apa yang mereka katakan.', 'Saya kadang ragu - ragu untuk membuat suatu keputusan yang akan tidak disukai oleh bawahan - bawahan saya.', 'A', 'B'),
(38, 38, 'Saya mengemukakan pendapat - pendapat saya dimuka umum hanya bila saya merasa bahwa orang lain akan setuju dengan saya.', 'Sebagian besar dari bawahan-bawahan saya dapat menyelesaikan tugas-tugas mereka, bila perlu, tanpa kehadiran saya.', 'A', 'B'),
(39, 39, 'Saya berusaha bekerja sebaik mungkin dan memberikan ide-ide pengembangan pada pimpinan perusahaan.', 'Bila saya memberikan tugas kepada bawahan-bawahan saya saya menentukan batas waktu penyelesaiannya.', 'A', 'B'),
(40, 40, 'Saya selalu menganjurkan kepada bawahan saya untuk memberikan usul-usul, tetapi kadang-kadang saya langsung mengambil tindakan tertentu.', 'Saya mencoba membuat bawahan-bawahan saya merasa senang apabila mereka berbicara dengan saya.', 'A', 'B'),
(41, 41, 'Di dalam diskusi-diskusi saya memberikan fakta-fakta sesuai pemahaman bawahan saya, dan membiarkan mereka untuk membuat keimpulan sendiri.', 'Bila direktur memberikan perintah yang kurang menyenangkan, saya pikir adalah cukup bijaksana bila saya menyebutkan namanya dan bukan nama saya.', 'A', 'B'),
(42, 42, 'Bila ada tugas-tugas mendadak atau tugas yag tidak menyenangkan, sebelumnya saya akan meminta beberapa sukarelawan yang mau mengerjakan tugas tersebut.', 'Saya menunjukkan minat saya terhadap kehidupan pribadi bawahan-bawahan saya, karena saya pun mengharapkan mereka berbuat seperti itu kepada saya.', 'A', 'B'),
(43, 43, 'Saya selalu memperhatikan kebahagiaan karyawan-karyawan saya saat mereka mengerjakan tugas-tugas mereka.', 'Saya selalu memperhatikan keterlambatan dan kemangkiran bawahan saya.', 'A', 'B'),
(44, 44, 'Sebagian besar dari bawahan-bawahan saya dapat menyelesaikan tugas-tugas mereka, bila perlu, tanpa kehadiran saya.', 'Bila ada sesuatu tugas yang mendesak, walaupun semua peralatannya sudah disediakan, saya akan membiarkannya saja dan meminta salah seorang bawahan saya untuk mengerjakan tugas tersebut.', 'A', 'B'),
(45, 45, 'Saya percaya bahwa bawahan-bawahan saya akan merasakan kepuasan kerja tanpa merasa tertekan oleh saya.', 'Saya memberikan informasi kepada \"dewan pimpinan perusahaan\" tidak lebih dari apa yang mereka tanyakan.', 'A', 'B'),
(46, 46, 'Saya percaya bahwa pertemuan-pertemuan yang sering dengan karyawan secara pribadi akan membantu pengembangan diri mereka.', 'Saya selalu memperhatikan kebahagiaan karyawan-karyawan saya saat mereka mengerjakan tugas-tugas mereka.', 'A', 'B'),
(47, 47, 'Saya mendukung bawahan saya yang ingin meningkatkan pengetahuan tentang pekerjaan dan perusahaan, walaupun hal itu sebenarnya belum diperlukan untuk kedudukan mereka sekarang.', 'Saya mengawasi benar bawahan-bawahan saya yang kurang mahir dalam pekerjaannya atau bawahan-bawahan saya yang hasil kerjanya kurang memuaskan.', 'A', 'B'),
(48, 48, 'Saya mengijinkan bawahan-bawahan saya untuk ikut serta dalam mengambil keputusan dan saya selalu mematuhi keputusan yang dibuat berdasarkan suara terbanyak.', 'Saya membuat bawahan-bawahan saya bekerja keras, dan saya berusaha meyakinkan mereka bahwa biasanya mereka akan mendapat perlakuan yang adil dari pimpinan perusahaan.', 'A', 'B'),
(49, 49, 'Saya merasa bahwa semua karyawan pada jabatan yang sama seharusnya memperoleh gaji yang sama.', 'Bila ada seorang karyawan yang hasil kerjanya selalu tidak memuaskan saya, saya akan menunggu suatu kesempatan untuk memindahkannya dan bukan untuk memecatnya.', 'A', 'B'),
(50, 50, 'Saya merasa bahwa tujuan-tujuan serikat buruh dan tujuan-tujuan perusahaan saling berbeda.', 'Saya merasa bahwa dengan bekerja keras bagi bawahan saya, mereka akan menyenangi saya.', 'A', 'B'),
(51, 51, 'Saya mengawasi benar bawahan-bawahan saya yang kurang mahir dalam pekerjaannya atau bawahan-bawahan saya yang hasil kerjanya kurang memuaskan.', 'Saya mencela pembicaraan-pembicaraan yang tidak perlu diantara bawahan-bawahan saya, selama mereka bekerja.', 'A', 'B'),
(52, 52, 'Bila saya memberikan tugas kepada bawahan-bawahan saya, saya menentukan batas waktu penyelesaiannya.', 'Saya tidak akan memberikan tugas yang tidak saya senangi kepada orang lain.', 'A', 'B'),
(53, 53, 'Saya percaya bahwa pengalaman bekerja lebih bermanfaat daripada pendidikan teoritis.', 'Saya tidak peduli dengan apa yang dikerjakan oleh para pegawai saya diluar jam kantornya.', 'A', 'B'),
(54, 54, 'Saya merasa bahwa jam pencatat waktu datang dan pulangnya para pegawai akan mengurangi keterlambatan.', 'Saya mengijinkan bawahan-bawahan saya untuk ikut serta dalam pengambilan keputusan dan saya selalu mematuhi keputusan yang dibuat berdasarkan suara terbanyak.', 'A', 'B'),
(55, 55, 'Saya membuat keputusan-keputusan sendiri, tetapi saya dapat mempertimbangkan saran-saran yang wajar dari bawahan-bawahan saya.', 'Saya merasa bahwa tujuan-tujuan serikat buruh dan tujuan-tujuan perusahaan adalah saling berbeda.', 'A', 'B'),
(56, 56, 'Saya membuat keputusan-keputusan sendiri dan kemudian saya mencoba untuk \"menjual\" keputusan-keputusan itu kepada bawahan saya.', 'Apabila mungkin, saya akan membentuk kelompok-kelompok kerja yang terdiri dari orang-orang yang sudah menjadi teman-teman baik saya.', 'A', 'B'),
(57, 57, 'Saya tidak akan ragu-ragu untuk memperkerjakan pegawai-pegawai yang cacat jasmani, bilamana saya merasa pasti bahwa mereka dapat menangani pekerjaannya.', 'Saya tidak akan menegur pelanggar-pelanggar peraturan, bila saya merasa pasti bahwa tidak ada satu orangpun yang mengetahui tentang pelanggaran-pelanggaran tersebut.', 'A', 'B'),
(58, 58, 'Apabila mungkin, saya akan membentuk kelompok-kelompok kerja yang terdiri dari orang-orang yang sudah menjadi teman-teman baik saya.', 'Saya akan memberikan tugas-tugas yang sulit kepada bawahan-bawahan saya yang belum berpengalaman, tetapi bila mereka memperoleh kesukaran, saya akan mengambil alih tanggung jawab mereka.', 'A', 'B'),
(59, 59, 'Saya membuat bawahan-bawahan saya bekerja keras, dan saya berusaha meyakinkan mereka bahwa biasanya mereka akan mendapat perlakuan yang adil dari pimpinan perusahaan.', 'Saya percaya bahwa penerapan disiplin adalah merupakan contoh untuk karyawan-karyawan lainnya.', 'A', 'B'),
(60, 60, 'Saya mencoba untuk membuat bawahan-bawahan saya merasa senang apabila mereka berbicara dengan saya.', 'Saya menyukai penggunaan skala penggajian karyawan.', 'A', 'B'),
(61, 61, 'Saya percaya bahwa kenaikan jabatan adalah semata-mata berdasarkan kemampuan yang ada.', 'Saya merasa bahwa masalah-masalah yang timbul diantara para karyawan biasanya akan dapat diselesaikan diantara mereka sendiri, tanpa campur tangan dari saya.', 'A', 'B'),
(62, 62, 'Saya merasa bahwa serikat-serikat buruh dan pimpinan perusahaan bekerja untuk mencapai tujuan-tujuan yang sama.', 'Di dalam diskusi, saya memberikan fakta-fakta sesuai pemahaman bawahan saya, dan membiarkan mereka untuk membuat kesimpulan sendiri.', 'A', 'B'),
(63, 63, 'Bila seorang karyawan tidak sanggup menyelesaikan tugasnya, saya akan membantu dia untuk menyelesaikan tugas tersebut.', 'Saya merasa bahwa semua karyawan pada jabatan yang sama seharusnya memperoleh gaji yang sama.', 'A', 'B'),
(64, 64, 'Saya mengijinkan bawahan-bawahan saya untuk ikut serta dalam pengambilan keputusan, tetapi sayapun menyediakan sesuatu yang jitu sebagai keputusan terakhir.', 'Saya tidak akan ragu-ragu untuk memperkerjakan pegawai-pegawai yang cacat jasmaninya, bilamana saya merasa bahwa mereka dapat menangani pekerjaannya.', 'A', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal_papi`
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
-- Dumping data for table `tb_soal_papi`
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
-- Table structure for table `tb_soal_tpa`
--

CREATE TABLE `tb_soal_tpa` (
  `id_soal_tpa` int(3) NOT NULL,
  `soal` varchar(1000) NOT NULL,
  `opsi_a` varchar(1000) NOT NULL,
  `opsi_b` varchar(1000) NOT NULL,
  `opsi_c` varchar(1000) NOT NULL,
  `opsi_d` varchar(1000) NOT NULL,
  `opsi_e` varchar(1000) NOT NULL,
  `jawaban` varchar(1000) NOT NULL,
  `seksi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_soal_tpa`
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
(22, 'Skeptis = ...', 'Stabil', 'Ragu', 'Kasar', 'Tegas', 'Marah', 'Ragu', 1),
(35, 'Hampa ><', 'Penuh', 'Berisi', 'Lumrah', 'Kosong', 'Luas', 'Berisi', 2),
(36, 'Haru Biru ><', 'Tenang', 'Kerusuhan', 'Keributan', 'Kekacauan', 'Huru Hara', 'Tenang', 2),
(37, 'Inklusif ><', 'Terhitung', 'Termasuk', 'Kecuali', 'Bagian', 'Anggota', 'Kecuali', 2),
(38, 'Konstan ><', 'Bertentangan', 'Berubah - ubah', 'Stabil', 'Mutlak', 'Berbeda - beda', 'Berubah - ubah', 2),
(39, 'Laba ><', 'Rabat', 'Untung', 'Manfaat', 'Rugi', 'Sial', 'Rugi', 2),
(40, 'Lanun ><', 'Penderma', 'Pengemis', 'Perampok', 'Pengoper', 'Pengutil', 'Penderma', 2),
(41, 'Letih ><', 'Lelah', 'Lemas', 'Sehat', 'Semangat', 'Segar bugar', 'Segar bugar', 2),
(42, 'Muai ><', 'Pendek', 'Besar', 'Panas', 'Susut', 'Kurang', 'Susut', 2),
(43, 'Muskil ><', 'Mungkin', 'Sukar', 'Mudah', 'Pelik', 'Ricuh', 'Mudah', 2),
(44, 'Naas ><', 'Sial', 'Celaka', 'Rugi', 'Baik', 'Mujur', 'Mujur', 2),
(45, 'Niskala ><', 'Maya', 'Nyata', 'Gaib', 'Roh', 'Artifisial', 'Nyata', 2),
(46, 'Nyinyir ><', 'Berisik', 'Pendiam', 'Nyenyeh', 'Bawel', 'Riweh', 'Pendiam', 2),
(47, 'Onar ><', 'Tipu', 'Berisik', 'Ricuh', 'Peduli', 'Jujur', 'Jujur', 2),
(48, 'Ofensif ><', 'Serang', 'Takluk', 'Maju', 'Gentar', 'Bertahan', 'Bertahan', 2),
(49, 'Pangkal ><', 'Ujung', 'Pokok', 'Awal', 'Permulaan', 'Akhir', 'Ujung', 2),
(50, 'Paramarta ><', 'Baik', 'Mulia', 'Angkara', 'Sehat', 'Ramah', 'Angkara', 2),
(51, 'Plural ><', 'Jamak', 'Dua', 'Tunggal', 'Para', 'Majemuk', 'Tunggal', 2),
(52, 'Pokrol ><', 'Terdakwa', 'Pengacara', 'Advokat', 'Hakim', 'Pembela', 'Terdakwa', 2),
(53, 'Pekerjaan : Pengangguran = Orang tua : .....', 'Pengusaha', 'Anak asuh', 'Yatim', 'Duafa', 'Yatim piatu', 'Yatim piatu', 3),
(54, 'Indonesia : Sangkuriang = Yunani : .....', 'Narsisus', 'Agola', 'Helenisme', 'Oedipus', 'Pompeii', 'Oedipus', 3),
(55, 'Kambing : Daun = Rubah : .....', 'Bambu', 'Tumbuhan', 'Kelinci', 'Ayam', 'Telur', 'Kelinci', 3),
(56, 'Permintaan : Pemberian = ..... : .....', 'Hak : Kewajiban', 'Hadiah : Kesukaan', 'Rengek : Sedih', 'Adat : Sopan', 'Tuntutan : Santunan', 'Tuntutan : Santunan', 3),
(57, 'Teratai : Air = ..... : .....', 'Kaktus : Kering', 'Enceng gondok : Air', 'Renik : Laut', 'Anggrek : Stek', 'Alga : Matahari', 'Kaktus : Kering', 3),
(58, 'Cuci : Bersih = ..... : .....', 'Lempar : Tangkap', 'Tunai : Bayar', 'Asah : Tajam', 'Tolak : Jauh', 'Jatuh : Bangun', 'Asah : Tajam', 3),
(59, 'Hasil Penelitian : Kesimpulan = ..... : .....', 'Introduksi : Perkenalan', 'Ekor : Kepala', 'Badan : Rambut', 'Prolog : Epilog', 'Preambul : Mukadimah', 'Prolog : Epilog', 3),
(60, 'Ayam : Gajah = ..... : .....', 'Rakyat : Pemerintah', 'Kurcaci : Raksasa', 'Miskin : Harta', 'Panas : Dingin', 'Pelajar : Mahasiswa', 'Kurcaci : Raksasa', 3),
(61, 'Internet : Byte : ..... : .....', 'Air : Debit', 'Telepon : Kuota', 'Waktu : Detik', 'Jalan : Panjang', 'Listrik : Kwh', 'Listrik : Kwh', 3),
(62, 'Buku : Halaman = ..... : .....', 'Bank : Uang', 'Lahan : Tanah', 'Taman : Tumbuhan', 'Buah : Bunga', 'Pohon : Daun', 'Taman : Tumbuhan', 3),
(63, 'Tidur : Bantal = ..... : .....', 'Meja : Kursi', 'Listrik : Sakelar', 'Rumah : Keluarga', 'Makan : Sumpit', 'Mobil : Ban', 'Makan : Sumpit', 3),
(64, 'Batak : Sumatera = ..... : .....', 'Dayak : Kalimantan', 'Badui : Bali', 'Minang : Papua', 'Sasak : Sulawesi', 'Jakarta : Jawa', 'Dayak : Kalimantan', 3),
(65, 'Kucing : Tikus = ..... : .....', 'Lebah : Madu', 'Ular : Ayam', 'Ayam : Manusia', 'Lalat : Nyamuk', 'Madu : Beruang', 'Ular : Ayam', 3),
(66, 'Adat : Sopan = ..... : .....', 'Adat : Teratur', 'Santun : Rapi', 'Hukum : Teratur', 'Ajeg : Hukum', 'Peraturan : Serasi', 'Hukum : Teratur', 3),
(67, 'Ring : Petinju = ..... : .....', 'Ibu : Dapur', 'Adik : Lapangan', 'Montir : Mesin', 'Sirkuit : Pembalap', 'Bola : Lapangan', 'Sirkuit : Pembalap', 3),
(68, 'Lapar : Kenyang = ..... : .....', 'Bahagia : Senang', 'Duka : Tangis', 'Lalu : Kemudian', 'Marah : Jahat', 'Cemar : Baik', 'Cemar : Baik', 3),
(69, 'Telinga : Suara = ..... : .....', 'Mata : Warna', 'Kaki : Raba', 'Hidung : Membau', 'Cahaya : Mata', 'Jorok : Tangan', 'Mata : Warna', 3),
(70, 'Telepon : ..... = Belanja : .....', 'Pulsa : Uang', 'Jaringan : Kartu', 'Mesin : Diskon', 'Prabayar : Utang', 'Gerai : Pasar', 'Pulsa : Uang', 3),
(71, 'Dokter : ..... = Arkeolog : .....', 'Arogansi : Apresiasi', ' Operasi : Ekskavasi', 'Imunisasi : Laboratorium', 'Biologi : Akuntansi', 'Virologi : Arkeologi', 'Operasi : Ekskavasi', 3),
(72, 'Kuda : ..... = Burung : .....', 'Pacuan : Sarang', 'Jalan : Dahan', 'Istal : Sangkar', 'Hutan : Rumah', 'Kandang : Sarang', 'Istal : Sangkar', 3),
(73, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Lerioathp berarti serbuk bunga, Brentdohp berarti pita hijau, Rokubrent berarti hijau daun. Kata apakah yang berarti \"daun bunga\" ?', 'Rokudohp', 'Athpbrent', 'Leriodohp', 'Lerioroku', 'Dohproku', 'Lerioroku', 4),
(74, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Touankin berarti penyakit berbahaya, Reyankin berarti hewan berbahaya, Touklima berarti penyakit otak. Kata apakah yang mungkin berarti \"penyakit jiwa\" ?', 'Reyklima', 'Klimankin', 'Touklusta', 'Tourey', 'ankinklima', 'Touklusta', 4),
(75, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Goumasan berarti pabrik makanan, Masanhuki berarti makanan sehat, Milshou berarti kotak panas. Kata apakah yang berarti \"sehat bugar\" ?', 'Milhuki', 'Hukipong', 'Hukishou', 'Hukimasan', 'Goushou', 'Hukipong', 4),
(76, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Creptond berarti kopi hitam, Tondblum berarti hitam pekat, Mirhlhek berarti kue manis. Kata apakah yang berarti \"kopi manis\" ?', 'Tondmirh', 'Tondcrep', 'Crepton', 'Creplhek', 'Lhektond', 'Creplhek', 4),
(77, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Asahirl berarti jalur emas, Arspixn berarti bubur balita, Belmors berarti balita sehat. Kata apakah yang berarti \"jalur sehat\" ?', 'Belmhirl', 'Belmpixn', 'Orsbelm', 'Belmkiy', 'Morsbel', 'Belmhirl', 4),
(78, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Wees berarti tabur, Weesy berarti taburi, Weesend berarti taburan. Kata apakah yang berarti \"pukuli\" ?', 'Slashend', 'Endslash', 'Slasy', 'Sywees', 'Weesrd', 'Slasy', 4),
(79, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Lurfaglia berarti krim keju, Agliametl berarti keju lumer, Ceryoltis berarti gula manis. Kata apakah yang berarti \"krim manis\" ?', 'Lurfcery', 'Agliaoltis', 'Cerylurf', 'Agliaman', 'Lurfoltis', 'Lurfoltis', 4),
(80, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Matoagnar berarti buah alpukat, Matodoner berari jus alpukat, Anbiyoken berarti puding strawberry. Kata apakah yang berarti \"jus strawberry\" ?', 'Matoyoken', 'Anbidoner', 'Anbimato', 'Agnaranbi', 'Doneryoken', 'Anbidoner', 4),
(81, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Blufrism berarti lapangan bola, Rismrogh berarti taman lapangan, Bixonnu berarti seragam mainan. Kata apakah yang berarti \"taman gantung\" ?', 'Onnurogh', 'Bylbluf', 'Bixrogh', 'Bylnlrogh', 'Risnonnu', 'Bylnlrogh', 4),
(82, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Yonerig berarti rumah hantu, Yonwvden berarti burung hantu, Egionwvden berarti burung merpati. Kata apakah yang berarti \"rumah mainan\" ?', 'Wvdenbit', 'Egionerig', 'Wvdenerig', 'Erigegion', 'Yulerig', 'Yulerig', 4),
(83, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Etherliuth berarti planet aves, Sieszether berarti aves langka, Sieszopaz berarti tumbuhan langka. Kata apakah yang berarti \"satelit planet\" ?', 'Etheropaz', 'Liuthsiesz', 'Liuthceros', 'Cerosliuth', 'Sieszliuth', 'Liuthceros', 4),
(84, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Ielkohu berarti anak tunggal, Rehlkohu berarti anak bungsu, Drinatulp berarti buku dongeng. Kata apakah yang berarti \"dongeng anak\" ?', 'Kohudrina', 'Drinarehl', 'Drinaiel', 'Kohutulp', 'Drinakohu', 'Kohudrina', 4),
(85, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Loghalti berarti olahraga rutin, Krekenlogh berarti rutin vitamin, Loghaltude berartikerja rutin. Kata apakah yang berarti \"libur kerja\" ?', 'Altialtude', 'Krekenalti', 'Wohyaltude', 'Krekenmas', 'Altudewohy', 'Altudewohy', 4),
(86, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Ilmyatropo berarti cerobong tinggi, Elmyatropo berarti cerobong rendah, Tropokase berarti asap cerobong. Kata apakah yang berarti \"asap tinggi\" ?', 'Elmyakase', 'Ilmyalik', 'Ilmyakase', 'Elmyalik', 'Kasetropo', 'Ilmyakase', 4),
(87, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Remkyuk berarti mie kenyal, Miliacyn berarti bungkus permen, Remmilia berati permen kenyal. Kata apakah yang berarti \"nasi bungkus\" ?', 'Remcyn', 'Miliakyuk', 'Miliamyuk', 'Cynmyuk', 'Cynkyuk', 'Cynmyuk', 4),
(88, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Gingrelm berarti pasir pantai, Reshrelm berarti pasir gurun, Reshforga berarti oase gurun. Kata apakah yang berarti \"oase mata\" ?', 'Gingforga', 'Ritlforga', 'Relmforga', 'Ritlrelm', 'Ritlresh', 'Ritlforga', 4),
(89, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Gonsy berarti makanan, Eshgon berarti termakan, Eshlez berarti terpakai. Kata apakah yang berarti \"minuman\" ?', 'Lezgon', 'Gonlez', 'Lezsy', 'Eshkoon', 'Koonsy', 'Koonsy', 4),
(90, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Akliwir berarti merah api, Mulkblad berarti pisang batu, Bladludg berarti tandan pisang. Kata apakah yang berarti \"batu api\" ?', 'Akliludg', 'Aklimulk', 'Bladakli', 'Wirlars', 'Bladwir', 'Aklimulk', 4),
(91, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Monbehr berarti era digital, Vireykattic berarti komputer baterai, Vireykhil berarti komputer rusak. Kata apakah yang berarti \"era komputer\" ?', 'Attichil', 'Monattic', 'Monhill', 'Vireykdre', 'Monvireyk', 'Monvireyk', 4),
(92, 'Berikut adalah beberapa kata yang diterjemahkan dari bahasa buatan. Reidokna berarti kerja rodi, Menotram berarti tanam paksa, Menosland berarti tanam lada. Kata apakah yang berarti \"lada hitam\" ?', 'Tramland', 'Reidsland', 'Slandokna', 'Slanddoff', 'Reidof', 'Slanddoff', 4),
(93, 'Tidak ada penduduk terkena DBD atau pengasapan harus dilakukan. Pengasapan harus dilakukan di seluruh kompleks.', 'Tidak ada penduduk terkena DBD di seluruh kompleks', 'Pengasapan perlu dilakukan atau seluruh penduduk terkena DBD', 'Pengasapan tidak perlu dilakukan dan penduduk terkena DBD', 'Seluruh penduduk terkena DBD di sebagian kompleks', 'Ada penduduk terkena DBD di seluruh kompleks', 'Ada penduduk terkena DBD di seluruh kompleks', 5),
(94, 'Seluruh pengunjung pameran mendapatkan kopi hijau gratis. Sebagian mahasiswa Teknik Informatika adalah pengunjung pameran.', 'Beberapa mahasiswa Teknik Informatika tidak mendapatkan kopi hijau gratis', 'Ada mahasiswa Teknik Informatika yang tidak mengunjungi pameran', 'Ada mahasiswa Teknik Informatika yang tidak mendapatkan kopi hijau gratis', 'Sebagian mahasiswa Teknik Informatika mendapatkan kopi hijau gratis', 'Tidak seluruh pengunjung pameran mendapatkan kopi hijau gratis', 'Sebagian mahasiswa Teknik Informatika mendapatkan kopi hijau gratis', 5),
(95, 'Tidak ada mamalia yang bertelur. Semua ikan paus adalah mamalia.', 'Tidak ada ikan paus yang bertelur', 'Beberapa ikan paus bertelur', 'Ikan paus bertelur atau mamalia', 'Ikan paus mamalia dan bertelur', 'Tidak ada ikan paus termasuk mamalia', 'Tidak ada ikan paus yang bertelur', 5),
(96, 'Tempat makan bakso dan soto ramai saat hujan deras. Saat ini tidak hujan deras.', 'Tempat makan bakso dan soto ramai', 'Semua tempat makan bakso dan soto ramai', 'Jika tidak hujan deras maka tempat makan bakso dan soto tidak ramai', 'Jika hujan deras maka tempat makan bakso dan soto tidak ramai', 'Tempat makan bakso dan soto tidak ramai', 'Tempat makan bakso dan soto tidak ramai', 5),
(97, 'Jika harga bahan baku semakin tinggi maka keuntungan berkurang. Jika subsidi UKM meningkat maka biaya produksi tercukupi. Harga bahan baku semakin tinggi atau biaya produksi tidak tercukupi.', 'Harga bahan baku semakin tinggi dan biaya produksi tidak tercukupi', 'Jika keuntungan berkurang maka subsidi UKM tidak meningkat', 'Keuntungan berkurang atau subsidi UKM tidak meningkat', 'Jika harga bahan baku semakin tinggi maka biaya produksi tidak tercukupi', 'Subsidi UKM tidak meningkat dan keuntungan berkurang', 'Keuntungan berkurang atau subsidi UKM tidak meningkat', 5),
(98, 'Jika restoran cepat saji sudah tutup maka Roman makan mie instan. Restoran cepat saji sudah tutup.', 'Jika Roman makan mie instan maka restoran cepat saji sudah tutup', 'Jika Roman makan mie instan maka restoran cepat saji belum tutup', 'Roman makan mie instan', 'Roman tidak makan mie instan', 'Roman memesan makanan di restoran cepat saji', 'Roman makan mie instan', 5),
(99, 'Jika semua orang membawa telepon pintar maka dipasang jaringan internet nirkabel. Tidak dipasang jaringan internet nirkabel.', 'Jaringan internet nirkabel tidak dipasang', 'Tidak semua orang membawa telepon pintar', 'Setiap orang tidak membawa telepon pintar', 'Jaringan internet nirkabel tidak dipasang atau tidak ada telepon pintar', 'Jaringan internet nirkabel tidak dipasang dan tidak ada telepon pintar', 'Tidak semua orang membawa telepon pintar', 5),
(100, 'Jika hari cerah maka kapal pesiar akan berlayar. Jika kapal pesiar berlayar maka turis berdatangan.', 'Jika turis tidak berdatangan maka hari tidak cerah', 'Jika turis berdatangan maka hari cerah', 'Jika hari cerah maka turis berdatangan', 'Hari cerah dan turis berdatangan', 'Hari cerah atau turis berdatangan', 'Jika hari cerah maka turis berdatangan', 5),
(101, 'Semua mamalia menyusui anaknya. Semua kucing mamalia.', 'Ada kucing menyusui anaknya', 'Semua kucing menyusui anaknya', 'Tidak ada kucing yang menyusui anaknya', 'Sebagian kucing menyusui anaknya', 'Semua yang menyusui anaknya adalah mamalia', 'Semua kucing menyusui anaknya', 5),
(102, 'Ariana di terima kuliah di UI atau IKJ. Ternyata tidak kuliah di UI.', 'Ariana ternyata tidak kuliah di IKJ', 'Kuliah di UI', 'Kuliah di IKJ', 'Jika Ariana diterima kuliah di UI maka IKJ tidak dipilih', 'Jika Ariana diterima kuliah di IKJ maka UI tidak dipilih', 'Kuliah di IKJ', 5),
(103, 'Jika demam semakin tinggi maka penglihatan semakin buram. Jika telapak kaki di kompress air dingin maka suhu tubuh menurun. Demam semakin tinggi atau suhu tubuh tidak menurun.', 'Telapak kaki dikompres air dingin atau pengelihatan semakin buram', 'Suhu tubuh menurun atau demam tidak semakin tinggi', 'Jika pengelihatan semakin buram maka telapak kaki tidak dikompres air dingin', 'Pengelihatan semakin buram atau telapak kaki tidak dikompres air dingin', 'Pengelihatan tidak semakin buram atau telapak kaki dikompres air dingin', 'Pengelihatan semakin buram atau telapak kaki tidak dikompres air dingin', 5),
(104, 'Semua anggota paduan suara dipanggil untuk menghadap kepala sekolah. Sebagian siswa kelas X-D adalah anggota paduan suara.', 'Sebagian siswa kelas X-D dipanggil untuk menghadap kepala sekolah', 'Seluruh siswa kelas X-D dipanggil untuk menghadap kepala sekolah', 'Ada anggota paduan suara siswa kelas X-D', 'Siswa kelas X-D dipanggil untuk menghadap kepala sekolah', 'Semua siswa yang menghadap kepala sekolah adalah anggota paduan suara', 'Sebagian siswa kelas X-D dipanggil untuk menghadap kepala sekolah', 5),
(105, 'Seluruh pembeli yang memiliki kartu anggota supermarket berhak mendapat nomor undian. Ibu tidak mendapat nomor undian.', 'Ibu pembeli yang memiliki kartu anggota supermarket', 'Ada Ibu Ibu bukan pembeli yang memiliki kartu anggota supermarket', 'Sebagian Ibu Ibu bukan pembeli memiliki kartu anggota supermarket', 'Ibu bukan pembeli yang memiliki kartu anggota supermarket', 'Sebagian pembeli yang memiliki kartu anggota supermarket berhak mendapat nomor undian', 'Ibu bukan pembeli yang memiliki kartu anggota supermarket', 5),
(106, 'Jika Kakak mengikuti kursus musik maka Kakak akan membeli gitar. Jika kakak membeli gitar maka Kakak membutuhkan buku lagu.', 'Jika Kakak mengikuti kursus musik maka Kakak membutuhkan buku lagu', 'Jika Kakak tidak mengikuti kursus musik maka Kakak tidak membutuhkan buku lagu', 'Kakak mengikuti kursus atau Kakak membeli gitar', 'Kakak membeli gitar dan membutuhkan buku lagu', 'Jika Kakak membutuhkan buku lagu maka Kakak mengikuti kursus musik', 'Jika Kakak mengikuti kursus musik maka Kakak membutuhkan buku lagu', 5),
(107, 'Semua siswa SMP harus mengikuti satu kegiatan ekstrakurikuler. Wahyu tidak mengikuti satupun kegiatan ekstrakurikuler', 'Ada siswa SMP yang tidak mengikuti kegiatan ekstrakurikuler', 'Jika Wahyu tidak mengikuti satupun kegiatan ekstrakurikuler maka Wahyu bukan siswa SMP', 'Wahyu bukan siswa SMP', 'Wahyu adalah siswa SMP', 'Wahyu siswa SMP yang tidak mengikuti kegiatan ekstrakurikuler', 'Wahyu bukan siswa SMP', 5),
(108, 'Semua pengurus Koperasi Makmur Bahagia menyukai kegiatan berkemah. Cantika tidak menyukai kegiatan berkemah.', 'Cantika pengurus Koperasi Makmur Bahagia yang tidak suka berkemah', 'Cantika bukan pengurus Koperasi Makmur Bahagia', 'Cantika menyukai berkemah atau bukan pengurus Koperasi Makmur Bahagia', 'Jika tidak suka berkemah maka bukan pengurus Koperasi Makmur Bahagia', 'Jika Cantika suka berkemah maka Cantika pengurus Koperasi Makmur Bahagia', 'Cantika bukan pengurus Koperasi Makmur Bahagia', 5),
(109, 'Jika pendaki gunung ada yang hilang maka tim SAR akan segera bertindak. JIka tim SAR segera bertindak maka helikopter penyelamat akan menyisir area.', 'Jika pendaki gunung ada yang hilang maka helikopter penyelamat tidak akan menyisir area', 'Jika helikopter penyelamat menyisir area maka pendaki gunung ada yang hilang', 'Jika tim SAR segera bertindak maka pendaki gunung ada yang hilang', 'Tim SAR segera bertindak atau pendaki gunung ada yang hilang', 'Jika pendaki gunung ada yang hilang maka helikopter penyelamat akan menyisir area', 'Jika pendaki gunung ada yang hilang maka helikopter penyelamat akan menyisir area', 5),
(110, 'Jika semua lagu direkam dalam CD maka kaset tidak digunakan. Saat ini semua lagu direkam dalam CD', 'Kaset tidak digunakan', 'Kaset tidak digunakan atau semua lagu direkam dalam CD', 'Kaset tidak digunakan dan semua lagu direkam dalam CD', 'Kaset digunakan atau semua lagu tidak direkam dalam CD', 'Jika kaset digunakan maka semua lagu tidak direkam dalam CD', 'Kaset tidak digunakan', 5),
(111, 'JIka keluarga akan piknik maka ibu membuat roti lapis. Ibu tidak membuat roti lapis.', 'Keluarga piknik', 'Keluarga tidak piknik atau ibu membuat roti lapis', 'Keluarga tidak piknik', 'Keluarga piknik dan ibu membuat roti lapis', 'Keluarga tidak piknik atau ibu tidak membuat roti lapis', 'Keluarga tidak piknik', 5),
(112, 'Setiap peserta konsorsium adalah pengusaha properti. Setiap pengusaha properti adalah hartawan. Nyonya Dewi adalah peserta konsorsium.', 'Nyonya Dewi bukan seorang hartawan', 'Nyonya Dewi bukan peserta konsorsium', 'Nyonya Dewi peserta kosorsium atau hartawan', 'Nyonya Dewi adalah wartawan ', 'Nyonya dewi pengusaha properti atau hartawan', 'Nyonya Dewi adalah wartawan ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian`
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

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian_essay`
--

CREATE TABLE `tb_ujian_essay` (
  `id_ujian_essay` int(5) NOT NULL,
  `nama_ujian` varchar(100) CHARACTER SET latin1 NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ujian_essay`
--

INSERT INTO `tb_ujian_essay` (`id_ujian_essay`, `nama_ujian`, `waktu_mulai`, `waktu_akhir`, `status`) VALUES
(1, 'Essay Kompetensi', '2021-06-11 09:49:43', '2021-06-11 19:19:00', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian_hitung`
--

CREATE TABLE `tb_ujian_hitung` (
  `id_ujian_hitung` int(5) NOT NULL,
  `nama_ujian` varchar(100) CHARACTER SET latin1 NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ujian_hitung`
--

INSERT INTO `tb_ujian_hitung` (`id_ujian_hitung`, `nama_ujian`, `waktu_mulai`, `waktu_akhir`) VALUES
(1, 'Tes Hitung Akuntansi', '2021-07-05 01:15:00', '2021-07-06 23:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian_holland`
--

CREATE TABLE `tb_ujian_holland` (
  `id_ujian_holland` int(11) NOT NULL,
  `nama_ujian` varchar(100) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ujian_holland`
--

INSERT INTO `tb_ujian_holland` (`id_ujian_holland`, `nama_ujian`, `waktu_mulai`, `waktu_akhir`, `status`) VALUES
(1, 'Test Minat Kerja', '2021-06-15 14:00:00', '2021-06-15 23:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian_ist`
--

CREATE TABLE `tb_ujian_ist` (
  `id_ujian` int(11) NOT NULL,
  `nama_ujian` varchar(100) CHARACTER SET latin1 NOT NULL,
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
  `start_lat_sub5` datetime NOT NULL,
  `end_lat_sub5` datetime NOT NULL,
  `start_uji_sub5` datetime NOT NULL,
  `end_uji_sub5` datetime NOT NULL,
  `start_lat_sub6` datetime NOT NULL,
  `end_lat_sub6` datetime NOT NULL,
  `start_uji_sub6` datetime NOT NULL,
  `end_uji_sub6` datetime NOT NULL,
  `start_lat_sub7` datetime NOT NULL,
  `end_lat_sub7` datetime NOT NULL,
  `start_uji_sub7` datetime NOT NULL,
  `end_uji_sub7` datetime NOT NULL,
  `start_lat_sub8` datetime NOT NULL,
  `end_lat_sub8` datetime NOT NULL,
  `start_uji_sub8` datetime NOT NULL,
  `end_uji_sub8` datetime NOT NULL,
  `start_lat_sub9` datetime NOT NULL,
  `end_lat_sub9` datetime NOT NULL,
  `start_uji_sub9` datetime NOT NULL,
  `end_uji_sub9` datetime NOT NULL,
  `durasi` int(100) NOT NULL,
  `nama_pembuat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ujian_ist`
--

INSERT INTO `tb_ujian_ist` (`id_ujian`, `nama_ujian`, `waktu_dimulai`, `waktu_berakhir`, `start_lat_sub1`, `end_lat_sub1`, `start_uji_sub1`, `end_uji_sub1`, `start_lat_sub2`, `end_lat_sub2`, `start_uji_sub2`, `end_uji_sub2`, `start_lat_sub3`, `end_lat_sub3`, `start_uji_sub3`, `end_uji_sub3`, `start_lat_sub4`, `end_lat_sub4`, `start_uji_sub4`, `end_uji_sub4`, `start_lat_sub5`, `end_lat_sub5`, `start_uji_sub5`, `end_uji_sub5`, `start_lat_sub6`, `end_lat_sub6`, `start_uji_sub6`, `end_uji_sub6`, `start_lat_sub7`, `end_lat_sub7`, `start_uji_sub7`, `end_uji_sub7`, `start_lat_sub8`, `end_lat_sub8`, `start_uji_sub8`, `end_uji_sub8`, `start_lat_sub9`, `end_lat_sub9`, `start_uji_sub9`, `end_uji_sub9`, `durasi`, `nama_pembuat`, `status`) VALUES
(91, 'Tes Intelegensi 2 ( IST )', '2021-07-05 00:49:00', '2021-07-06 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-05 00:49:00', '2021-07-06 00:49:00', 1950, 'Administrator', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian_ist2`
--

CREATE TABLE `tb_ujian_ist2` (
  `id_ujian` int(11) NOT NULL,
  `nama_ujian` varchar(100) CHARACTER SET latin1 NOT NULL,
  `waktu_dimulai` datetime NOT NULL,
  `waktu_berakhir` datetime NOT NULL,
  `start_lat_sub5` datetime NOT NULL,
  `end_lat_sub5` datetime NOT NULL,
  `start_uji_sub5` datetime NOT NULL,
  `end_uji_sub5` datetime NOT NULL,
  `start_lat_sub6` datetime NOT NULL,
  `end_lat_sub6` datetime NOT NULL,
  `start_uji_sub6` datetime NOT NULL,
  `end_uji_sub6` datetime NOT NULL,
  `durasi` int(100) NOT NULL,
  `nama_pembuat` varchar(50) CHARACTER SET latin1 NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian_kasus`
--

CREATE TABLE `tb_ujian_kasus` (
  `id_ujian_studi` int(5) NOT NULL,
  `nama_ujian` varchar(100) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ujian_kasus`
--

INSERT INTO `tb_ujian_kasus` (`id_ujian_studi`, `nama_ujian`, `waktu_mulai`, `waktu_akhir`) VALUES
(1, 'Studi Kasus Manajerial', '2021-06-13 08:18:56', '2021-06-13 23:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian_leadership`
--

CREATE TABLE `tb_ujian_leadership` (
  `id_ujian_leadership` int(11) NOT NULL,
  `nama_ujian` varchar(100) CHARACTER SET latin1 NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ujian_leadership`
--

INSERT INTO `tb_ujian_leadership` (`id_ujian_leadership`, `nama_ujian`, `waktu_mulai`, `waktu_akhir`, `status`) VALUES
(1, 'Leadership Inventory', '2021-06-15 14:46:57', '2021-06-15 23:46:57', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian_msdt`
--

CREATE TABLE `tb_ujian_msdt` (
  `id_ujian_msdt` int(5) NOT NULL,
  `nama_ujian` varchar(100) CHARACTER SET latin1 NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ujian_msdt`
--

INSERT INTO `tb_ujian_msdt` (`id_ujian_msdt`, `nama_ujian`, `waktu_mulai`, `waktu_akhir`, `status`) VALUES
(1, 'Msdt', '2021-07-15 00:23:26', '2021-07-15 23:23:26', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian_papi`
--

CREATE TABLE `tb_ujian_papi` (
  `id_ujian_papi` int(5) NOT NULL,
  `nama_ujian` varchar(100) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ujian_papi`
--

INSERT INTO `tb_ujian_papi` (`id_ujian_papi`, `nama_ujian`, `waktu_mulai`, `waktu_akhir`, `status`) VALUES
(1, 'Tes Sikap Kerja', '2021-06-11 16:35:00', '2021-06-11 23:25:30', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian_tpa`
--

CREATE TABLE `tb_ujian_tpa` (
  `id_ujian_tpa` int(11) NOT NULL,
  `nama_ujian` varchar(100) CHARACTER SET latin1 NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_akhir` datetime NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_apply`
--
ALTER TABLE `tb_apply`
  ADD PRIMARY KEY (`id_apply`);

--
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tb_data_diri`
--
ALTER TABLE `tb_data_diri`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_data_jawaban_cfit`
--
ALTER TABLE `tb_data_jawaban_cfit`
  ADD PRIMARY KEY (`id_jawaban_cfit`);

--
-- Indexes for table `tb_data_jawaban_holland`
--
ALTER TABLE `tb_data_jawaban_holland`
  ADD PRIMARY KEY (`id_jawaban_holland`);

--
-- Indexes for table `tb_data_jawaban_ist`
--
ALTER TABLE `tb_data_jawaban_ist`
  ADD PRIMARY KEY (`id_jawaban_ist`);

--
-- Indexes for table `tb_data_jawaban_leadership`
--
ALTER TABLE `tb_data_jawaban_leadership`
  ADD PRIMARY KEY (`id_jawaban_leadership`);

--
-- Indexes for table `tb_data_jawaban_msdt`
--
ALTER TABLE `tb_data_jawaban_msdt`
  ADD PRIMARY KEY (`id_jawaban_msdt`);

--
-- Indexes for table `tb_data_jawaban_papi`
--
ALTER TABLE `tb_data_jawaban_papi`
  ADD PRIMARY KEY (`id_jawaban_papi`);

--
-- Indexes for table `tb_data_keluarga`
--
ALTER TABLE `tb_data_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `tb_data_pendidikan`
--
ALTER TABLE `tb_data_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tb_data_pendidikan_nonformal`
--
ALTER TABLE `tb_data_pendidikan_nonformal`
  ADD PRIMARY KEY (`id_pendidikan_nonformal`);

--
-- Indexes for table `tb_data_pengalaman_kerja`
--
ALTER TABLE `tb_data_pengalaman_kerja`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_jawaban_essay`
--
ALTER TABLE `tb_jawaban_essay`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tb_jawaban_studi`
--
ALTER TABLE `tb_jawaban_studi`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tb_jenis_motlet`
--
ALTER TABLE `tb_jenis_motlet`
  ADD PRIMARY KEY (`id_jenis_motlet`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  ADD PRIMARY KEY (`id_lowongan`);

--
-- Indexes for table `tb_motivation_letter`
--
ALTER TABLE `tb_motivation_letter`
  ADD PRIMARY KEY (`id_motivasi`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tb_nilai_cfit`
--
ALTER TABLE `tb_nilai_cfit`
  ADD PRIMARY KEY (`id_nilai_cfit`);

--
-- Indexes for table `tb_nilai_ist`
--
ALTER TABLE `tb_nilai_ist`
  ADD PRIMARY KEY (`id_nilai_ist`);

--
-- Indexes for table `tb_nilai_pwb`
--
ALTER TABLE `tb_nilai_pwb`
  ADD PRIMARY KEY (`id_nilai_pwb`);

--
-- Indexes for table `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  ADD PRIMARY KEY (`id_pelamar`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_psikolog`
--
ALTER TABLE `tb_psikolog`
  ADD PRIMARY KEY (`id_psikolog`);

--
-- Indexes for table `tb_soal_cfit`
--
ALTER TABLE `tb_soal_cfit`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tb_soal_ist`
--
ALTER TABLE `tb_soal_ist`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tb_soal_ist2`
--
ALTER TABLE `tb_soal_ist2`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tb_soal_leadership`
--
ALTER TABLE `tb_soal_leadership`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tb_soal_motlet`
--
ALTER TABLE `tb_soal_motlet`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tb_soal_msdt`
--
ALTER TABLE `tb_soal_msdt`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tb_soal_papi`
--
ALTER TABLE `tb_soal_papi`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tb_soal_tpa`
--
ALTER TABLE `tb_soal_tpa`
  ADD PRIMARY KEY (`id_soal_tpa`);

--
-- Indexes for table `tb_ujian`
--
ALTER TABLE `tb_ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- Indexes for table `tb_ujian_essay`
--
ALTER TABLE `tb_ujian_essay`
  ADD PRIMARY KEY (`id_ujian_essay`);

--
-- Indexes for table `tb_ujian_hitung`
--
ALTER TABLE `tb_ujian_hitung`
  ADD PRIMARY KEY (`id_ujian_hitung`);

--
-- Indexes for table `tb_ujian_holland`
--
ALTER TABLE `tb_ujian_holland`
  ADD PRIMARY KEY (`id_ujian_holland`);

--
-- Indexes for table `tb_ujian_ist`
--
ALTER TABLE `tb_ujian_ist`
  ADD PRIMARY KEY (`id_ujian`);

--
-- Indexes for table `tb_ujian_ist2`
--
ALTER TABLE `tb_ujian_ist2`
  ADD PRIMARY KEY (`id_ujian`);

--
-- Indexes for table `tb_ujian_kasus`
--
ALTER TABLE `tb_ujian_kasus`
  ADD PRIMARY KEY (`id_ujian_studi`);

--
-- Indexes for table `tb_ujian_leadership`
--
ALTER TABLE `tb_ujian_leadership`
  ADD PRIMARY KEY (`id_ujian_leadership`);

--
-- Indexes for table `tb_ujian_msdt`
--
ALTER TABLE `tb_ujian_msdt`
  ADD PRIMARY KEY (`id_ujian_msdt`);

--
-- Indexes for table `tb_ujian_papi`
--
ALTER TABLE `tb_ujian_papi`
  ADD PRIMARY KEY (`id_ujian_papi`);

--
-- Indexes for table `tb_ujian_tpa`
--
ALTER TABLE `tb_ujian_tpa`
  ADD PRIMARY KEY (`id_ujian_tpa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_apply`
--
ALTER TABLE `tb_apply`
  MODIFY `id_apply` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `id_berkas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_data_jawaban_cfit`
--
ALTER TABLE `tb_data_jawaban_cfit`
  MODIFY `id_jawaban_cfit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `tb_data_jawaban_holland`
--
ALTER TABLE `tb_data_jawaban_holland`
  MODIFY `id_jawaban_holland` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_data_jawaban_ist`
--
ALTER TABLE `tb_data_jawaban_ist`
  MODIFY `id_jawaban_ist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446;

--
-- AUTO_INCREMENT for table `tb_data_jawaban_leadership`
--
ALTER TABLE `tb_data_jawaban_leadership`
  MODIFY `id_jawaban_leadership` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_data_jawaban_msdt`
--
ALTER TABLE `tb_data_jawaban_msdt`
  MODIFY `id_jawaban_msdt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tb_data_jawaban_papi`
--
ALTER TABLE `tb_data_jawaban_papi`
  MODIFY `id_jawaban_papi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tb_data_keluarga`
--
ALTER TABLE `tb_data_keluarga`
  MODIFY `id_keluarga` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_data_pendidikan`
--
ALTER TABLE `tb_data_pendidikan`
  MODIFY `id_pendidikan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_data_pendidikan_nonformal`
--
ALTER TABLE `tb_data_pendidikan_nonformal`
  MODIFY `id_pendidikan_nonformal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_data_pengalaman_kerja`
--
ALTER TABLE `tb_data_pengalaman_kerja`
  MODIFY `id_pengalaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jawaban_essay`
--
ALTER TABLE `tb_jawaban_essay`
  MODIFY `id_jawaban` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tb_jawaban_studi`
--
ALTER TABLE `tb_jawaban_studi`
  MODIFY `id_jawaban` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_jenis_motlet`
--
ALTER TABLE `tb_jenis_motlet`
  MODIFY `id_jenis_motlet` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_lowongan`
--
ALTER TABLE `tb_lowongan`
  MODIFY `id_lowongan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_motivation_letter`
--
ALTER TABLE `tb_motivation_letter`
  MODIFY `id_motivasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_nilai_cfit`
--
ALTER TABLE `tb_nilai_cfit`
  MODIFY `id_nilai_cfit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_nilai_ist`
--
ALTER TABLE `tb_nilai_ist`
  MODIFY `id_nilai_ist` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_nilai_pwb`
--
ALTER TABLE `tb_nilai_pwb`
  MODIFY `id_nilai_pwb` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pelamar`
--
ALTER TABLE `tb_pelamar`
  MODIFY `id_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_psikolog`
--
ALTER TABLE `tb_psikolog`
  MODIFY `id_psikolog` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_soal_cfit`
--
ALTER TABLE `tb_soal_cfit`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tb_soal_ist`
--
ALTER TABLE `tb_soal_ist`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `tb_soal_ist2`
--
ALTER TABLE `tb_soal_ist2`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_soal_leadership`
--
ALTER TABLE `tb_soal_leadership`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_soal_motlet`
--
ALTER TABLE `tb_soal_motlet`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_soal_msdt`
--
ALTER TABLE `tb_soal_msdt`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tb_soal_papi`
--
ALTER TABLE `tb_soal_papi`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tb_soal_tpa`
--
ALTER TABLE `tb_soal_tpa`
  MODIFY `id_soal_tpa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `tb_ujian`
--
ALTER TABLE `tb_ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_ujian_essay`
--
ALTER TABLE `tb_ujian_essay`
  MODIFY `id_ujian_essay` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ujian_hitung`
--
ALTER TABLE `tb_ujian_hitung`
  MODIFY `id_ujian_hitung` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ujian_holland`
--
ALTER TABLE `tb_ujian_holland`
  MODIFY `id_ujian_holland` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_ujian_ist`
--
ALTER TABLE `tb_ujian_ist`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tb_ujian_ist2`
--
ALTER TABLE `tb_ujian_ist2`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_ujian_kasus`
--
ALTER TABLE `tb_ujian_kasus`
  MODIFY `id_ujian_studi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_ujian_leadership`
--
ALTER TABLE `tb_ujian_leadership`
  MODIFY `id_ujian_leadership` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ujian_msdt`
--
ALTER TABLE `tb_ujian_msdt`
  MODIFY `id_ujian_msdt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ujian_papi`
--
ALTER TABLE `tb_ujian_papi`
  MODIFY `id_ujian_papi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_ujian_tpa`
--
ALTER TABLE `tb_ujian_tpa`
  MODIFY `id_ujian_tpa` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
