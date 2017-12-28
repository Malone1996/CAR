-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-26 08:37:15
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
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

-- --------------------------------------------------------

--
-- 表的结构 `book_message`
--

CREATE TABLE `book_message` (
  `sy` int(15) NOT NULL DEFAULT '0',
  `book_title` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `add_time` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `money` float DEFAULT NULL,
  `number` int(15) DEFAULT NULL,
  `num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `book_message`
--

INSERT INTO `book_message` (`sy`, `book_title`, `author`, `add_time`, `type`, `money`, `number`, `num`) VALUES
(0, '宝马', 'X', '2017-12-26 04:19:03pm', 'Y', 500, 2, 12345678);

-- --------------------------------------------------------

--
-- 表的结构 `borrow`
--

CREATE TABLE `borrow` (
  `user` varchar(20) NOT NULL,
  `book_id` int(15) DEFAULT NULL,
  `time` varchar(30) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `book_message`
--
ALTER TABLE `book_message`
  ADD PRIMARY KEY (`num`),
  ADD KEY `num` (`num`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD KEY `user` (`user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`account`,`password`,`nickname`,`class`),
  ADD KEY `account` (`account`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
