-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 03:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `173040071`
--

-- --------------------------------------------------------

--
-- Table structure for table `wayang`
--

CREATE TABLE `wayang` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `sejarah` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wayang`
--

INSERT INTO `wayang` (`id`, `nama`, `sejarah`) VALUES
(1, 'Hanoman', 'Hanoman atau yang bernama lengkap Anoman Perbanca Suta merupakan sosok kera berbulu putih putra dari Batara Bayu dan Anjani. Hanoman dikisahkan memiliki umur yang sangat panjang karena bertugas menyimpan sukma Rahwana di dalam cupunya. Hanoman dikenal memiliki kekuatan yang sakti mandra guna dengan berbagai ajian yang dimilikinya ia bisa dengan mudah kebal dari serangan musuh bahkan di kisahkan bisa mengangkat gunung.'),
(2, 'Arjuna', 'Arjuna merupakan salah satu tokoh pewayangan paling populer, dikisahkan memiliki wajah rupawan dengan badan yang gagah dan kuat. Ia merupakan putra ke tiga dari Pandu dan Dewi Kunti. Arjuna memiliki senjata pamungkas yang membuatnya semakin kuat diantaranya keris pancaroba, ali-ali ampal dan panah pasopati. Arjuna juga dikisahkan memiliki putra bernama Abimanyu. '),
(5, 'Gatot Kaca', 'Gatotkaca merupakan putra dari Arya Bima yang berasal dari keluarga pandawa dan Arimbi. Gatotkaca dikisahkan memiliki kekuatan yang sangat luar biasa ia diceritakan mampu terbang dan memiliki kekuatan yang mampu diibaratkan seperti otot kawat tulang besi dengan segala ajian saktinya seperti brajamusti, krincing wesi, bajingiring, garuda ngapak dan sebagainya.'),
(10, 'ini data baru, di edfit lagi ', 'ini sejarahnya, sudah diperbaharui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wayang`
--
ALTER TABLE `wayang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wayang`
--
ALTER TABLE `wayang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
