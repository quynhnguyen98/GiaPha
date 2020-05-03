-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 03, 2020 at 11:06 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgiapha`
--

-- --------------------------------------------------------

--
-- Table structure for table `dongho`
--

DROP TABLE IF EXISTS `dongho`;
CREATE TABLE IF NOT EXISTS `dongho` (
  `dongho_id` int(50) NOT NULL AUTO_INCREMENT,
  `ho&ten` varchar(250) NOT NULL,
  `ngaythang` date NOT NULL,
  `tieusu` varchar(500) NOT NULL,
  `hinhanh` varchar(250) NOT NULL,
  `nguoithan_id` int(50) NOT NULL,
  PRIMARY KEY (`dongho_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dongho`
--

INSERT INTO `dongho` (`dongho_id`, `ho&ten`, `ngaythang`, `tieusu`, `hinhanh`, `nguoithan_id`) VALUES
(1, 'abc', '0000-00-00', 'hhsfhhfehfeahfe', '', 0),
(2, 'gryy', '0000-00-00', 'hghggugu', '', 0),
(3, 'bcd', '0000-00-00', 'gàafadadghgwd', '', 2),
(4, 'cde', '0000-00-00', 'adawdawdawd', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

DROP TABLE IF EXISTS `hinhanh`;
CREATE TABLE IF NOT EXISTS `hinhanh` (
  `hinhanh_id` int(50) NOT NULL AUTO_INCREMENT,
  `hinhanh` varchar(250) NOT NULL,
  `tieude` varchar(250) NOT NULL,
  `ngay` date NOT NULL,
  PRIMARY KEY (`hinhanh_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hinhanh`
--

INSERT INTO `hinhanh` (`hinhanh_id`, `hinhanh`, `tieude`, `ngay`) VALUES
(1, 'quynh.jpg', 'djahwdha', '2020-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE IF NOT EXISTS `tintuc` (
  `tintuc_id` int(11) NOT NULL AUTO_INCREMENT,
  `noidung` text NOT NULL,
  `tacgia` varchar(250) NOT NULL,
  `ngaythang` date NOT NULL,
  `hinhanh` varchar(250) NOT NULL,
  PRIMARY KEY (`tintuc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`tintuc_id`, `noidung`, `tacgia`, `ngaythang`, `hinhanh`) VALUES
(1, 'fgvudgvajhsdvasa\r\nfsd\r\nfa\r\nsdv\r\nads\r\nvas\r\ndf\r\ndfbfbfsbs', 'Quynh', '2020-05-03', '1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
