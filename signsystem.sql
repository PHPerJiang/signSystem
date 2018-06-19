-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-06-19 22:05:16
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signsystem`
--

-- --------------------------------------------------------

--
-- 表的结构 `competition`
--

CREATE TABLE `competition` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `time` int(10) NOT NULL DEFAULT '0',
  `teamname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `checkteam` tinyint(3) NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `grade` varchar(10) CHARACTER SET utf8 NOT NULL,
  `top` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `certificate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(2, 'PHPerJiang', '9860ab10b7fdfbbb15735b6269c15cdb', 1),
(3, 'CoderJiang', '9860ab10b7fdfbbb15735b6269c15cdb', 1),
(4, 'asdasda', '9e7a3524764f3be4343ea70f13630f0e', 1),
(5, 'adfqff', '36131c35bc1b915e19004ff8977e2c6a', 1),
(6, 'fwqwdwd', 'ac5576b12251103af4bbb5d2db5e5e85', 1);

-- --------------------------------------------------------

--
-- 表的结构 `worktime`
--

CREATE TABLE `worktime` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `start` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `end` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `worktime` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `worktime`
--

INSERT INTO `worktime` (`id`, `userid`, `username`, `start`, `end`, `worktime`) VALUES
(2, 2, 'PHPerJiang', 1528633226, 1528636827, 3601),
(3, 2, 'PHPerJiang', 1528634601, 1528634604, 3),
(4, 2, 'PHPerJiang', 1528637613, 1528637625, 12),
(5, 2, 'PHPerJiang', 1528637634, 1528637696, 62),
(6, 3, 'CoderJiang', 1528677242, 1528680934, 3692),
(7, 3, 'CoderJiang', 1528679720, 1528683322, 3602);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificate` (`certificate`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `worktime`
--
ALTER TABLE `worktime`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_user` (`userid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `competition`
--
ALTER TABLE `competition`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `worktime`
--
ALTER TABLE `worktime`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 限制导出的表
--

--
-- 限制表 `worktime`
--
ALTER TABLE `worktime`
  ADD CONSTRAINT `worktime_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
