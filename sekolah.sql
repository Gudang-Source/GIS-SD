-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 05:53 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sd`
--

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat` mediumtext NOT NULL,
  `x` varchar(50) NOT NULL,
  `y` varchar(50) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `foto` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `x`, `y`, `jenis`, `foto`) VALUES
(5, 'SD/MI Miftahuddin', '', '101.438361', '0.546931', 'Swasta', '26.jpg'),
(6, 'SD Negeri 63 Pekanbaru', 'Meranti Pandak, Rumbai Pesisir', '101.446105', '0.541677', 'Negeri', '27.jpg'),
(7, 'SDN 2 Pekanbaru', 'Jl. Kesehatan No.37, Kp. Bandar, Senapelan', '101.438932', '0.536507', 'Negeri', '28.jpg'),
(8, 'SDN 3 Pekanbaru', 'Jl. Kesehatan No.35, Kp. Bandar, Senapelan', '101.438655', '0.536579', 'Negeri', '29.jpg'),
(9, 'SDN 50 Pekanbaru', 'Jl. Kapur No.9, Kp. Baru, Senapelan', '101.430737', '0.539404', 'Negeri', '30.jpg'),
(10, 'SDN 20 Pekanbaru', 'Jl. Kulim, Kp. Baru, Senapelan', '101.428769', '0.538815', 'Negeri', '31.jpg'),
(11, 'SDN 18 Pekanbaru', 'Jl. Kulim No.73, Kp. Baru, Senapelan', '101.428262', '0.538955', 'Negeri', '32.jpg'),
(12, 'SDN 144 Pekanbaru', 'Jl. Giam, Kp. Baru, Senapelan', '101.428589', '0.540433', 'Negeri', '33.jpg'),
(13, 'SDN 40 Pekanbaru', 'Jl.Kenari Bo.5 Meranti Pandak, Rumbai Pesisir', '101.43819', '0.542378', 'Negeri', '34.jpg'),
(14, 'Education 21 Pekanbaru', 'Jl. Kulim No.8, Tampan, Payung Sekaki', '101.424648', '0.542971', 'Swasta', '35.jpg'),
(15, 'SD Bina Mitra Wahana', 'Jl. Kulim No.88, Tampan, Payung Sekaki', '101.424764', '0.543434', 'Swasta', '36.jpg'),
(16, 'SDN 41', 'Jl. Durian No.85, Labuh Baru Tim., Payung Sekaki', '101.422133', '0.517091', 'Negeri', '37.jpg'),
(17, 'SDN 152', 'Jl. Ababil No.6, Kp. Melayu, Sukajadi', '101.43478', '0.514947', 'Negeri', '38.jpg'),
(18, 'SD Muhammadiyah 2', 'Jl. KH. Ahmad Dahlan No.45, Kp. Tengah, Sukajadi', '101.437055', '0.514138', 'Swasta', '39.jpg'),
(19, 'SD Yayasan Beerseba', 'Jl. KH. Ahmad Dahlan No.80, Kp. Tengah, Sukajadi', '101.437756', '0.515465', 'Swasta', '40.jpg'),
(20, 'SDN 68', 'Jl. Balam Ujung, Kp. Melayu, Sukajadi', '101.435503', '0.50919', 'Negeri', '41.jpg'),
(21, 'Royal Prime Primary School (Montesori)', 'Jl. Rajawali No.38-40, Kp. Melayu, Sukajadi', '101.433673', '0.511566', 'Swasta', '42.jpg'),
(22, 'SDN 176', 'Komp.Perumahan Pemda, Jalan Cemara Kipas IV, Delima, Tampan', '101.413747', '0.473886', 'Negeri', '43.jpg'),
(23, 'Brilliant Islamic School', 'Jl. Melati No.16, Simpang Baru, Tampan', '101.373717', '0.49338', 'Swasta', '44.jpg'),
(24, 'SD Negeri 147 Pekanbaru', 'Jalan Anggrek / Garuda Sakti No.2, Simpang Baru', '101.362155', '0.476003', 'Negeri', '45.jpg'),
(25, 'SD Negeri 188 Pekanbaru', 'Jalan Anggrek No.14/ Garuda Sakti, Simpang Baru, Tampan', '101.36201', '0.475666', 'Negeri', '46.jpg'),
(26, 'SD Neger 192 Pekanbaru', 'Jl. Teladan, Simpang Baru, Tampan', '101.369758', '0.474382', 'Negeri', '47.jpg'),
(27, 'SD Negeri 37 Pekanbaru', 'Jl. Garuda Sakti No.25, Simpang Baru, Tampan', '101.366201', '0.46893', 'Negeri', '48-49.jpg'),
(28, 'SD 136 Pekanbaru', 'Jl. Garuda Sakti No.25 A, Simpang Baru, Tampan', '101.366333', '0.468504', 'Negeri', '48-49.jpg'),
(29, 'SD Negeri 105 Pekanbaru', 'Jl. HR. Soebrantas Panam Sidomulyo Barat, Tampan', '101.397852', '0.463767', 'Negeri', '50.jpg'),
(30, 'SD Babussalam', 'Jl. HR. Soebrantas Panam No.62, Sidomulyo Bar., Tampan', '101.407525', '0.463519', 'Swasta', '51.jpg'),
(31, 'TK-SD Sekolah Alam Rumbai', '', '101.428048', '0.56753', 'Swasta', '1s.jpg'),
(32, 'Sekolah Dasar Negeri 59 Pekanbaru', '', '101.421937', '0.563713', 'Negeri', '2.jpg'),
(33, 'Sekolah Dasar Negeri 86 Pekanbaru', '', '101.434437', '0.56542', 'Negeri', '3.jpg'),
(34, 'Sekolah Dasar Daniel HKBP Rumbai', '', '101.437388', '0.570969', 'Swasta', '4.jpg'),
(35, 'SDIT AL ITTIHAD Pekanbaru', '', '101.436844', '0.574498', 'Swasta', '5.jpg'),
(36, 'Sekolah Dasar Negeri 149 Pekanbaru', '', '101.436292', '0.57331', 'Negeri', '6.jpg'),
(37, 'SD Negeri 8 Pekanbaru', '', '101.445694', '0.569715', 'Negeri', '7.jpg'),
(38, 'SD Negeri 85 Pekanbaru', '', '101.451562', '0.568134', 'Negeri', '8.jpg'),
(39, 'SD Negeri 119 Pekanbaru', '', '101.458396', '0.570949', 'Negeri', '9.jpg'),
(40, 'SD IT Al Birru', '', '101.456704', '0.572406', 'Swasta', '10.jpg'),
(41, 'SD Smart Indonesia', '', '101.448978', '0.566202', 'Swasta', '11.jpg'),
(42, 'SD Negeri 106 Pekanbaru', '', '101.44171', '0.563303', 'Negeri', '12.jpg'),
(43, 'SD Negeri 55 Pekanbaru', '', '101.445004', '0.560446', 'Negeri', '13.jpg'),
(44, 'MI Swasta Muhammadiyah 02', '', '101.439239', '0.561508', 'Swasta', '14.jpg'),
(45, 'SD Negeri 25 Pekanbaru', '', '101.435006', '0.559702', 'Negeri', '15.jpg'),
(46, 'SD IT Ibnu Abbas', '', '101.404359', '0.478962', 'Swasta', '16.jpg'),
(47, 'SD Negeri 187 Pekanbaru', '', '101.366519', '0.492195', 'Negeri', '17.jpg'),
(48, 'SD Azzuhra', '', '101.361081', '0.490859', 'Swasta', '18.jpg'),
(49, 'SD Smart Indonesia', '', '101.363232', '0.498703', 'Swasta', '19.jpg'),
(50, 'SD Islam As-Shofa', '', '101.398236', '0.50059', 'Swasta', '20.jpg'),
(51, 'SD Islam Al-Ulum', '', '101.398804', '0.497618', 'Swasta', '21.jpg'),
(52, 'SD Heaven Kids', '', '101.381442', '0.500761', 'Swasta', '22.jpg'),
(53, 'Madrasah Ibtidaiyah Muhammadiyah 01 Rumbai', '', '101.419401', '0.582644', 'Swasta', '23.jpg'),
(54, 'SDN 16 Pekanbaru', '', '101.53017', '0.588284', 'Negeri', '24.jpg'),
(55, 'SDN 150 Pekanbaru', '', '101.423628', '0.581513', 'Negeri', '25.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
