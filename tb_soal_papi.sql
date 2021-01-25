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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_soal_papi`
--
ALTER TABLE `tb_soal_papi`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_soal_papi`
--
ALTER TABLE `tb_soal_papi`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
