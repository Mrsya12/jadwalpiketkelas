-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 10:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal_piketkelas`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`) VALUES
('marsya', '150906'),
('muzakki', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran_piket`
--

CREATE TABLE `kehadiran_piket` (
  `nisn` int(50) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `hari_piket` varchar(50) NOT NULL,
  `status_kehadiran` varchar(100) NOT NULL,
  `alasan_tidak_piket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kehadiran_piket`
--

INSERT INTO `kehadiran_piket` (`nisn`, `nama_siswa`, `kelas`, `jenis_kelamin`, `hari_piket`, `status_kehadiran`, `alasan_tidak_piket`) VALUES
(506168, 'jaji', 'xi pplg a', 'perempuan', 'rabu', 'hadir', '-'),
(543759, 'fitri setia lestari', 'xi pplg a', 'perempuan', 'jum\'at', 'hadir', '-'),
(610498, 'm.alfauzi fahrul zabar', 'xi pplg a', 'laki laki', 'rabu', 'hadir', '-'),
(636889, 'cakra nurhidayah', 'xi pplg a', 'laki laki', 'jumat', 'hadir', '-'),
(653357, 'dela elyana putri', 'xi pplg a', 'perempuan', 'kamis', 'tidak hadir', 'ada acara keluarga'),
(654572, 'fajriah farzana', 'xi pplg a', 'perempuan', 'jum\'at', 'hadir', '-'),
(654926, 'tazaka rafi saputra', 'xi pplg a', 'laki laki', 'senin', 'tidak hadir', 'pulang duluan'),
(656720, 'muhammad rifky arifin', 'xi pplg a', 'laki laki', 'selasa', 'hadir', '-'),
(659884, 'fera laela ramdania', 'xi pplg a', 'perempuan', 'rabu', 'hadir', '-'),
(661345, 'm.nazarul hafidin', 'xi pplg a', 'laki laki', 'kamis', 'tidak hadir', 'rapat osis'),
(664774, 'maudya alifah', 'xi pplg a', 'perempuan', 'selasa', 'hadir', '-'),
(670419, 'nabila syalsabila', 'xi pplg a', 'perempuan', 'senin', 'hadir', '-'),
(674633, 'tedi gunawan', 'xi pplg a', 'laki laki', 'kamis', 'hadir', '-'),
(686072, 'siti amanah fauziah', 'xi pplg a', 'perempuan', 'kamis', 'hadir', '-'),
(694078, 'syalwa suci n', 'xi pplg a', 'perempuan', 'kamis', 'tidak hadir', 'ada rapat padus'),
(698209, 'mega rahayu', 'xi pplg a', 'perempuan', 'tidak hadir', 'ada urusan keluarga', ''),
(698605, 'marsya nabillianti', 'xi pplg a', 'perempuan', 'kamis', 'hadir', '-'),
(719077, 'dicky aprizal', 'xi pplg a', 'laki laki', 'selasa', 'hadir', '-'),
(720196, 'nurcholik wijaya saputra', 'xi pplg a', 'laki laki', 'rabu', 'hadir', '-'),
(722179, 'citra apriani kurnia sari', 'xi pplg a', 'perempuan', 'senin', 'hadir', '-'),
(731857, 'siti nuriah', 'xi pplg a', 'perempuan', 'rabu', 'hadir', '-'),
(733879, 'yusrina fathin zakirah', 'xi pplg a', 'perempuan', 'senin', 'hadir', '-'),
(735209, 'kei satria malik al-aziz', 'xi pplg a', 'laki laki', 'jum\'at', 'hadir', '-'),
(740935, 'fikri dzaki ali', 'xi pplg a', 'laki laki', 'selasa', 'tidak hadir', 'pulang duluan'),
(741303, 'rizal zakaria', 'xi pplg a', 'laki laki', 'jum\'at', 'hadir', '-'),
(744509, 'muhammad maulana saputa', 'xi pplg a', 'laki laki', 'senin', 'tidak hadir', 'ada acara keluarga'),
(745112, 'raihan rifki nugraha siregar', 'xi pplg a', 'laki laki', 'senin', 'hadir', '-'),
(745939, 'rina dwi ariny', 'xi pplg a', 'perempuan', 'kamis', 'hadir', '-'),
(760826, 'aprizal three putra permadi', 'xi pplg a', 'laki laki', 'selasa', 'hadir', '-'),
(771191, 'deva nurmauluddiah', 'xi pplg a', 'perempuan', 'rabu', 'hadir', '-'),
(772407, 'arya putra permana', 'xi pplg a', 'perempuan', 'jum\'at', 'tidak hadir', 'ada urusan keluarga'),
(773252, 'muhammad ridwan nurdiansyah', 'xi pplg a', 'laki laki', 'jum\'at', 'hadir', '-'),
(937820, 'eja', 'xi tei', 'laki laki', 'kamis', 'hadir', '-'),
(937828, 'eja', 'xi tei', 'laki laki', 'kamis', 'hadir', '-');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `hari_piket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `kelas`, `jenis_kelamin`, `hari_piket`) VALUES
(307907, 'adinda putri', 'xi pplg a', 'perempuan', 'rabu'),
(506169, 'rd. neng fenna graselli', 'xi pplg a', 'perempuan', 'rabu'),
(543795, 'fitri setia lestara', 'xi pplg a', 'perempuan', 'kamis'),
(636889, 'cakra nurhidayah', 'xi pplg a', 'laki laki', 'kamis'),
(653357, 'dela elyana putri', 'xi pplg a', 'perempuan', 'kamis'),
(654572, 'fajriah farzana', 'xi pplg a', 'perempuan', 'jum\'at'),
(654926, 'tazaka rafi saputra', 'xi pplg a', 'laki laki', 'senin'),
(655200, 'yusup nuryaman', 'xi pplg a', 'laki laki', 'jum\'at'),
(656720, 'muhammad rifky arifin', 'xi pplg a', 'laki laki', 'selasa'),
(659884, 'fera laela ramdania', 'xi pplg a', 'perempuan', 'rabu'),
(661345, 'm.nazarul hafidin', 'xi pplg a', 'laki laki', 'kamis'),
(664774, 'maudya alifah', 'xi pplg a', 'perempuan', 'selasa'),
(670419, 'nabila syalsabilla', 'xi pplg a', 'perempuan', 'senin'),
(674633, 'tedi gunawan', 'xi pplg a', 'laki laki', 'kamis'),
(686072, 'siti amanah fauziah', 'xi pplg a', 'perempuan', 'kamis'),
(694078, 'syalwa suci n', 'xi pplg a', 'perempuan', 'kamis'),
(698209, 'mega rahayu', 'xi pplg a', 'perempuan', 'selasa'),
(698605, 'marsya nabillianti', 'xi pplg a', 'perempuan', 'kamis'),
(719077, 'dicky aprizal', 'xi pplg a', 'laki laki', 'selasa'),
(720196, 'nurcholik wijaya saputra', 'xi pplg a', 'laki laki', 'rabu'),
(722179, 'citra apriani kurnia sari', 'xi pplg a', 'laki laki', 'senin'),
(723629, 'aliya basna', 'xi pplg a', 'perempuan', 'senin'),
(731857, 'siti nuriah', 'xi pplg a', 'perempuan', 'rabu'),
(733879, 'yusrina fathin zakirah', 'xi pplg a', 'perempuan', 'senin'),
(735209, 'kei satria malik al-aziz', 'xi pplg a', 'laki laki', 'jumat'),
(740936, 'fikri dzaki ali', 'xi pplg a', 'laki laki', 'selasa'),
(741303, 'rizal zakaria', 'xi pplg a', 'laki laki', 'jum\'at'),
(744509, 'muhammad maulana saputra', 'xi pplg a', 'laki laki', 'senin'),
(745112, 'raihan rifki nugraha siregar', 'xi pplg a', 'laki laki', 'senin'),
(745939, 'rina dwi ariny', 'xi pplg a', 'perempuan', 'rabu'),
(760826, 'aprizal three putra permadi', 'xi pplg a', 'laki laki', 'selasa'),
(771191, 'deva nurmauliddiah', 'xi pplg a', 'perempuan', 'rabu'),
(772407, 'arya putra permana', 'xi pplg a', 'laki laki', 'senin'),
(773252, 'muhammd ridwan nurdiansyah', 'xi pplg a', 'laki laki', 'jum\'at'),
(784602, 'fa\'iq al faruq', 'xi pplg a', 'laki laki', 'jum\'at');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vkehadiran`
-- (See below for the actual view)
--
CREATE TABLE `vkehadiran` (
`nisn` int(50)
,`nama` varchar(50)
,`hari_piket` varchar(50)
,`status_kehadiran` varchar(100)
,`alasan_tidak_piket` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vtabeltidakhadir`
-- (See below for the actual view)
--
CREATE TABLE `vtabeltidakhadir` (
`nisn` int(50)
,`nama` varchar(50)
,`hari_piket` varchar(50)
,`status_kehadiran` varchar(100)
,`alasan_tidak_piket` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `vkehadiran`
--
DROP TABLE IF EXISTS `vkehadiran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vkehadiran`  AS SELECT `siswa`.`nisn` AS `nisn`, `siswa`.`nama` AS `nama`, `kehadiran_piket`.`hari_piket` AS `hari_piket`, `kehadiran_piket`.`status_kehadiran` AS `status_kehadiran`, `kehadiran_piket`.`alasan_tidak_piket` AS `alasan_tidak_piket` FROM (`siswa` left join `kehadiran_piket` on(`siswa`.`nisn` = `kehadiran_piket`.`nisn`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vtabeltidakhadir`
--
DROP TABLE IF EXISTS `vtabeltidakhadir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vtabeltidakhadir`  AS SELECT `vkehadiran`.`nisn` AS `nisn`, `vkehadiran`.`nama` AS `nama`, `vkehadiran`.`hari_piket` AS `hari_piket`, `vkehadiran`.`status_kehadiran` AS `status_kehadiran`, `vkehadiran`.`alasan_tidak_piket` AS `alasan_tidak_piket` FROM `vkehadiran` WHERE `vkehadiran`.`status_kehadiran` like '%tidak%' ORDER BY `vkehadiran`.`nisn` DESC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kehadiran_piket`
--
ALTER TABLE `kehadiran_piket`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
