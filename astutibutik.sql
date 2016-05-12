-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2015 at 11:16 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `astutibutik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `ID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(250) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `IMAGE` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID`, `USERNAME`, `PASSWORD`, `NAMA`, `IMAGE`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Andi Rohandi', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE IF NOT EXISTS `tbl_barang` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `KODE_BRG` varchar(20) NOT NULL,
  `NAMA_BRG` varchar(100) NOT NULL,
  `HARGA_BELI` int(11) NOT NULL,
  `HARGA_JUAL` int(11) NOT NULL,
  `DISCOUNT` int(11) NOT NULL,
  `DESKRIPSI_BRG` text NOT NULL,
  `TANGGAL_INPUT` date NOT NULL,
  `KATEGORI` int(11) NOT NULL,
  `IMAGE` varchar(50) NOT NULL,
  `URL` varchar(120) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`ID`, `KODE_BRG`, `NAMA_BRG`, `HARGA_BELI`, `HARGA_JUAL`, `DISCOUNT`, `DESKRIPSI_BRG`, `TANGGAL_INPUT`, `KATEGORI`, `IMAGE`, `URL`, `STATUS`) VALUES
(1, 'AB-0001', 'Baju Muslimah Syahrini', 100000, 150000, 10, 'Baju ini sangat bagus dikenakan saat liburan ke madinah', '2015-10-06', 16, 'logo.png', 'baju-muslimah-syahrini', 0),
(2, 'AB-0002', 'Koko Negri Jiran', 75000, 100000, 0, 'Koko negri jiran adalah koko yang berasal negri jiran yang didesain khusus menandakan negri jiran', '2015-10-28', 13, 'logo.png', 'koko-negri-jiran', 1),
(3, 'AB-0003', 'Kerudung Pashmina Syahrini', 35000, 55000, 5, 'Kerudung pashmina adalah kerudung yang di populerkan oleh syahrini', '2015-10-21', 14, 'logo.png', 'kerudung-pashmina-syahrini', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `ID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `NAMA_KTGR` varchar(50) NOT NULL,
  `KETERANGAN` text NOT NULL,
  `URL` varchar(50) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`ID`, `NAMA_KTGR`, `KETERANGAN`, `URL`, `STATUS`) VALUES
(11, 'GAMIS', 'gamis butik', 'gamis', 1),
(12, 'KOKO', 'koko', 'koko', 1),
(13, 'INNER', 'asdfasdf', 'inner', 1),
(14, 'KERUDUNG', 'adf dafa sdf', 'kerudung', 1),
(15, 'CELANA', 'asdf dfasd', 'celana', 1),
(16, 'DRESS', 'fasdfdsdf', 'dress', 1),
(17, 'MUKENA', 'adsf dfdasf', 'mukena', 1),
(18, 'TUNIK', '', 'tunik', 1),
(20, 'CELANA PANJANG', 'fkl;jas dfas;dfjaskdf', 'celana-panjang', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(250) NOT NULL,
  `TITLE` varchar(10) NOT NULL,
  `NAMA_DEPAN` varchar(50) NOT NULL,
  `NAMA_BELAKANG` varchar(50) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `PERUSAHAAN` varchar(100) NOT NULL,
  `ALAMAT_1` text NOT NULL,
  `ALAMAT_2` text NOT NULL,
  `NEGARA` varchar(30) NOT NULL,
  `PROVINSI` varchar(30) NOT NULL,
  `KOTA` varchar(30) NOT NULL,
  `KODE_POS` varchar(15) NOT NULL,
  `INF_TAMBAHAN` text NOT NULL,
  `NO_TELP` varchar(15) NOT NULL,
  `NO_HP` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `USERNAME`, `PASSWORD`, `TITLE`, `NAMA_DEPAN`, `NAMA_BELAKANG`, `TGL_LAHIR`, `PERUSAHAAN`, `ALAMAT_1`, `ALAMAT_2`, `NEGARA`, `PROVINSI`, `KOTA`, `KODE_POS`, `INF_TAMBAHAN`, `NO_TELP`, `NO_HP`) VALUES
(1, 'andirohandi.android@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Mr.', 'Andi', 'Rohandi', '2015-09-01', 'Rajawali Hiyoto PT', 'Cibeureum', 'Cimahi Selamatan, Kota Cimahi', 'INDONESIA', 'JAWA BARAT', 'CIMAHI', '403593', 'Perusahaan di Jl. Industri 2 No.8', '089690428088', '089690428088');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
