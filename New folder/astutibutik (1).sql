-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2016 pada 17.05
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `ID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(250) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `IMAGE` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID`, `USERNAME`, `PASSWORD`, `NAMA`, `IMAGE`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Andi Rohandi', '10.jpg'),
(2, 'andi', '8ff1402126ee4f1d357a553a88cc1618', 'andi', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE IF NOT EXISTS `tbl_anggota` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(32) NOT NULL,
  `TITLE` varchar(10) NOT NULL,
  `NAMA_DEPAN` varchar(50) NOT NULL,
  `NAMA_BELAKANG` varchar(50) NOT NULL,
  `TGL_LAHIR` date NOT NULL,
  `PERUSAHAAN` varchar(100) NOT NULL,
  `ALAMAT_1` text NOT NULL,
  `ALAMAT_2` text NOT NULL,
  `NEGARA` varchar(30) NOT NULL DEFAULT 'INDONESIA',
  `PROVINSI` varchar(30) NOT NULL,
  `KOTA` varchar(30) NOT NULL,
  `KODE_POS` varchar(15) NOT NULL,
  `INF_TAMBAHAN` text NOT NULL,
  `NO_TELP` varchar(15) NOT NULL,
  `NO_HP` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`ID`, `USERNAME`, `PASSWORD`, `TITLE`, `NAMA_DEPAN`, `NAMA_BELAKANG`, `TGL_LAHIR`, `PERUSAHAAN`, `ALAMAT_1`, `ALAMAT_2`, `NEGARA`, `PROVINSI`, `KOTA`, `KODE_POS`, `INF_TAMBAHAN`, `NO_TELP`, `NO_HP`) VALUES
