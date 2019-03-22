-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-10 05:54:16
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dami`
--

-- --------------------------------------------------------

--
-- 表的结构 `huawei`
--

CREATE TABLE `huawei` (
  `pid` int(11) NOT NULL,
  `ptype` varchar(30) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `capacity` varchar(40) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `picture` varchar(60) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `huawei`
--

INSERT INTO `huawei` (`pid`, `ptype`, `price`, `capacity`, `color`, `picture`, `stock`) VALUES
(13, 'honor10', 2599, '6GB+64GB', 'red', 'xwq_img/hw_ryv10.jpg', 100),
(14, 'honor10', 2599, '6GB+64GB', 'pink', 'xwq_img/hw_rx9.jpg', 100),
(15, 'honor10', 2599, '6GB+64GB', 'blue', 'xwq_img/hw_ry8-5.jpg', 100),
(16, 'honor10', 2599, '6GB+64GB', 'black', 'xwq_img/hw_ry8-6.jpg', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `huawei`
--
ALTER TABLE `huawei`
  ADD PRIMARY KEY (`pid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
