-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-27 09:20:20
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- 表的结构 `board`
--

CREATE TABLE `board` (
  `user` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `board`
--

INSERT INTO `board` (`user`, `time`, `message`) VALUES
('abc', '2017-12-27 12:24:23pm', 'hello');

-- --------------------------------------------------------

--
-- 表的结构 `borrow`
--

CREATE TABLE `borrow` (
  `user` char(20) NOT NULL,
  `car_id` char(10) NOT NULL,
  `time` char(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `borrow`
--

INSERT INTO `borrow` (`user`, `car_id`, `time`) VALUES
('fenglixin', '0001', '2017-12-27 04:35:47pm');

-- --------------------------------------------------------

--
-- 表的结构 `buy_info`
--

CREATE TABLE `buy_info` (
  `供应商编号` char(20) NOT NULL,
  `汽车编号` char(20) NOT NULL,
  `购买日期` datetime DEFAULT NULL,
  `购买金额` char(20) DEFAULT NULL,
  `购买数量` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `buy_info`
--

INSERT INTO `buy_info` (`供应商编号`, `汽车编号`, `购买日期`, `购买金额`, `购买数量`) VALUES
('20171201', '0001', '2017-02-12 00:00:00', '50000', '10'),
('20171202', '0002', '2017-04-12 00:00:00', '30000', '10'),
('20171203', '0003', '2017-05-12 00:00:00', '100000', '8'),
('20171204', '0004', '2017-06-14 00:00:00', '120000', '8'),
('20171205', '0005', '2017-08-22 00:00:00', '200000', '10'),
('20171206', '0006', '2017-09-12 00:00:00', '100000', '10');

-- --------------------------------------------------------

--
-- 表的结构 `cars_info`
--

CREATE TABLE `cars_info` (
  `汽车编号` char(20) NOT NULL,
  `花费金额` char(20) DEFAULT NULL,
  `汽车类型` char(20) DEFAULT NULL,
  `车辆名` char(20) DEFAULT NULL,
  `车辆库存量` char(20) DEFAULT NULL,
  `采购价格` char(20) DEFAULT NULL,
  `车牌号` char(20) DEFAULT NULL,
  `出租价` char(20) DEFAULT NULL,
  `购买日期` datetime DEFAULT NULL,
  `车辆颜色` char(20) DEFAULT NULL,
  `汽车厂家` char(20) DEFAULT NULL,
  `保险公司` char(20) DEFAULT NULL,
  `保险截止日期` datetime DEFAULT NULL,
  `维修时间` datetime DEFAULT NULL,
  `已租数量` int(11) DEFAULT '0',
  `电话` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `cars_info`
--

INSERT INTO `cars_info` (`汽车编号`, `花费金额`, `汽车类型`, `车辆名`, `车辆库存量`, `采购价格`, `车牌号`, `出租价`, `购买日期`, `车辆颜色`, `汽车厂家`, `保险公司`, `保险截止日期`, `维修时间`, `已租数量`, `电话`) VALUES
('0001', '100', 'C1', '桑塔纳', '12', '100000', '辽D0001', '200', '2017-02-12 00:00:00', '白色', '大众厂', '人寿保险', '2030-12-30 00:00:00', '2020-06-06 00:00:00', 0, 18823561478),
('0002', '50', 'C1', '五菱之光', '10', '50000', '辽D0005', '100', '2017-02-12 00:00:00', '灰色', '五菱厂', '人寿保险', '2030-12-30 00:00:00', '2020-06-06 00:00:00', 0, 18594175623),
('0003', '150', 'C1', 'PRADO', '12', '120000', '辽D0008', '300', '2017-02-12 00:00:00', '黑色', '丰田厂', '人寿保险', '2030-12-30 00:00:00', '2020-06-06 00:00:00', 0, 14425635598),
('0004', '200', 'C1', '奥迪A4', '10', '300000', '辽D0006', '500', '2017-02-12 00:00:00', '蓝色', '奥迪厂', '人寿保险', '2030-12-30 00:00:00', '2020-06-06 00:00:00', 0, 14725836985),
('0005', '300', 'C1', '宝马Z4', '8', '600000', '辽D0009', '800', '2017-02-12 00:00:00', '红色', '宝马厂', '人寿保险', '2030-12-30 00:00:00', '2020-06-06 00:00:00', 0, 17563984513),
('0006', '200', 'C1', '奔驰S级', '10', '450000', '辽D0010', '600', '2017-02-12 00:00:00', '银白色', '奔驰厂', '人寿保险', '2030-12-30 00:00:00', '2020-06-06 00:00:00', 0, 17896543211);

-- --------------------------------------------------------

--
-- 表的结构 `ser_info`
--

CREATE TABLE `ser_info` (
  `维修厂编号` char(20) NOT NULL,
  `电话` char(20) DEFAULT NULL,
  `地址` char(20) DEFAULT NULL,
  `名称` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `ser_info`
--

INSERT INTO `ser_info` (`维修厂编号`, `电话`, `地址`, `名称`) VALUES
('0001', '18823561478', '大连', '大众厂'),
('0002', '18594175623', '沈阳', '五菱厂'),
('0003', '14425635598', '朝阳', '丰田厂'),
('0004', '14725836985', '锦州', '宝马厂'),
('0005', '17563984513', '大连', '奥迪厂'),
('0006', '17896543211', '沈阳', '奔驰厂');

-- --------------------------------------------------------

--
-- 表的结构 `sup_info`
--

CREATE TABLE `sup_info` (
  `供应商编号` char(20) NOT NULL,
  `汽车类型` char(20) DEFAULT NULL,
  `电话` char(20) DEFAULT NULL,
  `地址` char(20) DEFAULT NULL,
  `名称` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `sup_info`
--

INSERT INTO `sup_info` (`供应商编号`, `汽车类型`, `电话`, `地址`, `名称`) VALUES
('0001', 'C1', '18823561478', '大连', '大众厂'),
('0002', 'C1', '18594175623', '沈阳', '五菱厂'),
('0003', 'C1', '14425635598', '朝阳', '丰田厂'),
('0004', 'C1', '14725836985', '锦州', '宝马厂'),
('0005', 'C1', '17563984513', '大连', '奥迪厂'),
('0006', 'C1', '17896543211', '沈阳', '奔驰厂');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `account` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `password` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `nickname` varchar(50) NOT NULL DEFAULT '',
  `class` varchar(15) CHARACTER SET latin1 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`account`, `password`, `nickname`, `class`) VALUES
('abc', 'abc', 'abc', '0'),
('fenglixin', 'fenglixin', '管理员', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD KEY `time` (`time`),
  ADD KEY `time_2` (`time`),
  ADD KEY `user` (`user`),
  ADD KEY `user_2` (`user`),
  ADD KEY `time_3` (`time`);

--
-- Indexes for table `cars_info`
--
ALTER TABLE `cars_info`
  ADD PRIMARY KEY (`汽车编号`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`account`,`password`,`nickname`,`class`),
  ADD KEY `account` (`account`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
