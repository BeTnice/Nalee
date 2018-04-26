-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 08:18 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comestic3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `user`, `pass`, `name`, `level`) VALUES
(3, 'demo', '123', 'demo', 0),
(4, 'admin', 'admin', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title_blog` longtext NOT NULL,
  `noidung` longtext NOT NULL,
  `thutu` int(11) NOT NULL,
  `id_cateblog` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `ngay` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `noibat` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `title_blog`, `noidung`, `thutu`, `id_cateblog`, `hinhanh`, `id_admin`, `ngay`, `noibat`) VALUES
(9, '123aaa', '', 0, 0, '', 0, '2017-11-02 17:29:42', 0),
(10, 'Blog 1', '', 1, 0, 'http://localhost/nalee/images/images/270x310-02.png', 0, '2017-11-03 04:24:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `id_cate` int(11) NOT NULL,
  `name_cate` varchar(150) NOT NULL,
  `thutu` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`id_cate`, `name_cate`, `thutu`, `parent_id`) VALUES
(3, '123', 123, 0),
(4, '123', 123, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cateblog`
--

CREATE TABLE `cateblog` (
  `id_cateblog` int(11) NOT NULL,
  `name_cateblog` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cateblog`
--

INSERT INTO `cateblog` (`id_cateblog`, `name_cateblog`, `thutu`) VALUES
(0, 'uncategorized', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catefs`
--

CREATE TABLE `catefs` (
  `id_catefs` int(11) NOT NULL,
  `name_catefs` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catefs`
--

INSERT INTO `catefs` (`id_catefs`, `name_catefs`, `thutu`) VALUES
(3, 'Demo', 1),
(4, 'Demo2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--

CREATE TABLE `fashion` (
  `id_fashion` int(11) NOT NULL,
  `name_fashion` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mota` longtext NOT NULL,
  `thongtin` longtext NOT NULL,
  `thutu` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `id_catefs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`id_fashion`, `name_fashion`, `img`, `mota`, `thongtin`, `thutu`, `noibat`, `id_catefs`) VALUES
(1, '123', '', '<p>123</p>\r\n', '', 0, 1, 0),
(2, 'demo', 'http://localhost/nalee/images/images/e51599217f370944dfae91775f045a82.jpg', '<p>123</p>\r\n', '<p>123</p>\r\n', 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `giaodien`
--

CREATE TABLE `giaodien` (
  `id_giaodien` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `footer` longtext NOT NULL,
  `title` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giaodien`
--

INSERT INTO `giaodien` (`id_giaodien`, `logo`, `footer`, `title`) VALUES
(1, 'http://localhost/nalee/images/images/logo.png', '<p>123 NewYork City USA.<br />\r\nOffice: 908-0000&nbsp;Support to:&nbsp;<a href=\"mailto:info@example.com\">mail@example.com</a></p>\r\n', 'ITAQUE EARUM RERUM HIC TENETUR A OPTIO SAPIENTE NIHIL IMPEDIT');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id_images` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_fashion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_images`, `link`, `id_product`, `id_fashion`) VALUES
(1, '9ba49251f9bbc17192de8b3cea3a858d.jpg', 1, 0),
(2, 'e51599217f370944dfae91775f045a82.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id_mail` int(11) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `sdt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_members` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_members`, `hoten`, `email`, `sdt`) VALUES
(2, 'a', 'b@a.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mota` longtext NOT NULL,
  `thongtin` longtext NOT NULL,
  `id_cate` int(11) NOT NULL,
  `thutu` int(11) NOT NULL,
  `noibat` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `img`, `mota`, `thongtin`, `id_cate`, `thutu`, `noibat`) VALUES
(1, '123', 'http://localhost/nalee/images/images/1200x600-00.png', '<p>123</p>\r\n', '<p>123</p>\r\n', 1, 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL,
  `img_slide` varchar(255) NOT NULL,
  `vitri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `title`, `subtitle`, `link`, `thutu`, `img_slide`, `vitri`) VALUES
(5, '123', '3123123', '2312', 312312, 'http://localhost/nalee/images/images/1200x600-00.png', 'Banner'),
(6, '', '', '', 1, 'http://localhost/nalee/images/images/img1.jpg', 'Spa'),
(7, '', '', '', 2, 'http://localhost/nalee/images/images/img1.jpg', 'Fashion'),
(8, '', '', '', 1, 'http://localhost/nalee/images/images/img1.jpg', 'Cosmetic');

-- --------------------------------------------------------

--
-- Table structure for table `sv`
--

CREATE TABLE `sv` (
  `id_sv` int(11) NOT NULL,
  `title_sv` longtext NOT NULL,
  `noidung` longtext NOT NULL,
  `thutu` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `ngay` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `public` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sv`
--

INSERT INTO `sv` (`id_sv`, `title_sv`, `noidung`, `thutu`, `hinhanh`, `noibat`, `ngay`, `public`) VALUES
(1, 'abc', '<p>abc</p>\r\n', 1, 'http://localhost/nalee/images/images/logo-nalee-tong-cong-ty.png', 1, '2017-11-03 05:51:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(11) NOT NULL,
  `name_tag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `name_tag`) VALUES
(26, 'mypham'),
(27, 'thoitrang'),
(28, 'mypham'),
(29, 'thoitrang'),
(30, 'thoitrang'),
(31, 'mypham'),
(32, ''),
(33, '');

-- --------------------------------------------------------

--
-- Table structure for table `tag_blog`
--

CREATE TABLE `tag_blog` (
  `id_tag` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag_blog`
--

INSERT INTO `tag_blog` (`id_tag`, `id_blog`) VALUES
(10, 23),
(1, 27),
(22, 28),
(23, 29),
(32, 9),
(33, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `cateblog`
--
ALTER TABLE `cateblog`
  ADD PRIMARY KEY (`id_cateblog`);

--
-- Indexes for table `catefs`
--
ALTER TABLE `catefs`
  ADD PRIMARY KEY (`id_catefs`);

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`id_fashion`);

--
-- Indexes for table `giaodien`
--
ALTER TABLE `giaodien`
  ADD PRIMARY KEY (`id_giaodien`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_images`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_members`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `sv`
--
ALTER TABLE `sv`
  ADD PRIMARY KEY (`id_sv`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cateblog`
--
ALTER TABLE `cateblog`
  MODIFY `id_cateblog` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `catefs`
--
ALTER TABLE `catefs`
  MODIFY `id_catefs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `id_fashion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `giaodien`
--
ALTER TABLE `giaodien`
  MODIFY `id_giaodien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id_images` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_members` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sv`
--
ALTER TABLE `sv`
  MODIFY `id_sv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
