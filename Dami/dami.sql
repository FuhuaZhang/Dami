-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-11 13:07:00
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
-- 表的结构 `orderproducts`
--

CREATE TABLE `orderproducts` (
  `id` int(11) NOT NULL,
  `OrderId` int(11) DEFAULT NULL,
  `productsId` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `capacity` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `eachprice` float DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `orderproducts`
--

INSERT INTO `orderproducts` (`id`, `OrderId`, `productsId`, `type`, `capacity`, `color`, `eachprice`, `picture`, `number`) VALUES
(5, 1, 0, '小米8', '8G', '白色', 5000, 'WAZ_PaymentPagePicture/Xiaomi8_2.png', 3),
(6, 1, 0, '小米8', '8G', '知更鸟蓝', 5000, 'WAZ_PaymentPagePicture/Xiaomi8_1.png', 3),
(7, 1, 0, 'iphone x', '8G', '中国红', 5000, 'WAZ_PaymentPagePicture/iphone8-red.png', 3);

-- --------------------------------------------------------

--
-- 表的结构 `ordertable`
--

CREATE TABLE `ordertable` (
  `OrderId` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `totalprice` float DEFAULT NULL,
  `paymentMethod` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Consignee` varchar(30) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `province` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `town` varchar(30) DEFAULT NULL,
  `detailAddress` varchar(50) DEFAULT NULL,
  `postcode` varchar(20) DEFAULT NULL,
  `invoice` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ordertable`
--

INSERT INTO `ordertable` (`OrderId`, `UserId`, `totalprice`, `paymentMethod`, `email`, `Consignee`, `tel`, `province`, `city`, `town`, `detailAddress`, `postcode`, `invoice`) VALUES
(0, 1, 100, 'zhifubao', '3102207728@qq.com', 'zhangsan', '18821714615', 'hebie', 'xingtai', 'weixian', 'sangyuan', '712100', 'xiaomi'),
(1, 1, 5000, 'WAZ_PaymentPagePicture/alipay.png', '1123644695@qq.com', 'WAZ', '1122213', '北京', '西安', '杨凌', '西农', '712100', '大米纸质发票');

-- --------------------------------------------------------

--
-- 表的结构 `phone`
--

CREATE TABLE `phone` (
  `pid` int(11) NOT NULL,
  `ptype` varchar(30) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `capacity` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `picture` varchar(20) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `phone`
--

INSERT INTO `phone` (`pid`, `ptype`, `price`, `capacity`, `color`, `picture`, `stock`) VALUES
(1, 'xiaomi8', 0, '128GB', 'black', 'null', -4),
(2, 'iPhone X', 0, '', '', 'null', -3),
(3, 'iPhone X', 9605, '256GB', 'gray', 'null', 9998);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  `province` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `town` varchar(30) NOT NULL,
  `detailAddress` varchar(30) NOT NULL,
  `postcode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userId`, `name`, `email`, `password`, `tel`, `province`, `city`, `town`, `detailAddress`, `postcode`) VALUES
(1, 'fuck', '3102207728@qq.com', '2', 2147483647, 'afd', 'ä»–', 'é£Ÿå‘é¬¼', 'æ‰‹å·¥æŠ¤è‚¤', 712100),
(4, 'dgh', '35647728@qq.com', '123', 0, '', '', '', '', 0),
(5, 'fsgs', '67787207728@qq.com', '', 13456765, '', '', '', '', 0),
(6, 'å¼ å¤«èŠ±', '12345376@qq.com', '123', 2147483647, 'é™•è¥¿', 'æ¨å‡Œ', 'è¥¿å†œ', 'åŒ—æ ¡åŒº', 712100),
(8, 'å¼ å¤«èŠ±', '123567676@qq.com', '123', 2147483647, 'é™•è¥¿', 'æ¨å‡Œ', 'è¥¿å†œ', 'åŒ—æ ¡åŒº', 712100),
(9, 'èŠ±èŠ±', '12343356578@qq.com', '', 0, '', '', '', '', 0),
(11, 'å‘è¿‡ç«', '453657728@qq.com', '3242', 0, '', '', '', '', 0),
(12, 'å‘è¿‡ç«', '45363646728@qq.com', '3242', 0, '', '', '', '', 0),
(13, 'å‘è¿‡ç«', '45265646728@qq.com', '3242', 0, '', '', '', '', 0),
(14, '', '36707728@qq.com', '', 0, '', '', '', '', 0),
(16, 'zhanghuahua', '2232933694@qq.com', '123', 0, '', '', '', '', 0),
(18, 'zhanghuahua', '2232343694@qq.com', '123', 0, '', '', '', '', 0),
(19, '', '245678@qq.com', '', 0, '', '', '', '', 0),
(20, '', '', '', 0, '', '', '', '', 0),
(22, '', '4278879@qq.com', '', 0, '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `OrderId` (`OrderId`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `orderproducts`
--
ALTER TABLE `orderproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `phone`
--
ALTER TABLE `phone`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- 限制导出的表
--

--
-- 限制表 `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD CONSTRAINT `orderproducts_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `ordertable` (`OrderId`);

--
-- 限制表 `ordertable`
--
ALTER TABLE `ordertable`
  ADD CONSTRAINT `ordertable_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`userId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