(1, 'andirohandi.android@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'Ibu', 'Andi2', 'Rohandi2', '1992-01-13', 'Rajawali Hiyoto PT2', 'Cibeureum2', 'Cimahi Selamatan, Kota Cimahi2', 'INDONESIA', '32', '3204', '4035932', 'Perusahaan di Jl. Industri 2 No.82', '0896904280882', '0896904280882'),
(2, 'andirohandi2.android@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'Ibu', 'Andi2', 'Rohandi2', '1992-01-13', 'Rajawali Hiyoto PT2', 'Cibeureum2', 'Cimahi Selamatan, Kota Cimahi2', '', '32', '3204', '4035932', 'Perusahaan di Jl. Industri 2 No.82', '0896904280882', '0896904280882'),
(3, 'tianoink@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'Bpk', 'Tian', 'Soft', '2014-02-04', 'RH', 'jl industri 2 no 8', 'Leuwigajah cimahi', 'INDONESIA', '32', '3204', '40535', 'bla bla bla', '089690428088', '0222564');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
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
  `THUMBNAIL` varchar(255) NOT NULL,
  `URL` varchar(120) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`ID`, `KODE_BRG`, `NAMA_BRG`, `HARGA_BELI`, `HARGA_JUAL`, `DISCOUNT`, `DESKRIPSI_BRG`, `TANGGAL_INPUT`, `KATEGORI`, `IMAGE`, `THUMBNAIL`, `URL`, `STATUS`) VALUES
(1, 'AB-001', 'Kay Nay Bergo Remple Polka Cream', 100000, 115000, 10, '<p>Bergo cantik dari Kay Nay untuk mendukung penampilan anda dalam berhijab. Desain dan warna yang stylish ini akan mempercantik penampilan anda ketika mengenakan hijab. Bahannya akan membuat Anda merasa nyaman ketika mengenakannya.</p>\r\n<div class="\\&quot;\\\\&quot;std\\\\&quot;\\&quot;">\r\n<ul>\r\n<li>Bahan : Chiffon berkualitas</li>\r\n<li>Warna : Cream</li>\r\n<li>Motif polkadot yang manis</li>\r\n<li>Detail rempel yang unik</li>\r\n<li>Nyaman ketika dipakai</li>\r\n</ul>\r\n</div>', '2015-11-07', 14, 'uploads/images/aa.jpg', 'uploads/thumbnails/aa_thumb.jpg', 'kay-nay-bergo-remple-polka-cream', 1),
(2, 'AB-002', 'Lv syar’i tosca jersey', 110000, 120500, 10, '<p>Lv syar&rsquo;i tosca material jersey nyaman dan elegan di pakai,all size fit to L,seri 120.500,reselelr 130.500</p>\r\n<p>Buat order bisa melalui sms, bbm dan whatsapp dengan mengetik :</p>', '2015-11-07', 16, 'uploads/images/aa1.jpg', 'uploads/thumbnails/aa1_thumb.jpg', 'lv-syari-tosca-jersey', 1),
(3, 'AB-003', 'Marshanda maxi jersey', 110000, 120500, 0, '<p>Marshanda syar&rsquo;i set material jersey nyaman dan elegan di pakai, tersedia dalam berbagai macam warna,all size fit to L .seri 120500,,reseller 130500</p>', '2015-11-07', 16, 'uploads/images/aa2.jpg', 'uploads/thumbnails/aa2_thumb.jpg', 'marshanda-maxi-jersey', 1),
(4, 'AB-004', 'Wafa dress jersey', 60000, 72500, 5, '<p>Wafa dress material jersey nyaman dan elegan di pakai,all size fit to L,seri 72.500,reseller 79.500</p>', '2015-11-07', 16, 'uploads/images/aa3.jpg', 'uploads/thumbnails/aa3_thumb.jpg', 'wafa-dress-jersey', 1),
(5, 'AB-005', 'iliana set dusty jersey', 107000, 120000, 0, '<p>iliana set dusty material jersey nyaman dan elegan di pakai, all size fit to L.seri 120.500,reseller 130.500</p>', '2015-11-07', 16, 'uploads/images/aa4.jpg', 'uploads/thumbnails/aa4_thumb.jpg', 'iliana-set-dusty-jersey', 1),
(6, 'AB-006', 'iliana set hijau jersey', 107000, 120000, 0, '<p>iliana set hijau material jersey nyaman dan elegan di pakai,al size fit to L.seri 120.500,reseller 130.500</p>', '2015-11-07', 16, 'uploads/images/aa5.jpg', 'uploads/thumbnails/aa5_thumb.jpg', 'iliana-set-hijau-jersey', 1),
(7, 'AB-007', 'iliana set tosca jersey', 107000, 120000, 5, '<p>iliana set tosca material jersey nyaman dan elegan di pakai,all size fit to L.seri 120.500,reseller 130.500</p>', '2015-11-07', 16, 'uploads/images/aa6.jpg', 'uploads/thumbnails/aa6_thumb.jpg', 'iliana-set-tosca-jersey', 1),
(8, 'AB-008', 'Pashmina line polkadot katun', 25000, 35500, 0, '<p>Pashmina line polkadot material katun&nbsp;nyaman dan elegan di pakai, tersedia dalam berbagai macam warna.reseller 40.500,seri 35.500,kodi 30.500</p>', '2015-11-07', 14, 'uploads/images/aa7.jpg', 'uploads/thumbnails/aa7_thumb.jpg', 'pashmina-line-polkadot-katun', 1),
(9, 'AB-009', 'Instan najwa jersey', 25000, 32500, 20, '<p>Instan najwa material jersey nyaman dan elegan di pakai, tersedia dalam berbagai macam warna.seri 32.500,reselle 37.500,kodi 27.500</p>', '2015-11-07', 14, 'uploads/images/aa8.jpg', 'uploads/thumbnails/aa8_thumb.jpg', 'instan-najwa-jersey', 1),
(10, 'AB-010', 'Almaya bergo jersey', 21000, 32500, 0, '<p>Almaya bergo material jersey nyaman dan elegan di pakai, tersedia dalam berbagai macam warna.reseller 37.500,seri 32.500,kodi 27.500</p>', '2015-11-07', 14, 'uploads/images/aa9.jpg', 'uploads/thumbnails/aa9_thumb.jpg', 'almaya-bergo-jersey', 1),
(11, 'AB-011', 'Gamiz Zareena', 180000, 209000, 0, '<p>Gamis model terbaru dari <a href="http://elzattaonline.com/">hijab elzatta</a> katalog K3 tahun 2015, untuk periode terbit bulan September hingga Desember 2015. Gamis polos bukaan depan dengan variasi kancing dan remple pada bagian dada, cocok bagi sista yang sedang menyusui. Dibuat dari bahan Spandex jersey, sangat nyaman digunakan, cocok digunakan sehari-hari.</p>\r\n<p><strong>Warna yang tersedia</strong> : Biru, HIjau dan biru tosca</p>\r\n<p>&nbsp;</p>\r\n<p>Untuk ukuran tersedia S, M, L, XL :</p>\r\n<table border="0" width="457">\r\n<tbody>\r\n<tr>\r\n<td><strong>Size S</strong></td>\r\n<td>:</td>\r\n<td>Panjang Gamis: 123 cm<br /> Panjang Lingkar Dada: 86 cm<br /> Panjang Lengan: 51 cm<br /> Panjang Lingkar Lengan Atas: 42 cm<br /> Panjang Lingkar Lengan Bawah: 17 cm</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Size M</strong></td>\r\n<td>:</td>\r\n<td>Panjang Gamis: 125 cm<br /> Panjang Lingkar Dada: 88 cm<br /> Panjang Lengan: 51 cm<br /> Panjang Lingkar Lengan Atas: 42 cm<br /> Panjang Lingkar Lengan Bawah: 18 cm</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Size L</strong></td>\r\n<td>:</td>\r\n<td>Panjang Gamis: 125 cm<br /> Panjang Lingkar Dada: 94 cm<br /> Panjang Lengan: 52 cm<br /> Panjang Lingkar Lengan Atas: 42 cm<br /> Panjang Lingkar Lengan Bawah: 20 cm</td>\r\n</tr>\r\n<tr>\r\n<td><strong>Size XL</strong></td>\r\n<td>:</td>\r\n<td>Panjang Gamis: 132 cm<br /> Panjang Lingkar Dada: 100 cm<br /> Panjang Lengan: 54 cm<br /> Panjang Lingkar Lengan Atas: 46 cm<br /> Panjang Lingkar Lengan Bawah: 20 cm</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>', '2015-11-07', 11, 'uploads/images/aa10.jpg', 'uploads/thumbnails/aa10_thumb.jpg', 'gamiz-zareena', 1),
(12, 'AB-012', 'Gasna Nacyra', 250000, 439000, 13, '<p>Gamis terbaru katalog 2 2015. gamis polos/inner merupakan <a href="http://elzattaonline.com/gamis-elzatta-gamia-azra">gamis gamia azra</a> yang di padukan dengan outer berbahan brukat dan bergo variasi brukat pada pet nya.&nbsp;Bahan spandek &nbsp;jersey yang sangat nyaman dipakai .</p>\r\n<p>Ukuran Gamis :</p>\r\n<p>Size S :</p>\r\n<p>Panjang Gamis: 120 cm<br /> Panjang Lingkar Dada: 74 cm<br /> Panjang Lengan: 51 cm<br /> Panjang Lingkar Lengan Atas: 32 cm</p>\r\n<p>Panjang Lingkar Lengan Bawah: 16 cm</p>\r\n<p>Size M :</p>\r\n<p>Panjang Gamis: 126 cm<br /> Panjang Lingkar Dada: 80 cm<br /> Panjang Lengan: 52 cm<br /> Panjang Lingkar Lengan Atas: 34 cm<br /> Panjang Lingkar Lengan Bawah: 18 cm</p>\r\n<p>Size L :</p>\r\n<p>Panjang Gamis: 126 cm<br /> Panjang Lingkar Dada: 82 cm<br /> Panjang Lengan: 54 cm<br /> Panjang Lingkar Lengan Atas: 34 cm<br /> Panjang Lingkar Lengan Bawah: 20 cm</p>\r\n<p>Size XL :<br /> Panjang Gamis: 132 cm<br /> Panjang Lingkar Dada: 86 cm<br /> Panjang Lengan: 57 cm<br /> Panjang Lingkar Lengan Atas: 36 cm<br /> Panjang Lingkar Lengan Bawah: 20 cm</p>\r\n<p>warna tersedia : coklat susu (size XL) abu abu (size S)</p>\r\n<blockquote>\r\n<p>Silahkan Menghubungi kami untuk mengecek ketersedian warna melalui WA/SMS 08787 1523 724 atau Pin BB 2BDF1A28.</p>\r\n</blockquote>', '2015-11-07', 11, 'uploads/images/aa11.jpg', 'uploads/thumbnails/aa11_thumb.jpg', 'gasna-nacyra', 1),
(13, 'AB-013', 'Gamis Elzatta Gamia Azra', 120000, 155000, 0, '<p style="box-sizing: border-box; margin: 0px 0px 12px; padding: 0px; line-height: 22px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">Gamis elzatta sederhana ini berpotongan dibagian pinggang dan bagian bawahnya bersiluet &lsquo;A&rsquo; line dipadu dengan cardigan berbahan &lsquo;lace&rsquo; yang sedang digemari, cocok untuk acara pesta, tampilan keseluruhan disempurnakan oleh gaya kerudung turban dari selendang Hedi.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 12px; padding: 0px; line-height: 22px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">*<a style="box-sizing: border-box; margin: 0px; padding: 0px; color: #f229a8; text-decoration: none; transition: color 0.25s linear; background-color: transparent;" href="http://elzattaonline.com/category/scarf">Scarf</a><span class="Apple-converted-space">&nbsp;</span>dan<span class="Apple-converted-space">&nbsp;</span><a style="box-sizing: border-box; margin: 0px; padding: 0px; color: #f229a8; text-decoration: none; transition: color 0.25s linear; background-color: transparent;" href="http://elzattaonline.com/category/aksessoris">Aksessoris</a><span class="Apple-converted-space">&nbsp;</span>dijual terpisah</p>', '2015-11-07', 11, 'uploads/images/aa12.jpg', 'uploads/thumbnails/aa12_thumb.jpg', 'gamis-elzatta-gamia-azra', 1),
(14, 'AB-014', 'Gamis Elzatta Gamia Haliza', 102000, 119000, 0, '<p style="box-sizing: border-box; margin: 0px 0px 12px; padding: 0px; line-height: 22px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">Bisa dikenakan sebagai inner maupun sebagai luaran, tetap nyaman , bersiluet longgar dengan potongan di pinggang, tidak perlu takut kelihatan menggemukkan karena bahan jersey jatuh lembut.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 12px; padding: 0px; line-height: 22px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">Silahkan Menghubungi kami untuk mengecek ketersedian warna dan ukuran melalui WA/SMS 085692436778 atau BBM (By Request).</p>', '2015-11-07', 11, 'uploads/images/aa13.jpg', 'uploads/thumbnails/aa13_thumb.jpg', 'gamis-elzatta-gamia-haliza', 1),
(15, 'AB-015', 'Tunik Tunisha Sarra', 102000, 119000, 0, '<p style="box-sizing: border-box; margin: 0px 0px 12px; padding: 0px; line-height: 22px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">merupakan tunik elzatta model terbaru katalog 3 tahun 2014. tunik ini memiliki motif&nbsp; mini polkadot dan bunga dengan dasar putih pada bagian atas dan motif mini polkadot dengan&nbsp; backgroud warna cerah pada bagian dada ke bawah. motifnya sama dangan<span class="Apple-converted-space">&nbsp;</span><a style="box-sizing: border-box; margin: 0px; padding: 0px; color: #f229a8; text-decoration: none; transition: color 0.25s linear; background-color: transparent;" href="http://elzattaonline.com/gamis-elzatta-gasna-nalita">gamis Gasna Nalita</a>.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 12px; padding: 0px; line-height: 22px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; orphans: auto; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px;">Tersedia dalam 6 warna pilihan, hitam (on model) ungu, orange, pink, merah maroon dan biru dongker. Silahkan Menghubungi kami untuk mengecek ketersedian warna dan ukuran melalui WA/SMS 085692436778 atau BBM (By Request).</p>', '2015-11-07', 18, 'uploads/images/aa14.jpg', 'uploads/thumbnails/aa14_thumb.jpg', 'tunik-tunisha-sarra', 1),
(17, 'AB-017', 'Nantha Koko Shirt', 40000, 59400, 12, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Baju koko dengan aplikasi bordir bernuansa timur tengah pada bagian dada dan ujung lengan.</span></p>\r\n<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Ukuran :</span></p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Size S<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Bust: 100&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Waist: 102&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Length : 71&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Size M<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Bust: 108 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Waist: 112 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Length : 72&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Size L<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Bust: 116 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Waist: 118 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Length : 75&nbsp;cm</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Size XL<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Bust: 118&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Waist: 120&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Length : 76&nbsp;cm</p>\r\n<p>&nbsp;</p>', '2015-11-07', 12, 'uploads/images/aa16.jpg', 'uploads/thumbnails/aa16_thumb.jpg', 'nantha-koko-shirt', 1),
(18, 'AB-018', 'Koko Abu Short Sleeves White', 98000, 115000, 10, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Gaya dihari raya dan acara spesial dengan koko berlengan pendek andalan. Padankan dengan celana formal warna hitam yang netral.</span></p>\r\n<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Ukuran :</span></p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">U</span>kuran : S<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 98 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang : 68&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : M<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 103&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 71&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : L<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 108&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 73&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran XL<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 112&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 75 cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran badan model<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Tinggi: 183 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar dada: 90 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar pinggang: 82 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar pinggul: 87 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Size yang dikenakan model M</p>\r\n<p>&nbsp;</p>', '2015-11-07', 12, 'uploads/images/aa17.jpg', 'uploads/thumbnails/aa17_thumb.jpg', 'koko-abu-short-sleeves-white', 1),
(19, 'AB-019', 'Arries Koko Shirt', 40000, 59400, 0, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Baju koko dengan aplikasi bordir bernuansa timur tengah pada bagian dada dan ujung lengan.</span></p>\r\n<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Ukuran :</span></p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Size S<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Bust: 104 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Waist: 106 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Length : 73 cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Size M<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Bust: 110-112 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Waist: 112 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Length : 73 cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Size L<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Bust: 116 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Waist: 118 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Length : 77 cm</p>\r\n<p>&nbsp;</p>', '2015-11-07', 12, 'uploads/images/aa18.jpg', 'uploads/thumbnails/aa18_thumb.jpg', 'arries-koko-shirt', 1),
(20, 'AB-020', 'Koko Hammid Long Sleeves White', 98000, 115000, 0, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Tampil gaya dihari raya dengan padanan koko beraksen bordir. Padankan dengan celana formal warna hitam yang netral.</span></p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : S<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 98 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang : 68&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : M<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 103&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 71&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : L<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 108&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 73&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran XL<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 112&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 75 cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran badan model<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Tinggi: 183 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar dada: 90 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar pinggang: 82 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar pinggul: 87 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Size yang dikenakan model M</p>\r\n<p>&nbsp;</p>', '2015-11-07', 12, 'uploads/images/aa19.jpg', 'uploads/thumbnails/aa19_thumb.jpg', 'koko-hammid-long-sleeves-white', 1),
(21, 'AB-021', 'Men Koko Regular K92P', 120000, 167000, 10, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Baju koko lengan pendek trendi dengan aksen ukuran catchy dan garis leher tinggi.</span></p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : S<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 98 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang : 68&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : M<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 103&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 71&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : L<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 108&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 73&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran XL<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 112&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 75 cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran badan model<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Tinggi: 186 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar dada: 100.3 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar pinggang: 77.4 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar pinggul: 91.4 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Size yang dikenakan model M</p>\r\n<p>&nbsp;</p>', '2015-11-07', 12, 'uploads/images/aa20.jpg', 'uploads/thumbnails/aa20_thumb.jpg', 'men-koko-regular-k92p', 1),
(22, 'AB-022', 'Men Koko Regular K56', 120000, 167000, 16, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Baju koko dengan lengan panjang dan detail embroidery pada bagian depan</span></p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : S<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 98 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang : 68&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : M<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 103&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 71&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : L<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 108&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 73&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran XL<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 112&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 75 cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran badan model<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Tinggi: 186 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar dada: 100.3 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar pinggang: 77.4 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar pinggul: 91.4 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Size yang dikenakan model M</p>\r\n<p>&nbsp;</p>', '2015-11-07', 12, 'uploads/images/aa21.jpg', 'uploads/thumbnails/aa21_thumb.jpg', 'men-koko-regular-k56', 1),
(23, 'AB-023', 'Men Koko Regular K53', 120000, 167000, 0, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Baju koko lengan panjang yang trendi dengan aksen embossed dibagian depan.</span></p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : S<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 98 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang : 68&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : M<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 103&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 71&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran : L<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 108&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 73&nbsp;cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran XL<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar Dada&nbsp;: 112&nbsp;cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang&nbsp;: 75 cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran badan model<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Tinggi: 186 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar dada: 100.3 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar pinggang: 77.4 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Lingkar pinggul: 91.4 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Size yang dikenakan model M</p>\r\n<p>&nbsp;</p>', '2015-11-07', 12, 'uploads/images/aa22.jpg', 'uploads/thumbnails/aa22_thumb.jpg', 'men-koko-regular-k53', 1);
INSERT INTO `tbl_barang` (`ID`, `KODE_BRG`, `NAMA_BRG`, `HARGA_BELI`, `HARGA_JUAL`, `DISCOUNT`, `DESKRIPSI_BRG`, `TANGGAL_INPUT`, `KATEGORI`, `IMAGE`, `THUMBNAIL`, `URL`, `STATUS`) VALUES
(24, 'AB-024', 'Flowery Prayer Set', 256000, 295000, 35, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Set mukena cantik dengan paduan motif bunga-bunga manis dan warna hijau yang segar, dilengkapi pula dengan tas kecil yang memberikan kemudahan pada saat kamu bawa berpergian jauh</span></p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran :<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang Mukena : 118 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Rok : 180 cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran yang Dikenakan Model:</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Size: One Size<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Tinggi Model: 174 cm</p>\r\n<p>&nbsp;</p>', '2015-11-07', 17, 'uploads/images/aa23.jpg', 'uploads/thumbnails/aa23_thumb.jpg', 'flowery-prayer-set', 1),
(25, 'AB-025', 'Alifa Prayer Set', 255000, 295000, 0, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Set mukena cantik dengan paduan motif bunga-bunga manis dan warna hijau yang segar, dilengkapi pula dengan tas kecil yang memberikan kemudahan pada saat kamu bawa berpergian jauh</span></p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran :<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang Mukena : 118 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Rok : 180 cm</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran yang Dikenakan Model:</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Size: One Size<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Tinggi Model: 174 cm</p>\r\n<p>&nbsp;</p>', '2015-11-07', 17, 'uploads/images/aa24.jpg', 'uploads/thumbnails/aa24_thumb.jpg', 'alifa-prayer-set', 1),
(26, 'AB-026', 'Incarnadine Crincle Tosca', 150000, 175000, 5, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Satu set mukena dengan kombiasi warna-warna pastel yang cantik, cocok untuk pelengkap ibadah kamu. terdapat tas cantik yang mempermudah mukena saat dibawa kemana mana.</span></p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran:<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Mukena Reguler<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang Mukena 118 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Rok 108 cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran yang Dikenakan Model:</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Size: One Size<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Tinggi Model: 174 cm</p>\r\n<p>&nbsp;</p>', '2015-11-07', 17, 'uploads/images/aa25.jpg', 'uploads/thumbnails/aa25_thumb.jpg', 'incarnadine-crincle-tosca', 1),
(27, 'AB-027', 'Incarnadine Crincle Pink', 145000, 175000, 5, '<p><span style="color: #222222; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 24px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Satu set mukena dengan kombiasi warna-warna pastel yang cantik, cocok untuk pelengkap ibadah kamu. terdapat tas cantik yang mempermudah mukena saat dibawa kemana mana.</span></span></p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran:<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Mukena Reguler<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang Mukena 118 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Rok 108 cm</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran yang Dikenakan Model:</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Size: One Size<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Tinggi Model: 174 cm</p>', '2015-11-07', 17, 'uploads/images/aa26.jpg', 'uploads/thumbnails/aa26_thumb.jpg', 'incarnadine-crincle-pink', 1),
(28, 'AB-028', 'Mukena Shakila', 310000, 350000, 0, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Satu set mukena cantik untuk pelengkap beribadah. Mukena ini terdiri dari atasan bermotif bunga elegan dan rok bawahan polos. Terdapat satu tas mungil yang memudahkan saat dibawa bepergian.</span></p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran:</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Atasan:<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Depan: 125 cm,&nbsp;Belakang: 135 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Bawahan:<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang: 125 cm,&nbsp;Lebar keliling: 150 cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran yang Dikenakan Model:</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Size: One Size<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Tinggi Model: 175&nbsp;cm</p>\r\n<p>&nbsp;</p>', '2015-11-07', 17, 'uploads/images/aa27.jpg', 'uploads/thumbnails/aa27_thumb.jpg', 'mukena-shakila', 1),
(29, 'AB-029', 'Mukena Faranisa', 315000, 350000, 0, '<p><span style="color: #444444; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; font-variant: normal; font-weight: 300; letter-spacing: normal; line-height: 20px; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;">Satu set mukena cantik untuk pelengkap beribadah. Mukena ini terdiri dari atasan bermotif bunga elegan dan rok bawahan polos. Terdapat satu tas mungil yang memudahkan saat dibawa bepergian.</span></p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran:</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Atasan:<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Depan: 125 cm,&nbsp;Belakang: 135 cm<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Bawahan:<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Panjang: 125 cm,&nbsp;Lebar keliling: 150 cm</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Ukuran yang Dikenakan Model:</p>\r\n<p>&nbsp;</p>\r\n<p style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased; margin: 0px 0px 14px; padding: 0px; border: 0px; font-style: normal; font-variant: normal; font-weight: 300; font-stretch: inherit; font-size: 13px; line-height: 20px; font-family: ''Open Sans'', HelveticaNeue, ''Helvetica Neue'', Helvetica, Arial, sans-serif; vertical-align: baseline; color: #444444; letter-spacing: normal; orphans: auto; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Size: One Size<br style="box-sizing: border-box; -webkit-font-smoothing: subpixel-antialiased;" />Tinggi Model: 175&nbsp;cm</p>\r\n<p>&nbsp;</p>', '2015-11-07', 17, 'uploads/images/aa28.jpg', 'uploads/thumbnails/aa28_thumb.jpg', 'mukena-faranisa', 1),
(30, 'AB-030', 'dfasf asdfasfasdf', 100000, 1500000, 0, '', '2016-02-18', 11, 'uploads/images/10.png', 'uploads/thumbnails/10_thumb.png', 'dfasf-asdfasfasdf', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `ID` tinyint(4) NOT NULL AUTO_INCREMENT,
  `NAMA_KTGR` varchar(50) NOT NULL,
  `KETERANGAN` text NOT NULL,
  `URL` varchar(50) NOT NULL,
  `STATUS` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`ID`, `NAMA_KTGR`, `KETERANGAN`, `URL`, `STATUS`) VALUES
(11, 'GAMIS', 'gamis butik', 'gamis', 1),
(12, 'KOKO', 'koko', 'koko', 1),
(13, 'INNER', 'asdfasdf', 'inner', 1),
(14, 'KERUDUNG', 'adf dafa sdf', 'kerudung', 1),
(15, 'CELANA', 'asdf dfasd', 'celana', 1),
(16, 'DRESS', 'fasdfdsdf', 'dress', 1),
(17, 'MUKENA', 'adsf dfdasf', 'mukena', 1),
(18, 'TUNIK', '', 'tunik', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kota`
--

CREATE TABLE IF NOT EXISTS `tbl_kota` (
  `KD_KOTA` varchar(5) NOT NULL,
  `KD_PROVINSI` varchar(5) NOT NULL,
  `NAMA_KOTA` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`KD_KOTA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kota`
--

INSERT INTO `tbl_kota` (`KD_KOTA`, `KD_PROVINSI`, `NAMA_KOTA`) VALUES
('1101', '11', 'Kab. Simeulue'),
('1102', '11', 'Kab. Aceh Singkil'),
('1103', '11', 'Kab. Aceh Selatan'),
('1104', '11', 'Kab. Aceh Tenggara'),
('1105', '11', 'Kab. Aceh Timur'),
('1106', '11', 'Kab. Aceh Tengah'),
('1107', '11', 'Kab. Aceh Barat'),
('1108', '11', 'Kab. Aceh Besar'),
('1109', '11', 'Kab. Pidie'),
('1110', '11', 'Kab. Bireuen'),
('1111', '11', 'Kab. Aceh Utara'),
('1112', '11', 'Kab. Aceh Barat Daya'),
('1113', '11', 'Kab. Gayo Lues'),
('1114', '11', 'Kab. Aceh Tamiang'),
('1115', '11', 'Kab. Nagan Raya'),
('1116', '11', 'Kab. Aceh Jaya'),
('1117', '11', 'Kab. Bener Meriah'),
('1118', '11', 'Kab. Pidie Jaya'),
('1171', '11', 'Kota Banda Aceh'),
('1172', '11', 'Kota Sabang'),
('1173', '11', 'Kota Langsa'),
('1174', '11', 'Kota Lhokseumawe'),
('1175', '11', 'Kota Subulussalam'),
('1201', '12', 'Kab. Nias'),
('1202', '12', 'Kab. Mandailing Natal'),
('1203', '12', 'Kab. Tapanuli Selatan'),
('1204', '12', 'Kab. Tapanuli Tengah'),
('1205', '12', 'Kab. Tapanuli Utara'),
('1206', '12', 'Kab. Toba Samosir'),
('1207', '12', 'Kab. Labuhan Batu'),
('1208', '12', 'Kab. Asahan'),
('1209', '12', 'Kab. Simalungun'),
('1210', '12', 'Kab. Dairi'),
('1211', '12', 'Kab. Karo'),
('1212', '12', 'Kab. Deli Serdang'),
('1213', '12', 'Kab. Langkat'),
('1214', '12', 'Kab. Nias Selatan'),
('1215', '12', 'Kab. Humbang Hasundutan'),
('1216', '12', 'Kab. Pakpak Bharat'),
('1217', '12', 'Kab. Samosir'),
('1218', '12', 'Kab. Serdang Bedagai'),
('1219', '12', 'Kab. Batu Bara'),
('1220', '12', 'Kab. Padang Lawas Utara'),
('1221', '12', 'Kab. Padang Lawas'),
('1222', '12', 'Kab. Labuhan Batu Selatan'),
('1223', '12', 'Kab. Labuhan Batu Utara'),
('1224', '12', 'Kab. Nias Utara'),
('1225', '12', 'Kab. Nias Barat'),
('1271', '12', 'Kota Sibolga'),
('1272', '12', 'Kota Tanjung Balai'),
('1273', '12', 'Kota Pematang Siantar'),
('1274', '12', 'Kota Tebing Tinggi'),
('1275', '12', 'Kota Medan'),
('1276', '12', 'Kota Binjai'),
('1277', '12', 'Kota Padangsidimpuan'),
('1278', '12', 'Kota Gunungsitoli'),
('1301', '13', 'Kab. Kepulauan Mentawai'),
('1302', '13', 'Kab. Pesisir Selatan'),
('1303', '13', 'Kab. Solok'),
('1304', '13', 'Kab. Sijunjung'),
('1305', '13', 'Kab. Tanah Datar'),
('1306', '13', 'Kab. Padang Pariaman'),
('1307', '13', 'Kab. Agam'),
('1308', '13', 'Kab. Lima Puluh Kota'),
('1309', '13', 'Kab. Pasaman'),
('1310', '13', 'Kab. Solok Selatan'),
('1311', '13', 'Kab. Dharmasraya'),
('1312', '13', 'Kab. Pasaman Barat'),
('1371', '13', 'Kota Padang'),
('1372', '13', 'Kota Solok'),
('1373', '13', 'Kota Sawah Lunto'),
('1374', '13', 'Kota Padang Panjang'),
('1375', '13', 'Kota Bukittinggi'),
('1376', '13', 'Kota Payakumbuh'),
('1377', '13', 'Kota Pariaman'),
('1401', '14', 'Kab. Kuantan Singingi'),
('1402', '14', 'Kab. Indragiri Hulu'),
('1403', '14', 'Kab. Indragiri Hilir'),
('1404', '14', 'Kab. Pelalawan'),
('1405', '14', 'Kab. S I A K'),
('1406', '14', 'Kab. Kampar'),
('1407', '14', 'Kab. Rokan Hulu'),
('1408', '14', 'Kab. Bengkalis'),
('1409', '14', 'Kab. Rokan Hilir'),
('1410', '14', 'Kab. Kepulauan Meranti'),
('1471', '14', 'Kota Pekanbaru'),
('1473', '14', 'Kota D U M A I'),
('1501', '15', 'Kab. Kerinci'),
('1502', '15', 'Kab. Merangin'),
('1503', '15', 'Kab. Sarolangun'),
('1504', '15', 'Kab. Batang Hari'),
('1505', '15', 'Kab. Muaro Jambi'),
('1506', '15', 'Kab. Tanjung Jabung Timur'),
('1507', '15', 'Kab. Tanjung Jabung Barat'),
('1508', '15', 'Kab. Tebo'),
('1509', '15', 'Kab. Bungo'),
('1571', '15', 'Kota Jambi'),
('1572', '15', 'Kota Sungai Penuh'),
('1601', '16', 'Kab. Ogan Komering Ulu'),
('1602', '16', 'Kab. Ogan Komering Ilir'),
('1603', '16', 'Kab. Muara Enim'),
('1604', '16', 'Kab. Lahat'),
('1605', '16', 'Kab. Musi Rawas'),
('1606', '16', 'Kab. Musi Banyuasin'),
('1607', '16', 'Kab. Banyu Asin'),
('1608', '16', 'Kab. Ogan Komering Ulu Selatan'),
('1609', '16', 'Kab. Ogan Komering Ulu Timur'),
('1610', '16', 'Kab. Ogan Ilir'),
('1611', '16', 'Kab. Empat Lawang'),
('1671', '16', 'Kota Palembang'),
('1672', '16', 'Kota Prabumulih'),
('1673', '16', 'Kota Pagar Alam'),
('1674', '16', 'Kota Lubuklinggau'),
('1701', '17', 'Kab. Bengkulu Selatan'),
('1702', '17', 'Kab. Rejang Lebong'),
('1703', '17', 'Kab. Bengkulu Utara'),
('1704', '17', 'Kab. Kaur'),
('1705', '17', 'Kab. Seluma'),
('1706', '17', 'Kab. Mukomuko'),
('1707', '17', 'Kab. Lebong'),
('1708', '17', 'Kab. Kepahiang'),
('1709', '17', 'Kab. Bengkulu Tengah'),
('1771', '17', 'Kota Bengkulu'),
('1801', '18', 'Kab. Lampung Barat'),
('1802', '18', 'Kab. Tanggamus'),
('1803', '18', 'Kab. Lampung Selatan'),
('1804', '18', 'Kab. Lampung Timur'),
('1805', '18', 'Kab. Lampung Tengah'),
('1806', '18', 'Kab. Lampung Utara'),
('1807', '18', 'Kab. Way Kanan'),
('1808', '18', 'Kab. Tulangbawang'),
('1809', '18', 'Kab. Pesawaran'),
('1810', '18', 'Kab. Pringsewu'),
('1811', '18', 'Kab. Mesuji'),
('1812', '18', 'Kab. Tulang Bawang Barat'),
('1813', '18', 'Kab. Pesisir Barat'),
('1871', '18', 'Kota Bandar Lampung'),
('1872', '18', 'Kota Metro'),
('1901', '19', 'Kab. Bangka'),
('1902', '19', 'Kab. Belitung'),
('1903', '19', 'Kab. Bangka Barat'),
('1904', '19', 'Kab. Bangka Tengah'),
('1905', '19', 'Kab. Bangka Selatan'),
('1906', '19', 'Kab. Belitung Timur'),
('1971', '19', 'Kota Pangkal Pinang'),
('2101', '21', 'Kab. Karimun'),
('2102', '21', 'Kab. Bintan'),
('2103', '21', 'Kab. Natuna'),
('2104', '21', 'Kab. Lingga'),
('2105', '21', 'Kab. Kepulauan Anambas'),
('2171', '21', 'Kota B A T A M'),
('2172', '21', 'Kota Tanjung Pinang'),
('3101', '31', 'Kab. Kepulauan Seribu'),
('3171', '31', 'Kota Jakarta Selatan'),
('3172', '31', 'Kota Jakarta Timur'),
('3173', '31', 'Kota Jakarta Pusat'),
('3174', '31', 'Kota Jakarta Barat'),
('3175', '31', 'Kota Jakarta Utara'),
('3201', '32', 'Kab. Bogor'),
('3202', '32', 'Kab. Sukabumi'),
('3203', '32', 'Kab. Cianjur'),
('3204', '32', 'Kab. Bandung'),
('3205', '32', 'Kab. Garut'),
('3206', '32', 'Kab. Tasikmalaya'),
('3207', '32', 'Kab. Ciamis'),
('3208', '32', 'Kab. Kuningan'),
('3209', '32', 'Kab. Cirebon'),
('3210', '32', 'Kab. Majalengka'),
('3211', '32', 'Kab. Sumedang'),
('3212', '32', 'Kab. Indramayu'),
('3213', '32', 'Kab. Subang'),
('3214', '32', 'Kab. Purwakarta'),
('3215', '32', 'Kab. Karawang'),
('3216', '32', 'Kab. Bekasi'),
('3217', '32', 'Kab. Bandung Barat'),
('3218', '32', 'Kab. Pangandaran'),
('3271', '32', 'Kota Bogor'),
('3272', '32', 'Kota Sukabumi'),
('3273', '32', 'Kota Bandung'),
('3274', '32', 'Kota Cirebon'),
('3275', '32', 'Kota Bekasi'),
('3276', '32', 'Kota Depok'),
('3277', '32', 'Kota Cimahi'),
('3278', '32', 'Kota Tasikmalaya'),
('3279', '32', 'Kota Banjar'),
('3301', '33', 'Kab. Cilacap'),
('3302', '33', 'Kab. Banyumas'),
('3303', '33', 'Kab. Purbalingga'),
('3304', '33', 'Kab. Banjarnegara'),
('3305', '33', 'Kab. Kebumen'),
('3306', '33', 'Kab. Purworejo'),
('3307', '33', 'Kab. Wonosobo'),
('3308', '33', 'Kab. Magelang'),
('3309', '33', 'Kab. Boyolali'),
('3310', '33', 'Kab. Klaten'),
('3311', '33', 'Kab. Sukoharjo'),
('3312', '33', 'Kab. Wonogiri'),
('3313', '33', 'Kab. Karanganyar'),
('3314', '33', 'Kab. Sragen'),
('3315', '33', 'Kab. Grobogan'),
('3316', '33', 'Kab. Blora'),
('3317', '33', 'Kab. Rembang'),
('3318', '33', 'Kab. Pati'),
('3319', '33', 'Kab. Kudus'),
('3320', '33', 'Kab. Jepara'),
('3321', '33', 'Kab. Demak'),
('3322', '33', 'Kab. Semarang'),
('3323', '33', 'Kab. Temanggung'),
('3324', '33', 'Kab. Kendal'),
('3325', '33', 'Kab. Batang'),
('3326', '33', 'Kab. Pekalongan'),
('3327', '33', 'Kab. Pemalang'),
('3328', '33', 'Kab. Tegal'),
('3329', '33', 'Kab. Brebes'),
('3371', '33', 'Kota Magelang'),
('3372', '33', 'Kota Surakarta'),
('3373', '33', 'Kota Salatiga'),
('3374', '33', 'Kota Semarang'),
('3375', '33', 'Kota Pekalongan'),
('3376', '33', 'Kota Tegal'),
('3401', '34', 'Kab. Kulon Progo'),
('3402', '34', 'Kab. Bantul'),
('3403', '34', 'Kab. Gunung Kidul'),
('3404', '34', 'Kab. Sleman'),
('3471', '34', 'Kota Yogyakarta'),
('3501', '35', 'Kab. Pacitan'),
('3502', '35', 'Kab. Ponorogo'),
('3503', '35', 'Kab. Trenggalek'),
('3504', '35', 'Kab. Tulungagung'),
('3505', '35', 'Kab. Blitar'),
('3506', '35', 'Kab. Kediri'),
('3507', '35', 'Kab. Malang'),
('3508', '35', 'Kab. Lumajang'),
('3509', '35', 'Kab. Jember'),
('3510', '35', 'Kab. Banyuwangi'),
('3511', '35', 'Kab. Bondowoso'),
('3512', '35', 'Kab. Situbondo'),
('3513', '35', 'Kab. Probolinggo'),
('3514', '35', 'Kab. Pasuruan'),
('3515', '35', 'Kab. Sidoarjo'),
('3516', '35', 'Kab. Mojokerto'),
('3517', '35', 'Kab. Jombang'),
('3518', '35', 'Kab. Nganjuk'),
('3519', '35', 'Kab. Madiun'),
('3520', '35', 'Kab. Magetan'),
('3521', '35', 'Kab. Ngawi'),
('3522', '35', 'Kab. Bojonegoro'),
('3523', '35', 'Kab. Tuban'),
('3524', '35', 'Kab. Lamongan'),
('3525', '35', 'Kab. Gresik'),
('3526', '35', 'Kab. Bangkalan'),
('3527', '35', 'Kab. Sampang'),
('3528', '35', 'Kab. Pamekasan'),
('3529', '35', 'Kab. Sumenep'),
('3571', '35', 'Kota Kediri'),
('3572', '35', 'Kota Blitar'),
('3573', '35', 'Kota Malang'),
('3574', '35', 'Kota Probolinggo'),
('3575', '35', 'Kota Pasuruan'),
('3576', '35', 'Kota Mojokerto'),
('3577', '35', 'Kota Madiun'),
('3578', '35', 'Kota Surabaya'),
('3579', '35', 'Kota Batu'),
('3601', '36', 'Kab. Pandeglang'),
('3602', '36', 'Kab. Lebak'),
('3603', '36', 'Kab. Tangerang'),
('3604', '36', 'Kab. Serang'),
('3671', '36', 'Kota Tangerang'),
('3672', '36', 'Kota Cilegon'),
('3673', '36', 'Kota Serang'),
('3674', '36', 'Kota Tangerang Selatan'),
('5101', '51', 'Kab. Jembrana'),
('5102', '51', 'Kab. Tabanan'),
('5103', '51', 'Kab. Badung'),
('5104', '51', 'Kab. Gianyar'),
('5105', '51', 'Kab. Klungkung'),
('5106', '51', 'Kab. Bangli'),
('5107', '51', 'Kab. Karang Asem'),
('5108', '51', 'Kab. Buleleng'),
('5171', '51', 'Kota Denpasar'),
('5201', '52', 'Kab. Lombok Barat'),
('5202', '52', 'Kab. Lombok Tengah'),
('5203', '52', 'Kab. Lombok Timur'),
('5204', '52', 'Kab. Sumbawa'),
('5205', '52', 'Kab. Dompu'),
('5206', '52', 'Kab. Bima'),
('5207', '52', 'Kab. Sumbawa Barat'),
('5208', '52', 'Kab. Lombok Utara'),
('5271', '52', 'Kota Mataram'),
('5272', '52', 'Kota Bima'),
('5301', '53', 'Kab. Sumba Barat'),
('5302', '53', 'Kab. Sumba Timur'),
('5303', '53', 'Kab. Kupang'),
('5304', '53', 'Kab. Timor Tengah Selatan'),
('5305', '53', 'Kab. Timor Tengah Utara'),
('5306', '53', 'Kab. Belu'),
('5307', '53', 'Kab. Alor'),
('5308', '53', 'Kab. Lembata'),
('5309', '53', 'Kab. Flores Timur'),
('5310', '53', 'Kab. Sikka'),
('5311', '53', 'Kab. Ende'),
('5312', '53', 'Kab. Ngada'),
('5313', '53', 'Kab. Manggarai'),
('5314', '53', 'Kab. Rote Ndao'),
('5315', '53', 'Kab. Manggarai Barat'),
('5316', '53', 'Kab. Sumba Tengah'),
('5317', '53', 'Kab. Sumba Barat Daya'),
('5318', '53', 'Kab. Nagekeo'),
('5319', '53', 'Kab. Manggarai Timur'),
('5320', '53', 'Kab. Sabu Raijua'),
('5371', '53', 'Kota Kupang'),
('6101', '61', 'Kab. Sambas'),
('6102', '61', 'Kab. Bengkayang'),
('6103', '61', 'Kab. Landak'),
('6104', '61', 'Kab. Pontianak'),
('6105', '61', 'Kab. Sanggau'),
('6106', '61', 'Kab. Ketapang'),
('6107', '61', 'Kab. Sintang'),
('6108', '61', 'Kab. Kapuas Hulu'),
('6109', '61', 'Kab. Sekadau'),
('6110', '61', 'Kab. Melawi'),
('6111', '61', 'Kab. Kayong Utara'),
('6112', '61', 'Kab. Kubu Raya'),
('6171', '61', 'Kota Pontianak'),
('6172', '61', 'Kota Singkawang'),
('6201', '62', 'Kab. Kotawaringin Barat'),
('6202', '62', 'Kab. Kotawaringin Timur'),
('6203', '62', 'Kab. Kapuas'),
('6204', '62', 'Kab. Barito Selatan'),
('6205', '62', 'Kab. Barito Utara'),
('6206', '62', 'Kab. Sukamara'),
('6207', '62', 'Kab. Lamandau'),
('6208', '62', 'Kab. Seruyan'),
('6209', '62', 'Kab. Katingan'),
('6210', '62', 'Kab. Pulang Pisau'),
('6211', '62', 'Kab. Gunung Mas'),
('6212', '62', 'Kab. Barito Timur'),
('6213', '62', 'Kab. Murung Raya'),
('6271', '62', 'Kota Palangka Raya'),
('6301', '63', 'Kab. Tanah Laut'),
('6302', '63', 'Kab. Kota Baru'),
('6303', '63', 'Kab. Banjar'),
('6304', '63', 'Kab. Barito Kuala'),
('6305', '63', 'Kab. Tapin'),
('6306', '63', 'Kab. Hulu Sungai Selatan'),
('6307', '63', 'Kab. Hulu Sungai Tengah'),
('6308', '63', 'Kab. Hulu Sungai Utara'),
('6309', '63', 'Kab. Tabalong'),
('6310', '63', 'Kab. Tanah Bumbu'),
('6311', '63', 'Kab. Balangan'),
('6371', '63', 'Kota Banjarmasin'),
('6372', '63', 'Kota Banjar Baru'),
('6401', '64', 'Kab. Paser'),
('6402', '64', 'Kab. Kutai Barat'),
('6403', '64', 'Kab. Kutai Kartanegara'),
('6404', '64', 'Kab. Kutai Timur'),
('6405', '64', 'Kab. Berau'),
('6409', '64', 'Kab. Penajam Paser Utara'),
('6471', '64', 'Kota Balikpapan'),
('6472', '64', 'Kota Samarinda'),
('6474', '64', 'Kota Bontang'),
('6501', '65', 'Kab. Malinau'),
('6502', '65', 'Kab. Bulungan'),
('6503', '65', 'Kab. Tana Tidung'),
('6504', '65', 'Kab. Nunukan'),
('6571', '65', 'Kota Tarakan'),
('7101', '71', 'Kab. Bolaang Mongondow'),
('7102', '71', 'Kab. Minahasa'),
('7103', '71', 'Kab. Kepulauan Sangihe'),
('7104', '71', 'Kab. Kepulauan Talaud'),
('7105', '71', 'Kab. Minahasa Selatan'),
('7106', '71', 'Kab. Minahasa Utara'),
('7107', '71', 'Kab. Bolaang Mongondow Utara'),
('7108', '71', 'Kab. Siau Tagulandang Biaro'),
('7109', '71', 'Kab. Minahasa Tenggara'),
('7110', '71', 'Kab. Bolaang Mongondow Selatan'),
('7111', '71', 'Kab. Bolaang Mongondow Timur'),
('7171', '71', 'Kota Manado'),
('7172', '71', 'Kota Bitung'),
('7173', '71', 'Kota Tomohon'),
('7174', '71', 'Kota Kotamobagu'),
('7201', '72', 'Kab. Banggai Kepulauan'),
('7202', '72', 'Kab. Banggai'),
('7203', '72', 'Kab. Morowali'),
('7204', '72', 'Kab. Poso'),
('7205', '72', 'Kab. Donggala'),
('7206', '72', 'Kab. Toli-toli'),
('7207', '72', 'Kab. Buol'),
('7208', '72', 'Kab. Parigi Moutong'),
('7209', '72', 'Kab. Tojo Una-una'),
('7210', '72', 'Kab. Sigi'),
('7271', '72', 'Kota Palu'),
('7301', '73', 'Kab. Kepulauan Selayar'),
('7302', '73', 'Kab. Bulukumba'),
('7303', '73', 'Kab. Bantaeng'),
('7304', '73', 'Kab. Jeneponto'),
('7305', '73', 'Kab. Takalar'),
('7306', '73', 'Kab. Gowa'),
('7307', '73', 'Kab. Sinjai'),
('7308', '73', 'Kab. Maros'),
('7309', '73', 'Kab. Pangkajene Dan Kepulauan'),
('7310', '73', 'Kab. Barru'),
('7311', '73', 'Kab. Bone'),
('7312', '73', 'Kab. Soppeng'),
('7313', '73', 'Kab. Wajo'),
('7314', '73', 'Kab. Sidenreng Rappang'),
('7315', '73', 'Kab. Pinrang'),
('7316', '73', 'Kab. Enrekang'),
('7317', '73', 'Kab. Luwu'),
('7318', '73', 'Kab. Tana Toraja'),
('7322', '73', 'Kab. Luwu Utara'),
('7325', '73', 'Kab. Luwu Timur'),
('7326', '73', 'Kab. Toraja Utara'),
('7371', '73', 'Kota Makassar'),
('7372', '73', 'Kota Parepare'),
('7373', '73', 'Kota Palopo'),
('7401', '74', 'Kab. Buton'),
('7402', '74', 'Kab. Muna'),
('7403', '74', 'Kab. Konawe'),
('7404', '74', 'Kab. Kolaka'),
('7405', '74', 'Kab. Konawe Selatan'),
('7406', '74', 'Kab. Bombana'),
('7407', '74', 'Kab. Wakatobi'),
('7408', '74', 'Kab. Kolaka Utara'),
('7409', '74', 'Kab. Buton Utara'),
('7410', '74', 'Kab. Konawe Utara'),
('7471', '74', 'Kota Kendari'),
('7472', '74', 'Kota Baubau'),
('7501', '75', 'Kab. Boalemo'),
('7502', '75', 'Kab. Gorontalo'),
('7503', '75', 'Kab. Pohuwato'),
('7504', '75', 'Kab. Bone Bolango'),
('7505', '75', 'Kab. Gorontalo Utara'),
('7571', '75', 'Kota Gorontalo'),
('7601', '76', 'Kab. Majene'),
('7602', '76', 'Kab. Polewali Mandar'),
('7603', '76', 'Kab. Mamasa'),
('7604', '76', 'Kab. Mamuju'),
('7605', '76', 'Kab. Mamuju Utara'),
('8101', '81', 'Kab. Maluku Tenggara Barat'),
('8102', '81', 'Kab. Maluku Tenggara'),
('8103', '81', 'Kab. Maluku Tengah'),
('8104', '81', 'Kab. Buru'),
('8105', '81', 'Kab. Kepulauan Aru'),
('8106', '81', 'Kab. Seram Bagian Barat'),
('8107', '81', 'Kab. Seram Bagian Timur'),
('8108', '81', 'Kab. Maluku Barat Daya'),
('8109', '81', 'Kab. Buru Selatan'),
('8171', '81', 'Kota Ambon'),
('8172', '81', 'Kota Tual'),
('8201', '82', 'Kab. Halmahera Barat'),
('8202', '82', 'Kab. Halmahera Tengah'),
('8203', '82', 'Kab. Kepulauan Sula'),
('8204', '82', 'Kab. Halmahera Selatan'),
('8205', '82', 'Kab. Halmahera Utara'),
('8206', '82', 'Kab. Halmahera Timur'),
('8207', '82', 'Kab. Pulau Morotai'),
('8271', '82', 'Kota Ternate'),
('8272', '82', 'Kota Tidore Kepulauan'),
('9101', '91', 'Kab. Fakfak'),
('9102', '91', 'Kab. Kaimana'),
('9103', '91', 'Kab. Teluk Wondama'),
('9104', '91', 'Kab. Teluk Bintuni'),
('9105', '91', 'Kab. Manokwari'),
('9106', '91', 'Kab. Sorong Selatan'),
('9107', '91', 'Kab. Sorong'),
('9108', '91', 'Kab. Raja Ampat'),
('9109', '91', 'Kab. Tambrauw'),
('9110', '91', 'Kab. Maybrat'),
('9171', '91', 'Kota Sorong'),
('9401', '94', 'Kab. Merauke'),
('9402', '94', 'Kab. Jayawijaya'),
('9403', '94', 'Kab. Jayapura'),
('9404', '94', 'Kab. Nabire'),
('9408', '94', 'Kab. Kepulauan Yapen'),
('9409', '94', 'Kab. Biak Numfor'),
('9410', '94', 'Kab. Paniai'),
('9411', '94', 'Kab. Puncak Jaya'),
('9412', '94', 'Kab. Mimika'),
('9413', '94', 'Kab. Boven Digoel'),
('9414', '94', 'Kab. Mappi'),
('9415', '94', 'Kab. Asmat'),
('9416', '94', 'Kab. Yahukimo'),
('9417', '94', 'Kab. Pegunungan Bintang'),
('9418', '94', 'Kab. Tolikara'),
('9419', '94', 'Kab. Sarmi'),
('9420', '94', 'Kab. Keerom'),
('9426', '94', 'Kab. Waropen'),
('9427', '94', 'Kab. Supiori'),
('9428', '94', 'Kab. Mamberamo Raya'),
('9429', '94', 'Kab. Nduga'),
('9430', '94', 'Kab. Lanny Jaya'),
('9431', '94', 'Kab. Mamberamo Tengah'),
('9432', '94', 'Kab. Yalimo'),
('9433', '94', 'Kab. Puncak'),
('9434', '94', 'Kab. Dogiyai'),
('9435', '94', 'Kab. Intan Jaya'),
('9436', '94', 'Kab. Deiyai'),
('9471', '94', 'Kota Jayapura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NO_INVOICE` varchar(20) NOT NULL,
  `TGL_ORDER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TGL_KADALUARSA` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ID_ANGGOTA` int(5) NOT NULL,
  `KOTA_PENGIRIMAN` varchar(30) NOT NULL,
  `ALAMAT_PENGIRIMAN` text NOT NULL,
  `STATUS_ORDER` tinyint(1) NOT NULL COMMENT '1 => booking, 2 => validasi bukti transfer, 3 => transaksi selesai, 4 => order kadaluarsa, 5 => cancel order',
  `POTO_BUKTI_TRANSFER` int(11) NOT NULL,
  `TGL_KONF_TRANSFER` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_order`
--

INSERT INTO `tbl_order` (`ID`, `NO_INVOICE`, `TGL_ORDER`, `TGL_KADALUARSA`, `ID_ANGGOTA`, `KOTA_PENGIRIMAN`, `ALAMAT_PENGIRIMAN`, `STATUS_ORDER`, `POTO_BUKTI_TRANSFER`, `TGL_KONF_TRANSFER`) VALUES
(1, 'INV-2016-0001', '2016-03-01 08:50:40', '2016-03-03 17:00:00', 1, '13002', 'Cihampelas', 3, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_order_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_order_detail` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `ID_ORDER` int(11) NOT NULL,
  `KODE_BRG` varchar(10) NOT NULL,
  `HARGA_SAT` float NOT NULL,
  `DISCOUNT` int(11) NOT NULL,
  `JUMLAH` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `tbl_order_detail`
--

INSERT INTO `tbl_order_detail` (`ID`, `ID_ORDER`, `KODE_BRG`, `HARGA_SAT`, `DISCOUNT`, `JUMLAH`) VALUES
(1, 1, 'AB-001', 20000, 10, 1),
(2, 1, 'AB-002', 56000, 0, 2),
(3, 2, 'AB-001', 300000, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembelian`
--

CREATE TABLE IF NOT EXISTS `tbl_pembelian` (
  `ID_PMB` int(11) NOT NULL AUTO_INCREMENT,
  `KODE_PMB` varchar(10) NOT NULL,
  `KODE_BRG` varchar(10) NOT NULL,
  `TGL_PMB` date NOT NULL,
  `HARGA_BELI` double NOT NULL,
  `JUMLAH` int(11) NOT NULL,
  `KETERANGAN` text NOT NULL,
  PRIMARY KEY (`ID_PMB`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `tbl_pembelian`
--

INSERT INTO `tbl_pembelian` (`ID_PMB`, `KODE_PMB`, `KODE_BRG`, `TGL_PMB`, `HARGA_BELI`, `JUMLAH`, `KETERANGAN`) VALUES
(19, 'PMB-001', 'AB-001', '2016-02-18', 100000, 10, 'ok'),
(20, 'PMB-002', 'AB-001', '2016-02-18', 100000, 10, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_provinsi`
--

CREATE TABLE IF NOT EXISTS `tbl_provinsi` (
  `KD_PROVINSI` varchar(5) NOT NULL,
  `NAMA_PROVINSI` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`KD_PROVINSI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`KD_PROVINSI`, `NAMA_PROVINSI`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'Dki Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'Di Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('94', 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_stok`
--

CREATE TABLE IF NOT EXISTS `tbl_stok` (
  `ID_STOK` int(11) NOT NULL AUTO_INCREMENT,
  `KODE_BRG` varchar(10) NOT NULL,
  `MASUK` int(11) NOT NULL,
  `BOOKING` int(11) NOT NULL,
  `KELUAR` int(11) NOT NULL,
  `STOK_FREE` int(11) NOT NULL,
  `STOK_AKHIR` int(11) NOT NULL,
  PRIMARY KEY (`ID_STOK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data untuk tabel `tbl_stok`
--

INSERT INTO `tbl_stok` (`ID_STOK`, `KODE_BRG`, `MASUK`, `BOOKING`, `KELUAR`, `STOK_FREE`, `STOK_AKHIR`) VALUES
(1, 'AB-001', 20, 0, 0, 20, 20),
(2, 'AB-002', 0, 0, 0, 0, 0),
(3, 'AB-003', 0, 0, 0, 0, 0),
(4, 'AB-004', 0, 0, 0, 0, 0),
(5, 'AB-005', 0, 0, 0, 0, 0),
(6, 'AB-006', 0, 0, 0, 0, 0),
(7, 'AB-007', 0, 0, 0, 0, 0),
(8, 'AB-008', 0, 0, 0, 0, 0),
(9, 'AB-009', 0, 0, 0, 0, 0),
(10, 'AB-010', 0, 0, 0, 0, 0),
(11, 'AB-011', 0, 0, 0, 0, 0),
(12, 'AB-012', 0, 0, 0, 0, 0),
(13, 'AB-013', 0, 0, 0, 0, 0),
(14, 'AB-014', 0, 0, 0, 0, 0),
(15, 'AB-015', 0, 0, 0, 0, 0),
(17, 'AB-017', 0, 0, 0, 0, 0),
(18, 'AB-018', 0, 0, 0, 0, 0),
(19, 'AB-019', 0, 0, 0, 0, 0),
(20, 'AB-020', 0, 0, 0, 0, 0),
(21, 'AB-021', 0, 0, 0, 0, 0),
(22, 'AB-022', 0, 0, 0, 0, 0),
(23, 'AB-023', 0, 0, 0, 0, 0),
(24, 'AB-024', 0, 0, 0, 0, 0),
(25, 'AB-025', 0, 0, 0, 0, 0),
(26, 'AB-026', 0, 0, 0, 0, 0),
(27, 'AB-027', 0, 0, 0, 0, 0),
(28, 'AB-028', 0, 0, 0, 0, 0),
(29, 'AB-029', 0, 0, 0, 0, 0),
(42, 'AB-030', 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
