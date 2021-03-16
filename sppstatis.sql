-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2021 at 12:35 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sppstatis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `no_induk` int(5) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(255) NOT NULL,
  `alamat_siswa` varchar(255) NOT NULL,
  `no_hp_siswa` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  PRIMARY KEY (`no_induk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=206 ;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`no_induk`, `nama_siswa`, `alamat_siswa`, `no_hp_siswa`, `kelas`) VALUES
(205, 'kikirif', 'perum green hill 7', '0872636000', '12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
