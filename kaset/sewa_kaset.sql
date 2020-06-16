-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 05:58 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa_kaset`
--

-- --------------------------------------------------------

--
-- Table structure for table `sewa_kaset`
--

CREATE TABLE `sewa_kaset` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `durasi` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa_kaset`
--

INSERT INTO `sewa_kaset` (`id`, `nama`, `judul`, `hp`, `tanggal_sewa`, `durasi`) VALUES
(49, 'Bejjo', 'Imperfect', '00000000', '2020-01-04', 10),
(50, 'Eqq', 'Medot Janji', '111111', '2020-01-04', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sewa_kaset`
--
ALTER TABLE `sewa_kaset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sewa_kaset`
--
ALTER TABLE `sewa_kaset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
